<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Jogador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jogador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cor')->textInput() ?>

    <?= $form->field($model, 'id_time')->textInput() ?>

    <?= $form->field($model, 'fase')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-facebook' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
