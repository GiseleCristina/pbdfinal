<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Localizacoes */

$this->title = 'Create Localizacoes';
$this->params['breadcrumbs'][] = ['label' => 'Localizacoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="localizacoes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
