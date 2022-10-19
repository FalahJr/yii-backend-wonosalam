<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "struktur_desa".
 *
 * @property int $id
 * @property string $nama_lengkap
 * @property string $jabatan
 */
class StrukturDesa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'struktur_desa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lengkap', 'jabatan'], 'required'],
            [['nama_lengkap', 'jabatan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_lengkap' => 'Nama Lengkap',
            'jabatan' => 'Jabatan',
        ];
    }
}
