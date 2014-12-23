<?php
/* @var $this AdminController */
/* @var $model Penduduk */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'penduduk-form',
	'focus'=>array($model,'nik'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<table class="table" style="border: 0px;">
		<tr>
			<td><?php echo $form->labelEx($model,'NIK'); ?></td>
			<td><?php echo $form->textField($model,'nik',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'nik'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'Nama Lengkap'); ?></td>
			<td><?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>75)); ?>
<?php echo $form->error($model,'nama'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'Tempat Lahir'); ?></td>
			<td><?php echo $form->textField($model,'tempat_lahir',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'tempat_lahir'); ?>
</td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'Tanggal Lahir'); ?></td>
			<td><?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
					'name'=>'tanggal_lahir',
					//'scriptFile'=>'jquery-ui.min.js',
					//'scriptUrl'=>Yii::app()->theme->baseUrl.'/assets/jui/js/',
					'language'=>'id',
					// additional javascript options for the date picker plugin
					'options'=>array(
						'showAnim'=>'fold',
						'changeMonth'=>true,
						'changeYear'=>true,
					),
					'htmlOptions'=>array(
						'style'=>'height:20px;'
					),
				)); ?>
				<?php echo $form->error($model,'tanggal_lahir'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'kewarganegaraan'); ?></td>
			<td><?php echo $form->textField($model,'kewarganegaraan',array('size'=>18,'maxlength'=>18)); ?>
<?php echo $form->error($model,'kewarganegaraan'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'foto'); ?></td>
			<td><?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>150)); ?>
<?php echo $form->error($model,'foto'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'sidik_jari'); ?></td>
			<td><?php echo $form->textField($model,'sidik_jari',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'sidik_jari'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'id_jenis_kelamin'); ?></td>
			<td><?php echo $form->textField($model,'id_jenis_kelamin'); ?>
<?php echo $form->error($model,'id_jenis_kelamin'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'id_golongan_darah'); ?></td>
			<td><?php echo $form->textField($model,'id_golongan_darah'); ?>
<?php echo $form->error($model,'id_golongan_darah'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'id_agama'); ?></td>
			<td><?php echo $form->textField($model,'id_agama'); ?>
<?php echo $form->error($model,'id_agama'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'id_status_kawin'); ?></td>
			<td><?php echo $form->textField($model,'id_status_kawin'); ?>
<?php echo $form->error($model,'id_status_kawin'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'id_status_tinggal'); ?></td>
			<td><?php echo $form->textField($model,'id_status_tinggal'); ?>
<?php echo $form->error($model,'id_status_tinggal'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'id_pendidikan'); ?></td>
			<td><?php echo $form->textField($model,'id_pendidikan'); ?>
<?php echo $form->error($model,'id_pendidikan'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'id_pekerjaan'); ?></td>
			<td><?php echo $form->textField($model,'id_pekerjaan'); ?>
<?php echo $form->error($model,'id_pekerjaan'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'id_cacat'); ?></td>
			<td><?php echo $form->textField($model,'id_cacat'); ?>
<?php echo $form->error($model,'id_cacat'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'id_status_kependudukan'); ?></td>
			<td><?php echo $form->textField($model,'id_status_kependudukan'); ?>
<?php echo $form->error($model,'id_status_kependudukan'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'is_active'); ?></td>
			<td><?php echo $form->textField($model,'is_active'); ?>
<?php echo $form->error($model,'is_active'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'is_temporary'); ?></td>
			<td><?php echo $form->textField($model,'is_temporary'); ?>
<?php echo $form->error($model,'is_temporary'); ?></td>
		</tr>
		<!--
		<tr>
			<td><?php echo $form->labelEx($model,'disimpan'); ?></td>
			<td><?php echo $form->textField($model,'disimpan'); ?>
<?php echo $form->error($model,'disimpan'); ?></td>
		</tr>
		<tr>
			<td><?php echo $form->labelEx($model,'diperbarui'); ?></td>
			<td><?php echo $form->textField($model,'diperbarui'); ?>
<?php echo $form->error($model,'diperbarui'); ?></td>
		</tr>
		-->

	<tr><td></td><td>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Buat baru' : 'Simpan', array('class'=>'btn btn-primary pull-right')); ?>
	</td> </tr>
	</table>

<?php $this->endWidget(); ?>

</div><!-- form -->
