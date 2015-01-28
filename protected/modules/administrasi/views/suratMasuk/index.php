<?php
/* @var $this SuratMasukController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Surat Masuks',
);

$this->menu=array(
	array('label'=>'Create suratMasuk', 'url'=>array('create')),
	array('label'=>'Manage suratMasuk', 'url'=>array('admin')),
);
?>

<h1>Surat Masuks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
