<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <!--<div class="pull-left image">
                <img src="img/icon.png" class="img-circle" alt="User Image"/>
            </div>-->
            <div class="pull-left image">
                 <h4 style="color: #fff" >
                       <span class="fa fa-user-circle"></span>
                     Usuário: <?php
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
                    ['label' => 'Perguntas', 'icon' => 'fa fa-list-alt', 'url' => ['textoperguntas/index']],
                    ['label' => 'Localizacoes', 'icon' => 'fa fa-map-marker', 'url' => ['localizacoes/index']],
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