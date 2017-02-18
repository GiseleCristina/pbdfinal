<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\JogadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jogadors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogador-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jogador', ['create'], ['class' => 'btn btn-success']) ?>
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
