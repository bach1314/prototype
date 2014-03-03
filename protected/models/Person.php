<?php

/**
 * This is the model class for table "person".
 *
 * The followings are the available columns in table 'person':
 * @property string $id_person
 * @property string $title
 * @property string $family_name
 * @property string $surname
 * @property string $phone
 * @property string $email
 * @property string $fax
 * @property string $address
 *
 * The followings are the available model relations:
 * @property Account[] $accounts
 * @property Account[] $accounts1
 * @property Address $address0
 */
class Person extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_person', 'required'),
            array('id_person', 'numerical', 'integerOnly'=>true, 'min'=>0),
			array('id_person', 'length', 'max'=>12),
			array('phone, fax', 'length', 'max'=>20),
			array('address', 'length', 'max'=>10),
			array('title, family_name, surname, email', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_person, title, family_name, surname, phone, email, fax, address', 'safe', 'on'=>'search'),
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
			'accounts' => array(self::HAS_MANY, 'Account', 'id_person'),
			'accounts1' => array(self::HAS_MANY, 'Account', 'correspondence_person'),
			'address0' => array(self::BELONGS_TO, 'Address', 'address'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_person' => 'Id Person',
			'title' => 'Title',
			'family_name' => 'Family Name',
			'surname' => 'Surname',
			'phone' => 'Phone',
			'email' => 'Email',
			'fax' => 'Fax',
			'address' => 'Address',
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

		$criteria->compare('id_person',$this->id_person,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('family_name',$this->family_name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('address',$this->address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Person the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
