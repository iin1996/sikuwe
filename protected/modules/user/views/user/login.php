<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Login"),
);
?>

<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Selamat datang di SIKUWE</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Silakan masuk dengan nama pengguna dan sandi Anda.
            </div>
			<?php echo CHtml::beginForm($htmlOptions = array('class' => 'form-horizontal', );); ?> 
			<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>           
			<?php echo CHtml::errorSummary($model); ?>
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <!-- <input type="text" class="form-control" placeholder="Nama Pengguna"> -->
						<?php echo CHtml::activeLabelEx($model,'username', array('class' => 'form-control','placeholder' => 'Nama Pengguna' );); ?>
						<?php echo CHtml::activeTextField($model,'username') ?>                        
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <!-- <input type="password" class="form-control" placeholder="Sandi"> -->
						<?php echo CHtml::activeLabelEx($model,'password', array('class' => 'form-control', 'placeholder' => 'Sandi');); ?>
						<?php echo CHtml::activePasswordField($model,'password') ?>
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend">
                        <!-- <label class="remember" for="remember"><input type="checkbox" id="remember"> Ingat saya</label> -->
						<?php echo CHtml::activeCheckBox($model,'rememberMe', array('class' => 'remember', );); ?>
						<?php echo CHtml::activeLabelEx($model,'rememberMe'); ?>
			
                    </div>
                    <div class="clearfix"></div>

				<p class="hint">
				<?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
				</p>

                    <p class="center col-md-5">
                        <!-- <button type="submit" class="btn btn-primary">Masuk</button> -->
						<?php  echo CHtml::submitButton(UserModule::t("Login"), array('class'=>'btn btn-primary btn-large')); ?>
                    </p>
                </fieldset>
			<?php echo CHtml::endForm(); ?>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->


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
