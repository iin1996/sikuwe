<?php
/* @var $this AdminController */
/* @var $data Penduduk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_penduduk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_penduduk), array('view', 'id'=>$data->id_penduduk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nik')); ?>:</b>
	<?php echo CHtml::encode($data->nik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tempat_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kewarganegaraan')); ?>:</b>
	<?php echo CHtml::encode($data->kewarganegaraan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sidik_jari')); ?>:</b>
	<?php echo CHtml::encode($data->sidik_jari); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->id_jenis_kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_golongan_darah')); ?>:</b>
	<?php echo CHtml::encode($data->id_golongan_darah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_agama')); ?>:</b>
	<?php echo CHtml::encode($data->id_agama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status_kawin')); ?>:</b>
	<?php echo CHtml::encode($data->id_status_kawin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status_tinggal')); ?>:</b>
	<?php echo CHtml::encode($data->id_status_tinggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pendidikan')); ?>:</b>
	<?php echo CHtml::encode($data->id_pendidikan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->id_pekerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cacat')); ?>:</b>
	<?php echo CHtml::encode($data->id_cacat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status_kependudukan')); ?>:</b>
	<?php echo CHtml::encode($data->id_status_kependudukan); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('diperbarui')); ?>:</b>
	<?php echo CHtml::encode($data->diperbarui); ?>
	<br />

	*/ ?>

</div>