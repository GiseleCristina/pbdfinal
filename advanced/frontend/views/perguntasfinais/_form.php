<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Perguntasfinais */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perguntasfinais-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dica1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dica2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dica3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dica4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_texto_pergunta')->textInput() ?>

    <?= $form->field($model, 'id_localizacao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
