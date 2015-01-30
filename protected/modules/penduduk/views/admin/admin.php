<?php
$this->breadcrumbs=array(
	'Penduduks'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Penduduk','url'=>array('index')),
array('label'=>'Create Penduduk','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('penduduk-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Penduduks</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'penduduk-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_penduduk',
		'nik',
		'nama',
		'tempat_lahir',
		'tanggal_lahir',
		'kewarganegaraan',
		/*
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
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
