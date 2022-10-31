<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property int $blog_kategori_id
 * @property string $title
 * @property string $deskripsi
 * @property string $gambar
 * @property string $created_at
 * @property string $update_at
 * @property string $created_date
 * @property string $update_date
 *
 * @property BlogKategori $blogKategori
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['blog_kategori_id', 'title', 'deskripsi', 'gambar', 'created_at', 'update_at', 'created_date', 'update_date'], 'required'],
            [['blog_kategori_id'], 'integer'],
            [['deskripsi'], 'string'],
            [['created_date', 'update_date'], 'safe'],
            [['title', 'created_at', 'update_at'], 'string', 'max' => 100],
            [['gambar'], 'string', 'max' => 255],
            [['blog_kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => BlogKategori::className(), 'targetAttribute' => ['blog_kategori_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'blog_kategori_id' => 'Blog Kategori ID',
            'title' => 'Title',
            'deskripsi' => 'Deskripsi',
            'gambar' => 'Gambar',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'created_date' => 'Created Date',
            'update_date' => 'Update Date',
        ];
    }

    /**
     * Gets query for [[BlogKategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBlogKategori()
    {
        return $this->hasOne(BlogKategori::className(), ['id' => 'blog_kategori_id']);
    }
}
