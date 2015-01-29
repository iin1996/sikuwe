<?php
/* @var $this AdminController */
/* @var $data Penduduk */
/* @var $model Penduduk */
?>

<div class="view">
	
<?php $this->widget('booster.widgets.TbGridView', array(
	//$this->widget('booster.widgets.TbExtendedGridView', array(
	//	'fixedHeader'=>true,
	//	'headerOffset'=>40,
		'id'=>'penduduk-form',
		'type'=>'striped bordered condensed',
		'dataProvider'=>$dataProvider,
		'template'=>"{items}",
		//'filter'=>$model,
		'columns'=>array(
			//'id_penduduk',
			array(
				'name'=>'nik',
				'type'=>'raw',
				'value'=>'CHtml::link($data->nik,Yii::app()->createUrl("penduduk/admin/view/id/".$data->id_penduduk),array("title"=>"Detail Penduduk"))',),
			'nama',
			'tempat_lahir',
			'tanggal_lahir',
			'kewarganegaraan',
			//'foto',
			//'sidik_jari',
			'id_jenis_kelamin',
			//'id_golongan_darah',
			'id_agama',
			//'id_status_kawin',
			//'id_status_tinggal',
			'id_pendidikan',
			'id_pekerjaan',
			//'id_cacat',
			//'id_status_kependudukan',
			//'is_active',
			//'is_temporary',
			//'disimpan',
			//'diperbarui',
			
		),
)); ?>

</div>
