<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PerguntasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perguntas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perguntas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Perguntas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fase',
            'id_texto_pergunta',
            'id_localizacao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
