<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HotLine */

$this->title = Yii::t('app', 'Փոփոխել տվյալները: {nameAttribute}', [
    'nameAttribute' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hot Lines'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="hot-line-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
