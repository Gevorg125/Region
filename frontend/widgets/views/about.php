<?php

/* @var $this yii\web\View */


use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;


$res = [];
$i = 0;
foreach ($result as $key => $val) {

    $res[$i]['label'] = $key;
    $res[$i]['items'] = [];

    $j = 0;
    foreach ($val as $k => $v) {

        $res[$i]['items'][$j]['label'] = $v['name'];
        $res[$i]['items'][$j]['url'] = $v['route'];
        $j++;
    };

    $i++;
};


NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $res,
]);
NavBar::end();

?>


