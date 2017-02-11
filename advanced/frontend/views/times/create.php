<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Times */

$this->title = 'Create Times';
$this->params['breadcrumbs'][] = ['label' => 'Times', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="times-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
