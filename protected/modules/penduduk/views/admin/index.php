<?php
/* @var $this AdminController */
/* @var $dataProvider CActiveDataProvider */
/* @var $model Penduduk */

$this->breadcrumbs=array(
	'Penduduk',
);

$this->menu=array(
	array('label'=>'Create Penduduk', 'url'=>array('create')),
	array('label'=>'Manage Penduduk', 'url'=>array('admin')),
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
