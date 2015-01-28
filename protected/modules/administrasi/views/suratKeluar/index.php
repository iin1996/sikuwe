<?php
$this->breadcrumbs=array(
	'Surat Keluars',
);

$this->menu=array(
array('label'=>'Create suratKeluar','url'=>array('create')),
array('label'=>'Manage suratKeluar','url'=>array('admin')),
);
?>

<h1>Surat Keluars</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
