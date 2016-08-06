<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\icons\Icon;


AppAsset::register($this);
Icon::map($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="google-site-verification" content="5mCSN9PgvneoruV26Yu1fRjaY2AwxG7VJeB7G7ght78"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<img id="elly" src="/img/logo/Elly.png"> <b class="navbar_bold_red">Jungo</b><b class="navbar_bold_blue"> J</b><b>ingle</b>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'bold-red navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => false,
        'items' => [
            [
                'label' => Icon::show('home', ['class' => 'fa-lg']),
                'url' => ['/site/index']
            ],
            [
                'label' => '<span class="glyphicon glyphicon-eye-open"></span> What we do',
                'url' => ['/site/expect']
            ],
            [
                'label' => '<span class="glyphicon glyphicon-info-sign"></span> About',
                'url' => ['/site/about']
            ],
            [
                'label' => '<span class="glyphicon glyphicon-calendar"></span> Services',
                'items' => [
                    '<li class="dropdown-header">Calendar</li>',
                    ['label' => '<span class="glyphicon glyphicon-hourglass"></span> Available times', 'url' => '/site/times'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Rates and Bookings</li>',
                    ['label' => '<span class="glyphicon glyphicon-usd"></span> Rates', 'url' => '/site/rates'],
                    ['label' => '<span class="glyphicon glyphicon-book"></span> Bookings', 'url' => '/site/bookings'],
                ],
            ],
            [
                'label' => '<span class="glyphicon glyphicon-envelope"></span> Contact',
                'url' => ['/site/contact']
            ],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; JungoJingle <?= date('Y') ?></p>

        <p class="pull-right"><a class="notag" href="http://www.youtube.com/channel/UC0sBuwz-2dVTAQdF076NYOA"
                                 target="_blank">
                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
            </a>
        </p>
        <i class="spacer"></i>
        <p class="pull-right"><a class="notag" href="https://www.youtube.com/channel/UC0sBuwz-2dVTAQdF076NYOA"
                                 target="_blank">
                <i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i>
            </a>
        </p>
        <i class="spacer"></i>
        <p class="pull-right"><a class="notag" href="https://plus.google.com/+Jungojingle" target="_blank">
                <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
                </i>
            </a>
        </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-82059175-1', 'auto');
    ga('send', 'pageview');

</script>