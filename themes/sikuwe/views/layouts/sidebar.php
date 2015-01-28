<!-- awal menu kiri-->
<div class="col-sm-2 col-lg-2">
    <div class="sidebar-nav">
        <div class="nav-canvas">
            <div class="nav-sm nav nav-stacked">

            </div>
            <?php
            $this->widget('zii.widgets.CMenu', array(
                //'type'=>'pills',
                'htmlOptions'=>array('class'=>'nav nav-pills nav-stacked main-menu'),
                'encodeLabel'=>false, 
                'items'=>array(
                    // Important: you need to specify url as 'controller/action',
                    // not just as 'controller' even if default acion is used.
                    array('label'=>'Menu', 'itemOptions'=>array('class'=>'nav-header')),
                    array('label'=>'<i class="glyphicon glyphicon-home"></i>  Beranda', 'url'=>Yii::app()->baseUrl),
                    // 'Products' menu item will be selected no matter which tag parameter value is since it's not specified.
                    array('label'=>'<i class="glyphicon glyphicon-pencil"></i> Entri Data', 'url'=>Yii::app()->getModule('penduduk')->pendudukAdminCreateUrl),
                    array('label'=>'<i class="glyphicon glyphicon-th-list"></i> Penduduk', 'url'=>Yii::app()->getModule('penduduk')->pendudukAdminIndexUrl),
                    //array('label'=>'Administratif', 'itemOptions'=>array('class'=>'nav-header hidden-md')),
                    array('label'=>'<i class="glyphicon glyphicon-cog"></i> Kelola Data', 'url'=>Yii::app()->getModule('penduduk')->pendudukAdminAdminUrl),
                    array('label'=>'User Menu', 'itemOptions'=>array('class'=>'nav-header hidden-md')),
                    array('label'=>'<i class="glyphicon glyphicon-lock"></i> Login', 'url'=>Yii::app()->getModule('user')->loginUrl, 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'<i class="glyphicon glyphicon-user"></i> Profil', 'url'=>Yii::app()->getModule('user')->profileUrl, 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'<i class="glyphicon glyphicon-log-out"></i> Logout', 'url'=>Yii::app()->getModule('user')->logoutUrl, 'visible'=>!Yii::app()->user->isGuest),
                    //$this->menu,
                ),
            ));
            ?>
        </div>
    </div>
</div>
<!--/span-->
<!-- akhir menu kiri -->
