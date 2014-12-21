<?php
/* @var $this AdminController */
/* @var $model Penduduk */

$this->breadcrumbs=array(
	'Penduduk'=>array('index'),
	$model->id_penduduk,
);

$this->menu=array(
	array('label'=>'List Penduduk', 'url'=>array('index')),
	array('label'=>'Create Penduduk', 'url'=>array('create')),
	array('label'=>'Update Penduduk', 'url'=>array('update', 'id'=>$model->id_penduduk)),
	array('label'=>'Delete Penduduk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_penduduk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Penduduk', 'url'=>array('admin')),
);
?>

<h1>View Penduduk #<?php echo $model->id_penduduk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_penduduk',
		'nik',
		'nama',
		'tempat_lahir',
		'tanggal_lahir',
		'kewarganegaraan',
		'foto',
		'sidik_jari',
		'id_jenis_kelamin',
		'id_golongan_darah',
		'id_agama',
		'id_status_kawin',
		'id_status_tinggal',
		'id_pendidikan',
		'id_pekerjaan',
		'id_cacat',
		'id_status_kependudukan',
		'is_active',
		'is_temporary',
		'disimpan',
		'diperbarui',
	),
)); ?>
