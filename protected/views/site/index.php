<?php
/* @var $this SiteController */
$this->breadcrumbs=array(
	''=>'',
);
$this->pageTitle=Yii::app()->name;
?>

<h1>Selamat datang di <i><?php echo CHtml::encode(Yii::app()->name); ?></i><br>
    <small>SIKUWE adalah Sistem Informasi Kependudukan berbasis Website.</small>
</h1>
<p>Ini adalah halaman utama dari SIKUWE. SIKUWE dibuat untuk memudahkan kegiatan administrasi pada pedesaan dalam kependudukan</p>

<p><b>Silakan digunakan untuk tujuan baik.</b></p>

<p class="center-block download-buttons">
    <a href="<?php echo $this->createUrl('/penduduk/admin/create'); ?>" class="btn btn-primary btn-lg"><i
            class="glyphicon glyphicon-edit"></i> Memulai entri</a>
    <a href="<?php echo $this->createUrl('/penduduk/admin/index'); ?>" class="btn btn-default btn-lg"><i
            class="glyphicon glyphicon-user"></i> Lihat data penduduk</a>
</p>
