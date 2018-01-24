<?php

<<<<<<< HEAD
<<<<<<< HEAD

/* @var $this yii\web\View */

use frontend\widgets\AboutWidget;

$this->title = 'My Yii Application';

?>
<div>
    <?= AboutWidget::widget();?>
</div>

=======
=======
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
<<<<<<< HEAD
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
=======
>>>>>>> fddf13a450a45c5ddcb8a4f100c99e3fb7693619
