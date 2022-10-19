<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "potensi_peternakan".
 *
 * @property int $id
 * @property string $jenis_ternak
 * @property int $jumlah_pemilik
 * @property int $jumlah_populasi_ternak
 */
class PotensiPeternakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'potensi_peternakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_ternak', 'jumlah_pemilik', 'jumlah_populasi_ternak'], 'required'],
            [['jumlah_pemilik', 'jumlah_populasi_ternak'], 'integer'],
            [['jenis_ternak'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_ternak' => 'Jenis Ternak',
            'jumlah_pemilik' => 'Jumlah Pemilik',
            'jumlah_populasi_ternak' => 'Jumlah Populasi Ternak',
        ];
    }
}
