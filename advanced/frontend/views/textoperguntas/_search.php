<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TextoperguntasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="textoperguntas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'texto') ?>

    <?= $form->field($model, 'op1') ?>

    <?= $form->field($model, 'op2') ?>

    <?= $form->field($model, 'op3') ?>

    <?php // echo $form->field($model, 'op4') ?>

    <?php // echo $form->field($model, 'op5') ?>

    <?php // echo $form->field($model, 'resposta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
