<?php
/* @var $this AdminController */
/* @var $model Penduduk */
/* @var $form CActiveForm */
?>

<div class="wide form" style="padding-left: 15px;"> 

<?php //$form=$this->beginWidget('CActiveForm', array(
	$form=$this->beginWidget('booster.widgets.TbActiveForm', array(
	'type'=>'horizontal',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('style'=>'max-width:50%;'),
)); ?>

<?php echo $form->textFieldGroup($model, 'nama', array('class'=>'input-medium', 'prepend'=>'<i class="glyphicon glyphicon-search"></i>','style'=>'max-width:250px;')); ?>
<?php //$this->widget('booster.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Cari')); ?>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
