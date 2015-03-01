<?php
$this->beginContent('//layouts/login');
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
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

				<?php $form = $this->beginWidget('CActiveForm', array(
				        'id'=>'verticalForm',
				        //'type' => 'inline',
				        'htmlOptions'=>array('class'=> 'form-horizontal'),
				)); ?>


                <fieldset>
                	<div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                    	<?php echo $form->textField($model,'username', array('class'=>'form-control','placeholder'=>'Nama Pengguna') ); ?>
				    <br>
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                    	<?php echo $form->passwordField($model,'password', array('class'=>'form-control','placeholder'=>'Sandi') ); ?>
                    </div>
                    <div class="clearfix"></div>				    

                    <div class="input-prepend">
                        <label class="remember" for="remember">
                    	<?php echo $form->checkbox($model,'rememberMe', array('id' => 'checks'));?> Ingat saya</label>  
                    </div>
                    <!-- <div class="clearfix"></div> -->
				    
				    
					<div>
							<?php echo CHtml::submitButton('Masuk', array('class'=>'btn btn-primary','rel'=>'tooltip','title'=>'Klik untuk masuk ke sistem')); ?>
					</div>   

				    <?php if(Yii::app()->user->hasFlash('loginMessage')): ?>
				        <div class="alert alert-success">
				            <i class="fa fa-check"></i> <?php echo Yii::app()->user->getFlash('loginMessage'); ?>
				        </div>


				    <?php endif; ?>  
                </fieldset>

				<?php $this->endWidget(); unset($form);?>    

<div style="padding-top:13px;"><?php echo CHtml::link(UserModule::t("Lupa kata sandi?"),Yii::app()->getModule('user')->recoveryUrl, array('rel'=>'tooltip','title'=>'Klik di sini jika Anda lupa kata sandi Anda!')); ?> | <?php echo CHtml::link(UserModule::t("Mendaftar"),Yii::app()->getModule('user')->registrationUrl, array('rel'=>'tooltip','title'=>'Klik di sini untuk mendaftar')); ?></div>

        </div>
        <!--/span-->

    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->            

<?php $this->endContent(); ?>
