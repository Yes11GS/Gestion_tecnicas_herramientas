<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TecnicasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tecnicas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'clasificacion') ?>

    <?= $form->field($model, 'area') ?>

    <?= $form->field($model, 'dificultad') ?>

    <?= $form->field($model, 'enfoque') ?>

    <?php // echo $form->field($model, 'proposito') ?>

    <?php // echo $form->field($model, 'ingredientes') ?>

    <?php // echo $form->field($model, 'participantes') ?>

    <?php // echo $form->field($model, 'procedimiento') ?>

    <?php // echo $form->field($model, 'salidas') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
