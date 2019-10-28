<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cargos".
 *
 * @property string $cargo_id
 * @property string $cargo_nombre
 */
class Cargos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cargos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cargo_id', 'cargo_nombre'], 'required'],
            [['cargo_id'], 'string', 'max' => 8],
            [['cargo_nombre'], 'string', 'max' => 250],
            [['cargo_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cargo_id' => 'Cargo ID',
            'cargo_nombre' => 'Cargo Nombre',
        ];
    }
}
