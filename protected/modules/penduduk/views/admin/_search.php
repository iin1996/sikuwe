<?php
/* @var $this AdminController */
/* @var $model Penduduk */
/* @var $form CActiveForm */
?>

<div class="wide form" style="padding-left: 50px;">

<?php //$form=$this->beginWidget('CActiveForm', array(
	$form=$this->beginWidget('booster.widgets.TbActiveForm', array(
		//'type'=>'search',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('style'=>'max-width:30%;'),
)); ?>

<?php echo $form->textFieldGroup($model, 'nama', array('class'=>'input-medium', 'prepend'=>'<i class="icon-search"></i>','style'=>'max-width:150px;')); ?>
<?php $this->widget('booster.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Cari')); ?>
<!--
<table>
	<tr>
	<td>
		<?php //echo $form->label($model,'nama'); ?>
	</td>
	<td>
		<?php //echo $form->label($model,'tempat_lahir'); ?>
	</td>
	</tr>
	<tr>
	<td>
		<?php //echo $form->textField($model,'nama',array('class'=>'span3')); ?>
	</td>
	<td>
		<?php //echo $form->textField($model,'tempat_lahir',array('class'=>'span3')); ?>

	</td>
	</tr>
	<tr><td></td>
	<td class="row buttons">
		<?php //echo CHtml::submitButton('Cari', array('class'=>'btn btn-primary')); ?>
	</td>
	</tr>
</table> -->
<?php $this->endWidget(); ?>

</div><!-- search-form -->
