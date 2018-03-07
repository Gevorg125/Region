<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Reason */

$this->title = Yii::t('app', 'Create Reason');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reasons'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reason-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>