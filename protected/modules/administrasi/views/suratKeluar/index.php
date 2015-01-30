<?php
$this->breadcrumbs=array(
  'Surat Keluar',
);

$this->menu=array(
array('label'=>'Create suratKeluar','url'=>array('create'), 'icon'=>'pencil'),
array('label'=>'Manage suratKeluar','url'=>array('admin'), 'icon'=>'cog'),
);
?>

<h1>Surat Keluars</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
