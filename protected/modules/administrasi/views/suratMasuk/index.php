<?php
$this->breadcrumbs=array(
	'Surat Masuks',
);

$this->menu=array(
array('label'=>'Create suratMasuk','url'=>array('create')),
array('label'=>'Manage suratMasuk','url'=>array('admin')),
);
?>

<h1>Surat Masuks</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
