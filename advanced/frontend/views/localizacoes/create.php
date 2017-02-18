<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Localizacoes */

$this->title = 'Nova Localização';
$this->params['breadcrumbs'][] = ['label' => 'Localizacoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="localizacoes-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
