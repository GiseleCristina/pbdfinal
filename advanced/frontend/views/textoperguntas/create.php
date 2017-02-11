<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Textoperguntas */

$this->title = 'Create Textoperguntas';
$this->params['breadcrumbs'][] = ['label' => 'Textoperguntas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="textoperguntas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
