<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Users 

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?> DATOS DE USUARIO</h1>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'email:email',
            'password',
            'authKey',
            'accessToken',
            'activate',
            'role',

        ],
    ]) ?>
 
 <p>
        <?= Html::a('Salir', ['index', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
       
    </p>

</div>
