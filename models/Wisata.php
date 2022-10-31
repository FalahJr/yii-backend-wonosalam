<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wisata".
 *
 * @property int $id
 * @property int $wisata_kategori_id
 * @property string $judul
 * @property string $deskripsi
 * @property string $gambar
 * @property string $url_maps
 * @property string $created_at
 * @property string $update_at
 * @property string $created_date
 * @property string $update_date
 *
 * @property WisataKategori $wisataKategori
 */
class Wisata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wisata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wisata_kategori_id', 'judul', 'deskripsi', 'gambar', 'url_maps', 'created_at', 'update_at', 'created_date', 'update_date'], 'required'],
            [['wisata_kategori_id'], 'integer'],
            [['deskripsi'], 'string'],
            [['created_date', 'update_date'], 'safe'],
            [['judul', 'gambar', 'url_maps'], 'string', 'max' => 255],
            [['created_at', 'update_at'], 'string', 'max' => 100],
            [['wisata_kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => WisataKategori::className(), 'targetAttribute' => ['wisata_kategori_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'wisata_kategori_id' => 'Wisata Kategori ID',
            'judul' => 'Judul',
            'deskripsi' => 'Deskripsi',
            'gambar' => 'Gambar',
            'url_maps' => 'Url Maps',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'created_date' => 'Created Date',
            'update_date' => 'Update Date',
        ];
    }

    /**
     * Gets query for [[WisataKategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWisataKategori()
    {
        return $this->hasOne(WisataKategori::className(), ['id' => 'wisata_kategori_id']);
    }

    public function getImageUrl()
    {
        return \Yii::$app->request->BaseUrl . '../uploads/image/' . $this->gambar;
    }
}
