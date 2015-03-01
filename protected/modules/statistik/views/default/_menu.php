<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>false, // whether this is a stacked menu
    'items'=>array(
    	array('label'=>'Pekerjaan', 'url'=>Yii::app()->getModule('statistik')->statPekerjaan),
        array('label'=>'Jenis Kelamin', 'url'=>Yii::app()->getModule('statistik')->statKelamin, 'active'=>true),
        array('label'=>'Agama', 'url'=>Yii::app()->getModule('statistik')->statAgama),
        array('label'=>'Golongan Darah', 'url'=>Yii::app()->getModule('statistik')->statGolDarah),
    ),
));


?>