<?php
/* @var $this SuratMasukController */
/* @var $model suratMasuk */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surat-masuk-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nomor'); ?>
		<?php echo $form->textField($model,'nomor',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nomor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_masuk'); ?>
		<?php echo $form->textField($model,'tanggal_masuk'); ?>
		<?php echo $form->error($model,'tanggal_masuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pengirim'); ?>
		<?php echo $form->textField($model,'pengirim',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pengirim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isi_surat'); ?>
		<?php echo $form->textArea($model,'isi_surat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'isi_surat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->