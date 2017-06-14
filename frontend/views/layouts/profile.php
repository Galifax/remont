<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

use frontend\widgets\WLang;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <?php
    NavBar::begin([
//            'brandLabel' => '<img src="../../web/images/TSB39_whrJ8.jpg" style="float: left; margin-right: 12px;margin-top:-20px;width:60px"><span class="logo-slogan">Imperial Food Company</span><div class="slogan" >Фрукты и овощи</div>',
        'brandLabel' => '<span class="logo-slogan"><i class="fa fa-wrench"></i>RMNT</span>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar ',
        ],
            'innerContainerOptions' => ['class' => 'container-fluid'],


    ]);


    $menuItems = [

//            ['label' => 'Главная', 'url' => ['/site/index']],
//            ['label' => 'О нас', 'url' => ['/site/about']],
//            ['label' => 'Контакти', 'url' => ['/site/contact']],
    ];
    $menuItems[] = '<li class="drop-lang">'. WLang::widget(). '</li>';
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Вход', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                Yii::t('main', 'Выйти') . ' (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';

    }



    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);



    NavBar::end();
    ?>

    <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>



        <div class="wrap-content">
            <div class="row">
                <div class="col-md-1 left-sidebar">
                    <ul>
                        <li><a href="<?= Url::to(['/order']) ?>"><i class="fa fa-list" aria-hidden="true">
                                    <p><?= Yii::t('main', 'Заказы') ?></p></a></i></li>
                        <li><a href="<?= Url::to(['/order']) ?>"><i class="fa fa fa-folder-open" aria-hidden="true">
                                    <p><?= Yii::t('main', 'Склад') ?></p></a></i></li>
                        <li><a href="<?= Url::to(['/client']) ?>"><i class="fa fa-user-circle" aria-hidden="true">
                                    <p><?= Yii::t('main', 'Клиенты') ?></p></a></i></li>
                        <li><a href="<?= Url::to(['/order']) ?>"><i class="fa fa-phone-square" aria-hidden="true">
                                    <p><?= Yii::t('main', 'Звонки') ?></p></a></i></li>
                        <li><a href="<?= Url::to(['/order']) ?>"><i class="fa fa-file-text" aria-hidden="true">
                                    <p><?= Yii::t('main', 'Отчеты') ?></p></a></i></li>
                        <li><a href="<?= Url::to(['/order']) ?>"><i class="fa fa-cogs" aria-hidden="true">
                                    <p><?= Yii::t('main', 'Настр.') ?></p></a></i></li>
                        <li><a href="<?= Url::to(['/site/logout']) ?>"><i class="fa fa-sign-out " aria-hidden="true">
                                    <p><?= Yii::t('main', 'Выйти') ?></p></a></i></li>
                    </ul>
                </div>
                <div class="col-md-11 content">
                    <?= $content ?>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
