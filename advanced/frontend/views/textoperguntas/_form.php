<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Textoperguntas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="textoperguntas-form">

    <?php
    $resposta =  Array('prompt' => 'Selecione...', '1'=>'op1','2'=>'op2','3'=> 'op3','4'=> 'op4','5'=> 'op5');
    $form = ActiveForm::begin();
    ?>

    <?= $form->field($model, 'texto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'op1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'op2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'op3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'op4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'op5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resposta')->dropDownList($resposta) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-facebook' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
