<?php

/**
 * This is the model class for table "{{order_items}}".
 *
 * The followings are the available columns in table '{{order_items}}':
 * @property integer $oi_id
 * @property integer $oi_quantity
 * @property integer $order_o_id
 * @property integer $cms_product_p_id1
 *
 * The followings are the available model relations:
 * @property Order $orderO
 * @property Product $cmsProductPId1
 */
class OrderItems extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{order_items}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('oi_quantity, order_o_id, cms_product_p_id1', 'required'),
			array('oi_quantity, order_o_id, cms_product_p_id1', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('oi_id, oi_quantity, order_o_id, cms_product_p_id1', 'safe', 'on'=>'search'),
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
			'orderO' => array(self::BELONGS_TO, 'Order', 'order_o_id'),
			'cmsProductPId1' => array(self::BELONGS_TO, 'Product', 'cms_product_p_id1'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'oi_id' => 'Oi',
			'oi_quantity' => 'Oi Quantity',
			'order_o_id' => 'Order O',
			'cms_product_p_id1' => 'Cms Product P Id1',
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

		$criteria->compare('oi_id',$this->oi_id);
		$criteria->compare('oi_quantity',$this->oi_quantity);
		$criteria->compare('order_o_id',$this->order_o_id);
		$criteria->compare('cms_product_p_id1',$this->cms_product_p_id1);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrderItems the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
