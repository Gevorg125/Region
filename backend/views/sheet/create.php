<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Sheet */

$this->title = Yii::t('app', 'Create Sheet');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sheets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sheet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'finalModel' => $finalModel,
        'file' => $file,
        'avatar' => $avatar,
        'outModel' => $outModel,
    ]) ?>

</div>
