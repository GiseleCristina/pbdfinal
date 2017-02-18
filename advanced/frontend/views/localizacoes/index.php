<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LocalizacoesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Localizacoes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="localizacoes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Localizacoes', ['create'], ['class' => 'btn btn-success']) ?>
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
