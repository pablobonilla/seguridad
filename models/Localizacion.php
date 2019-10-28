<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "localizacion".
 *
 * @property int $localizacion_id
 * @property string $localizacion_nombre
 */
class Localizacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'localizacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['localizacion_nombre'], 'required'],
            [['localizacion_nombre'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'localizacion_id' => 'Localizacion ID',
            'localizacion_nombre' => 'Localizacion Nombre',
        ];
    }
}
