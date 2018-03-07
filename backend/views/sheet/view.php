<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use common\models\Country;
use common\models\Region;
use common\models\District;
use common\models\Status;

/* @var $this yii\web\View */
/* @var $model common\models\Sheet */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sheets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sheet-view">


    <div class="contents">
        <section class=" col-lg-12 tops">

            <?php $r = Region::find()->where(['id' => $model->region_id])->asArray()->one(); ?>
            <?php $d = District::find()->where(['id' => $model->city_village])->asArray()->one(); ?>
            <?php $n = Country::find()->where(['id' => $model->birthplace])->asArray()->one(); ?>
            <?php $s = Status::find()->where(['id' => $model->birthplace])->asArray()->one(); ?>

            <h4 class="col-lg-12">Երեխայի տվյալները</h4>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" style="height: 100px">
                <div class="col-lg-6">
                <?php if (!empty($model->image)): ?>
                    <?= Html::img("@web/images/$model->image", ['alt' => 'Երեխայի նկարը']) ?>
                <?php else: ?>
                    <?php if ($model->gender === "ԱՐԱԿԱՆ"): ?>
                        <?php $avatar = "boy.png" ?>
                    <?php else: ?>
                        <?php $avatar = "girl.png" ?>
                    <?php endif; ?>
                    <?= Html::img("@web/$avatar", ['alt' => 'Երեխայի նկարը']) ?>
                <?php endif; ?>
                </div>
                <?php $count = count(explode(',', $model->prev_ids));
                if(empty($count)) $count = 1;?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <?= Html::tag('p', Yii::t('app',  Yii::t('app', 'Որերորդ անգամ է բերվել կենտրոն'))) ?>
                    <?= Html::tag('p', $count, ['class' => 'show']) ?>
                </div>
            </div>


            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('prev_ids'))) ?>
                <?= Html::tag('p', Html::encode($model->prev_ids), ['class' => 'show']) ?>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('surname'))) ?>
                <?= Html::tag('p', Html::encode($model->surname), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('name'))) ?>
                <?= Html::tag('p', Html::encode($model->name), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('fname'))) ?>
                <?= Html::tag('p', Html::encode($model->fname), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('alias'))) ?>
                <?= Html::tag('p', Html::encode($model->alias), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('gender'))) ?>
                <?= Html::tag('p', Html::encode($model->gender), ['class' => 'show']) ?>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('nation'))) ?>
                <?= Html::tag('p', Html::encode($model->nation), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('birth_date'))) ?>
                <?= Html::tag('p', Html::encode($model->birth_date), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('passport_ser'))) ?>
                <?= Html::tag('p', Html::encode($model->passport_ser), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('passport_number'))) ?>
                <?= Html::tag('p', Html::encode($model->passport_number), ['class' => 'show']) ?>

            </div>
            <h4 class="col-lg-12">Երեխայի ընթացիկ հասցեն</h4>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 ">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('birthplace'))) ?>
                <?= Html::tag('p', $n['name'], ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('region_id'))) ?>
                <?= Html::tag('p', $r['name'], ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('region'))) ?>
                <?= Html::tag('p', Html::encode($model->region), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('city_village'))) ?>
                <?= Html::tag('p', $d['name'], ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('address'))) ?>
                <?= Html::tag('p', Html::encode($model->address), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('phone'))) ?>
                <?= Html::tag('p', Html::encode($model->phone), ['class' => 'show']) ?>
            </div>
        </section>
        <section class="col-lg-12 child-current-info">
            <h4 class="col-lg-12">Տվյալներ խնամակալների մասին</h4>
            <fieldset class="col-lg-12">

                <?php foreach ($finalModel as $index => $item): ?>
                    <h5>Խնամակալ ընտանիք </h5>
                    <div class="form_item col-lg-12">

                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= Html::tag('p', Yii::t('app', 'Անուն')) ?>
                            <?= Html::tag('p', Html::encode($item['name']), ['class' => 'show']) ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= Html::tag('p', Yii::t('app', 'Ազգանուն')) ?>
                            <?= Html::tag('p', Html::encode($item['surname']), ['class' => 'show']) ?>

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= Html::tag('p', Yii::t('app', 'Հայրանուն')) ?>
                            <?= Html::tag('p', Html::encode($item['fname']), ['class' => 'show']) ?>

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= Html::tag('p', Yii::t('app', 'Ազգակցական կապ')) ?>
                            <?= Html::tag('p', Html::encode($item['relationship']), ['class' => 'show']) ?>

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= Html::tag('p', Yii::t('app', 'Երկիր')) ?>
                            <?= Html::tag('p', Html::encode($item['country']), ['class' => 'show']) ?>

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= Html::tag('p', Yii::t('app', 'Մարզ')) ?>
                            <?= Html::tag('p', Html::encode($item['region']), ['class' => 'show']) ?>

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= Html::tag('p', Yii::t('app', 'Քաղաք')) ?>
                            <?= Html::tag('p', Html::encode($item['city']), ['class' => 'show']) ?>

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= Html::tag('p', Yii::t('app', 'Փողոց')) ?>
                            <?= Html::tag('p', Html::encode($item['street']), ['class' => 'show']) ?>

                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-4 col-xs-6">
                            <?= Html::tag('p', Yii::t('app', 'Տուն')) ?>
                            <?= Html::tag('p', Html::encode($item['home']), ['class' => 'show']) ?>

                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-4 col-xs-6">
                            <?= Html::tag('p', Yii::t('app', 'Բնակարան')) ?>
                            <?= Html::tag('p', Html::encode($item['apartment']), ['class' => 'show']) ?>

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= Html::tag('p', Yii::t('app', 'Հեռախոս')) ?>
                            <?= Html::tag('p', Html::encode($item['phone']), ['class' => 'show']) ?>

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= Html::tag('p', Yii::t('app', 'Անձնագրային տվյալներ')) ?>
                            <?= Html::tag('p', Html::encode($item['password']), ['class' => 'show']) ?>

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= Html::tag('p', Yii::t('app', 'Կարգավիճակ')) ?>
                            <?= Html::tag('p', Html::encode($s['name']), ['class' => 'show']) ?>

                        </div>
                    </div>

                <?php endforeach; ?>

            </fieldset>
        </section>
        <section class="col-lg-12 child-current-info">
            <h4 class="col-lg-12">Երեխայի տվյալները</h4>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('reason_delay_text'))) ?>
                <?= Html::tag('textarea', Html::encode($model->reason_delay_text), ['class' => 'textarea']) ?>

            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 col-md-4 col-sm-6 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('out_home_date'))) ?>
                <?= Html::tag('p', Html::encode($model->out_home_date), ['class' => ' show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('bervq'))) ?>
                <?= Html::tag('p', Html::encode($model->bervq), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('ngbh'))) ?>
                <?= Html::tag('p', Html::encode($model->ngbh), ['class' => 'show']) ?>

            </div>
        </section>
        <section class="col-lg-12 child-current-info">
            <h4 class="col-lg-12">Տվյալներ դպրոցից</h4>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('accounting_department'))) ?>
                <?= Html::tag('p', Html::encode($model->accounting_department), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('dprkax'))) ?>
                <?= Html::tag('p', Html::encode($model->dprkax), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('school_phone'))) ?>
                <?= Html::tag('p', Html::encode($model->school_phone), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('not_attend_mount'))) ?>
                <?= Html::tag('p', Html::encode($model->not_attend_mount), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('not_attend_year'))) ?>
                <?= Html::tag('p', Html::encode($model->not_attend_year), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('out_education'))) ?>
                <?= Html::tag('p', Html::encode($model->out_education), ['class' => 'show']) ?>

            </div>
        </section>
        <section class="col-lg-12">
            <h4 class="col-lg-12">Բերողի պաշտոնյայի տվյալները</h4>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('off_surname'))) ?>
                <?= Html::tag('p', Html::encode($model->off_surname), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('off_name'))) ?>
                <?= Html::tag('p', Html::encode($model->off_name), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('off_facility_name'))) ?>
                <?= Html::tag('p', Html::encode($model->off_facility_name), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('off_job'))) ?>
                <?= Html::tag('p', Html::encode($model->off_job), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('absenteeism_date'))) ?>
                <?= Html::tag('p', Html::encode($model->absenteeism_date), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('quality_clothes'))) ?>
                <?= Html::tag('p', Html::encode($model->quality_clothes), ['class' => 'show']) ?>

            </div>
        </section>
        <section class="col-lg-12 child-current-info">
            <h4 class="col-lg-12">Տվյալներ ԿենտրոնԻց դուրս գրվելու մասին</h4>

            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 ">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('out_date'))) ?>
                <?= Html::tag('p', Html::encode($model->out_date), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('temp_out_date'))) ?>
                <?= Html::tag('p', Html::encode($model->temp_out_date), ['class' => 'show']) ?>

            </div>
            <fieldset class="col-lg-12">
                <?php $out = Yii::$app->params['out'];
                $step = 0; ?>
                <div class="form_item col-lg-12">

                    <?php foreach ($outModel as $index => $item): ?>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <?= Html::tag('p', Yii::t('app', ($out[$step]))) ?>
                            <?= Html::tag('p', Html::encode($item), ['class' => 'show']) ?>
                        </div>
                        <?php $step++;
                    endforeach; ?>
                </div>
            </fieldset>
        </section>
        <section class="col-lg-12 child-current-info">
            <?php $r = Region::find()->where(['id' => $model->send_region])->asArray()->one(); ?>
            <?php $d = District::find()->where(['id' => $model->send_city])->asArray()->one(); ?>
            <h4 class="col-lg-12">Տվյալներ ուղղորդող կառույցի մասին</h4>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('ughhanv'))) ?>
                <?= Html::tag('p', Html::encode($model->ughhanv), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('send_region'))) ?>
                <?= Html::tag('p', $r['name'], ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('send_city'))) ?>
                <?= Html::tag('p', $d['name'], ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('send_street'))) ?>
                <?= Html::tag('p', Html::encode($model->send_street), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('send_phone'))) ?>
                <?= Html::tag('p', Html::encode($model->send_phone), ['class' => 'show']) ?>
                <? //= $form->field($model, 'send_phone')->textInput() ?>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('hard_working_start'))) ?>
                <?= Html::tag('p', Html::encode($model->hard_working_start), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('hard_working_end'))) ?>
                <?= Html::tag('p', Html::encode($model->hard_working_end), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('hot_line'))) ?>
                <?= Html::tag('p', Html::encode($model->hot_line), ['class' => 'show']) ?>

            </div>
        </section>
        <section class="col-lg-12 child-current-info">
            <h4 class="col-lg-12">Փորձագիտական խմբի եզրակացությունը </h4>
            <!--                <h4> Ուղեկցման փաստաթղթեր</h4>-->

            <?php if(!empty($model->cv)):?>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <?= Html::tag('p', Yii::t('app', 'Ընտանիքի բնութագրիչը և բերման պատճառները')) ?>

                <?= Html::a($model->cv, ['user/view', 'id' => $model->id], ['class' => 'profile-link', 'target' => 'blank']) ?>
            </div>
            <?php endif;?>
            <?php if(!empty($model->yntbt)):?>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <?= Html::tag('p', Yii::t('app', 'Բժիշկ')) ?>
                <?= Html::a($model->yntbt, ['user/view', 'id' => $model->id], ['class' => 'profile-link', 'target' => 'blank']) ?>
            </div>
            <?php endif;?>
            <?php if(!empty($model->yntht)):?>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <?= Html::tag('p', Yii::t('app', 'Հոգեբան')) ?>
                <?= Html::a($model->yntht, ['user/view', 'id' => $model->id], ['class' => 'profile-link', 'target' => 'blank']) ?>
            </div>
            <?php endif;?>
            <?php if(!empty($model->yntmt)):?>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <?= Html::tag('p', Yii::t('app', 'Մանկավարժ')) ?>
                <?= Html::a($model->yntmt, ['user/view', 'id' => $model->id], ['class' => 'profile-link', 'target' => 'blank']) ?>
            </div>
            <?php endif;?>
            <?php if(!empty($model->yntsat)):?>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <?= Html::tag('p', Yii::t('app', 'Սոցիալական աշխատող')) ?>
                <?= Html::a($model->yntsat, ['user/view', 'id' => $model->id], ['class' => 'profile-link', 'target' => 'blank']) ?>
            </div>
            <?php endif;?>
            <?php if(!empty($model->ynthht)):?>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <?= Html::tag('p', Yii::t('app', 'Դաստիրակ')) ?>
                <?= Html::a($model->ynthht, ['user/view', 'id' => $model->id], ['class' => 'profile-link', 'target' => 'blank']) ?>
            </div>
            <?php endif;?>
            <?php if(!empty($model->bazmkh)):?>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <?= Html::tag('p', Yii::t('app', 'Բազմամասնագիտական թիմի եզրակացությունը')) ?>
                <?= Html::a($model->bazmkh, ['user/view', 'id' => $model->id], ['class' => 'profile-link', 'target' => 'blank']) ?>
            </div>
            <?php endif;?>
            <?php if(!empty($model->ngb)):?>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                <?= Html::tag('p', Yii::t('app', 'Այլ փաստաթղթեր')) ?>
                <?= Html::a($model->ngb, ['user/view', 'id' => $model->id], ['class' => 'profile-link', 'target' => 'blank']) ?>
            </div>
            <?php endif;?>
        </section>
    </div>

</div>
