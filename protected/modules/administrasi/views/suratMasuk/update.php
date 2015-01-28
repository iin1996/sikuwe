<?php
$this->breadcrumbs=array(
	'Surat Masuks'=>array('index'),
	$model->id_surat=>array('view','id'=>$model->id_surat),
	'Update',
);

	$this->menu=array(
	array('label'=>'List suratMasuk','url'=>array('index')),
	array('label'=>'Create suratMasuk','url'=>array('create')),
	array('label'=>'View suratMasuk','url'=>array('view','id'=>$model->id_surat)),
	array('label'=>'Manage suratMasuk','url'=>array('admin')),
	);
	?>

	<h1>Update suratMasuk <?php echo $model->id_surat; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>