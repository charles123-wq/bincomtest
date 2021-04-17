<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LgaWsw;

/**
 * LgaWswSearch represents the model behind the search form of `app\models\LgaWsw`.
 */
class LgaWswSearch extends LgaWsw
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'summed_total_polling_unit_results'], 'integer'],
            [['PDP', 'DPP', 'ACN', 'PPA', 'CDC', 'JP', 'ANPP', 'LABO'], 'safe'],
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
        $query = LgaWsw::find();

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
            'summed_total_polling_unit_results' => $this->summed_total_polling_unit_results,
        ]);

        $query->andFilterWhere(['like', 'PDP', $this->PDP])
            ->andFilterWhere(['like', 'DPP', $this->DPP])
            ->andFilterWhere(['like', 'ACN', $this->ACN])
            ->andFilterWhere(['like', 'PPA', $this->PPA])
            ->andFilterWhere(['like', 'CDC', $this->CDC])
            ->andFilterWhere(['like', 'JP', $this->JP])
            ->andFilterWhere(['like', 'ANPP', $this->ANPP])
            ->andFilterWhere(['like', 'LABO', $this->LABO]);

        return $dataProvider;
    }
}
