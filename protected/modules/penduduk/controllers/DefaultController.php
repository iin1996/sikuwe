<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionAdd()
	{
	    $model=new Penduduk;

	    // uncomment the following code to enable ajax-based validation
	    /*
	    if(isset($_POST['ajax']) && $_POST['ajax']==='penduduk-add-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }
	    */

	    if(isset($_POST['Penduduk']))
	    {
	        $model->attributes=$_POST['Penduduk'];
	        if($model->validate())
	        {
	            // form inputs are valid, do something here
	            return;
	        }
	    }
	    $this->render('add',array('model'=>$model));
	}

}