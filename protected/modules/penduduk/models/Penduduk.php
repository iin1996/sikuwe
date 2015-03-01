<?php

/**
 * This is the model class for table "{{penduduk}}".
 *
 * The followings are the available columns in table '{{penduduk}}':
 * @property integer $id_penduduk
 * @property string $nik
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $kewarganegaraan
 * @property string $foto
 * @property string $sidik_jari
 * @property string $id_jenis_kelamin
 * @property string $id_golongan_darah
 * @property string $id_agama
 * @property string $id_status_kawin
 * @property string $id_status_tinggal
 * @property string $id_pendidikan
 * @property string $id_pekerjaan
 * @property string $id_cacat
 * @property string $id_status_kependudukan
 * @property integer $is_active
 * @property string $is_temporary
 * @property string $disimpan
 * @property string $diperbarui
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
		return '{{penduduk}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nik, nama, tempat_lahir, tanggal_lahir, kewarganegaraan',  'required'),
			array('is_active', 'numerical', 'integerOnly'=>true),
			array('nik', 'length', 'max'=>16),
			array('nama', 'length', 'max'=>75),
			array('tempat_lahir, sidik_jari, is_temporary, disimpan, diperbarui', 'length', 'max'=>45),
			array('kewarganegaraan', 'length', 'max'=>18),
			array('foto', 'length', 'max'=>150),
			array('id_jenis_kelamin, id_golongan_darah, id_agama, id_status_kawin, id_status_tinggal, id_pendidikan, id_pekerjaan, id_cacat, id_status_kependudukan', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_penduduk, nik, nama, tempat_lahir, tanggal_lahir, kewarganegaraan, foto, sidik_jari, id_jenis_kelamin, id_golongan_darah, id_agama, id_status_kawin, id_status_tinggal, id_pendidikan, id_pekerjaan, id_cacat, id_status_kependudukan, is_active, is_temporary, disimpan, diperbarui', 'safe', 'on'=>'search'),
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
			'id_penduduk' => 'Id Penduduk',
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
			'id_cacat' => 'Cacat',
			'id_status_kependudukan' => 'Status Kependudukan',
			'is_active' => 'Is Active',
			'is_temporary' => 'Is Temporary',
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
		/* $criteria->compare('foto',$this->foto,true);
		$criteria->compare('sidik_jari',$this->sidik_jari,true);
		$criteria->compare('id_jenis_kelamin',$this->id_jenis_kelamin,true);
		$criteria->compare('id_golongan_darah',$this->id_golongan_darah,true);
		$criteria->compare('id_agama',$this->id_agama,true);
		$criteria->compare('id_status_kawin',$this->id_status_kawin,true);
		$criteria->compare('id_status_tinggal',$this->id_status_tinggal,true);
		$criteria->compare('id_pendidikan',$this->id_pendidikan,true);
		$criteria->compare('id_pekerjaan',$this->id_pekerjaan,true);
		$criteria->compare('id_cacat',$this->id_cacat,true);
		$criteria->compare('id_status_kependudukan',$this->id_status_kependudukan,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('is_temporary',$this->is_temporary,true);
		$criteria->compare('disimpan',$this->disimpan,true);
		$criteria->compare('diperbarui',$this->diperbarui,true); */

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}