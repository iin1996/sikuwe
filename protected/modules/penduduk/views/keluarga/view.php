<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluargas'=>array('index'),
	$model->id_keluarga,
);

$this->menu=array(
	array('label'=>'List Keluarga', 'url'=>array('index')),
	array('label'=>'Create Keluarga', 'url'=>array('create')),
	array('label'=>'Update Keluarga', 'url'=>array('update', 'id'=>$model->id_keluarga)),
	array('label'=>'Delete Keluarga', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_keluarga),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Keluarga', 'url'=>array('admin')),
);
?>

<h1>View Keluarga #<?php echo $model->id_keluarga; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_keluarga',
		'no_kk',
		'alamat',
		'id_kepala_keluarga',
		'is_active',
		'is_temporary',
		'disimpan',
	),
)); ?>
