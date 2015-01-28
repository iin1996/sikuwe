<?php
/* @var $this SuratMasukController */
/* @var $model suratMasuk */

$this->breadcrumbs=array(
	'Surat Masuks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List suratMasuk', 'url'=>array('index')),
	array('label'=>'Manage suratMasuk', 'url'=>array('admin')),
);
?>

<h1>Create suratMasuk</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>