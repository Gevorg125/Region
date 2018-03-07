<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sheet */

$this->title = Yii::t('app', ' {nameAttribute}', [
    'nameAttribute' => $model->name,
]);

?>
<div class="sheet-update">


    <?= $this->render('_form', [
        'model' => $model,
        'finalModel' => $finalModel,
        'file' => $file,
        'avatar' => $avatar,
        'outModel' => $outModel,
    ]) ?>

</div>
