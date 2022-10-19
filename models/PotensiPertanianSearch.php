<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PotensiPertanian;

/**
 * PotensiPertanianSearch represents the model behind the search form of `app\models\PotensiPertanian`.
 */
class PotensiPertanianSearch extends PotensiPertanian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'potensi_pertanian_kategori_id', 'luas', 'hasil_panen'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PotensiPertanian::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'potensi_pertanian_kategori_id' => $this->potensi_pertanian_kategori_id,
            'luas' => $this->luas,
            'hasil_panen' => $this->hasil_panen,
        ]);

        return $dataProvider;
    }
}
