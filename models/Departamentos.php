<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departamentos".
 *
 * @property string $depto_id
 * @property string $nombre
 */
class Departamentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departamentos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['depto_id'], 'required'],
            [['depto_id'], 'string', 'max' => 3],
            [['nombre'], 'string', 'max' => 200],
            [['depto_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'depto_id' => 'Depto ID',
            'nombre' => 'Nombre',
        ];
    }
}
