<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\MainAsset;
use common\widgets\Alert;

MainAsset::register($this);
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
    <div class="top-info">
        <div class="container">
            <div class="pull-right">
                <span style="margin-right: 10px"><img style="margin-right: 5px" height="17" src="https://steamuserimages-a.akamaihd.net/ugc/87099658851961614/4F0CFA57D2C8596C894125A73095595F6843143F/?interpolation=lanczos-none&output-format=jpeg&output-quality=95&fit=inside|128:128&composite-to%3D%2A%2C%2A%7C128%3A128&background-color=black">+78 (952) 533 88 90</span> <span><button style="display:inline" class="b-phones-bar__call b-btn b-btn_color_ocean b-btn_type_ico" onclick=""><span class="fa fa-phone h-mr-5"></span> Перезвоните мне</button></span>
            </div>
        </div>
    </div>
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar',
        ],
    ]);
    $menuItems = [

        ['label' => 'О нас', 'url' => ['/site/about']],
        ['label' => 'Контакти', 'url' => ['/site/contact'],'class'=>'btn btn-success'],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Вход', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
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

    <div class="">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

        <?= $content ?>
    </div>
</div>

<!--<footer>-->
<!--    <div class="container">-->
<!--        <div class="row no-margin">-->
<!--            <div class="col-md-3 text">-->
<!--                <div class="logo">-->
<!--                    <img src="assets/img/logo_white.png" class="normal" alt="logo">-->
<!--                    <img src="assets/img/logo_white@2x.png" class="retina" alt="logo">-->
<!--                </div>-->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>-->
<!--                <div>-->
<!--                    <ul class="social">-->
<!--                        <li>Find us on</li>-->
<!--                        <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                        <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 text small">-->
<!--                <h4 class="heading white margin-bottom-small weight-300">Head Office</h4>-->
<!--                <p>Bussible Company <br>-->
<!--                    322 Moon St, Venice, 1231, Italy<br>-->
<!--                    Mon. - Fri., 9 a.m. - 6.00 p.m.</p>-->
<!--            </div>-->
<!--            <div class="col-md-2 text small">-->
<!--                <h4 class="heading white margin-bottom-small weight-300">Important link</h4>-->
<!--                <ul class="info">-->
<!--                    <li><a href="">Home</a></li>-->
<!--                    <li><a href="">Who we are</a></li>-->
<!--                    <li><a href="">Support</a></li>-->
<!--                    <li><a href="">FAQ</a></li>-->
<!--                    <li><a href="">Contact</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="col-md-4 text">-->
<!--                <h4 class="heading white margin-bottom-small weight-300">News Subscribtion</h4>-->
<!--                <p>Subscribe to our newsletter to get all our news in your inbox.</p>-->
<!--                <div id="newsletter-form">-->
<!--                    <form class="search-form">-->
<!--                        <div class="form-input">-->
<!--                            <input placeholder="Your email ID" type="text">-->
<!--                                    <span class="form-button">-->
<!--                                        <button type="button">Sign Up</button>-->
<!--                                    </span>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->

<footer class="footer" id="footer">

    <!-- ========== top footer ========== -->
    <div class="container footer-top">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-6">
                <h5 class="footer-title underline">Company</h5>
                <ul class="ul">
                    <li><a href="#" class="trans">About Company</a></li>
                    <li><a href="#" class="trans">Our Team</a></li>
                    <li><a href="#" class="trans">Our Vision</a></li>
                    <li><a href="#" class="trans">Join Us</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <h5 class="footer-title underline">Services</h5>
                <ul class="ul">
                    <li><a href="#" class="trans">Website Design</a></li>
                    <li><a href="#" class="trans">Web Development</a></li>
                    <li><a href="#" class="trans">Graphic Design</a></li>
                    <li><a href="#" class="trans">Content Writing</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <h5 class="footer-title underline">Features</h5>
                <ul class="ul">
                    <li><a href="#" class="trans">Headers</a></li>
                    <li><a href="#" class="trans">Footers</a></li>
                    <li><a href="#" class="trans">Menu Styles</a></li>
                    <li><a href="#" class="trans">Sliders</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <h5 class="footer-title underline">Shortcodes</h5>
                <ul class="ul">
                    <li><a href="#" class="trans">Call to actions</a></li>
                    <li><a href="#" class="trans">Counters</a></li>
                    <li><a href="#" class="trans">Dropcaps</a></li>
                    <li><a href="#" class="trans">Lightbox</a></li>
                </ul>
            </div>

            <!-- ========== right side ========== -->
            <div class="col-md-4 vcenter text-right">
                <img src="http://www.underconsideration.com/brandnew/archives/salt_logo_detail.png" alt="Salt - HTML5 theme" class="img-responsive mb20 pull-right" width="100">
                <div class="clearfix">
                    <p class="footer-desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                </div>
            </div>

        </div> <!-- end row -->
    </div> <!-- end footer-top -->

    <!-- ========== footer-middle ========== -->
    <div class="container footer-middle">
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="trans pr10 pl10 "><i class="fa fa-facebook"></i></a>
                <a href="#" class="trans pr10 pl10 "><i class="fa fa-twitter"></i></a>
                <a href="#" class="trans pr10 pl10 "><i class="fa fa-google-plus"></i></a>
                <a href="#" class="trans pr10 pl10 "><i class="fa fa-dribbble"></i></a>
                <a href="#" class="trans pr10 pl10 "><i class="fa fa-youtube"></i></a>
                <a href="#" class="trans pr10 pl10 "><i class="fa fa-vimeo"></i></a>
                <a href="#" class="trans pr10 pl10 "><i class="fa fa-linkedin"></i></a>
            </div> <!-- end col-md-6 -->
            <div class="col-md-6 text-right">
                <h6 class="footer-title lowercase"><i class="fa fa-phone"></i> +1 (123) 456-7890 <span class="ml10 mr10">|</span> <i class="fa fa-envelope"></i> support@themesease.com</h6>
            </div>
        </div> <!-- end row -->
    </div> <!-- end footer-middle -->

    <!-- ========== Footer - last section ========== -->
    <div class="footer-last">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    © 2016 ThemesEase
                </div>
                <div class="col-md-6 text-right">
                    <a href="#" class="mr10">Terms of Use</a> <a href="#">Privacy Policy</a>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- end footer-last -->

    <!-- ========== Scroll to top button ========== -->
    <div class="scroll-to-top trans" style="bottom: 0px;"><i class="fa fa-angle-up"></i></div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
