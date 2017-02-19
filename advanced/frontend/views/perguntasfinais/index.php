<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PerguntasfinaisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perguntas Finais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perguntasfinais-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Criar Pergunta Final', ['create'], ['class' => 'btn btn-facebook pull-right']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dica1',
            'dica2',
            'dica3',
            'dica4',
            // 'id_texto_pergunta',
            // 'id_localizacao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
