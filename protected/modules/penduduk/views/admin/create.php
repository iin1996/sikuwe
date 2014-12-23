<?php
/* @var $this AdminController */
/* @var $model Penduduk */

$this->breadcrumbs=array(
	'Penduduk'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Penduduk', 'url'=>array('index')),
//	array('label'=>'Manage Penduduk', 'url'=>array('admin')),
//);
?>

<h1>Create Penduduk</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
