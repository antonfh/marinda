<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <h3>We develop kids through music and activity</h3>

    <p>Our focus is the development, from a young age, to learn a new language. Our Aim:</p>
    <ul>
        <li>
            Introducing English to toddlers age 3-5, through music, movement and fun activities.
        </li>
        <li>
            Classes are split up into 3 categories:
            <ol>
                <li>
                    Music - Fun songs with lots of movement based around our monthly theme.
                </li>
                <li>
                    Activity/Create - 20 min of creating something, sometimes colouring and drawing and on other days
                    just fun with games and words.
                </li>
                <li>
                    Read and Rhyme - We end our class with a rhyme and book of the month.
                </li>
            </ol>
        </li>
    </ul>



    <p>
        <img src="/img/logo/AnimalWalking.png" width="100%" height="90%">
    </p>

</div>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-82059175-1', 'auto');
    ga('send', 'pageview');

</script>