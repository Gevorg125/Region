<?php

/* @var $this yii\web\View */


use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$res = [];
$i = 0;
foreach ($result as $key => $val) {

    $res[$i]['label'] = $key;
    $res[$i]['items'] = [];

    $j = 0;
    foreach ($val as $k => $v) {

        $res[$i]['items'][$j]['label'] = $v['name'];
        $res[$i]['items'][$j]['url'] = '?r=locality&k=' . $v['route'];
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

//_________________SEARCH

$form = ActiveForm::begin([
    'action'  => ['search'],
    'method'  => 'get',
    'options' => ['class' => 'form-inline navbar-left'],
]);?>
<div class="form-group">

    <label class="control-label" for="search"> </label>


    <input id="search" name="search" placeholder="Search Here" class="form-control input-md" required value="" type="text">

</div>

<div class="form-group">
    <?=Html::submitButton('Search', ['class' => 'btn btn-primary'])?>

</div>

<?php ActiveForm::end();?>


//
<div class="lang non_padding  text-uppercase">
    <div class="drop-down">
        <div class="selected">

            <div><span>Eng</span></div>
        </div>
        <div class="options">

            <ul>
                <li>
                    <i class="lng" id="en">Eng</i>
                </li>
                <li>
                    <i class="lng" id="am">Հայ</i>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php
NavBar::end();

?>



