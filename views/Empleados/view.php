<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Empleados */

$this->title = $model->cedula;
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="empleados-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cedula], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cedula], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cedula',
            'nombres',
            'apellidos',
            'depto_id',
            'cargo_id',
            'genero',
            'nacionalidad',
            'estado_civil',
            'direccion',
            'código_postal',
            'código_empleado',
            'nss',
            'telefono',
            'celular',
            'email:email',
            'licencia',
            'caducidad_licencia',
            'fecha_ingreso',
            'fecha_salida',
            'localizacion_id',
            'area_id',
            'grupo_id',
            'tipo_contrato',
            'turno_id',
        ],
    ]) ?>

</div>
