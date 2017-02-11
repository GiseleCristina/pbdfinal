<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Perguntas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perguntas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fase')->textInput() ?>

    <?= $form->field($model, 'id_texto_pergunta')->textInput() ?>

    <?= $form->field($model, 'id_localizacao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
