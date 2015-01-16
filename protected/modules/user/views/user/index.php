<?php
$this->breadcrumbs=array(
	UserModule::t("Users"),
);
if(UserModule::isAdmin()) {
	$this->layout='//layouts/column2';
	$this->menu=array(
		array('label'=>'Menu Pengguna'),
		//array('label'=>UserModule::t('Create User'), 'url'=>array('create'),'icon'=>'plus'),
	    array('label'=>UserModule::t('Manage Users'), 'url'=>array('/user/admin'),'icon'=>'cog'),
	    //array('label'=>UserModule::t('Manage Profile Field'), 'url'=>array('profileField/admin')),
	);
}
?>

<h1><?php echo UserModule::t("List User"); ?></h1>

<?php //$this->widget('zii.widgets.grid.CGridView', array(
	$this->widget('booster.widgets.TbGridView', array(
	'type'=>'bordered',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array(
			'name' => 'username',
			'type'=>'raw',
			'value' => 'CHtml::link(CHtml::encode($data->username),array("user/view","id"=>$data->id))',
		),
		'create_at',
		'lastvisit_at',
	),
)); ?>
