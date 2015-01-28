<?php
$this->breadcrumbs=array(
	'Surat Keluars'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List suratKeluar','url'=>array('index')),
array('label'=>'Create suratKeluar','url'=>array('create')),
array('label'=>'Update suratKeluar','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete suratKeluar','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage suratKeluar','url'=>array('admin')),
);
?>

<h1>View suratKeluar #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nomor',
		'tanggal',
		'tujuan',
		'isi_surat',
		'keterangan',
),
)); ?>
