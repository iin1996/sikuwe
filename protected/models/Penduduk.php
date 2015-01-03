<?php

/**
 * This is the model class for table "tbl_penduduk".
 *
 * The followings are the available columns in table 'tbl_penduduk':
 * @property integer $id_penduduk
 * @property string $nik
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $kewarganegaraan
 * @property string $foto
 * @property string $sidik_jari
 * @property integer $id_jenis_kelamin
 * @property integer $id_golongan_darah
 * @property integer $id_agama
 * @property integer $id_status_kawin
 * @property integer $id_status_tinggal
 * @property integer $id_pendidikan
 * @property integer $id_pekerjaan
 * @property integer $id_cacat
 * @property integer $id_status_kependudukan
 * @property integer $is_active
 * @property integer $is_temporary
 * @property integer $disimpan
 * @property integer $diperbarui
 */
class Penduduk extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Penduduk the static model class
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
		return 'tbl_penduduk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nik, nama, tempat_lahir, tanggal_lahir', 'required'),
			//array('id_jenis_kelamin, id_golongan_darah, id_agama, id_status_kawin, id_status_tinggal, id_pendidikan, id_pekerjaan, id_cacat, id_status_kependudukan, is_active, is_temporary, disimpan, diperbarui', 'numerical', 'integerOnly'=>false),
			array('nik', 'length', 'max'=>16),
			array('nama', 'length', 'max'=>75),
			array('tempat_lahir, sidik_jari', 'length', 'max'=>45),
			array('kewarganegaraan', 'length', 'max'=>18),
			array('foto', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_penduduk, nik, nama, tempat_lahir, tanggal_lahir, id_jenis_kelamin, id_golongan_darah, id_agama, id_status_kawin', 'safe', 'on'=>'search'),
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
			'id_penduduk' => 'ID Penduduk',
			'nik' => 'NIK',
			'nama' => 'Nama',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'kewarganegaraan' => 'Kewarganegaraan',
			'foto' => 'Foto',
			'sidik_jari' => 'Sidik Jari',
			'id_jenis_kelamin' => 'Jenis Kelamin',
			'id_golongan_darah' => 'Golongan Darah',
			'id_agama' => 'Agama',
			'id_status_kawin' => 'Status Kawin',
			'id_status_tinggal' => 'Status Tinggal',
			'id_pendidikan' => 'Pendidikan',
			'id_pekerjaan' => 'Pekerjaan',
			'id_cacat' => 'Penyandang Cacat',
			'id_status_kependudukan' => 'Status Kependudukan',
			'is_active' => 'Active',
			'is_temporary' => 'Temporary',
			'disimpan' => 'Disimpan',
			'diperbarui' => 'Diperbarui',
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

		$criteria->compare('id_penduduk',$this->id_penduduk);
		$criteria->compare('nik',$this->nik,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('kewarganegaraan',$this->kewarganegaraan,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('sidik_jari',$this->sidik_jari,true);
		$criteria->compare('id_jenis_kelamin',$this->id_jenis_kelamin);
		$criteria->compare('id_golongan_darah',$this->id_golongan_darah);
		$criteria->compare('id_agama',$this->id_agama);
		$criteria->compare('id_status_kawin',$this->id_status_kawin);
		$criteria->compare('id_status_tinggal',$this->id_status_tinggal);
		$criteria->compare('id_pendidikan',$this->id_pendidikan);
		$criteria->compare('id_pekerjaan',$this->id_pekerjaan);
		$criteria->compare('id_cacat',$this->id_cacat);
		$criteria->compare('id_status_kependudukan',$this->id_status_kependudukan);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('is_temporary',$this->is_temporary);
		$criteria->compare('disimpan',$this->disimpan);
		$criteria->compare('diperbarui',$this->diperbarui);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
