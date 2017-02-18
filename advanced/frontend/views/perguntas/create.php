<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Perguntas */

$this->title = 'Create Perguntas';
$this->params['breadcrumbs'][] = ['label' => 'Perguntas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perguntas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
