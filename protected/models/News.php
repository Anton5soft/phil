<?php

/**
 * This is the model class for table "{{news}}".
 *
 * The followings are the available columns in table '{{news}}':
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $created_time
 * @property integer $updated_time
 * @property integer $author_id
 */
class News extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{news}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
    public function rules()
    {
        return array(
            array('title, content, lang', 'required'),
            array('title', 'length', 'max'=>128),
            array('title', 'safe', 'on'=>'search'),
        );
    }

	/**
	 * @return array relational rules.
	 */
    public function relations()
    {
        return array(
            'author' => array(self::BELONGS_TO, 'User', 'author_id'),
        );
    }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('phil_ru','ID'),
			'title' => Yii::t('phil_ru','Title'),
			'content' => Yii::t('phil_ru','Content'),
			'created_time' => Yii::t('phil_ru','Created Time'),
			'updated_time' => Yii::t('phil_ru','Updated Time'),
			'author_id' => Yii::t('phil_ru','Author'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('created_time',$this->created_time);
		$criteria->compare('updated_time',$this->updated_time);
		$criteria->compare('author_id',$this->author_id);
        $criteria->compare('lang',$this->author_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    public function getUrl()
    {
        return Yii::app()->createUrl('news/view', array(
            'id'=>$this->id,
            'title'=>$this->title,
        ));
    }
    protected function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord)
            {
                $this->created_time=$this->updated_time=time();

            }
            else
                $this->updated_time=time();
            return true;
        }
        else
            return false;
    }

}
