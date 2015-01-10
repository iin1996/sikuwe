<?php

class PendudukModule extends CWebModule
{
	public $_UrlAssets;

	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application
		//$this->defaultController = 'Admin';
		// import the module-level models and components
		$this->setImport(array(
			'penduduk.models.*',
			'penduduk.components.*',
		));
		//$this->setComponent('penduduk', new CPenduduk); 
	}
	
	public $pendudukAdminCreateUrl = array("/penduduk/admin/create");
	public $pendudukAdminIndexUrl = array("/penduduk/admin/index");
	public $pendudukAdminAdminUrl = array("/penduduk/admin/admin");
	
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
    
    public function ambilUrlAsset()
    {
        if($this->_UrlAssets===null)
        $this->_UrlAssets=Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('penduduk.assets'),false,1,YII_DEBUG);
        return $this->_UrlAssets;
    }	
    
    public function daftarkanCss($file, $media='all')
    {
        $href = $this->ambilUrlAsset().'/css/'.$file;
        return Yii::app()->clientScript->registerCssFile($href,$media);
        //return '<link rel="stylesheet" type="text/css" href="'.$href.'" media="'.$media.'" />';
    }

	public function jumlahPenduduk()
	{
		$criteria = new CDbCriteria;
		//$criteria->condition = 'is_active=:is_active';
		$criteria->params = array(':is_active'=>'TRUE');
		$jumlah_penduduk = Penduduk::model()->count($criteria);

		return $jumlah_penduduk;
	}

}
