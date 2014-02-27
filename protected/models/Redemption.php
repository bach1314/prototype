<?php

/**
 * This is the model class for table "redemption".
 *
 * The followings are the available columns in table 'redemption':
 * @property string $acc_nr
 * @property string $isin
 * @property string $curr_date
 * @property string $currentnav
 * @property string $paidamount
 * @property string $redeemed
 * @property string $reference_id
 *
 * The followings are the available model relations:
 * @property Fund $isin0
 * @property Account $accNr
 */
class Redemption extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'redemption';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('acc_nr, isin, curr_date', 'required'),
			array('acc_nr', 'length', 'max'=>12),
			array('currentnav', 'length', 'max'=>8),
			array('paidamount, redeemed', 'length', 'max'=>20),
			array('reference_id', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('acc_nr, isin, curr_date, currentnav, paidamount, redeemed, reference_id', 'safe', 'on'=>'search'),
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
			'isin0' => array(self::BELONGS_TO, 'Fund', 'isin'),
			'accNr' => array(self::BELONGS_TO, 'Account', 'acc_nr'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'acc_nr' => 'Acc Nr',
			'isin' => 'Isin',
			'curr_date' => 'Curr Date',
			'currentnav' => 'Currentnav',
			'paidamount' => 'Paidamount',
			'redeemed' => 'Redeemed',
			'reference_id' => 'Reference',
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

		$criteria->compare('acc_nr',$this->acc_nr,true);
		$criteria->compare('isin',$this->isin,true);
		$criteria->compare('curr_date',$this->curr_date,true);
		$criteria->compare('currentnav',$this->currentnav,true);
		$criteria->compare('paidamount',$this->paidamount,true);
		$criteria->compare('redeemed',$this->redeemed,true);
		$criteria->compare('reference_id',$this->reference_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Redemption the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
