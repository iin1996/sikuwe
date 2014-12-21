<?php
/* @var $this AdminController */
/* @var $model Penduduk */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_penduduk'); ?>
		<?php echo $form->textField($model,'id_penduduk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nik'); ?>
		<?php echo $form->textField($model,'nik',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_lahir'); ?>
		<?php echo $form->textField($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kewarganegaraan'); ?>
		<?php echo $form->textField($model,'kewarganegaraan',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto'); ?>
		<?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sidik_jari'); ?>
		<?php echo $form->textField($model,'sidik_jari',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_jenis_kelamin'); ?>
		<?php echo $form->textField($model,'id_jenis_kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_golongan_darah'); ?>
		<?php echo $form->textField($model,'id_golongan_darah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_agama'); ?>
		<?php echo $form->textField($model,'id_agama'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_status_kawin'); ?>
		<?php echo $form->textField($model,'id_status_kawin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_status_tinggal'); ?>
		<?php echo $form->textField($model,'id_status_tinggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pendidikan'); ?>
		<?php echo $form->textField($model,'id_pendidikan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pekerjaan'); ?>
		<?php echo $form->textField($model,'id_pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_cacat'); ?>
		<?php echo $form->textField($model,'id_cacat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_status_kependudukan'); ?>
		<?php echo $form->textField($model,'id_status_kependudukan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_temporary'); ?>
		<?php echo $form->textField($model,'is_temporary'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'disimpan'); ?>
		<?php echo $form->textField($model,'disimpan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diperbarui'); ?>
		<?php echo $form->textField($model,'diperbarui'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->