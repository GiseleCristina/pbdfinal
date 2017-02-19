<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Times */

$this->title = 'Criar Time';
$this->params['breadcrumbs'][] = ['label' => 'Times', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="times-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
