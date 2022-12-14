<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "potensi_perkebunan".
 *
 * @property int $id
 * @property string $nama
 * @property float $luas
 */
class PotensiPerkebunan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'potensi_perkebunan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'luas'], 'required'],
            [['luas'], 'number'],
            [['nama'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'luas' => 'Luas',
        ];
    }
}
