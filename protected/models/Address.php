<?php

/**
 * This is the model class for table "address".
 *
 * The followings are the available columns in table 'address':
 * @property string $address_id
 * @property string $street
 * @property string $house_number
 * @property string $post_box
 * @property string $town
 * @property string $post_code
 * @property string $country
 * @property string $c_o
 *
 * The followings are the available model relations:
 * @property Account[] $accounts
 * @property Company[] $companies
 * @property Person[] $people
 */
class Address extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'address';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('address_id', 'required'),
			array('address_id', 'length', 'max'=>10),
			array('street, house_number, post_box, town, post_code, country, c_o', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('address_id, street, house_number, post_box, town, post_code, country, c_o', 'safe', 'on'=>'search'),
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
			'accounts' => array(self::HAS_MANY, 'Account', 'correspondence_address'),
			'companies' => array(self::HAS_MANY, 'Company', 'address'),
			'people' => array(self::HAS_MANY, 'Person', 'address'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'address_id' => 'Address',
			'street' => 'Street',
			'house_number' => 'House Number',
			'post_box' => 'Post Box',
			'town' => 'Town',
			'post_code' => 'Post Code',
			'country' => 'Country',
			'c_o' => 'C O',
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

		$criteria->compare('address_id',$this->address_id,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('house_number',$this->house_number,true);
		$criteria->compare('post_box',$this->post_box,true);
		$criteria->compare('town',$this->town,true);
		$criteria->compare('post_code',$this->post_code,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('c_o',$this->c_o,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Address the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
