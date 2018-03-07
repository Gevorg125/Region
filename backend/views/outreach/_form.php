<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Region;
use common\models\District;
use common\models\Sheet;

/* @var $this yii\web\View */
/* @var $model common\models\Outreach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="outreach-form">

    <?php $form = ActiveForm::begin(); ?>


    <section class="form_item col-lg-12">
        <h4>Տեղեկատվություն երեխայի ընտանիքի մասին</h4>
        <div class="col-lg-12 col-md-12">
            <div class="col-lg-2 col-md-3">
                <?= $form->field($model, 'child_id')->
                dropDownList(ArrayHelper::map(Sheet::find()->all(), 'id', 'id'), ['prompt' => 'Ընտրեք  երեխայի գրանցման համարը...'])->label('Թերթիկի հերթական համարը'); ?>
            </div>
        </div>
        <?php $action = $this->context->action->id; ?>
        <div class="row">
            <?php if ($action === "update"): ?>
                <?php foreach ($finalModel as $index => $item): ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php if ($index == 1): ?>
                            <h4>Երեխայի հոր տվյալները</h4>
                        <?php else: ?>
                            <h4>Երեխայի մոր տվյալները</h4>
                        <?php endif; ?>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel[$index], "[family][$index]name", ["labelOptions" => ["label" => "Անուն"]])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel[$index], "[family][$index]surname", ["labelOptions" => ["label" => 'Ազգանուն']])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel[$index], "[family][$index]fname", ["labelOptions" => ["label" => 'Հայրանուն']])->textInput(); ?>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel[$index], "[family][$index]behavior", ["labelOptions" => ["label" => "Կարգավիճակ"]])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel[$index], "[family][$index]work_place", ["labelOptions" => ["label" => 'Աշխատանքային վայր']])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel[$index], "[family][$index]region", ["labelOptions" => ["label" => "Մարզ"]])
                                ->dropDownList(ArrayHelper::map(Region::find()->all(), 'id', 'name'), ['prompt' => 'Ընտրել․․․']); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel[$index], "[family][$index]city", ["labelOptions" => ["label" => "Քաղաք"]])
                                ->dropDownList(ArrayHelper::map(District::find()->all(), 'id', 'name'), ['prompt' => 'Ընտրել․․․']); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel[$index], "[family][$index]street", ["labelOptions" => ["label" => "Փողոց"]])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel[$index], "[family][$index]home", ["labelOptions" => ["label" => "Տուն"]])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel[$index], "[family][$index]apartment", ["labelOptions" => ["label" => "Բնակարան"]])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel[$index], "[family][$index]phone", ["labelOptions" => ["label" => "Հեռախոս"]])->textInput(); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <?php for ($index = 1; $index <= 2; $index++): ?>
                    <div class="form_item col-lg-12">
                        <?php if ($index == 1): ?>
                            <h4>Երեխայի հոր տվյալները</h4>
                        <?php else: ?>
                            <h4>Երեխայի մոր տվյալները</h4>
                        <?php endif; ?>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel, "[family][$index]name", ["labelOptions" => ["label" => "Անուն"]])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel, "[family][$index]surname", ["labelOptions" => ["label" => 'Ազգանուն']])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel, "[family][$index]fname", ["labelOptions" => ["label" => 'Հայրանուն']])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel, "[family][$index]behavior", ["labelOptions" => ["label" => "Կարգավիճակ"]])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel, "[family][$index]work_place", ["labelOptions" => ["label" => "Աշխատանքային վայր"]])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel, "[family][$index]region", ["labelOptions" => ["label" => "Մարզ"]])
                                ->dropDownList(ArrayHelper::map(Region::find()->all(), 'id', 'name'), ['prompt' => 'Ընտրել․․․']) ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel, "[family][$index]city", ["labelOptions" => ["label" => "Քաղաք"]])
                                ->dropDownList(ArrayHelper::map(District::find()->all(), 'id', 'name'), ['prompt' => 'Ընտրել․․․']) ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel, "[family][$index]street", ["labelOptions" => ["label" => "Փողոց"]])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel, "[family][$index]home", ["labelOptions" => ["label" => "Տուն"]])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel, "[family][$index]apartment", ["labelOptions" => ["label" => "Բնակարան"]])->textInput(); ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= $form->field($finalModel, "[family][$index]phone", ["labelOptions" => ["label" => "Հեռախոս"]])->textInput(); ?>
                        </div>

                    </div>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?= $form->field($model, 'home')->textarea(['rows' => 6]) ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?= $form->field($model, 'inform')->textarea(['rows' => 6]) ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <?= $form->field($model, 'problem')->textarea(['rows' => 6]) ?>
            </div>
        </div>
    </section>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
