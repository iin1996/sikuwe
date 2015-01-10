<?php
/* @var $this AdminController */
/* @var $model Penduduk */
/* @var $form CActiveForm */
?>
<?php //Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/css/form.css');?>
<?php Yii::app()->controller->module->daftarkanCss('form.css');?>

<div class="form" style="padding-left: 10px;">
<div class="row" style="padding-left: 15px;">
<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    //'id'=>'form-penduduk',
    'type'=>'horizontal',
    //'htmlOptions'=>array('class'=>'well'),
)); ?>
 
<?php echo $form->errorSummary($model); ?> 
<?php echo $form->textFieldGroup($model, 'nik', array('class'=>'span3')); ?>
<?php echo $form->textFieldGroup($model, 'nama', array('class'=>'span3')); ?>
<?php echo $form->textFieldGroup($model, 'tempat_lahir', array('class'=>'span3')); ?>
<div class="form-group">
<label class="col-sm-3 control-label required" for="tanggal_lahir"><?php echo $model->getAttributeLabel('tanggal_lahir') ?> <span class="required">*</span></label>
<div class="col-sm-9">
<?php /* echo $form->datePickerGroup($model, 'tanggal_lahir', array('wrapperhtmlOptions'=>array('class'=>'col-sm-5'),'widgetOptions'=>array('options'=>array('format'=>'dd-mm-yyyy')),); */ 
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                'model'=>$model,
	                                'name'=>'Penduduk[tanggal_lahir]',
	                                'attribute'=>'tanggal_lahir',
	                                // additional javascript options for the date picker plugin
	                                'options'=>array(
	                                    'showAnim'=>'fold',
	                                    'dateFormat'=>'yy-mm-dd',
	                                    'changeMonth'=>true,
	                                    'changeYear'=>true,
	                                    'maxDate'=>'+0m +0w',
	                                    'yearRange'=>"1900:2112"
	                                ),
	                                'htmlOptions'=>array(
	                                	'class'=>'form-control',
	                                	'placeholder'=>'dd-mm-yyyy',
	                                    //'style'=>'height:20px;',
	                                    'size'=>10,
	                                ),
	                            ));

?>
</div>
</div>
<?php echo $form->textFieldGroup($model, 'kewarganegaraan', array('class'=>'span3')); ?>
<?php echo $form->radioButtonListGroup($model, 'id_jenis_kelamin', array('widgetOptions'=>array('template'=>'{beginLabel}{input}{labelTitle}{endLabel}','data'=>array('Laki-Laki'=>'Laki-Laki', 'Perempuan'=>'Perempuan'))));?>
<?php echo $form->dropDownListGroup($model, 'id_golongan_darah', array(
									'widgetOptions'=>array(
										'data'=>array('A'=>'A','B'=>'B','O'=>'O','AB'=>'AB','A+'=>'A+','A-'=>'A-','AB+'=>'AB+','AB-'=>'AB-','B+'=>'B+','B-'=>'B-','O+'=>'O+','O-'=>'O-','Tidak Tahu'=>'Tidak Tahu')),'class'=>'span3'
									)); ?>
<?php echo $form->dropDownListGroup($model, 'id_agama', array('widgetOptions'=>array('data'=>array('Islam'=>'Islam','Kristen'=>'Kristen','Katholik'=>'Katholik','Hindu'=>'Hindu','Budha'=>'Budha','Konghucu'=>'Konghucu','Aliran Kepercayaan'=>'Aliran Kepercayaan','Aliran lainnya'=>'Aliran lainnya')),'class'=>'span3')); ?>
<?php echo $form->dropDownListGroup($model, 'id_status_kawin', array('widgetOptions'=>array('data'=>array('Belum Kawin'=>'Belum Kawin','Kawin'=>'Kawin','Cerai Hidup'=>'Cerai Hidup','Cerai Mati'=>'Cerai Mati')),'class'=>'span3')); ?>
<?php echo $form->dropDownListGroup($model, 'id_status_tinggal', array('widgetOptions'=>array('data'=>array('Tinggal Tetap'=>'Tinggal Tetap','Tinggal di Luar Kota'=>'Tinggal di Luar Kota','Tinggal di Luar Provinsi'=>'Tinggal di Luar Provinsi','Tinggal di Luar Negeri'=>'Tinggal di Luar Negeri')),'class'=>'span3')); ?>
<?php echo $form->textFieldGroup($model, 'id_pekerjaan', array('hint'=>'Tuliskan pekerjaan di sini','class'=>'span3')); ?>
<?php echo $form->dropDownListGroup($model, 'id_cacat', array('widgetOptions'=>array('data'=>array('Tidak Cacat'=>'Tidak Cacat','Cacat Fisik'=>'Cacat Fisik','Cacat Netra/Buta'=>'Cacat Netra/Buta','Cacat Rungu/Wicara'=>'Cacat Rungu/Wicara','Cacat Mental/Jiwa'=>'Cacat Mental/Jiwa','Cacat Fisik dan Mental'=>'Cacat Fisik dan Mental','Cacat Lainnya'=>'Cacat Lainnya')),'class'=>'span3')); ?>
<?php echo $form->dropDownListGroup($model, 'id_status_kependudukan', array('widgetOptions'=>array('data'=>array('Penduduk Asli/Tetap'=>'Penduduk Asli/Tetap','Pendatang'=>'Pendatang','Pindah'=>'Pindah','Meninggal'=>'Meninggal')),'class'=>'span3')); ?>
<?php //echo $form->textFieldGroup($model, 'is_active', array('class'=>'span3')); ?>
<?php //echo $form->textFieldGroup($model, 'is_temporary', array('class'=>'span3')); ?>
<div class="form-actions">
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Buat baru' : 'Simpan',)); ?>
 </div>
<?php $this->endWidget();
	  //unset($form);
?>
</div>
</div><!-- form -->
