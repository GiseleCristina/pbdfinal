<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Perguntasfinais */

$this->title = 'Create Perguntasfinais';
$this->params['breadcrumbs'][] = ['label' => 'Perguntasfinais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perguntasfinais-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
