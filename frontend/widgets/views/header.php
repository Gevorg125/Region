<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use common\models\Lang;


?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<header>

    <div id="liner">
        <div class="spraid">
            <a href="https://www.facebook.com" target="_blank">
     <span class="fa-stack fa-lg">
    <i class="fa fa-facebook fa-stack-1x"></i>
     </span></a>
            <a href="https://www.google.com" target="_blank">
         <span class="fa-stack fa-lg">
         <i class="fa fa-google" aria-hidden="true"></i>
         </span></a>
                <span class="fa-stack fa-lg">
             <i class="fa fa-phone" aria-hidden="true"></i>
                </span>

                <span class="fa-stack fa-lg">
             <i class="fa fa-envelope-o" aria-hidden="true"></i>
             </span>
        </div>
        <?php
        $res = [];
        $i = 0;
        foreach ($_menus as $key => $val) {
            $res[$i]['label'] = $key;
            $res[$i]['items'] = [];
            $j = 0;
            foreach ($val as $k => $v) {
                $res[$i]['items'][$j]['label'] = $v['name'];
                $res[$i]['items'][$j]['url'] = Yii::$app->homeUrl . "locality/" . $v['route'];
                $j++;
            };
            $i++;
        };
        NavBar::begin([
            'brandLabel' => Html::img('@web/img/logo.png'),
            'brandOptions' => ['class' => 'menu'],
            'options' => ['class' => ' navheader nav'],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'nav navbar-nav menu_items'],
            'items' => $res,
        ]); ?>
        <div class="lang non_padding  text-uppercase">
            <div class="drop-down">
                <div class="selected">
                    <div><span><?= Yii::t('app', \Yii::$app->language); ?></span></div>
                </div>
                <div class="options">

                    <ul>
                        <?php foreach ($language as $key => $value) : ?>
                            <li>
                                <i class="lng" id="<?= $value['code']; ?>"><?= $value['name']; ?></i>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <?php
        NavBar::end();
        ?>
    </div>
</header>