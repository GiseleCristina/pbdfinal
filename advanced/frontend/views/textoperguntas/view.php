<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Textoperguntas */

$this->title = 'Pergunta '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Textoperguntas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="textoperguntas-view">

    <!--h1><?= Html::encode($this->title) ?></h1-->

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'texto:ntext',
            'op1',
            'op2',
            'op3',
            'op4',
            'op5',
            'resposta',
        ],
    ]) ?>

</div>
