<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "turno".
 *
 * @property int $turno_id
 * @property string $turno_nombre
 */
class Turno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'turno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['turno_nombre'], 'required'],
            [['turno_nombre'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'turno_id' => 'Turno ID',
            'turno_nombre' => 'Turno Nombre',
        ];
    }
}
