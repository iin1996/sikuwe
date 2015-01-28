<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'surat-keluar-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'nomor',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>25)))); ?>

<div class="form-group">
<label class="col-sm-3 control-label required" for="tanggal"><?php echo $model->getAttributeLabel('tanggal') ?> <span class="required">*</span></label>
<div class="col-sm-9">
<?php /* echo $form->datePickerGroup($model, 'tanggal_lahir', array('wrapperhtmlOptions'=>array('class'=>'col-sm-5'),'widgetOptions'=>array('options'=>array('format'=>'dd-mm-yyyy')),); */ 
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                'model'=>$model,
	                                'name'=>'suratKeluar[tanggal]',
	                                'attribute'=>'tanggal',
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


	<?php //echo $form->datePickerGroup($model,'tanggal',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

	<?php echo $form->textFieldGroup($model,'tujuan',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>

	<?php echo $form->textAreaGroup($model,'isi_surat', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php echo $form->textAreaGroup($model,'keterangan', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

<div class="form-actions pull-right" style="margin-bottom:15px">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
