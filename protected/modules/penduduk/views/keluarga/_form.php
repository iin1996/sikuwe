<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'keluarga-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'no_kk'); ?>
		<?php echo $form->textField($model,'no_kk',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'no_kk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kepala_keluarga'); ?>
		<?php echo $form->textField($model,'id_kepala_keluarga'); ?>
		<?php echo $form->error($model,'id_kepala_keluarga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_temporary'); ?>
		<?php echo $form->textField($model,'is_temporary'); ?>
		<?php echo $form->error($model,'is_temporary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disimpan'); ?>
		<?php echo $form->textField($model,'disimpan'); ?>
		<?php echo $form->error($model,'disimpan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->