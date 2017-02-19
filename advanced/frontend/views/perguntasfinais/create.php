<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Perguntasfinais */

$this->title = 'Criar Pergunta Final';
$this->params['breadcrumbs'][] = ['label' => 'Perguntasfinais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perguntasfinais-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
