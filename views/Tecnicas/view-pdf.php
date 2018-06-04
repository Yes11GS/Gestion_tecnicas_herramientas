<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tecnicas */
$this->title=$model->nombre;


?>
<div class="tecnicas-view">

<h3 align="center">DESCRIPCIÓN DE TÉCNICA</h3>
 <h3 align="center"><?= Html::encode($this->title) ?></h3>

  

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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