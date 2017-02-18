<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\JogoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jogos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jogo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'jogo',
            'idTime:datetime',
            'tempo_inicio',
            'tempo_fim',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
