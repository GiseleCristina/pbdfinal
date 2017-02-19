<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use common\models\Textoperguntas;

/* @var $this yii\web\View */
/* @var $model common\models\Perguntasfinais */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perguntasfinais-form">

    <?php
    $textoPerguntas = Textoperguntas::find()->all();
    $arrayPerguntas = ArrayHelper::map($textoPerguntas, 'id', 'id');

    $textoLocalizacoes = \common\models\Localizacoes::find()->all();
    $arrayLocalizacoes = ArrayHelper::map($textoLocalizacoes, 'id', 'referencia');

    $arraySelecioneP = Array('prompt' => 'Selecione...') + $arrayPerguntas;
    $arraySelecioneL = Array('prompt' => 'Selecione...') + $arrayLocalizacoes;

    $form = ActiveForm::begin(['id' => 'perguntas']);
    ?>

    <?= $form->field($model, 'dica1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dica2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dica3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dica4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_texto_pergunta')->dropDownList($arraySelecioneP) ?>

    <?= $form->field($model, 'id_localizacao')->dropDownList($arraySelecioneL) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-facebook' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
