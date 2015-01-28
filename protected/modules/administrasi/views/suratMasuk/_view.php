<?php
/* @var $this SuratMasukController */
/* @var $data suratMasuk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_surat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_surat), array('view', 'id'=>$data->id_surat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor')); ?>:</b>
	<?php echo CHtml::encode($data->nomor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_masuk')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_masuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pengirim')); ?>:</b>
	<?php echo CHtml::encode($data->pengirim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isi_surat')); ?>:</b>
	<?php echo CHtml::encode($data->isi_surat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />


</div>