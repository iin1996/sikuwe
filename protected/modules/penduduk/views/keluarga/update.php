<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluargas'=>array('index'),
	$model->id_keluarga=>array('view','id'=>$model->id_keluarga),
	'Update',
);

$this->menu=array(
	array('label'=>'List Keluarga', 'url'=>array('index')),
	array('label'=>'Create Keluarga', 'url'=>array('create')),
	array('label'=>'View Keluarga', 'url'=>array('view', 'id'=>$model->id_keluarga)),
	array('label'=>'Manage Keluarga', 'url'=>array('admin')),
);
?>

<h1>Update Keluarga <?php echo $model->id_keluarga; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>