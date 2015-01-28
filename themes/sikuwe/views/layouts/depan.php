<!DOCTYPE html>
<html lang="id">
<head>
    <!--
        Perangkat Lunak ini memakai lisensi Apache v2.0
        http://www.apache.org/licenses/LICENSE-2.0
    -->
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SIKUWE, Sistem Informasi Kependudukan Berbasis Website.">
    <meta name="author" content="Rina Purnama">

    <!-- gaya tampilan-->
    <link id="bs-css" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <!-- <link id="bs-css" href="<?php //echo Yii::app()->theme->baseUrl ?>/assets/css/bootstrap.css" rel="stylesheet"> -->

    <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/sikuwe-app.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/jquery.min.js"></script>

    <!-- The HTML5 shim, untuk dukungan IE6-8 pada elemen-elemen HTML5 -->
    <!--[jika memakai IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/img/aja-protes-eh.png">

</head>

<body>
<!-- tempat navtop -->
<?php $this->renderPartial('//layouts/navtop') ?>

<div class="ch-container">
    <div class="row">
        
<!-- tempat menu kiri -->
<?php $this->renderPartial('//layouts/sidebar') ?>

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>Anda harus mengaktifkan <a href="http://id.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> untuk menggunakan situs ini.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- awal konten -->
            <div>
    <div class="breadcrumb">

            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,

            )); ?>

    </div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> <?php echo $this->pageTitle;?></h2>

                <!-- <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div> -->
            </div>
            <div class="box-content row">
                <div class="col-md-12">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=" row">
    <?php
    $this->renderPartial('//layouts/jumlahPenduduk');
    ?>

    <?php
    $this->renderPartial('//layouts/jumlahLakiLaki');
    ?>

    <?php
    $this->renderPartial('//layouts/jumlahPerempuan');
    ?>

</div>

<div class="row">

<?php 

//$this->renderPartial('//layouts/member'); 

//$this->renderPartial('//layouts/opensource'); 

//$this->renderPartial('//layouts/statistik'); 

?>

</div><!--/row-->
    <!-- akhir kontent -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <hr>


    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="" target="_blank">Rina Purnama</a> <?php echo date('Y'); ?></p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Didukung oleh: <a
                href="http://puskomedia.com">PUSKOMEDIA</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- javascript eksternal-->

<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/bootstrap.min.js"></script>

</body>
</html>
