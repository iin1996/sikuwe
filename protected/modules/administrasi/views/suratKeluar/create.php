<?php
$this->breadcrumbs=array(
	'Surat Keluar'=>array('index'),
	'Buat',
);

$this->menu=array(
array('label'=>'Daftar Surat Keluar','url'=>array('index'), 'icon'=>'pencil'),
array('label'=>'Kelola Surat Keluar','url'=>array('admin'), 'icon'=>'cog'),
);
?>

<h1>Catat <strong>Surat Keluar</strong></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>