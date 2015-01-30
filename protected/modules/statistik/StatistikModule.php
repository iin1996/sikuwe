<?php

class StatistikModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		Yii::import('application.modules.penduduk.models.*');
		// import the module-level models and components
		$this->setImport(array(
			'statistik.models.*',
			'statistik.components.*',
		));
	}

	public $statUrl = array("/statistik");

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}

	// public function jumlahLakiLaki()
	// {
	// 	$criteria = new CDbCriteria;
	// 	$criteria->condition = 'id_jenis_kelamin=:id_jenis_kelamin';
	// 	$criteria->params = array(':id_jenis_kelamin'=>'Laki-Laki');
	// 	$jumlah_lakilaki = Penduduk::model()->count($criteria);

	// 	return $jumlah_lakilaki;
	// }

}
