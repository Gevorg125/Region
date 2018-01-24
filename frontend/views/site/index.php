<?php


/* @var $this yii\web\View */
use frontend\widgets\MapWidget;
use frontend\widgets\CategoryWidget;
$this->title = 'My Yii Application';

?>
<div>
    <?= MapWidget::widget(); ?>
</div>
<div>
<?= CategoryWidget::widget(); ?>
</div>