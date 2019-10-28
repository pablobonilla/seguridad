<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmpleadosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empleados-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cedula') ?>

    <?= $form->field($model, 'nombres') ?>

    <?= $form->field($model, 'apellidos') ?>

    <?= $form->field($model, 'depto_id') ?>

    <?= $form->field($model, 'cargo_id') ?>

    <?php // echo $form->field($model, 'genero') ?>

    <?php // echo $form->field($model, 'nacionalidad') ?>

    <?php // echo $form->field($model, 'estado_civil') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'código_postal') ?>

    <?php // echo $form->field($model, 'código_empleado') ?>

    <?php // echo $form->field($model, 'nss') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'celular') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'licencia') ?>

    <?php // echo $form->field($model, 'caducidad_licencia') ?>

    <?php // echo $form->field($model, 'fecha_ingreso') ?>

    <?php // echo $form->field($model, 'fecha_salida') ?>

    <?php // echo $form->field($model, 'localizacion_id') ?>

    <?php // echo $form->field($model, 'area_id') ?>

    <?php // echo $form->field($model, 'grupo_id') ?>

    <?php // echo $form->field($model, 'tipo_contrato') ?>

    <?php // echo $form->field($model, 'turno_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
