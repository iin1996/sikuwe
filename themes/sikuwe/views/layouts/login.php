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
    <link id="bs-css" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/bootstrap.css" rel="stylesheet">

    <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/sikuwe-app.css" rel="stylesheet">
    <link href='<?php echo Yii::app()->theme->baseUrl ?>/assets/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->theme->baseUrl ?>/assets/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->theme->baseUrl ?>/assets/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->theme->baseUrl ?>/assets/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->theme->baseUrl ?>/assets/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo Yii::app()->theme->baseUrl ?>/assets/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/jquery.min.js"></script>

    <!-- The HTML5 shim, untuk dukungan IE6-8 pada elemen-elemen HTML5 -->
    <!--[jika memakai IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
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
            <form class="form-horizontal" action="index.html" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Nama Pengguna">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" placeholder="Sandi">
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember"> Ingat saya</label>
                    </div>
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

          <?php echo $content; ?>
</div><!--/.fluid-container-->

<!-- javascript eksternal-->

<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/bootstrap.min.js"></script>

<!-- librari untuk manajemen cookie 
<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/jquery.cookie.js"></script> -->
<!-- plugin tabel data 
<script src='<?php echo Yii::app()->theme->baseUrl ?>/assets/js/jquery.dataTables.min.js'></script> -->
<!-- select or dropdown enhancer 
<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/bower_components/chosen/chosen.jquery.min.js"></script> -->
<!-- plugin untuk melihat galeri gambar
<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/bower_components/colorbox/jquery.colorbox-min.js"></script> -->
<!-- plugin pemberitahuan 
<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/jquery.noty.js"></script> -->
<!-- librari untuk membuat tabel responsif 
<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/bower_components/responsive-tables/responsive-tables.js"></script> -->
<!-- plugin berkeliling
<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script> -->
<!-- plugin untuk autogrowing textarea 
<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/jquery.autogrow-textarea.js"></script> -->
<!-- plugin untuk mengunggah banyak berkas 
<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/jquery.uploadify-3.1.min.js"></script> -->
<!-- history.js for cross-browser state change on ajax 
<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/jquery.history.js"></script> -->
<!-- skrip aplikasi untuk versi demo SIKUWE-->
<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/sikuwe.js"></script>


</body>
</html>
