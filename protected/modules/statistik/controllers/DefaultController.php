<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

    /**
	 * a combine view of highcharts
	 */
    public function actionJenisKelamin()
    {
        //Yii::import('application.modules.pustaka.models.*');
        Yii::import('application.modules.penduduk.models.*');
        $criteria  = new CDbCriteria;
        
         if(isset($_GET['id'])){
            //$pustaka = $this->getDataPustaka();
            $dataProvider = $this->dataProviderSearchPenduduk();
            $dataProvider->id_jenis_kelamin = $_GET['id'] ;
            $countProvider = $this->getPagedExport($dataProvider->search()->getTotalItemCount());
            //$this->renderPartial('detail_kelamin' , array('dataProvider'=> $dataProvider , 'paged'=> $countProvider,'id'=> $_GET['id'],  'pustaka'=> $pustaka) , false,true);
            exit();
        }

        $dataProvider=new CActiveDataProvider('JenisKelamin',
            array(
                'criteria'=>$criteria,
                'pagination'=>array( 'pageSize'=>15 ),
            )                    
        );
        
        $this->render('index',array(
                'dataProvider'=>$dataProvider,
        ));
        
    }
}