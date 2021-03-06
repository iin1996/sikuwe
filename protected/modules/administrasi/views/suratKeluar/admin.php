<?php
$this->breadcrumbs=array(
  'Surat Keluars'=>array('index'),
  'Manage',
);

$this->menu=array(
array('label'=>'List suratKeluar','url'=>array('index')),
array('label'=>'Create suratKeluar','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('surat-keluar-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Surat Keluars</h1>

<p>
  You may optionally enter a comparison operator (<b><</b>, <b><=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
    <&gt;</b>
  or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Pencarian Pintar','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
  <?php $this->renderPartial('_search',array(
  'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'surat-keluar-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
  //'id',
    'nomor',
    'tanggal',
    'tujuan',
    'isi_surat',
    'keterangan',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
