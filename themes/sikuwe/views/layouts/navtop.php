    <!-- awal topbar -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <a class="navbar-brand" href="index.html"> <img alt="Logo SIKUWE" src="img/logo20.png" class="hidden-xs"/>
                <span>SIKUWE</span></a>

            <!-- awal user dropdown -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo Yii::app()->user->name; ?></span>
                    <span class="caret"></span>
                </button>

                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        //'type'=>'pills',
                        'htmlOptions'=>array('class'=>'dropdown-menu'),
                        'items'=>array(
                            // Important: you need to specify url as 'controller/action',
                            // not just as 'controller' even if default acion is used.
                            // array('label'=>'Menu utama', 'itemOptions'=>array('class'=>'nav-header')),
                            //array('label'=>'Beranda', 'url'=>'./'),
                            // 'Products' menu item will be selected no matter which tag parameter value is since it's not specified.
                            array('label'=>'Profil', 'url'=>array('user/profile/profile')),
                            //array('label'=>'Penduduk', 'url'=>array('penduduk')),
                            array('itemOptions'=>array('class'=>'divider'),),
                            array('label'=>'Logout', 'url'=>array('user/logout'), 'visible'=>!Yii::app()->user->isGuest),
                            array('label'=>'Login', 'url'=>array('user/login'), 'visible'=>Yii::app()->user->isGuest),
                        ),
                    ));
                    ?>

            </div>
            <!-- akhir user dropdown -->


            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Kunjungi situs pembuat</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Pencarian" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- akhir topbar -->