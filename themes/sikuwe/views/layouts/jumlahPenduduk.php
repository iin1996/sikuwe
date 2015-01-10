<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a class="well top-block" href="<?php echo Yii::app()->baseUrl ?>/index.php/penduduk/admin/index">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total penduduk</div>
            <div><?php echo Yii::app()->getModule('penduduk')->jumlahPenduduk();?></div>
            <!-- <span class="notification"></span> -->
        </a>
    </div>
</div>