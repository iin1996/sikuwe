<?php
$this->breadcrumbs=array(
	'Surat Masuk'=>array('index'),
	'Buat',
);

$this->menu=array(
array('label'=>'Daftar Surat Masuk','url'=>array('index'), 'icon'=>'th-list'),
array('label'=>'Kelola Surat Masuk','url'=>array('admin'), 'icon'=>'cog'),
);
?>

<h1>Catat <strong>Surat Masuk</strong></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>