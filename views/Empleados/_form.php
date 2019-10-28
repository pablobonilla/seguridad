<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Departamentos;
use app\models\Cargos;
use app\models\localizacion;
use app\models\Areas;
use app\models\Grupo;
use app\models\Turno;

/* @var $this yii\web\View */
/* @var $model app\models\Empleados */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empleados-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cedula')->textInput() ?>

    <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>

    <!-- //Departamentos -->
    <?= $form->field($model, 'depto_id')->dropDownList(
        ArrayHelper::map(Departamentos::find()->all(),'depto_id','nombre'),
        ['prompt'=>'Select Depto.']

    ) ?>

    <!-- //Cargos -->
    <?= $form->field($model, 'cargo_id')->dropDownList(
        ArrayHelper::map(Cargos::find()->all(),'cargo_id','cargo_nombre'),
        ['prompt'=>'Seleccionar cargo.']

    ) ?>


    <?= $form->field($model, 'genero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nacionalidad')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'estado_civil')->textInput(['maxlength' => true]) ?> -->
    
    <?= $form->field($model, 'estado_civil')->dropDownList(
            ['S' => 'Soltero', 'c' => 'Casado', 'd' => 'Divorciado', 'l' => 'Unión Libre'],
            ['prompt'=>'Seleccionar Estado Civil ']
			); ?>



    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'código_postal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'código_empleado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nss')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'licencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caducidad_licencia')->textInput() ?>

    <?= $form->field($model, 'fecha_ingreso')->textInput() ?>

    <?= $form->field($model, 'fecha_salida')->textInput() ?>

    <!-- //Localización -->
    <?= $form->field($model, 'localizacion_id')->dropDownList(
        ArrayHelper::map(Localizacion::find()->orderBy('localizacion_nombre')
        ->all(),'localizacion_id','localizacion_nombre'),
        ['prompt'=>'Seleccionar localizacion.']

    ) ?>

    <!-- //Area -->
    <?= $form->field($model, 'area_id')->dropDownList(
        ArrayHelper::map(areas::find()->all(),'area_id','area_nombre'),
        ['prompt'=>'Seleccionar area.']

    ) ?>

    <!-- //Grupo -->
    <?= $form->field($model, 'grupo_id')->dropDownList(
        ArrayHelper::map(grupo::find()->all(),'grupo_id','grupo_nombre'),
        ['prompt'=>'Seleccionar grupo.']

    ) ?>

    <?= $form->field($model, 'tipo_contrato')->textInput(['maxlength' => true]) ?>

    <!-- //Turno -->
    <?= $form->field($model, 'turno_id')->dropDownList(
        ArrayHelper::map(turno::find()->all(),'turno_id','turno_nombre'),
        ['prompt'=>'Seleccionar turno.']

    ) ?>
    
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
