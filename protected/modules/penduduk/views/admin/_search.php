<?php
/* @var $this AdminController */
/* @var $model Penduduk */
/* @var $form CActiveForm */
?>

<div class="wide form" style="padding-left: 50px;">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class'=>'form-search'),
)); ?>

<table>
	<tr>
	<td>
		<?php echo $form->label($model,'nama'); ?>
	</td>
	<td>
		<?php echo $form->label($model,'tempat_lahir'); ?>
	</td>
	</tr>
	<tr>
	<td>
		<?php echo $form->textField($model,'nama',array('class'=>'span3')); ?>
	</td>
	<td>
		<?php echo $form->textField($model,'tempat_lahir',array('class'=>'span3')); ?>

	</td>
	</tr>
	<tr><td></td>
	<td class="row buttons">
		<?php echo CHtml::submitButton('Cari', array('class'=>'btn btn-primary')); ?>
	</td>
	</tr>
</table>
<?php $this->endWidget(); ?>

</div><!-- search-form -->
