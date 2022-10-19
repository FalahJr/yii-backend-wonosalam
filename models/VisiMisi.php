<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "visi_misi".
 *
 * @property int $id
 * @property string $visi
 * @property string $misi
 */
class VisiMisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'visi_misi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['visi', 'misi'], 'required'],
            [['visi', 'misi'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'visi' => 'Visi',
            'misi' => 'Misi',
        ];
    }
}
