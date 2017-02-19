<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\JogadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jogadores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogador-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Criar Jogador', ['create'], ['class' => 'btn btn-facebook pull-right']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cor',
            'id_time:datetime',
            'fase',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
