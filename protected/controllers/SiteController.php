<?php

class SiteController extends Controller
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
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{

		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
    public function actionAbout()
    {
        if (Yii::app()->request->isAjaxRequest) {
            Yii::app()->getClientScript()->scriptMap = array(
                'jquery.js' => false,
                'jquery.min.js' => false,
                'jquery-ui.min.js' => false,
                'jquery.ba-bbq.js'=>false,
                'jquery.yiigridview.js'=>false,
            );
        }
        if (Yii::app()->request->isAjaxRequest) {
            $done =$this->renderPartial('about', true);
            echo $done;
            Yii::app()->end();
        }
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->renderPartial('about');
    }
	public function actionContact()
	{
		$model=new ContactForm;
        if(isset($_POST['ajax']) && $_POST['ajax']==='user-form'){
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
        if (Yii::app()->request->isAjaxRequest) {
            Yii::app()->getClientScript()->scriptMap = array(
                'jquery.js' => false,
                'jquery.min.js' => false,
                'jquery-ui.min.js' => false,
                'jquery.ba-bbq.js'=>false,
                'jquery.yiigridview.js'=>false,
            );
        }
        if (Yii::app()->request->isAjaxRequest) {
            $done =$this->renderPartial('contact', array('model'=>$model
            ), true, true);
            echo $done;
            Yii::app()->end();
        }
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{

		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
        if (Yii::app()->request->isAjaxRequest) {
            $done =$this->renderPartial('index', array(
                'model'=>$model
            ), true, true);
            echo $done;
            Yii::app()->end();
        }
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}