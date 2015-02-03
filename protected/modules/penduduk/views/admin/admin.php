<?php
$this->breadcrumbs=array(
	'Penduduks'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'Daftar Penduduk','url'=>array('index'), 'icon'=>'th-list'),
array('label'=>'Entri Penduduk','url'=>array('create'),'icon'=>'pencil'),
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

<h1>Kelola Penduduks</h1>


<?php echo CHtml::link('Pencarian','#',array('class'=>'search-button btn')); ?>
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
		//'id_penduduk',
		'nik',
		'nama',
		'tempat_lahir',
		'tanggal_lahir',
		//'kewarganegaraan',
		'id_jenis_kelamin',
		/*
		'foto',
		'sidik_jari',
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
	'header'=>'Aksi',
	'class'=>'booster.widgets.TbButtonColumn',
	'htmlOptions'=>array('style'=>'min-width:100px;'),
),
),
)); ?>
