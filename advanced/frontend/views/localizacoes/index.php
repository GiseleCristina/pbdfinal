<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LocalizacoesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Localizações';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="localizacoes-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Criar Localizações', ['create'], ['class' => 'btn btn-facebook pull-right']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'latitude',
            'longitude',
            'dica',
            'referencia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
