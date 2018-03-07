<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Outreach */

$this->title = Yii::t('app', 'Փոփոխել արտակենտրոնային տվյալները');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Outreaches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="outreach-update">

    <?= $this->render('_form', [
        'model' => $model,
        'finalModel' => $finalModel
    ]) ?>

</div>
