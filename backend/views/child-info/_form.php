<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model common\models\ChildInfo */
/* @var $excursus common\models\Excursus */
/* @var $childcurrentinfo common\models\ChildCurrentInfo */
/* @var $guardian common\models\Guardian */
/* @var $reasondelay common\models\ReasonDelay */
/* @var $region common\models\Region */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="child-info-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <!--    --><? //= $form->field($model, 'img_file')->fileInput(['class' => 'btn btn-default']) ?>

    <div class="content">
        <section class=" col-lg-12 tops">
            <div class="col-lg-6">
                <?= $form->field($model, 'count_from_center')->textInput() ?>
            </div>
            <div class="col-lg-12">
                <?= $form->field($model, 'prev_ids')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-lg-12 info">
                <div class="col-lg-12">
                    <div class="col-lg-3">
                        <?= $form->field($model, 'birth_date')->widget(DatePicker::className(), [
                            'name' => 'birth_date',
                            'options' => ['placeholder' => 'Select issue date ...'],
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'todayHighlight' => true
                            ]
                        ])
                        ?>
                    </div>
                    <div class="col-lg-3">
                        <?= $form->field($model, 'birthplace')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3">
                        <?= $form->field($model, 'city_village')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-3">
                        <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-lg-3">
                        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                    </div>
                    <div class="col-lg-3">
                        <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-lg-3">
                        <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-6 pass">
                        <?= $form->field($model, 'passport_birth_certificate')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-lg-3">
                        <?= $form->field($model, 'gender')->dropDownList(['ԱՐԱԿԱՆ' => 'ԱՐԱԿԱՆ', 'ԻԳԱԿԱՆ' => 'ԻԳԱԿԱՆ',], ['prompt' => '']) ?>
                    </div>
                    <div class="col-lg-3">
                        <?= $form->field($model, 'nation')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-lg-12 child-current-info">
            <div class="col-lg-12 text-center">
                <p class="child-current-info-title">Երեխայի ընթացիկ հասցեն </p>
            </div>
            <div class="col-lg-4">
                <?= $form->field($childcurrentinfo['childs'], 'name')->dropDownList(ArrayHelper::map($region, 'id', 'name'))->label('Մարզը') ?>

            </div>
            <div class="col-lg-2">
                <?php Pjax::begin(['id' => 'oneee']); ?>


                <?= $form->field($childcurrentinfo['child'], 'city_village')->dropDownList(ArrayHelper::map($district, 'id', 'name'))->label('շրջան') ?>

                <?php echo $this->render('test') ?>


                <?php Pjax::end(); ?>

            </div>
            <div class="col-lg-2">
                <?= $form->field($childinfo, 'city_village')->textInput()->label('Քաղաք / Գյուղ') ?>
            </div>
            <div class="col-lg-2">
                <?= $form->field($childinfo, 'address')->textInput()->label('Փողոց շենք Բնակ․') ?>
            </div>
            <div class="col-lg-2">
                <?= $form->field($childcurrentinfo['child'], 'phone')->textInput()->label('Հեռախոս') ?>

            </div>
        </section>
        <section class="col-lg-12 guardian">
            <div class="col-lg-12 text-center">
                <p class="guardian-title"> Տվյալներ 1-ին խնամակալների մասին (1ԽՆ)</p>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-3">
                    <?php // $form->field($guardian, 'surname')->textInput()->label('1Խն-Ազգանունը') ?>
                </div>
                <div class="col-lg-2">
                    <?php // $form->field($guardian, 'name')->textInput()->label('1Խն-Անուն') ?>
                </div>
                <div class="col-lg-2">
                    <?php // $form->field($guardian, 'fname')->textInput()->label('1Խն-Հայրանուն') ?>
                </div>
                <div class="col-lg-2">
                    <?php //$form->field($guardian, 'status_id')->dropDownList(['1'=>'Ամուսնալուծված','2'=>'Մահացած','3'=>'Ողջ','4'=>'Չունի'])->label('1Խն-Վիճակը') ?>

                </div>
                <div class="col-lg-2">
                    <?php // $form->field($guardian, 'relation')->textInput()->label('1Խն-Ազգակցական կապը') ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-3">
                    <?php // $form->field($guardian, 'country')->textInput()->label('1ԽՆ հասցեն։ Երկիր') ?>
                </div>
                <div class="col-lg-3">
                    <?php //$form->field($guardian, 'region_id')->textInput()->label('1ԽՆ-Մարզ') ?>
                </div>
                <div class="col-lg-2">
                    <?php // $form->field($guardian, 'city')->textInput()->label('1ԽՆ – Քաղաք/Գյուղ') ?>

                </div>
                <div class="col-lg-2">
                    <?php // $form->field($guardian, 'address')->textInput()->label('1ԽՆ – Փողոց շենք Բնակ') ?>
                </div>
                <div class="col-lg-2">
                    <?php //$form->field($guardian, 'phone')->textInput()->label('1ԽՆ-Հեռախոս') ?>
                </div>
            </div>
        </section>
        <?php if (!empty($reasondelay)): ?>
            <section class="col-lg-12  reason-delay">
                <div class="col-lg-7">
                    <?= $form->field($reasondelay, 'reason_delay_text')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($reasondelay, 'out_home_date')->widget(DatePicker::className(), [
                        'name' => 'out_home_date',
                        'options' => ['placeholder' => 'Select issue date ...'],
                        'pluginOptions' => [
                            'format' => 'yyyy-mm-dd',
                            'todayHighlight' => true
                        ]
                    ])
                    ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($reasondelay, 'accounting_department')->textInput()->label('Հաշբառում Ն/Գ բայնում') ?>
                </div>
            </section>
            <section class="col-lg-12 reason-delay1 ">
                <div class="col-lg-2">
                    <?= $form->field($reasondelay, 'school_number')->textInput()->label('Դպրոցի համարը') ?>
                </div>
                <div class="col-lg-4">
                    <?= $form->field($reasondelay, 'school_address')->textInput()->label('Դպրոցի հասցեն') ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($reasondelay, 'school_phone')->textInput()->label('Դպրոցի հեռախոսը') ?>
                </div>
                <div class="col-lg-3">
                    <?php echo '<label>Դպրոց չհաճախելու մասին, տարին․</label>';
                    //                echo $form->field($reasondelay, 'out_of_school_date')->widget(DatePicker::className(), [
                    //                    'name' => 'out_of_school_date',
                    //                    'options' => ['placeholder' => 'Select issue date ...'],
                    //                    'pluginOptions' => [
                    //                        'format' => 'yyyy-mm-dd',
                    //                        'todayHighlight' => true
                    //                    ]
                    //                ])
                    ?>
                </div>
                <div class="col-lg-1">

                </div>
            </section>
            <section class="col-lg-12 reason-delay2">
                <div class="col-lg-2">
                    <?= $form->field($reasondelay, 'out_education')->textInput()->label('Բերող պաշտոնյայի ազգանունը') ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($reasondelay, 'off_name')->textInput()->label('Բերող պաշտոնյայի անունը') ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($reasondelay, 'off_facility_name')->textInput()->label('Բերող պաշտոնյայի Հաստատության անվ․') ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($reasondelay, 'off_job')->textInput()->label('Բերող պաշտոնյայի պաշտոն') ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($reasondelay, 'quality_clothes')->dropDownList(['ԲԱՎԱՐԱՐ' => 'ԲԱՎԱՐԱՐ', 'ՄիՋԻՆ' => 'ՄիՋԻՆ', 'ՎԱՏ' => 'ՎԱՏ'])->label('Երեխայի հագուստը ընդունման պահին.') ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($reasondelay, 'start_date', ['template' => "<label class='col-lg-12 control-label'>կենտրոնից բերվելու ամսաթիվը</label><div>{input}</div>\n{hint}\n{error}"
                    ])->widget(DatePicker::className(),
                        [
                            'name' => 'start_date',
                            'options' => ['placeholder' => 'Select issue date ...'],
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'todayHighlight' => true
                            ]
                        ]);
                    ?>
                </div>
            </section>
            <section class="col-lg-12 reason-delay2">
                <div class="col-lg-2">
                    <?= $form->field($reasondelay, 'end_date', ['template' => "<label class='col-lg-12 control-label'>կենտրոնից դուրս գտվելու ամսաթիվը</label><div class='col-lg-12''>{input}</div>\n{hint}\n{error}"
                    ])->widget(DatePicker::className(),
                        [
                            'name' => 'end_date',
                            'options' => ['placeholder' => 'Select issue date ...'],
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'todayHighlight' => true
                            ]
                        ]);

                    ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($excursus, 'out_data', ['template' => "<label class='col-lg-12 control-label'>1.Ինքնակամ հեռացում</label><div class='col-lg-12''>{input}</div>\n{hint}\n{error}"
                    ])->widget(DatePicker::className(),
                        [
                            'name' => 'out_data',
                            'options' => ['placeholder' => 'Select issue date ...'],
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'todayHighlight' => true
                            ]
                        ]);
                    ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($excursus, 'set_data', ['template' => "<label class='col-lg-12 control-label'>1.վերադարձ</label><div class='col-lg-12''>{input}</div>\n{hint}\n{error}"
                    ])->widget(DatePicker::className(),
                        [
                            'name' => 'set_data',
                            'options' => ['placeholder' => 'Select issue date ...'],
                            'pluginOptions' => [
                                'format' => 'yyyy-mm-dd',
                                'todayHighlight' => true
                            ]
                        ]);
                    ?>
                </div>
                <div class="col-lg-2">
                    <?php echo '<label>2.Ինքնակամ հեռացում․</label>';
                    //                echo DatePicker::widget([
                    //                    'name' => 'out_data)',
                    //                    'value' => date('Y-M-d', strtotime('+2 days')),
                    //                    'options' => ['placeholder' => '2.Ինքնակամ հեռացում'],
                    //                    'pluginOptions' => [
                    //                        'format' => 'yyyy-mm-dd',
                    //                        'todayHighlight' => false
                    //                    ]
                    //                ]);
                    ?>
                </div>
                <div class="col-lg-2">
                    <?php echo '<label>2.վերադարձ</label>';
                    //                echo DatePicker::widget([
                    //                    'name' => 'set_data)',
                    //                    'value' => date('Y-M-d', strtotime('+2 days')),
                    //                    'options' => ['placeholder' => '2.վերադարձ'],
                    //                    'pluginOptions' => [
                    //                        'format' => 'yyyy-mm-dd',
                    //                        'todayHighlight' => false
                    //                    ]
                    //                ]);
                    ?>
                </div>
                <div class="col-lg-2">
                    <div class="col-lg-6">
                        <?php echo '<label>3.Ինքնակամ հեռացում</label>';
                        //                    echo DatePicker::widget([
                        //                        'name' => 'out_data)',
                        //                        'value' => date('Y-M-d', strtotime('+2 days')),
                        //                        'options' => ['placeholder' => '3.Ինքնակամ հեռացում'],
                        //                        'pluginOptions' => [
                        //                            'format' => 'yyyy-mm-dd',
                        //                            'todayHighlight' => false
                        //                        ]
                        //                    ]);
                        ?>

                    </div>
                    <div class="col-lg-6">
                        <?php echo '<label>3.վերադարձ</label>';
                        //                    echo DatePicker::widget([
                        //                        'name' => 'set_data)',
                        //                        'value' => date('Y-M-d', strtotime('+2 days')),
                        //                        'options' => ['placeholder' => '3.վերադարձ'],
                        //                        'pluginOptions' => [
                        //                            'format' => 'yyyy-mm-dd',
                        //                            'todayHighlight' => false
                        //                        ]
                        //                    ]);
                        ?>
                    </div>
                </div>
            </section>
            <section class="col-lg-12 reason-delay2">
                <div class="col-lg-3">
                    <?= $form->field($reasondelay, 'send_place_id')->dropDownList(ArrayHelper::map($sendplace, 'id', 'name'))->label('Ուղարկված Վայրը') ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($reasondelay, 'send_region_id')->dropDownList(ArrayHelper::map($region, 'id', 'name'))->label('Ուղարկված հաստատության մարզը') ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($reasondelay, 'send_city_vellage')->textInput()->label('Ուղարկված հաստատության քաղ․/գյուղը') ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($reasondelay, 'send_address')->textInput()->label('Ուղարկված հաստատության փողոցը') ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($reasondelay, 'send_phone')->textInput()->label('Ուղարկված հաստատության հեռախոսը') ?>
                </div>
            </section>
        <?php endif; ?>
        <section class="col-lg-12">
            <div class="col-lg-5">
                <?= $form->field($file, 'patchar')->fileInput(['class' => 'btn btn-default'])->label('Ընտանիքի բնութագրիչը և բերման պատճառները'); ?>
            </div>
            <div class="col-lg-5">
            </div>
            <!--            <div class="col-lg-12">-->
            <!--                <div class="col-lg-2 file">-->
            <!--                    --><? //= $form->field($file, 'bj')->fileInput(['class' => 'btn btn-default'])->label('Բյիշկ'); ?>
            <!--                </div>-->
            <!--                <div class="col-lg-2 file">-->
            <!--                    --><? //= $form->field($file, 'ho')->fileInput(['class' => 'btn btn-default'])->label('Հոգեբան'); ?>
            <!--                </div>-->
            <!--                <div class="col-lg-2 file">-->
            <!--                    --><? //= $form->field($file, 'mn')->fileInput(['class' => 'btn btn-default'])->label('Մանկավարժ'); ?>
            <!--                </div>-->
            <!--                <div class="col-lg-2 file">-->
            <!--                    --><? //= $form->field($file, 'sa')->fileInput(['class' => 'btn btn-default'])->label('Սոցիալական աշխատող'); ?>
            <!--                </div>-->
            <!--                <div class="col-lg-2 file">-->
            <!--                    --><? //= $form->field($file, 'hh')->fileInput(['class' => 'btn btn-default'])->label('Դաստիրակ'); ?>
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-lg-12">-->
            <!--                --><? //= $form->field($file, 'du')->fileInput(['class' => 'btn btn-default'])->label('Բազմամասնագիտական խորհրդի եզրակացությունը;Փորձագիտական խմբի եզրակացությունը;Ուղեկցման փաստաթղթեր'); ?>
            <!--            </div>-->
        </section>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Թարմացնել', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
