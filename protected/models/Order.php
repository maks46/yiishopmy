<?php

/**
 * This is the model class for table "{{order}}".
 *
 * The followings are the available columns in table '{{order}}':
 * @property integer $o_id
 * @property string $o_create_time
 * @property string $o_sum
 * @property integer $o_status
 * @property integer $cms_users_id
 *
 * The followings are the available model relations:
 * @property Users $cmsUsers
 * @property OrderItems[] $orderItems
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{order}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cms_users_id', 'required'),
			array('o_status, cms_users_id', 'numerical', 'integerOnly'=>true),
			array('o_sum', 'length', 'max'=>10),
			array('o_create_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('o_id, o_create_time, o_sum, o_status, cms_users_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'cmsUsers' => array(self::BELONGS_TO, 'Users', 'cms_users_id'),
			'orderItems' => array(self::HAS_MANY, 'OrderItems', 'order_o_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'o_id' => 'O',
			'o_create_time' => 'O Create Time',
			'o_sum' => 'O Sum',
			'o_status' => 'O Status',
			'cms_users_id' => 'Cms Users',
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

		$criteria->compare('o_id',$this->o_id);
		$criteria->compare('o_create_time',$this->o_create_time,true);
		$criteria->compare('o_sum',$this->o_sum,true);
		$criteria->compare('o_status',$this->o_status);
		$criteria->compare('cms_users_id',$this->cms_users_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
