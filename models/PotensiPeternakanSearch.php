<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PotensiPeternakan;

/**
 * PotensiPeternakanSearch represents the model behind the search form of `app\models\PotensiPeternakan`.
 */
class PotensiPeternakanSearch extends PotensiPeternakan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'jumlah_pemilik', 'jumlah_populasi_ternak'], 'integer'],
            [['jenis_ternak'], 'safe'],
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
        $query = PotensiPeternakan::find();

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
            'jumlah_pemilik' => $this->jumlah_pemilik,
            'jumlah_populasi_ternak' => $this->jumlah_populasi_ternak,
        ]);

        $query->andFilterWhere(['like', 'jenis_ternak', $this->jenis_ternak]);

        return $dataProvider;
    }
}
