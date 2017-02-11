<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Textoperguntas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="textoperguntas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'texto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'op1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'op2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'op3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'op4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'op5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resposta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
