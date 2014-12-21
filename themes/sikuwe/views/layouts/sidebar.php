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
                        'items'=>array(
                            // Important: you need to specify url as 'controller/action',
                            // not just as 'controller' even if default acion is used.
                            array('label'=>'Menu utama', 'itemOptions'=>array('class'=>'nav-header')),
                            array('label'=>'Beranda', 'url'=>'./'),
                            // 'Products' menu item will be selected no matter which tag parameter value is since it's not specified.
                            array('label'=>'Entri Data', 'url'=>array('penduduk/admin/create')),
                            array('label'=>'Penduduk', 'url'=>array('penduduk/admin/index')),
                            array('label'=>'Panduan', 'itemOptions'=>array('class'=>'nav-header hidden-md')),
                            array('label'=>'Berkeliling', 'url'=>array('penduduk/admin/admin')),
                            array('label'=>'Login', 'url'=>array('user/login'), 'visible'=>Yii::app()->user->isGuest),
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- akhir menu kiri -->