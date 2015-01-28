<?php

/**
 * This is the model class for table "{{suratmasuk}}".
 *
 * The followings are the available columns in table '{{suratmasuk}}':
 * @property integer $id_surat
 * @property string $nomor
 * @property string $tanggal_masuk
 * @property string $pengirim
 * @property string $isi_surat
 * @property string $keterangan
 */
class suratMasuk extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return suratMasuk the static model class
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
		return '{{suratmasuk}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomor, tanggal_masuk, pengirim', 'required'),
			array('nomor', 'length', 'max'=>25),
			array('pengirim', 'length', 'max'=>50),
			array('isi_surat, keterangan', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_surat, nomor, tanggal_masuk, pengirim, isi_surat, keterangan', 'safe', 'on'=>'search'),
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
			'id_surat' => 'Id Surat',
			'nomor' => 'Nomor',
			'tanggal_masuk' => 'Tanggal Masuk',
			'pengirim' => 'Pengirim',
			'isi_surat' => 'Isi Surat',
			'keterangan' => 'Keterangan',
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

		$criteria->compare('id_surat',$this->id_surat);
		$criteria->compare('nomor',$this->nomor,true);
		$criteria->compare('tanggal_masuk',$this->tanggal_masuk,true);
		$criteria->compare('pengirim',$this->pengirim,true);
		$criteria->compare('isi_surat',$this->isi_surat,true);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}