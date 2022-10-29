<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "potensi_perkebunan_komoditi".
 *
 * @property int $id
 * @property string $nama
 * @property float $swasta_negara_luas
 * @property float $swasta_negara_hasil
 * @property float $rakyat_luas
 * @property float $rakyat_hasil
 */
class PotensiPerkebunanKomoditi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'potensi_perkebunan_komoditi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'swasta_negara_luas', 'swasta_negara_hasil', 'rakyat_luas', 'rakyat_hasil'], 'required'],
            [['swasta_negara_luas', 'swasta_negara_hasil', 'rakyat_luas', 'rakyat_hasil'], 'number'],
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
            'swasta_negara_luas' => 'Swasta Negara Luas',
            'swasta_negara_hasil' => 'Swasta Negara Hasil',
            'rakyat_luas' => 'Rakyat Luas',
            'rakyat_hasil' => 'Rakyat Hasil',
        ];
    }
}
