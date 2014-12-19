<?php
/* @var $this PendudukController */
/* @var $model Penduduk */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'penduduk-add-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nik'); ?>
		<?php echo $form->textField($model,'nik'); ?>
		<?php echo $form->error($model,'nik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama'); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir'); ?>
		<?php echo $form->error($model,'tempat_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_lahir'); ?>
		<?php echo $form->textField($model,'tanggal_lahir'); ?>
		<?php echo $form->error($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kewarganegaraan'); ?>
		<?php echo $form->textField($model,'kewarganegaraan'); ?>
		<?php echo $form->error($model,'kewarganegaraan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->textField($model,'foto'); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sidik_jari'); ?>
		<?php echo $form->textField($model,'sidik_jari'); ?>
		<?php echo $form->error($model,'sidik_jari'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_jenis_kelamin'); ?>
		<?php echo $form->textField($model,'id_jenis_kelamin'); ?>
		<?php echo $form->error($model,'id_jenis_kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_golongan_darah'); ?>
		<?php echo $form->textField($model,'id_golongan_darah'); ?>
		<?php echo $form->error($model,'id_golongan_darah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_agama'); ?>
		<?php echo $form->textField($model,'id_agama'); ?>
		<?php echo $form->error($model,'id_agama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_status_kawin'); ?>
		<?php echo $form->textField($model,'id_status_kawin'); ?>
		<?php echo $form->error($model,'id_status_kawin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_status_tinggal'); ?>
		<?php echo $form->textField($model,'id_status_tinggal'); ?>
		<?php echo $form->error($model,'id_status_tinggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pendidikan'); ?>
		<?php echo $form->textField($model,'id_pendidikan'); ?>
		<?php echo $form->error($model,'id_pendidikan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pekerjaan'); ?>
		<?php echo $form->textField($model,'id_pekerjaan'); ?>
		<?php echo $form->error($model,'id_pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_status_kependudukan'); ?>
		<?php echo $form->textField($model,'id_status_kependudukan'); ?>
		<?php echo $form->error($model,'id_status_kependudukan'); ?>
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
		<?php echo $form->labelEx($model,'id_cacat'); ?>
		<?php echo $form->textField($model,'id_cacat'); ?>
		<?php echo $form->error($model,'id_cacat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disimpan'); ?>
		<?php echo $form->textField($model,'disimpan'); ?>
		<?php echo $form->error($model,'disimpan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diperbarui'); ?>
		<?php echo $form->textField($model,'diperbarui'); ?>
		<?php echo $form->error($model,'diperbarui'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->