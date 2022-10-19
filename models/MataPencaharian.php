<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mata_pencaharian".
 *
 * @property int $id
 * @property string $jenis_pekerjaan
 * @property int $lelaki
 * @property int $perempuan
 */
class MataPencaharian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mata_pencaharian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_pekerjaan', 'lelaki', 'perempuan'], 'required'],
            [['lelaki', 'perempuan'], 'integer'],
            [['jenis_pekerjaan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_pekerjaan' => 'Jenis Pekerjaan',
            'lelaki' => 'Lelaki',
            'perempuan' => 'Perempuan',
        ];
    }
}
