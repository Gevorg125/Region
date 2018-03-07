<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\SheetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sheet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'prev_ids') ?>

    <?= $form->field($model, 'surname') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'fname') ?>

    <?php // echo $form->field($model, 'alias') ?>

    <?php // echo $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'city_village') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'passport_ser') ?>

    <?php // echo $form->field($model, 'passport_number') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'nation') ?>

    <?php // echo $form->field($model, 'birthplace') ?>

    <?php // echo $form->field($model, 'region_id') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'reason_delay_text') ?>

    <?php // echo $form->field($model, 'gurdian') ?>

    <?php // echo $form->field($model, 'bervq') ?>

    <?php // echo $form->field($model, 'out_home_date') ?>

    <?php // echo $form->field($model, 'ngbh') ?>

    <?php // echo $form->field($model, 'accounting_department') ?>

    <?php // echo $form->field($model, 'dprkax') ?>

    <?php // echo $form->field($model, 'school_phone') ?>

    <?php // echo $form->field($model, 'not_attend_mount') ?>

    <?php // echo $form->field($model, 'not_attend_year') ?>

    <?php // echo $form->field($model, 'out_education') ?>

    <?php // echo $form->field($model, 'off_surname') ?>

    <?php // echo $form->field($model, 'off_name') ?>

    <?php // echo $form->field($model, 'off_facility_name') ?>

    <?php // echo $form->field($model, 'off_job') ?>

    <?php // echo $form->field($model, 'absenteeism_date') ?>

    <?php // echo $form->field($model, 'quality_clothes') ?>

    <?php // echo $form->field($model, 'hnsn') ?>

    <?php // echo $form->field($model, 'berum') ?>

    <?php // echo $form->field($model, 'ngb') ?>

    <?php // echo $form->field($model, 'michpast') ?>

    <?php // echo $form->field($model, 'yntbt') ?>

    <?php // echo $form->field($model, 'yntht') ?>

    <?php // echo $form->field($model, 'yntmt') ?>

    <?php // echo $form->field($model, 'yntsat') ?>

    <?php // echo $form->field($model, 'ynthht') ?>

    <?php // echo $form->field($model, 'bazmkh') ?>

    <?php // echo $form->field($model, 'out_date') ?>

    <?php // echo $form->field($model, 'temp_out_date') ?>

    <?php // echo $form->field($model, 'out_set_date') ?>

    <?php // echo $form->field($model, 'ughhanv') ?>

    <?php // echo $form->field($model, 'send_region') ?>

    <?php // echo $form->field($model, 'send_city') ?>

    <?php // echo $form->field($model, 'send_street') ?>

    <?php // echo $form->field($model, 'send_phone') ?>

    <?php // echo $form->field($model, 'cv') ?>

    <?php // echo $form->field($model, 'hard_working_start') ?>

    <?php // echo $form->field($model, 'hard_working_end') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
