<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Login"),
);
?>

<h1><?php echo UserModule::t("Login"); ?></h1>

<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>

<p><?php echo UserModule::t("Please fill out the following form with your login credentials:"); ?></p>

<div class="row">
	<div class="span9">
		<div class="form">
		<?php echo CHtml::beginForm(); ?>

			<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
			
			<?php echo CHtml::errorSummary($model); ?>
			
			
				<?php echo CHtml::activeLabelEx($model,'username'); ?>
				<?php echo CHtml::activeTextField($model,'username') ?>
			
			
			
				<?php echo CHtml::activeLabelEx($model,'password'); ?>
				<?php echo CHtml::activePasswordField($model,'password') ?>
			
			
			
				<p class="hint">
				<?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
				</p>
			
			
			
				<?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
				<?php echo CHtml::activeLabelEx($model,'rememberMe'); ?>
			

			
				<?php  echo CHtml::submitButton(UserModule::t("Login"), array('class'=>'btn btn-primary btn-large'));
				/*
				$this->widget('bootstrap.widgets.TbButton', array(
								'label'=>UserModule::t("Login"),
								'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
								'size'=>'large', // null, 'large', 'small' or 'mini'
				));*/?>
			
			
		<?php echo CHtml::endForm(); ?>
		</div><!-- form -->
	</div>
	
	<div class="span3">
		<?php $this->renderPartial('/user/right_side_user'); ?>
	</div>
</div>

<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>
