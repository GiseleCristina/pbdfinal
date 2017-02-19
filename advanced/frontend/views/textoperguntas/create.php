<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Textoperguntas */

$this->title = 'Criar Texto da Pergunta';
$this->params['breadcrumbs'][] = ['label' => 'Textoperguntas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="textoperguntas-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
