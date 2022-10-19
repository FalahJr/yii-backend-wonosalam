<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MataPencaharian;

/**
 * MataPencaharianSearch represents the model behind the search form of `app\models\MataPencaharian`.
 */
class MataPencaharianSearch extends MataPencaharian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'lelaki', 'perempuan'], 'integer'],
            [['jenis_pekerjaan'], 'safe'],
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
        $query = MataPencaharian::find();

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
            'lelaki' => $this->lelaki,
            'perempuan' => $this->perempuan,
        ]);

        $query->andFilterWhere(['like', 'jenis_pekerjaan', $this->jenis_pekerjaan]);

        return $dataProvider;
    }
}
