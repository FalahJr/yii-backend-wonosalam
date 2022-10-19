<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "potensi_pertanian_kategori".
 *
 * @property int $id
 * @property string $nama_kategori
 *
 * @property PotensiPertanian[] $potensiPertanians
 */
class PotensiPertanianKategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'potensi_pertanian_kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kategori'], 'required'],
            [['nama_kategori'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_kategori' => 'Nama Kategori',
        ];
    }

    /**
     * Gets query for [[PotensiPertanians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPotensiPertanians()
    {
        return $this->hasMany(PotensiPertanian::className(), ['potensi_pertanian_kategori_id' => 'id']);
    }
}
