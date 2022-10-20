<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penduduk".
 *
 * @property int $id
 * @property int $jumlah_kk
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
            [['jumlah_kk', 'lelaki', 'perempuan'], 'required'],
            [['jumlah_kk', 'lelaki', 'perempuan'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jumlah_kk' => 'Jumlah Kk',
            'lelaki' => 'Lelaki',
            'perempuan' => 'Perempuan',
        ];
    }
}
