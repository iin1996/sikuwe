<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'surat-masuk-form',
    'type'=>'horizontal',	
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Yang bertanda <span class="required">*</span> wajib diisi.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'nomor',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>25)))); ?>

<div class="form-group">
<label class="col-sm-3 control-label required" for="tanggal_lahir"><?php echo $model->getAttributeLabel('tanggal_masuk') ?> <span class="required">*</span></label>
<div class="col-sm-9">
<?php /* echo $form->datePickerGroup($model, 'tanggal_lahir', array('wrapperhtmlOptions'=>array('class'=>'col-sm-5'),'widgetOptions'=>array('options'=>array('format'=>'dd-mm-yyyy')),); */ 
	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                'model'=>$model,
	                                'name'=>'suratMasuk[tanggal_masuk]',
	                                'attribute'=>'tanggal_masuk',
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

	<?php //echo $form->datePickerGroup($model,'tanggal_masuk',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

	<?php echo $form->textFieldGroup($model,'pengirim',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>

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
