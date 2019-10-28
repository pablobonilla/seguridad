<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmpleadosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empleados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empleados-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Empleados', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cedula',
            'nombres',
            'apellidos',
            'depto_id',
            'cargo_id',
            //'genero',
            //'nacionalidad',
            //'estado_civil',
            //'direccion',
            //'código_postal',
            //'código_empleado',
            //'nss',
            //'telefono',
            //'celular',
            //'email:email',
            //'licencia',
            //'caducidad_licencia',
            //'fecha_ingreso',
            //'fecha_salida',
            //'localizacion_id',
            //'area_id',
            //'grupo_id',
            //'tipo_contrato',
            //'turno_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
