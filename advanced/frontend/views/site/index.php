<?php

/* @var $this yii\web\View */
use yii\helpers\ArrayHelper;
$this->title = 'Home';
?>
<div class="site-index" align="center">
    <div style="margin: 50px; margin-left: 150px; margin-right: 150px;" class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: #9999FF ">
                        <h1 class="panel-title"> <h1> Treasure Admin </h1> </h1>
                        <p class="lead">Módulo administrativo do aplicativo TreusureQuest</p>
                    </div>
                    <div  style="background-color: #c3b8f4 ">
                        <p class="lead">Melhores Equipes</p>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Colocação </th>
                                    <th> Nome </th>
                                    <th> Duração </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $jogos = \common\models\Jogo::find()->all();
                            $arrayjogos = ArrayHelper::map($jogos,'jogo','jogo');
                            $arrayjogosNome = ArrayHelper::map($jogos,'jogo','idTime');
                            $arrayjogosInicio = ArrayHelper::map($jogos,'jogo','duracao');

                            //echo $array[0].'TESTE'.$array[1];
                            for($i = 1; $i <= count($arrayjogos); $i++){
                                echo '<tr>';
                                echo '<th>'.$arrayjogos[$i].'</th>';
                                echo '<th>'.$arrayjogosNome[$i].'</th>';
                                echo '<th>'.$arrayjogosInicio[$i].' segundos </th>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                            

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
