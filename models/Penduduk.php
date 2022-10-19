<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penduduk".
 *
 * @property int $id
 * @property int $jumlah_penduduk
 * @property int $lelaki
 * @property int $perempuan
 */
class Penduduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penduduk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jumlah_penduduk', 'lelaki', 'perempuan'], 'required'],
            [['jumlah_penduduk', 'lelaki', 'perempuan'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jumlah_penduduk' => 'Jumlah Penduduk',
            'lelaki' => 'Lelaki',
            'perempuan' => 'Perempuan',
        ];
    }
}
