<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Perguntasfinais */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Perguntasfinais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perguntasfinais-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'dica1',
            'dica2',
            'dica3',
            'dica4',
            'id_texto_pergunta',
            'id_localizacao',
        ],
    ]) ?>

</div>
