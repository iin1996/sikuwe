<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Restore");
$this->breadcrumbs=array(
	UserModule::t("Login") => array('/user/login'),
	UserModule::t("Restore"),
);
?>
<div class="ch-container">
    <div class="row center">

<h1><?php echo UserModule::t("Kembalikan kata Sandi"); ?></h1>

<?php if(Yii::app()->user->hasFlash('recoveryMessage')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('recoveryMessage'); ?>
</div>
<?php else: ?>

<div class="form col-md-5 center well">
<?php echo CHtml::beginForm(); ?>

	<?php echo CHtml::errorSummary($form); ?>
	
	
		<?php echo CHtml::activeLabel($form,'login_atau_email'); ?>
		<?php echo CHtml::activeTextField($form,'login_or_email', array('class'=>'form-control','placeholder'=>'masukkan username atau email','style'=>'')) ?><br>
		<p class="hint"><?php echo UserModule::t("Please enter your login or email addres."); ?></p>
	
	
	
		<?php /* echo CHtml::submitButton(UserModule::t("Restore")); */
		$this->widget('bootstrap.widgets.TbButton', array(
					    'label'=>UserModule::t("Restore"),
					    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
					    'size'=>'small', // null, 'large', 'small' or 'mini'
		));?>
		<div class="center" style="padding-top:13px"><?php echo CHtml::link(UserModule::t("Ke layar Login"),Yii::app()->getModule('user')->loginUrl); ?></div>
	

<?php echo CHtml::endForm(); ?>
</div><!-- form -->
<?php endif; ?>
</div></div>