<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Locality */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="locality-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'localityName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'localityLat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'localityLong')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
