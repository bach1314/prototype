<?php

/**
 * This is the model class for table "account".
 *
 * The followings are the available columns in table 'account':
 * @property string $account_number
 * @property string $id_person
 * @property string $id_company
 * @property string $correspondence_language
 * @property string $correspondence_desired
 * @property string $correspondence_address
 * @property string $correspondence_person
 *
 * The followings are the available model relations:
 * @property Confirmation[] $confirmations
 * @property Person $idPerson
 * @property Person $correspondencePerson
 * @property Company $idCompany
 * @property Address $correspondenceAddress
 * @property Redemption[] $redemptions
 */
class Account extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'account';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('account_number', 'required'),
            array('account_number', 'numerical', 'integerOnly'=>true, 'min'=>0),
			array('account_number, id_person, id_company, correspondence_person', 'length', 'max'=>12),
			array('correspondence_address', 'length', 'max'=>10),
			array('correspondence_language, correspondence_desired', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('account_number, id_person, id_company, correspondence_language, correspondence_desired, correspondence_address, correspondence_person', 'safe', 'on'=>'search'),
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
			'confirmations' => array(self::HAS_MANY, 'Confirmation', 'acc_nr'),
			'idPerson' => array(self::BELONGS_TO, 'Person', 'id_person'),
			'correspondencePerson' => array(self::BELONGS_TO, 'Person', 'correspondence_person'),
			'idCompany' => array(self::BELONGS_TO, 'Company', 'id_company'),
			'correspondenceAddress' => array(self::BELONGS_TO, 'Address', 'correspondence_address'),
			'redemptions' => array(self::HAS_MANY, 'Redemption', 'acc_nr'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'account_number' => 'Account Number',
			'id_person' => 'Id Person',
			'id_company' => 'Id Company',
			'correspondence_language' => 'Correspondence Language',
			'correspondence_desired' => 'Correspondence Desired',
			'correspondence_address' => 'Correspondence Address',
			'correspondence_person' => 'Correspondence Person',
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

		$criteria->compare('account_number',$this->account_number,true);
		$criteria->compare('id_person',$this->id_person,true);
		$criteria->compare('id_company',$this->id_company,true);
		$criteria->compare('correspondence_language',$this->correspondence_language,true);
		$criteria->compare('correspondence_desired',$this->correspondence_desired,true);
		$criteria->compare('correspondence_address',$this->correspondence_address,true);
		$criteria->compare('correspondence_person',$this->correspondence_person,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Account the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
