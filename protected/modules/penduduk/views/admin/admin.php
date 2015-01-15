<?php
/* @var $this AdminController */
/* @var $model Penduduk */

$this->breadcrumbs=array(
	'Penduduk'=>array('index'),
	'Kelola',
);

$this->menu=array(
	array('label'=>'ADMINISTRATIF'),
	array('label'=>'Daftar Penduduk', 'url'=>array('index'), 'icon'=>'th-list'),
	array('label'=>'Entri Penduduk', 'url'=>array('create'), 'icon'=>'pencil'),
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

<h1>Kelola Penduduk</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php //$this->widget('zii.widgets.grid.CGridView', array(
	//$this->widget('booster.widgets.TbGridView', array(
	$this->widget('booster.widgets.TbExtendedGridView', array(
		'fixedHeader'=>true,
		'headerOffset'=>40,	
	'id'=>'penduduk-grid',
	'type'=>'striped bordered',
	'dataProvider'=>$model->search(),
	'template'=>"{items}",
	'filter'=>$model,
	'columns'=>array(
		//'id_penduduk',
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
			'header'=>'Aksi',
			'class'=>'booster.widgets.TbButtonColumn',
			'deleteConfirmation'=>'Anda yakin mau menghapus data penduduk ini?',
			'deleteButtonUrl'=>Yii::app()->createUrl("penduduk/admin/delete/id/".$model->id_penduduk),
			'htmlOptions'=>array('style'=>'width: 100px'),
		),
	),
)); ?>
