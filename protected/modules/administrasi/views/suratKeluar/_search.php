<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
  'action'=>Yii::app()->createUrl($this->route),
  'type'=>'horizontal',
  'method'=>'get',
)); ?>

<?php //echo $form->textFieldGroup($model,'id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

    <?php echo $form->textFieldGroup($model,'nomor',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>25)))); ?>

<div class="form-group">
<label class="col-sm-3 control-label required" for="tanggal"><?php echo $model->getAttributeLabel('tanggal'); ?></label>
<div class="col-sm-9">
<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
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
                                      'size'=>10,
                                  ),
                              ));

?>
</div>
</div>



<?php //echo $form->datePickerGroup($model,'tanggal',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'hint'=>'Click on Month/Year to select a different Month/Year.')); ?>

    <?php echo $form->textFieldGroup($model,'tujuan',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>50)))); ?>

<?php //echo $form->textAreaGroup($model,'isi_surat', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

<?php //echo $form->textAreaGroup($model,'keterangan', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

  <div class="form-actions">
    <?php $this->widget('booster.widgets.TbButton', array(
      'buttonType' => 'submit',
      'context'=>'primary',
      'label'=>'Search',
  //'htmlOptions'=>('class'=>'pull-right'),
    )); ?>
  </div>

<?php $this->endWidget(); ?>
