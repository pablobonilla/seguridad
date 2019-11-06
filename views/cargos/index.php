<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\BaseUrl;

//use yii\bootstrap\Modal; 


/* @var $this yii\web\View */
/* @var $searchModel app\models\CargosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cargos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cargos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        
        <?= Html::a('Crear Cargos', ['value'=>Url::to('index.php?r=cargos'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php 
    
         Modal::begin([
             'header'=>'<h4>Cargos</h4>',
             'id'=>'modal',
             'size'=>'modal-lg',
         ]);
         echo "<div id='modalContent'></div>";
         Modal::end();
        
    ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cargo_id',
            'cargo_nombre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
