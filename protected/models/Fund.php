<?php

/**
 * This is the model class for table "fund".
 *
 * The followings are the available columns in table 'fund':
 * @property string $isin
 * @property string $funds_name
 * @property string $funds_currency
 * @property string $nav
 *
 * The followings are the available model relations:
 * @property Confirmation[] $confirmations
 * @property Redemption[] $redemptions
 */
class Fund extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fund';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('isin', 'required'),
			array('funds_name, funds_currency, nav', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('isin, funds_name, funds_currency, nav', 'safe', 'on'=>'search'),
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
			'confirmations' => array(self::HAS_MANY, 'Confirmation', 'isin'),
			'redemptions' => array(self::HAS_MANY, 'Redemption', 'isin'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'isin' => 'Isin',
			'funds_name' => 'Funds Name',
			'funds_currency' => 'Funds Currency',
			'nav' => 'Nav',
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

		$criteria->compare('isin',$this->isin,true);
		$criteria->compare('funds_name',$this->funds_name,true);
		$criteria->compare('funds_currency',$this->funds_currency,true);
		$criteria->compare('nav',$this->nav,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Fund the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
