<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Jogo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jogo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idTime')->textInput() ?>

    <?= $form->field($model, 'tempo_inicio')->textInput() ?>

    <?= $form->field($model, 'tempo_fim')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
