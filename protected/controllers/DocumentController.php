<?php

class DocumentController extends Controller
{
    function init()
    {
        parent::init();
        $app = Yii::app();
        if (isset($_POST['_lang']))
        {
            $app->language = $_POST['_lang'];
            $app->session['_lang'] = $app->language;
        }
        else if (isset($app->session['_lang']))
        {
            $app->language = $app->session['_lang'];
        }
    }
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */

    public function actionCreate()
    {
        $model=new Document;
        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if(isset($_POST['Document']))
        {
            $model->attributes=$_POST['Document'];
            $images = CUploadedFile::getInstancesByName('image');

            if(isset($images) && count($images)> 0)
            {
                foreach ($images as $image=>$pic)
                {
                    if ($pic->saveAs(Yii::getPathOfAlias('webroot').'/images/'.$pic->name,0777))
                    {
                        //$model = new Document;
                        $model->setIsNewRecord(true);
                        $model->id = null;
                        $model->doc_file= $pic->name;
                        $model->save();
                    }
                }
                Yii::app()->user->setFlash('success',"Ваша картинка загруженна");
                $this->redirect(array('/admin/default/index'));
         }
        if (Yii::app()->request->isAjaxRequest) {
            $done =$this->renderPartial('create',array(
                'model'=>$model,
            ),true,true);
            echo $done;
            Yii::app()->end();
        }
            }

        $this->renderPartial('create',array(
            'model'=>$model,
        ),false,true);
    }
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Document']))
		{
			$model->attributes=$_POST['Document'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $videos = Document::model()->findAll();
        $items = array();
        foreach ($videos as $video){
            $item = Yii::app()->baseUrl .'/images/'.$video->doc_file;
            array_push($items,$item);
        }
        $dataProvider=new CActiveDataProvider('Document');
        if (Yii::app()->request->isAjaxRequest) {
            $done =$this->renderPartial('index', array(
                'items' => $items,
            ), true,true);
            echo $done;
            Yii::app()->end();
        }
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Document('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Document']))
			$model->attributes=$_GET['Document'];

        if (Yii::app()->request->isAjaxRequest &&  isset($_GET['ajax'])  && ($_GET['ajax'] == 'document_grid') ) {
            $done = $this->renderPartial('admin_grid',array(
                'model'=>$model,
            ),true);
            echo $done;
            Yii::app()->end();
        }
        if (Yii::app()->request->isAjaxRequest &&  !isset($_GET['ajax'])) {

            $done =$this->renderPartial('admin',array(
                'model'=>$model,
            ), true, true);
            echo $done;
            Yii::app()->end();
        }

    }

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Document the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Document::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Document $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='document-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
