<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendidikan".
 *
 * @property int $id
 * @property string $tingkat_pendidikan
 * @property int $jumlah
 */
class Pendidikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tingkat_pendidikan', 'jumlah'], 'required'],
            [['jumlah'], 'integer'],
            [['tingkat_pendidikan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tingkat_pendidikan' => 'Tingkat Pendidikan',
            'jumlah' => 'Jumlah',
        ];
    }
}
