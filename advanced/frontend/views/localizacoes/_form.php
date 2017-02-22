<style type="text/css">.thumb-image{float:left;width:100px;position:relative;padding:5px;}</style>
<style type="text/css">
    .input-text{
        padding-left: 30px;
        padding-right: 30px;
        outline: none;
        border: none;
        border-bottom: 2px solid #0000aa;
        margin-bottom: 12px;
        background: transparent;
        font: 18px 'Roboto';
        color:  #000000 ;
        height: 45px;

    }
    ::-webkit-input-placeholder {
        color: #8a8a8a;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBQowKBYapyO6kNnaGxWR-jJUsDe4JJRkk&amp;sensor=false"></script>
<script type="text/javascript" src="js/mapa.js" ></script>
<div class="panel-body">
    <div class="form-group" >
        <div class="col-md-7 col-xs-12 control-label">
            <b>Selecione uma localização no mapa arrastando o marcador para
                o local desejado, em seguida copie-as para as entradas do cadastro.
            </b>
        </div>
        <br><br>
        <div id="mapa" style="height: 300px; width: 650px" >
        </div>
    </div>
</div>
<div class="panel-body">
    <div class="form-group" >
        <input type="text" class="input-text" placeholder="Latitude" id="txtLatitude" name="txtLatitude" />
        <input type="text" class="input-text" placeholder="Longitude" id="txtLongitude" name="txtLongitude" />

    </div>
</div>


<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Localizacoes */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel-body">
    <div class="form-group" >
        <div class="localizacoes-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'latitude')->textInput() ?>

            <?= $form->field($model, 'longitude')->textInput() ?>

            <?= $form->field($model, 'dica')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'referencia')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-facebook' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

