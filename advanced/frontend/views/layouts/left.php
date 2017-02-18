<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <!--<div class="pull-left image">
                <img src="img/icon.png" class="img-circle" alt="User Image"/>
            </div>-->
            <div class="pull-left image">
                 <h1 style="color: #fff" >
                      <span class="fa fa-user-circle"></span>
                  </h1>
            </div>
            <div class="pull-left info">
                <h4><br> Usuário: <?php
                    if(Yii::$app->user->getId()) {
                        echo Yii::$app->user->identity->getNome();
                    }else{
                        echo 'Administrador';
                    }
                    ?>
                </h4>
            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Home', 'icon' => 'fa fa-home', 'url' => ['site/index']],
                    ['label' => 'Perguntas', 'icon' => 'fa fa-list', 'url' => ['perguntas/index']],
                    ['label' => 'Texto Perguntas', 'icon' => 'fa fa-list-alt', 'url' => ['textoperguntas/index']],
                    ['label' => 'Localizações', 'icon' => 'fa fa-map-marker', 'url' => ['localizacoes/index']],
                    ['label' => 'Perguntas Finais', 'icon' => 'fa fa-trophy', 'url' => ['perguntasfinais/index']],
                    ['label' => 'Jogos', 'icon' => 'fa fa-gamepad', 'url' => ['jogo/index']],
                    ['label' => 'Times', 'icon' => 'fa fa-group', 'url' => ['times/index']],
                    ['label' => 'Jogadores', 'icon' => 'fa fa-user', 'url' => ['jogador/index']],

                ],
            ]
        )
        ?>

    </section>

</aside>
<!--['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],-->
<!--[-->
<!--'label' => 'Same tools',-->
<!--'icon' => 'fa fa-share',-->
<!--'url' => '#',-->
<!--'items' => [-->
<!--['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],-->
<!--['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],-->
<!--[-->
<!--'label' => 'Level One',-->
<!--'icon' => 'fa fa-circle-o',-->
<!--'url' => '#',-->
<!--'items' => [-->
<!--['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],-->
<!--[-->
<!--'label' => 'Level Two',-->
<!--'icon' => 'fa fa-circle-o',-->
<!--'url' => '#',-->
<!--'items' => [-->
<!--['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],-->
<!--['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],-->
<!--],-->
<!--],-->
<!--],-->
<!--],-->
<!--],-->
<!--],-->