<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Perguntas */

$this->title = 'Criar Perguntas';
$this->params['breadcrumbs'][] = ['label' => 'Perguntas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perguntas-create">

     <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
