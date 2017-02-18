<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Jogo */

$this->title = 'Update Jogo: ' . $model->jogo;
$this->params['breadcrumbs'][] = ['label' => 'Jogos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jogo, 'url' => ['view', 'id' => $model->jogo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jogo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
