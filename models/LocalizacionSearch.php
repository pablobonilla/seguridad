<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Localizacion;

/**
 * LocalizacionSearch represents the model behind the search form of `app\models\Localizacion`.
 */
class LocalizacionSearch extends Localizacion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['localizacion_id'], 'integer'],
            [['localizacion_nombre'], 'safe'],
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
        $query = Localizacion::find();

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
            'localizacion_id' => $this->localizacion_id,
        ]);

        $query->andFilterWhere(['like', 'localizacion_nombre', $this->localizacion_nombre]);

        return $dataProvider;
    }
}
