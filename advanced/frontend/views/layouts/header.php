<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini"><img src="img/icon.png" width="50" height="50" alt="User Image"/></span><span class="logo-lg"><img src="img/icon.png" width="50" height="50" alt="User Image"/> Tresure Admin </span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>
    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <?= Html::a(
                        'Sign out',
                        ['/site/logout'],
                        ['data-method' => 'post', 'class' => 'text']
                    ) ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
