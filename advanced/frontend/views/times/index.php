<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TimesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Times';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="times-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Times', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'id_pergunta_final',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
