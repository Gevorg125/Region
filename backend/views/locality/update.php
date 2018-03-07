<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Locality */

$this->title = Yii::t('app', 'Update Locality: {nameAttribute}', [
    'nameAttribute' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Localities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="locality-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'activeLanguages' => $activeLanguages,
        'finalModel' => $finalModel,

    ]) ?>

</div>
