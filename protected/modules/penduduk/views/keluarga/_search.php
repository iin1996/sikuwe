<?php
/* @var $this KeluargaController */
/* @var $model Keluarga */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_keluarga'); ?>
		<?php echo $form->textField($model,'id_keluarga'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_kk'); ?>
		<?php echo $form->textField($model,'no_kk',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kepala_keluarga'); ?>
		<?php echo $form->textField($model,'id_kepala_keluarga'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->