<?php
/* @var $this AdminController */
/* @var $model Penduduk */

$this->breadcrumbs=array(
	'Penduduk'=>array('index'),
	'Entri Data',
);

//$this->menu=array(
//	array('label'=>'List Penduduk', 'url'=>array('index')),
//	array('label'=>'Manage Penduduk', 'url'=>array('admin')),
//);
?>

<h1>Entri Data Penduduk</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
