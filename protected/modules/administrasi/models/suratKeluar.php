<?php

/**
 * This is the model class for table "{{suratkeluar}}".
 *
 * The followings are the available columns in table '{{suratkeluar}}':
 * @property integer $id
 * @property string $nomor
 * @property string $tanggal
 * @property string $tujuan
 * @property string $isi_surat
 * @property string $keterangan
 */
class suratKeluar extends CActiveRecord
{
  /**
   * Returns the static model of the specified AR class.
   * @param string $className active record class name.
   * @return suratKeluar the static model class
   */
  public static function model($className=__CLASS__)
  {
    return parent::model($className);
  }

  /**
   * @return string the associated database table name
   */
  public function tableName()
  {
    return '{{suratkeluar}}';
  }

  /**
   * @return array validation rules for model attributes.
   */
  public function rules()
  {
    // NOTE: you should only define rules for those attributes that
    // will receive user inputs.
    return array(
      array('nomor, tanggal, tujuan', 'required'),
      array('nomor', 'length', 'max'=>25),
      array('tujuan', 'length', 'max'=>50),
      array('isi_surat, keterangan', 'safe'),
      // The following rule is used by search().
      // Please remove those attributes that should not be searched.
      array('id, nomor, tanggal, tujuan, isi_surat, keterangan', 'safe', 'on'=>'search'),
    );
  }

  /**
   * @return array relational rules.
   */
  public function relations()
  {
    // NOTE: you may need to adjust the relation name and the related
    // class name for the relations automatically generated below.
    return array(
    );
  }

  /**
   * @return array customized attribute labels (name=>label)
   */
  public function attributeLabels()
  {
    return array(
      'id' => 'ID',
      'nomor' => 'Nomor',
      'tanggal' => 'Tanggal',
      'tujuan' => 'Tujuan',
      'isi_surat' => 'Isi Surat',
      'keterangan' => 'Keterangan',
    );
  }

  /**
   * Retrieves a list of models based on the current search/filter conditions.
   * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
   */
  public function search()
  {
    // Warning: Please modify the following code to remove attributes that
    // should not be searched.

    $criteria=new CDbCriteria;

    $criteria->compare('id',$this->id);
    $criteria->compare('nomor',$this->nomor,true);
    $criteria->compare('tanggal',$this->tanggal,true);
    $criteria->compare('tujuan',$this->tujuan,true);
    $criteria->compare('isi_surat',$this->isi_surat,true);
    $criteria->compare('keterangan',$this->keterangan,true);

    return new CActiveDataProvider($this, array(
      'criteria'=>$criteria,
    ));
  }
}