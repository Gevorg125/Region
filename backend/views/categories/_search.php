<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\CategoriesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categories-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category_parent_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'route') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'data') ?>

    <?php // echo $form->field($model, 'order') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'img_name') ?>

    <?php // echo $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'images') ?>

    <?php // echo $form->field($model, 'videos') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
