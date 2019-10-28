<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupo".
 *
 * @property int $grupo_id
 * @property string $grupo_nombre
 */
class Grupo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grupo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['grupo_nombre'], 'required'],
            [['grupo_nombre'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'grupo_id' => 'Grupo ID',
            'grupo_nombre' => 'Grupo Nombre',
        ];
    }
}
