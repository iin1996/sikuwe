<?php 
//$label=array();
$nilai=array();

foreach ($dataProvider->getData() as $i => $ii) {
	//$label[$i]=$ii['aa'];
	$nilai[$i]=(int)$ii['count(id_penduduk)'];
}


$this->widget('ext.highcharts.HighchartsWidget', array(
	//'dataProvider'=>$dataProvider,
    'options'=>array(
    	'chart'=>array(
    		//'type'=>'bar',
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
          array('type' => 'pie', 'data' =>$nilai,'name'=>'Jumlah')
       ),       
    ),
    'credits' => array('enabled' => false),
    'scripts' => array(
         'highcharts-more',   // enables supplementary chart types (gauge, arearange, columnrange, etc.)
         'modules/exporting', // adds Exporting button/menu to chart
         //'themes/grid'        // applies global 'grid' theme to all charts
    ),
 ));

 ?>