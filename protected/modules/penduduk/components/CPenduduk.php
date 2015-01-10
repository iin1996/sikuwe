<?php

class CPenduduk extends CApplicationComponent
{

	public function init()
	{
		Yii::import('application.modules.penduduk.models.*');
	}

	public function jumlahPenduduk()
	{
		$criteria = new CDbCriteria;
		$criteria->condition = 'is_active=:is_active';
		$criteria->params = array(':is_active'=>'TRUE');
		$jumlah_penduduk = Penduduk::model()->count($criteria);

		return $jumlah_penduduk;
	}
	/*
	public function jumlahPendudukLakiLaki()
	{
		$criteria = new CDbCriteria;
		$criteria->condition = 'is_active=:is_active AND id_jenis_kelamin=:jenis_kelamin';
		$criteria->params = array(':is_active'=>'TRUE', ':jenis_kelamin'=>1);
		$jumlah_penduduk = Penduduk::model()->count($criteria);

		return $jumlah_penduduk;
	}

	public function jumlahPendudukPerempuan()
	{
		$criteria = new CDbCriteria;
		$criteria->condition = 'is_active=:is_active AND id_jenis_kelamin=:jenis_kelamin';
		$criteria->params = array(':is_active'=>'TRUE', ':jenis_kelamin'=>2);
		$jumlah_penduduk = Penduduk::model()->count($criteria);

		return $jumlah_penduduk;
	}
	*/
?>
