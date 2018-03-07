<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;
use common\models\Reason;
use common\models\Relationship;
use common\models\Sheet;

/* @var $this yii\web\View */
/* @var $model common\models\HotLine */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="hot-line-form ol-lg-12">
    <h4 class="col-lg-12">Թեժ գիծ</h4>
    <?php $form = ActiveForm::begin(); ?>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
        <?= $form->field($model, 'child_id')->dropDownList(ArrayHelper::map(Sheet::find()->all(), 'id', 'id'), ['prompt' => 'Ընտրեք  երեխայի գրանցման համարը...'])->label('Թերթիկի հերթական համարը') ?>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
        <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
        <?= $form->field($model, 'phone')->textInput() ?>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
        <?= $form->field($model, 'rel_id')->dropDownList(ArrayHelper::map(Relationship::find()->all(), 'id', 'name'),['prompt' => 'Ընտրեք ...'])->label('Կապը ընտանիքի հետ') ?>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
        <?= $form->field($model, 'reason_id')->dropDownList(ArrayHelper::map(Reason::find()->all(), 'id', 'name'),['prompt' => 'Ընտրեք ...'])->label('Ծառայությանը դիմելու պատճառը') ?>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <?= $form->field($model, 'problem')->textarea(['rows' => 6]) ?>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <?= $form->field($model, 'home_visit')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <?= $form->field($model, 'events')->textarea(['rows' => 6]) ?>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <?= $form->field($model, 'date')->widget(DateTimePicker::className(), [
            'name' => 'd',
            'options' => ['placeholder' => 'Ընտրեք...'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd hh:ii:ss'
            ]
        ]) ?>
    </div>

    <div class="form-group col-md-12">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</section>
