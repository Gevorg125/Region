<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\LocalitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="locality-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'id') ?>
=======
    <?= $form->field($model, 'ID') ?>
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2

    <?= $form->field($model, 'localityName') ?>

    <?= $form->field($model, 'localityLat') ?>

    <?= $form->field($model, 'localityLong') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
