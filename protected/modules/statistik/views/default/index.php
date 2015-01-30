<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,


);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<?php 
$this->widget('ext.highcharts.HighchartsWidget', array(
	//'dataProvider'=>$dataProvider,
    'options'=>array(
    	'chart'=>array(
    		'type'=>'bar',
    		'height'=>'500',
    		),
	   'theme'=>'gray',
       'title' => array('text' => 'Grafik Jenis Kelamin'),
       'xAxis' => array(
          'categories' => array('Laki-Laki', 'Perempuan')
       ),
       'yAxis' => array(
          'title' => array('text' => 'Jumlah')
       ),
       'series' => array(
          // array(
          // 	'type'=>'bar',
          // 	'title'=>'Jumlah',
          // 	//'value'=>'id_jenis_kelamin',
          // 	'dataResource'=>'id_jenis_kelamin'
          // 	),
          array('type' => 'bar', 'data' => array(5, 7),'name'=>'Jenis Kelamin')
       ),
	  // 'scripts' => array(
	  //      'highcharts-more',   // enables supplementary chart types (gauge, arearange, columnrange, etc.)
	  //      'modules/exporting', // adds Exporting button/menu to chart
	  //      'themes/grid'        // applies global 'grid' theme to all charts
	  // ),       
    )
 ));

 ?>