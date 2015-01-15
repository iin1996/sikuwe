<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Registration");
$this->breadcrumbs=array(
	UserModule::t("Registration"),
);
?>

<div class="ch-container">
    <div class="row center">

<div class="login-header">
<h1><?php echo UserModule::t("Pendaftaran Pengguna"); ?></h1>
</div>

<?php if(Yii::app()->user->hasFlash('registration')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('registration'); ?>
</div>
<?php else: ?>

<div class="row">
	<div class="col-md-5 center well">
		<div class="form">
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
			'id'=>'registration-form',
			'type'=>'horizontal',
			'inlineErrors'=>true,
			'enableAjaxValidation'=>true,
			//'disableAjaxValidationAttributes'=>array('RegistrationForm_verifyCode'),
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
			'htmlOptions' => array('enctype'=>'multipart/form-data'),
		)); ?>
			<fieldset>
			<p class="note"><legend><?php echo UserModule::t('Yang bertanda <span class="required">*</span> wajib diisi.'); ?></legend></p>
			
			<?php echo $form->errorSummary(array($model,$profile)); ?>
			

			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username', array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'username'); ?>
			

			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password', array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'password'); ?>
			<p class="hint">
			<?php echo UserModule::t("Minimal password length 4 symbols."); ?>
			</p>

			

			<?php echo $form->labelEx($model,'verifyPassword'); ?>
			<?php echo $form->passwordField($model,'verifyPassword', array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'verifyPassword'); ?>

			

			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->textField($model,'email', array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'email'); ?>

			
		<?php 
				$profileFields=Profile::getFields();
				if ($profileFields) {
					foreach($profileFields as $field) {
					?>

				<?php echo $form->labelEx($profile,$field->varname); ?>
				<?php 
				if ($widgetEdit = $field->widgetEdit($profile)) {
					echo $widgetEdit;
				} elseif ($field->range) {
					echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
				} elseif ($field->field_type=="TEXT") {
					echo$form->textArea($profile,$field->varname,array('class'=>'form-control','rows'=>6, 'cols'=>50));
				} else {
					echo $form->textField($profile,$field->varname,array('class'=>'form-control', 'size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
				}
				 ?>
				<?php echo $form->error($profile,$field->varname); ?>

					<?php
					}
				}
		?>
			<?php if (UserModule::doCaptcha('registration')): ?>

				<?php echo $form->labelEx($model,'verifyCode'); ?>
				
				<?php $this->widget('CCaptcha'); ?>
				<?php echo $form->textField($model,'verifyCode', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'verifyCode'); ?>
				
				<p class="hint"><?php echo UserModule::t("Please enter the letters as they are shown in the image above."); ?>
				<br/><?php echo UserModule::t("Letters are not case-sensitive."); ?></p>

			<?php endif; ?>
			
			</fieldset>

			
				<?php /* echo CHtml::submitButton(UserModule::t("Register"), array('htmlOptions' => , )); */
					$this->widget('bootstrap.widgets.TbButton', array(
						'label'=>UserModule::t("Mendaftar"),
						'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
						'size'=>'large', // null, 'large', 'small' or 'mini'
				));?>
			

		<?php $this->endWidget(); ?>
		</div><!-- form -->
		<?php endif; ?>
	</div>
	

</div>
</div></div>