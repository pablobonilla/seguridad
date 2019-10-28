<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Localizacion */

$this->title = 'Update Localizacion: ' . $model->localizacion_id;
$this->params['breadcrumbs'][] = ['label' => 'Localizacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->localizacion_id, 'url' => ['view', 'id' => $model->localizacion_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="localizacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
