<?php
/* @var $this AdminController */
/* @var $model Penduduk */

$this->breadcrumbs=array(
	'Penduduk'=>array('index'),
	$model->id_penduduk=>array('view','id'=>$model->id_penduduk),
	'Update',
);

$this->menu=array(
	array('label'=>'ADMINISTRATIF'),
	array('label'=>'Daftar Penduduk', 'url'=>array('index'), 'icon'=>'th-list'),
	array('label'=>'Entri Penduduk', 'url'=>array('create'), 'icon'=>'pencil'),
	array('label'=>'Lihat Penduduk', 'url'=>array('view', 'id'=>$model->id_penduduk), 'icon'=>'eye-open'),
	array('label'=>'Kelola Penduduk', 'url'=>array('admin'), 'icon'=>'cog'),
);
?>

<h1><small>Perbarui Data Penduduk</small> <strong><?php echo $model->nama; ?></strong></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>