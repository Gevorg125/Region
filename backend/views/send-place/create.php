<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SendPlace */

$this->title = Yii::t('app', 'Create Send Place');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Send Places'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="send-place-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
