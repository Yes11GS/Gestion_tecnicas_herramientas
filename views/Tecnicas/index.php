<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TecnicasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Técnicas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tecnicas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Técnica', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            //'clasificacion',
            'area',
            //'dificultad',
            //'enfoque',
            //'proposito:ntext',
            //'ingredientes:ntext',
            //'participantes:ntext',
            //'procedimiento:ntext',
            //'salidas:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
