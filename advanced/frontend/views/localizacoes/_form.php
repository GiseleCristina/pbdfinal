<!--
<style type="text/css">.thumb-image{float:left;width:100px;position:relative;padding:5px;}</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:600" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBQowKBYapyO6kNnaGxWR-jJUsDe4JJRkk&amp;sensor=false"></script>
<script type="text/javascript" src="/var/www/html/pbdfinal/advanced/frontend/web/js/mapa.js" ></script>-->
<div class="form-group" >
    <label class="col-md-3 col-xs-12 control-label">Mapa</label>
    <div id="mapa" style="height: 250px; width: 450px" >
    </div>
    <input type="hidden" id="txtLatitude" name="txtLatitude" />
    <input type="hidden" id="txtLongitude" name="txtLongitude" />
    <!--input type="submit" value="Enviar" name="btnEnviar" /-->
</div>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Localizacoes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="localizacoes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput() ?>

    <?= $form->field($model, 'dica')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referencia')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
