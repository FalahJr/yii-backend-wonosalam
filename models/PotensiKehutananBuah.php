<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "potensi_kehutanan_buah".
 *
 * @property int $id
 * @property string $nama_hasil_hutan
 * @property float $luas
 * @property string $satuan
 */
class PotensiKehutananBuah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'potensi_kehutanan_buah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_hasil_hutan', 'luas', 'satuan'], 'required'],
            [['luas'], 'number'],
            [['nama_hasil_hutan', 'satuan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_hasil_hutan' => 'Nama Hasil Hutan',
            'luas' => 'Luas',
            'satuan' => 'Satuan',
        ];
    }
}
