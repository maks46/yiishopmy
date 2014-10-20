<?php

/**
 * This is the model class for table "{{product}}".
 *
 * The followings are the available columns in table '{{product}}':
 * @property integer $p_id
 * @property string $p_title
 * @property string $p_description
 * @property string $p_price
 * @property string $p_img
 * @property integer $p_rating
 * @property integer $p_mark
 * @property integer $cms_category_c_id
 *
 * The followings are the available model relations:
 * @property Category $cmsCategoryC
 */
class Product extends CActiveRecord implements IECartPosition
{
    
    
    function getId(){
        return $this->p_id;
    }

    function getPrice(){
        return $this->p_price;
    }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{product}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('p_title, p_price', 'required'),
			array('p_rating, p_mark, cms_category_c_id', 'numerical', 'integerOnly'=>true),
			array('p_title, p_img', 'length', 'max'=>255),
			array('p_price', 'length', 'max'=>10),
			array('p_description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('p_id, p_title, p_description, p_price, p_img, p_rating, p_mark, cms_category_c_id', 'safe', 'on'=>'search'),
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
			//'cmsCategoryC' => array(self::BELONGS_TO, 'Category', 'cms_category_c_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'p_id' => 'P',
			'p_title' => 'P Title',
			'p_description' => 'P Description',
			'p_price' => 'P Price',
			'p_img' => 'P Img',
			'p_rating' => 'P Rating',
			'p_mark' => 'P Mark',
			'cms_category_c_id' => 'Cms Category C',
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

		$criteria->compare('p_id',$this->p_id);
		$criteria->compare('p_title',$this->p_title,true);
		$criteria->compare('p_description',$this->p_description,true);
		$criteria->compare('p_price',$this->p_price,true);
		$criteria->compare('p_img',$this->p_img,true);
		$criteria->compare('p_rating',$this->p_rating);
		$criteria->compare('p_mark',$this->p_mark);
		$criteria->compare('cms_category_c_id',$this->cms_category_c_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
