<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "potensi_pertanian".
 *
 * @property int $id
 * @property int $potensi_pertanian_kategori_id
 * @property int $luas
 * @property int $hasil_panen
 *
 * @property PotensiPertanianKategori $potensiPertanianKategori
 */
class PotensiPertanian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'potensi_pertanian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['potensi_pertanian_kategori_id', 'luas', 'hasil_panen'], 'required'],
            [['potensi_pertanian_kategori_id', 'luas', 'hasil_panen'], 'integer'],
            [['potensi_pertanian_kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => PotensiPertanianKategori::className(), 'targetAttribute' => ['potensi_pertanian_kategori_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'potensi_pertanian_kategori_id' => 'Potensi Pertanian Kategori ID',
            'luas' => 'Luas',
            'hasil_panen' => 'Hasil Panen',
        ];
    }

    /**
     * Gets query for [[PotensiPertanianKategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPotensiPertanianKategori()
    {
        return $this->hasOne(PotensiPertanianKategori::className(), ['id' => 'potensi_pertanian_kategori_id']);
    }
}
