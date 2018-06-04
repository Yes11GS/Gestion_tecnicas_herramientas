<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tecnicas */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Técnicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="tecnicas-view">
    <?= Html::a('Descargar PDF', ['gen-pdf', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
   

  <h3 align="center">DESCRIPCIÓN</h3>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'clasificacion',
            'area',
            'dificultad',
            'enfoque',
            'proposito:ntext',
            'ingredientes:ntext',
            'participantes:ntext',
            'procedimiento:ntext',
            'salidas:ntext',
        ],
    ]) ?>



</div>
