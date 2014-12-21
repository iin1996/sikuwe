<?php
/* @var $this AdminController */
/* @var $model Penduduk */

$this->breadcrumbs=array(
	'Penduduks'=>array('index'),
	$model->id_penduduk=>array('view','id'=>$model->id_penduduk),
	'Update',
);

$this->menu=array(
	array('label'=>'List Penduduk', 'url'=>array('index')),
	array('label'=>'Create Penduduk', 'url'=>array('create')),
	array('label'=>'View Penduduk', 'url'=>array('view', 'id'=>$model->id_penduduk)),
	array('label'=>'Manage Penduduk', 'url'=>array('admin')),
);
?>

<h1>Update Penduduk <?php echo $model->id_penduduk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>