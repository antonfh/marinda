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
        'brandLabel' => '<img id="elly" src="/img/logo/Elly.png"> <b>JungoJingle</b>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'bold-red navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            [
                'label' => '<i class="fa home fa-2x" aria-hidden="true"></i>',
                'url' => ['/site/index']
            ],
            [
                'label' => 'What to expect',
                'url' => ['/site/expect']
            ],
            [
                'label' => 'About',
                'url' => ['/site/about']
            ],
            [
                'label' => 'Services',
                'items' => [
                    '<li class="dropdown-header">Calendar</li>',
                    ['label' => 'Available times', 'url' => '/site/times'],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Rates and Bookings</li>',
                    ['label' => 'Rates', 'url' => '/site/rates'],
                    ['label' => 'Bookings', 'url' => '/site/bookings'],
                ],
            ],
            [
                'label' => 'Contact',
                'url' => ['/site/contact']
            ],
            /*Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )*/
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