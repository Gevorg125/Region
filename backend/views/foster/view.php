<?php

use yii\helpers\Html;
use common\models\Country;
use common\models\Region;
use common\models\District;

/* @var $this yii\web\View */
/* @var $model common\models\Foster */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fosters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foster-view">
    <section class="col-lg-12 col-md-12">
        <h4>Տեղեկատվություն երեխայի մասին</h4>
        <div class="col-lg-1 col-md-2">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Թերթիկի հերթական համարը'))) ?>
            <?= Html::tag('p', Html::encode($model->child_id), ['class' => 'show']) ?>
        </div>

        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Ազգանուն'))) ?>
            <?= Html::tag('p', Html::encode($child_info['surname']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Անուն'))) ?>
            <?= Html::tag('p', Html::encode($child_info['name']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Հայրանուն'))) ?>
            <?= Html::tag('p', Html::encode($child_info['fname']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Ծննդյան ամիս, ամսաթիվ'))) ?>
            <?= Html::tag('p', Html::encode($child_info['birth_date']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Սեռ'))) ?>
            <?= Html::tag('p', Html::encode($child_info['gender']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Ազգություն'))) ?>
            <?= Html::tag('p', Html::encode($child_info['nation']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-offset-1 col-lg-3 col-md-2 col-sm-4 col-xs-6">
            <?php $c = Country::find()->where(['id' => $child_info['birthplace']])->asArray()->one(); ?>

            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Երկիր '))) ?>
            <?= Html::tag('p', Html::encode($c['name']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
            <?php $r = Region::find()->where(['id' => $child_info['region_id']])->asArray()->one(); ?>

            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Մարզ '))) ?>
            <?= Html::tag('p', Html::encode($r['name']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Բնակության վայրը'))) ?>
            <?= Html::tag('p', Html::encode($child_info['address']), ['class' => 'show']) ?>

        </div>

        <div class="col-lg-offset-1 col-lg-3 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Ծննդական վկայականի կամ անձնագրի տվյալները'))) ?>
            <?= Html::tag('p', Html::encode($child_info['passport_ser'] . " " . $child_info['passport_number']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Դպրոցի/մանկապարտեզի համարը հասցեն'))) ?>
            <?= Html::tag('p', Html::encode($child_info['dprkax']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Դպրոցի հերախոսահամարը'))) ?>
            <?= Html::tag('p', Html::encode($child_info['school_phone']), ['class' => 'show']) ?>

        </div>
    </section>

    <?php if (!empty($family_info)): ?>
        <section class="col-lg-12 col-md-12">
            <h4>Տեղեկատվություն երեխայի կենսաբանական ընտանիքի մասին</h4>

            <?php foreach ($family_info as $index => $item): ?>
                <div class="form_item col-lg-12">
                    <?php if ($index == 1): ?>
                        <h5>Երեխայի հոր տվյալները</h5>
                    <?php else: ?>
                        <h5>Երեխայի մոր տվյալները</h5>
                    <?php endif; ?>
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
                        <?= Html::tag('p', Yii::t('app', 'Կարգավիճակ')) ?>
                        <?= Html::tag('p', Html::encode($item['behavior']), ['class' => 'show']) ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?= Html::tag('p', Yii::t('app', 'Աշխատանքային վայր')) ?>
                        <?= Html::tag('p', Html::encode($item['work_place']), ['class' => 'show']) ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?php $r = Region::find()->where(['id' => $item->region])->asArray()->one(); ?>
                        <?= Html::tag('p', Yii::t('app', 'Մարզ')) ?>
                        <?= Html::tag('p', $r['name'], ['class' => 'show']) ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?php $d = District::find()->where(['id' => $item->city])->asArray()->one(); ?>
                        <?= Html::tag('p', Yii::t('app', 'Քաղաք')) ?>
                        <?= Html::tag('p', $d['name'], ['class' => 'show']) ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?= Html::tag('p', Yii::t('app', 'Փողոց')) ?>
                        <?= Html::tag('p', Html::encode($item['street']), ['class' => 'show']) ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?= Html::tag('p', Yii::t('app', 'Տուն')) ?>
                        <?= Html::tag('p', Html::encode($item['home']), ['class' => 'show']) ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?= Html::tag('p', Yii::t('app', 'Բնակարան')) ?>
                        <?= Html::tag('p', Html::encode($item['apartment']), ['class' => 'show']) ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?= Html::tag('p', Yii::t('app', 'Հեռախոս')) ?>
                        <?= Html::tag('p', Html::encode($item['phone']), ['class' => 'show']) ?>

                    </div>

                </div>
            <?php endforeach; ?>
        </section>
    <?php endif; ?>

    <section class="col-lg-12 col-md-12">
        <h4>Տեղեկատվություն երեխայի խնամատար ընտանիքի մասին</h4>
        <?php if (!empty($finalModel)): ?>
            <?php foreach ($finalModel as $index => $item):
                ?>
                <div class="form_item col-lg-12">
                    <?php if ($index == 1): ?>
                        <h5>Երեխայի հոր տվյալները</h5>
                    <?php else: ?>
                        <h5>Երեխայի մոր տվյալները</h5>
                    <?php endif; ?>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?= Html::tag('p', Yii::t('app', 'Անուն')) ?>
                        <?= Html::tag('p', Html::encode($item->name), ['class' => 'show']) ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?= Html::tag('p', Yii::t('app', 'Ազգանուն')) ?>
                        <?= Html::tag('p', Html::encode($item->surname), ['class' => 'show']) ?>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?= Html::tag('p', Yii::t('app', 'Հայրանուն')) ?>
                        <?= Html::tag('p', Html::encode($item->fname), ['class' => 'show']) ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?= Html::tag('p', Yii::t('app', 'Կարգավիճակ')) ?>
                        <?= Html::tag('p', Html::encode($item->behavior), ['class' => 'show']) ?>

                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?php $r = Region::find()->where(['id' => $item->region])->asArray()->one(); ?>
                        <?= Html::tag('p', Yii::t('app', 'Մարզ')) ?>
                        <?= Html::tag('p', $r['name'], ['class' => 'show']) ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?php $d = District::find()->where(['id' => $item->city])->asArray()->one(); ?>
                        <?= Html::tag('p', Yii::t('app', 'Քաղաք')) ?>
                        <?= Html::tag('p', $d['name'], ['class' => 'show']) ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?= Html::tag('p', Yii::t('app', 'Փողոց')) ?>
                        <?= Html::tag('p', Html::encode($item->street), ['class' => 'show']) ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?= Html::tag('p', Yii::t('app', 'Տուն')) ?>
                        <?= Html::tag('p', Html::encode($item->home), ['class' => 'show']) ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?= Html::tag('p', Yii::t('app', 'Բնակարան')) ?>
                        <?= Html::tag('p', Html::encode($item->apartment), ['class' => 'show']) ?>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <?= Html::tag('p', Yii::t('app', 'Հեռախոս')) ?>
                        <?= Html::tag('p', Html::encode($item->phone), ['class' => 'show']) ?>

                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <?= Html::tag('p', Yii::t('app', 'Խնամատար ընտանիքի գնահատման փաթեթ')) ?>
                <?= Html::tag('p', Html::encode($model['evaluation']), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <?= Html::tag('p', Yii::t('app', 'Տեղեկատու կենսաբանական ընտանաքի մասին')) ?>
                <?= Html::tag('p', Html::encode($model['info_child']), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                <?= Html::tag('p', Yii::t('app', 'Տեղեկատվություն երեխայի վերաբերյալ մինչ խնամատար ընտանիք տեղափոխվելը')) ?>
                <?= Html::tag('p', Html::encode($model['info_family']), ['class' => 'show']) ?>

            </div>
            <div class="col-lg-4 col-md-2 col-sm-6 col-xs-12">
                <?= Html::tag('p', Yii::t('app', 'Խնամատար ընտանիք տեղափոխվելու ամսաթիվը')) ?>
                <?= Html::tag('p', Html::encode($model['date']), ['class' => 'show']) ?>

            </div>
        </div>
    </section>
    <section class="col-lg-12 col-md-12">
        <h4>Մասնագետների տվյալները երեխաների վերաբերյալ</h4>

        <?php if(!empty($model->yntsat)):?>
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
            <?= Html::tag('p', Yii::t('app', 'Սոցիալական աշխատող')) ?>
            <?= Html::a($child_info['yntsat'], ['user/view', 'id' => $model->id], ['class' => 'profile-link', 'target' => 'blank']) ?>
        </div>
        <?php endif;?>
        <?php if(!empty($model->yntht)):?>
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
            <?= Html::tag('p', Yii::t('app', 'Հոգեբան')) ?>
            <?= Html::a($child_info['yntht'], ['user/view', 'id' => $model->id], ['class' => 'profile-link', 'target' => 'blank']) ?>
        </div>
        <?php endif;?>
        <?php if(!empty($model->yntbt)):?>
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
            <?= Html::tag('p', Yii::t('app', 'Բժիշկ')) ?>
            <?= Html::a($child_info['yntbt'], ['user/view', 'id' => $model->id], ['class' => 'profile-link', 'target' => 'blank']) ?>
        </div>
        <?php endif;?>
        <?php if(!empty($model->yntmt)):?>
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
            <?= Html::tag('p', Yii::t('app', 'Մանկավարժ')) ?>
            <?= Html::a($child_info['yntmt'], ['user/view', 'id' => $model->id], ['class' => 'profile-link', 'target' => 'blank']) ?>
        </div>
        <?php endif;?>
        <?php if(!empty($model->ngb)):?>
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
            <?= Html::tag('p', Yii::t('app', 'Այլ փաստաթղթեր')) ?>
            <?= Html::a($child_info['ngb'], ['user/view', 'id' => $model->id], ['class' => 'profile-link', 'target' => 'blank']) ?>
        </div>
        <?php endif;?>
    </section>
</div>
