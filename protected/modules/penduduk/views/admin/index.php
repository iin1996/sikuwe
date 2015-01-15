<?php
/* @var $this AdminController */
/* @var $dataProvider CActiveDataProvider */
/* @var $model Penduduk */

$this->breadcrumbs=array(
	'Data Penduduk',
);

$this->menu=array(
	array('label'=>'Entri Penduduk', 'url'=>array('create'),'icon'=>'pencil'),
	array('label'=>'Kelola Penduduk', 'url'=>array('admin'), 'icon'=>'cog'),
);
?>

<h1>Penduduk</h1>

<?php /* $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */

$this->renderPartial('_view',array(
	'dataProvider'=>$dataProvider,
	//'model'=>$model,
));

?>
