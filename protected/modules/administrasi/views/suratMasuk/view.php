<?php
/* @var $this SuratMasukController */
/* @var $model suratMasuk */

$this->breadcrumbs=array(
	'Surat Masuks'=>array('index'),
	$model->id_surat,
);

$this->menu=array(
	array('label'=>'List suratMasuk', 'url'=>array('index')),
	array('label'=>'Create suratMasuk', 'url'=>array('create')),
	array('label'=>'Update suratMasuk', 'url'=>array('update', 'id'=>$model->id_surat)),
	array('label'=>'Delete suratMasuk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_surat),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage suratMasuk', 'url'=>array('admin')),
);
?>

<h1>View suratMasuk #<?php echo $model->id_surat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_surat',
		'nomor',
		'tanggal_masuk',
		'pengirim',
		'isi_surat',
		'keterangan',
	),
)); ?>
