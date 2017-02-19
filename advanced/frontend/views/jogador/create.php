<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Jogador */

$this->title = 'Criar Jogador';
$this->params['breadcrumbs'][] = ['label' => 'Jogadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogador-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
