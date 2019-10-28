<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empleados".
 *
 * @property int $cedula
 * @property string $nombres
 * @property string $apellidos
 * @property string $depto_id
 * @property string $cargo_id
 * @property string $genero
 * @property string $nacionalidad
 * @property string $estado_civil
 * @property string $direccion
 * @property string $código_postal
 * @property string $código_empleado
 * @property string $nss
 * @property string $telefono
 * @property string $celular
 * @property string $email
 * @property string $licencia
 * @property string $caducidad_licencia
 * @property string $fecha_ingreso
 * @property string $fecha_salida
 * @property int $localizacion_id
 * @property int $area_id
 * @property int $grupo_id
 * @property string $tipo_contrato
 * @property int $turno_id
 */
class Empleados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empleados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cedula'], 'required'],
            [['cedula', 'localizacion_id', 'area_id', 'grupo_id', 'turno_id'], 'integer'],
            [['caducidad_licencia', 'fecha_ingreso', 'fecha_salida'], 'safe'],
            [['nombres', 'apellidos'], 'string', 'max' => 150],
            [['depto_id'], 'string', 'max' => 3],
            [['cargo_id'], 'string', 'max' => 8],
            [['genero', 'código_postal'], 'string', 'max' => 10],
            [['nacionalidad'], 'string', 'max' => 40],
            [['estado_civil', 'código_empleado', 'nss'], 'string', 'max' => 15],
            [['direccion'], 'string', 'max' => 250],
            [['telefono', 'celular', 'licencia'], 'string', 'max' => 12],
            [['email'], 'string', 'max' => 100],
            [['tipo_contrato'], 'string', 'max' => 50],
            [['cedula'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cedula' => 'Cédula',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'depto_id' => 'Depto ID',
            'cargo_id' => 'Cargo ID',
            'genero' => 'Genero',
            'nacionalidad' => 'Nacionalidad',
            'estado_civil' => 'Estado Civil',
            'direccion' => 'Dirección',
            'código_postal' => 'Código Postal',
            'código_empleado' => 'Código Empleado',
            'nss' => 'Nss',
            'telefono' => 'Teléfono',
            'celular' => 'Celular',
            'email' => 'Email',
            'licencia' => 'Licencia',
            'caducidad_licencia' => 'Caducidad Licencia',
            'fecha_ingreso' => 'Fecha Ingreso',
            'fecha_salida' => 'Fecha Salida',
            'localizacion_id' => 'Localizacion',
            'area_id' => 'Area',
            'grupo_id' => 'Grupo',
            'tipo_contrato' => 'Tipo Contrato',
            'turno_id' => 'Turno',
        ];
    }
}
