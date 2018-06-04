<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tecnicas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tecnicas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clasificacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dificultad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enfoque')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proposito')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ingredientes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'participantes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'procedimiento')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'salidas')->textarea(['rows' => 6]) ?>

   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
