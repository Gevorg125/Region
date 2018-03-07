<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\HotLine */

$this->title = Yii::t('app', 'Create Hot Line');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hot Lines'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hot-line-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
