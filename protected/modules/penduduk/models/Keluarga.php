<?php

/**
 * This is the model class for table "{{keluarga}}".
 *
 * The followings are the available columns in table '{{keluarga}}':
 * @property integer $id_keluarga
 * @property string $no_kk
 * @property string $alamat
 * @property integer $id_kepala_keluarga
 * @property integer $is_active
 * @property integer $is_temporary
 * @property string $disimpan
 */
class Keluarga extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Keluarga the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{keluarga}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_kk, alamat, id_kepala_keluarga, is_temporary, disimpan', 'required'),
			array('id_kepala_keluarga, is_active, is_temporary', 'numerical', 'integerOnly'=>true),
			array('no_kk', 'length', 'max'=>17),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_keluarga, no_kk, alamat, id_kepala_keluarga, is_active, is_temporary, disimpan', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_keluarga' => 'Id Keluarga',
			'no_kk' => 'No Kk',
			'alamat' => 'Alamat',
			'id_kepala_keluarga' => 'Id Kepala Keluarga',
			'is_active' => 'Is Active',
			'is_temporary' => 'Is Temporary',
			'disimpan' => 'Disimpan',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_keluarga',$this->id_keluarga);
		$criteria->compare('no_kk',$this->no_kk,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('id_kepala_keluarga',$this->id_kepala_keluarga);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('is_temporary',$this->is_temporary);
		$criteria->compare('disimpan',$this->disimpan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}