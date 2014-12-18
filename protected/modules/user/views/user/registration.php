<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Registration");
$this->breadcrumbs=array(
	UserModule::t("Registration"),
);
?>

<h1><?php echo UserModule::t("Registration"); ?></h1>

<?php if(Yii::app()->user->hasFlash('registration')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('registration'); ?>
</div>
<?php else: ?>

<div class="row">
	<div class="span9">
		<div class="form">
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
			'id'=>'registration-form',
			'type'=>'vertical',
			'inlineErrors'=>true,
			'enableAjaxValidation'=>true,
			//'disableAjaxValidationAttributes'=>array('RegistrationForm_verifyCode'),
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
			'htmlOptions' => array('enctype'=>'multipart/form-data'),
		)); ?>
			<fieldset>
			<p class="note"><legend><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></legend></p>
			
			<?php echo $form->errorSummary(array($model,$profile)); ?>
			

			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username', array('class'=>'span3')); ?>
			<?php echo $form->error($model,'username'); ?>
			

			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password', array('class'=>'span3')); ?>
			<?php echo $form->error($model,'password'); ?>
			<p class="hint">
			<?php echo UserModule::t("Minimal password length 4 symbols."); ?>
			</p>

			

			<?php echo $form->labelEx($model,'verifyPassword'); ?>
			<?php echo $form->passwordField($model,'verifyPassword', array('class'=>'span3')); ?>
			<?php echo $form->error($model,'verifyPassword'); ?>

			

			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->textField($model,'email', array('class'=>'span3')); ?>
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
					echo$form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
				} else {
					echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
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
				<?php echo $form->textField($model,'verifyCode', array('class'=>'span2')); ?>
				<?php echo $form->error($model,'verifyCode'); ?>
				
				<p class="hint"><?php echo UserModule::t("Please enter the letters as they are shown in the image above."); ?>
				<br/><?php echo UserModule::t("Letters are not case-sensitive."); ?></p>

			<?php endif; ?>
			
			</fieldset>

			
				<?php /* echo CHtml::submitButton(UserModule::t("Register"), array('htmlOptions' => , )); */
					$this->widget('bootstrap.widgets.TbButton', array(
						'label'=>UserModule::t("Register"),
						'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
						'size'=>'large', // null, 'large', 'small' or 'mini'
				));?>
			

		<?php $this->endWidget(); ?>
		</div><!-- form -->
		<?php endif; ?>
	</div>
	
	<div class="span3">
		<?php $this->renderPartial('/user/right_side_user'); ?>
	</div>	

</div>
