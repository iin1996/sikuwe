<?php
/* @var $this KeluargaController */
/* @var $data Keluarga */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_keluarga')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_keluarga), array('view', 'id'=>$data->id_keluarga)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_kk')); ?>:</b>
	<?php echo CHtml::encode($data->no_kk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kepala_keluarga')); ?>:</b>
	<?php echo CHtml::encode($data->id_kepala_keluarga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_temporary')); ?>:</b>
	<?php echo CHtml::encode($data->is_temporary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disimpan')); ?>:</b>
	<?php echo CHtml::encode($data->disimpan); ?>
	<br />


</div>