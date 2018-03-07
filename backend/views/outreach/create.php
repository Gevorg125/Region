<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Outreach */

$this->title = Yii::t('app', 'Ստեղծել արտակենտրոնային տվյալներ');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Outreaches'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outreach-create">


    <?= $this->render('_form', [
        'model' => $model,
        'finalModel' => $finalModel
    ]) ?>

</div>
