<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cargos;

/**
 * CargosSearch represents the model behind the search form of `app\models\Cargos`.
 */
class CargosSearch extends Cargos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cargo_id', 'cargo_nombre'], 'safe'],
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
        $query = Cargos::find();

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
        $query->andFilterWhere(['like', 'cargo_id', $this->cargo_id])
            ->andFilterWhere(['like', 'cargo_nombre', $this->cargo_nombre]);

        return $dataProvider;
    }
}
