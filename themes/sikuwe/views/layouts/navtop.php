<!-- awal topbar -->
<div class="navbar navbar-default" role="navigation">

    <div class="navbar-inner">
        <a class="navbar-brand" href="<?php echo Yii::app()->baseUrl ?>"> <img alt="Logo SIKUWE" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/img/aja-protes-eh.png" class="hidden-xs"/>
            <span>SIKUWE</span></a>

        <!-- awal user dropdown -->
        <div class="btn-group pull-right" style="margin-right:3%;">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo Yii::app()->user->name; ?></span>
                <span class="caret"></span>
            </button>

                <?php
                $this->widget('booster.widgets.TbMenu', array(
                    'type'=>'navbar',
                    'htmlOptions'=>array('class'=>'dropdown-menu'),
                    'items'=>array(
                        // Important: you need to specify url as 'controller/action',
                        // not just as 'controller' even if default acion is used.
                        // array('label'=>'Menu utama', 'itemOptions'=>array('class'=>'nav-header')),
                        //array('label'=>'Beranda', 'url'=>'./'),
                        // 'Products' menu item will be selected no matter which tag parameter value is since it's not specified.
                        array('label'=>'Profil', 'url'=>Yii::app()->getModule('user')->profileUrl),
                        //array('label'=>'Penduduk', 'url'=>array('penduduk')),
                        array('itemOptions'=>array('class'=>'divider'),),
                        array('label'=>'Logout', 'url'=>Yii::app()->getModule('user')->logoutUrl, 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Login', 'url'=>Yii::app()->getModule('user')->loginUrl, 'visible'=>Yii::app()->user->isGuest),
                    ),
                ));
                ?>

        </div>
        <!-- akhir user dropdown -->


        <ul class="collapse navbar-collapse nav navbar-nav top-menu">
            <li><a href="http://puskomedia.com"><i class="glyphicon glyphicon-globe"></i> Kunjungi situs pembuat</a></li>
            <li>
                <form class="navbar-search pull-left">
                    <input placeholder="Pencarian" class="search-query form-control col-md-10" name="query"
                           type="text" style="min-width: 155px">
                </form>
            </li>
        </ul>

    </div>
</div>
<!-- akhir topbar -->
