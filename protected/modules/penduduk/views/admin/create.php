<?php
/* @var $this AdminController */
/* @var $model Penduduk */

$this->breadcrumbs=array(
	'Penduduk'=>array('index'),
	'Entri Data',
);

$this->menu=array(
	array('label'=>'ADMINISTRATIF'),
	array('label'=>'Daftar Penduduk', 'url'=>array('index'), 'icon'=>'th-list'),
	array('label'=>'Kelola Penduduk', 'url'=>array('admin'), 'icon'=>'cog'),
);
?>

<h1>Entri Data Penduduk</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
