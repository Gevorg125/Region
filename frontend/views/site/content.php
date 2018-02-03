<?php


/* @var $this yii\web\View */

use frontend\widgets\ContentWidget;

$this->title = 'My Yii Application';
//var_dump ($_GET['k']);
?>
<div style="width: 100%;height: 15%;">
    <img src="./Axuryan.jpg">
</div>
<div style="float:right ">
    <?= ContentWidget::widget(); ?>
</div>

.