<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TextoperguntasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Texto das Perguntas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="textoperguntas-index">

   <!-- <h1> Perguntas </h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nova Pergunta', ['create'], ['class' => 'btn btn-facebook pull-right']) ?>
    </p>
    <?= GridView::widget([
        'summary' =>'',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'texto:ntext',
            //'op1',
            //'op2',
            //'op3',
            // 'op4',
            // 'op5',
            // 'resposta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
