<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Locality */

$this->title = Yii::t('app', 'Update Locality: {nameAttribute}', [
<<<<<<< HEAD
    'nameAttribute' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Localities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
=======
    'nameAttribute' => $model->ID,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Localities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="locality-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
