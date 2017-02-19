<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Jogo */

$this->title = 'Criar Jogo';
$this->params['breadcrumbs'][] = ['label' => 'Jogos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogo-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
