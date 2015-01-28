<?php
$this->breadcrumbs=array(
	'Surat Keluars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List suratKeluar','url'=>array('index')),
	array('label'=>'Create suratKeluar','url'=>array('create')),
	array('label'=>'View suratKeluar','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage suratKeluar','url'=>array('admin')),
	);
	?>

	<h1>Update suratKeluar <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>