<?php
/* @var $this AdminController */
/* @var $model Penduduk */
/* @var $form CActiveForm */
?>
<?php //Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/css/form.css');?>
<?php //Yii::app()->controller->module->daftarkanCss('form.css');?>

<div class="form" style="padding-left: 10px;">
<div class="row" style="padding-left: 15px;">
<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id'=>'form-penduduk',
    'type'=>'horizontal',
    //'htmlOptions'=>array('class'=>'well'),
)); ?>
 
<?php echo $form->errorSummary($model); ?> 
<?php echo $form->textFieldGroup($model, 'nik', array('class'=>'span3')); ?>
<?php echo $form->textFieldGroup($model, 'nama', array('class'=>'span3')); ?>
<?php echo $form->textFieldGroup($model, 'tempat_lahir', array('class'=>'span3')); ?>
<?php /* echo $form->datePickerGroup($model, 'tanggal_lahir', array(
													'options'=>array(
															'format'=>'dd-mm-yyyy',
															'showButtonPanel'=>true,
															'showAnim'=>'fold',
															//'language'=>'en',
															),
													'wrapperHtmlOptions'=>array(
														'class'=>'col-sm-5',
														),
													'hint'=>'Klik di dalam',
													'prepend'=>'<span class="fa fa-calendar"></span>'
													),
				); */ ?>
<?php echo $form->textFieldGroup($model, 'kewarganegaraan', array('class'=>'span3')); ?>
<?php echo $form->radioButtonListGroup($model, 'id_jenis_kelamin', array('Laki-Laki', 'Perempuan'));?>
<?php echo $form->textFieldGroup($model, 'id_golongan_darah', array('class'=>'span3')); ?>
<?php echo $form->textFieldGroup($model, 'id_agama', array('class'=>'span3')); ?>
<?php echo $form->textFieldGroup($model, 'id_status_kawin', array('class'=>'span3')); ?>
<?php echo $form->textFieldGroup($model, 'id_status_tinggal', array('class'=>'span3')); ?>
<?php echo $form->textFieldGroup($model, 'id_pekerjaan', array('class'=>'span3')); ?>
<?php echo $form->textFieldGroup($model, 'id_cacat', array('class'=>'span3')); ?>
<?php echo $form->textFieldGroup($model, 'id_status_kependudukan', array('class'=>'span3')); ?>
<?php echo $form->textFieldGroup($model, 'is_active', array('class'=>'span3')); ?>
<?php echo $form->textFieldGroup($model, 'is_temporary', array('class'=>'span3')); ?>
<div class="form-actions">
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Buat baru' : 'Simpan',)); ?>
 </div>
<?php $this->endWidget();
	  //unset($form);
?>
</div>
</div><!-- form -->
