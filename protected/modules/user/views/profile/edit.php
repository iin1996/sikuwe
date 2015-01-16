<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Profile");
$this->breadcrumbs=array(
	UserModule::t("Profile")=>array('profile'),
	UserModule::t("Edit"),
);
$this->menu=array(
	array('label'=>'Menu Pengguna'),
	((UserModule::isAdmin())
		?array('label'=>UserModule::t('Manage Users'), 'url'=>array('/user/admin'),'icon'=>'cog')
		:array()),
    array('label'=>UserModule::t('List User'), 'url'=>array('/user'),'icon'=>'th-list'),
    array('label'=>UserModule::t('Profile'), 'url'=>array('/user/profile'),'icon'=>'user'),
    array('label'=>UserModule::t('Change password'), 'url'=>array('changepassword'),'icon'=>'lock'),
    //array('label'=>UserModule::t('Logout'), 'url'=>array('/user/logout'),'icon'=>'log-out'),
);
?>
<div style="padding-left:13px;">
<h1><?php echo UserModule::t('Edit profile'); ?></h1>

<?php if(Yii::app()->user->hasFlash('profileMessage')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('profileMessage'); ?>
</div>
<?php endif; ?>
<div class="form">
<?php //$form=$this->beginWidget('CActiveForm', array(
	$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
	'type'=>'vertical',
	'id'=>'profile-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>

	<?php echo $form->errorSummary(array($model,$profile)); ?>

<?php 
		$profileFields=Profile::getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			?>
	<div class="form-group">
		<?php echo $form->labelEx($profile,$field->varname);
		
		if ($widgetEdit = $field->widgetEdit($profile)) {
			echo $widgetEdit;
		} elseif ($field->range) {
			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
		} elseif ($field->field_type=="TEXT") {
			echo $form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50,'class'=>'form-control','style'=>'max-width:250px;'));
		} else {
			echo $form->textField($profile,$field->varname,array('style'=>'max-width:250px;','class'=>'form-control','size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
		}
		echo $form->error($profile,$field->varname); ?>
	</div>	
			<?php
			}
		}
?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'style'=>'max-width:250px;','class'=>'form-control')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'style'=>'max-width:250px;','class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Buat baru' : 'Simpan',)); ?>
	 </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>