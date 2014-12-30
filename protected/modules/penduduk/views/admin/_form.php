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
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'type'=>'horizontal',
    'htmlOptions'=>array('class'=>'well'),
)); ?>
 
 
<?php echo $form->textFieldRow($model, 'nik', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'nama', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'tempat_lahir', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'kewarganegaraan', array('class'=>'span3')); ?>
<?php echo $form->radioButtonListRow($model, 'id_jenis_kelamin', array('Laki-Laki', 'Perempuan'), array('class'=>'span3')?>
<?php echo $form->textFieldRow($model, 'id_golongan_darah', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'id_agama', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'id_status_kawin', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'id_status_tinggal', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'id_pekerjaan', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'id_cacat', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'id_status_kependudukan', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'is_active', array('class'=>'span3')); ?>
<?php echo $form->textFieldRow($model, 'is_temporary', array('class'=>'span3')); ?>
<div class="form-actions">
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Buat baru' : 'Simpan',)); ?>
 </div>
<?php $this->endWidget(); ?>
</div>
</div><!-- form -->
