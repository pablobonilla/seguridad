<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Empleados;

/**
 * EmpleadosSearch represents the model behind the search form of `app\models\Empleados`.
 */
class EmpleadosSearch extends Empleados
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cedula', 'localizacion_id', 'area_id', 'grupo_id', 'turno_id'], 'integer'],
            [['nombres', 'apellidos', 'depto_id', 'cargo_id', 'genero', 'nacionalidad', 'estado_civil', 'direccion', 'código_postal', 'código_empleado', 'nss', 'telefono', 'celular', 'email', 'licencia', 'caducidad_licencia', 'fecha_ingreso', 'fecha_salida', 'tipo_contrato'], 'safe'],
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
        $query = Empleados::find();

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
            'cedula' => $this->cedula,
            'caducidad_licencia' => $this->caducidad_licencia,
            'fecha_ingreso' => $this->fecha_ingreso,
            'fecha_salida' => $this->fecha_salida,
            'localizacion_id' => $this->localizacion_id,
            'area_id' => $this->area_id,
            'grupo_id' => $this->grupo_id,
            'turno_id' => $this->turno_id,
        ]);

        $query->andFilterWhere(['like', 'nombres', $this->nombres])
            ->andFilterWhere(['like', 'apellidos', $this->apellidos])
            ->andFilterWhere(['like', 'depto_id', $this->depto_id])
            ->andFilterWhere(['like', 'cargo_id', $this->cargo_id])
            ->andFilterWhere(['like', 'genero', $this->genero])
            ->andFilterWhere(['like', 'nacionalidad', $this->nacionalidad])
            ->andFilterWhere(['like', 'estado_civil', $this->estado_civil])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'código_postal', $this->código_postal])
            ->andFilterWhere(['like', 'código_empleado', $this->código_empleado])
            ->andFilterWhere(['like', 'nss', $this->nss])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'celular', $this->celular])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'licencia', $this->licencia])
            ->andFilterWhere(['like', 'tipo_contrato', $this->tipo_contrato]);

        return $dataProvider;
    }
}
