<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "potensi_kehutanan_kepemilikan".
 *
 * @property int $id
 * @property string $nama_kepemilikan
 * @property int $luas
 */
class PotensiKehutananKepemilikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'potensi_kehutanan_kepemilikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kepemilikan', 'luas'], 'required'],
            [['luas'], 'integer'],
            [['nama_kepemilikan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_kepemilikan' => 'Nama Kepemilikan',
            'luas' => 'Luas',
        ];
    }
}
