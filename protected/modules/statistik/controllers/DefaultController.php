<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		//$this->render('index');
    	$sql='SELECT count(id_penduduk),id_jenis_kelamin FROM tbl_penduduk GROUP BY id_jenis_kelamin';

        $dataProvider=new CSqlDataProvider($sql,
            array(
                'keyField'=>'id_penduduk',
            )                    
        );
        
        $this->render('index',array(
                'dataProvider'=>$dataProvider,
        ));

	}

    /**
	 * a combine view of highcharts
	 */
    // public function actionjenisKelamin()
    // {
    // 	$sql='SELECT count(id_penduduk),id_jenis_kelamin FROM penduduk GROUP BY id_jenis_kelamin';

    //     $dataProvider=new CSqlDataProvider($sql,
    //         array(
    //             'keyField'=>'id_penduduk',
    //         )                    
    //     );
        
    //     $this->render('jenisKelamin',array(
    //             'dataProvider'=>$dataProvider,
    //     ));
        
    // }
}