<?php
/* @var $this AdminController */
/* @var $model Penduduk */

$this->breadcrumbs=array(
	'Penduduk'=>array('index'),
	$model->id_penduduk,
);

$this->menu=array(
	array('label'=>'Daftar Penduduk', 'url'=>array('index'), 'icon'=>'th-list'),
	array('label'=>'Entri Penduduk', 'url'=>array('create'), 'icon'=>'pencil'),
	array('label'=>'Perbarui Data', 'url'=>array('update', 'id'=>$model->id_penduduk), 'icon'=>'edit'),
	array('label'=>'Hapus Penduduk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_penduduk),'confirm'=>'Are you sure you want to delete this item?'), 'icon'=>'minus'),
	array('label'=>'Kelola Penduduk', 'url'=>array('admin'), 'icon'=>'cog'),
);
?>

<h1>Detail Penduduk <strong><?php echo $model->nama; ?></strong></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_penduduk',
		'nik',
		'nama',
		'tempat_lahir',
		'tanggal_lahir',
		'kewarganegaraan',
		//'foto',
		//'sidik_jari',
		'id_jenis_kelamin',
		'id_golongan_darah',
		'id_agama',
		'id_status_kawin',
		'id_status_tinggal',
		'id_pendidikan',
		'id_pekerjaan',
		'id_cacat',
		'id_status_kependudukan',
		//'is_active',
		//'is_temporary',
		//'disimpan',
		//'diperbarui',
	),
)); ?>
