<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PerguntasfinaisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perguntasfinais-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dica1') ?>

    <?= $form->field($model, 'dica2') ?>

    <?= $form->field($model, 'dica3') ?>

    <?= $form->field($model, 'dica4') ?>

    <?php // echo $form->field($model, 'id_texto_pergunta') ?>

    <?php // echo $form->field($model, 'id_localizacao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
