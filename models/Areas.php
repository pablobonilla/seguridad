<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "areas".
 *
 * @property int $area_id
 * @property string $area_nombre
 */
class Areas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'areas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['area_nombre'], 'required'],
            [['area_nombre'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'area_id' => 'Area ID',
            'area_nombre' => 'Area Nombre',
        ];
    }
}
