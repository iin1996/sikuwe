<?php
/* @var $this AdminController */
/* @var $data Penduduk */
?>

<div class="view">
	
<table class="table">
<tr>
<td><?php echo CHtml::encode($data->getAttributeLabel('nik')); ?></td>
<td><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?></td>
<td><?php echo CHtml::encode($data->getAttributeLabel('tempat_lahir')); ?></td>
<td><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?></td>
<td><?php echo CHtml::encode($data->getAttributeLabel('kewarganegaraan')); ?></td>
<td><?php echo CHtml::encode($data->getAttributeLabel('id_golongan_darah')); ?></td>
</tr>
<tr>
<td><?php echo CHtml::link(CHtml::encode($data->nik), array('view', 'id'=>$data->id_penduduk)); ?></td>
<td><?php echo CHtml::encode($data->nama); ?></td>
<td><?php echo CHtml::encode($data->tempat_lahir); ?></td>
<td><?php echo CHtml::encode($data->tanggal_lahir); ?></td>
<td><?php echo CHtml::encode($data->kewarganegaraan); ?></td>
<td><?php echo CHtml::encode($data->id_golongan_darah); ?></td>
</tr>
</table>

</div>
