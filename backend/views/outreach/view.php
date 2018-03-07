<?php

use yii\helpers\Html;

use common\models\Country;
use common\models\Region;
use common\models\District;

/* @var $this yii\web\View */
/* @var $model common\models\Outreach */


?>
<div class="outreach-view">

    <section>
        <h4>Տեղեկատվություն երեխայի մասին</h4>
        <div class="col-lg-1 col-md-3">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('child_id'))) ?>
            <?= Html::tag('p', Html::encode($model->child_id), ['class' => 'show']) ?>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Ազգանուն'))) ?>
            <?= Html::tag('p', Html::encode($child_info['surname']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Անուն'))) ?>
            <?= Html::tag('p', Html::encode($child_info['name']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Հայրանուն'))) ?>
            <?= Html::tag('p', Html::encode($child_info['fname']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Ծննդյան ամիս, ամսաթիվ'))) ?>
            <?= Html::tag('p', Html::encode($child_info['birth_date']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Սեռ'))) ?>
            <?= Html::tag('p', Html::encode($child_info['gender']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Ազգություն'))) ?>
            <?= Html::tag('p', Html::encode($child_info['nation']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <?php $c = Country::find()->where(['id' => $child_info['birthplace']])->asArray()->one();?>

            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Երկիր '))) ?>
            <?= Html::tag('p', Html::encode($c['name']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <?php $r = Region::find()->where(['id' => $child_info['region_id']])->asArray()->one();?>

            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Մարզ '))) ?>
            <?= Html::tag('p', Html::encode($r['name']), ['class' => 'show']) ?>

        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('Բնակության վայրը'))) ?>
            <?= Html::tag('p', Html::encode($child_info['address']), ['class' => 'show']) ?>

        </div>

    </section>
    <section class="form_item col-lg-12">
        <h4>Տեղեկատվություն երեխայի ընտանիքի մասին</h4>

        <?php $finalModel = json_decode($model->family); ?>
        <?php if (!empty($finalModel)): ?>
            <?php foreach ($finalModel as $index => $item):
                ?>
                <div class="form_item col-lg-12">
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
                        <?= Html::tag('p', Yii::t('app', 'Աշխատանքային վայր')) ?>
                        <?= Html::tag('p', Html::encode($item->work_place), ['class' => 'show']) ?>

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
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?= Html::tag('p', Yii::t('app', 'Գրառումներ տունայցի վերաբերյալ')) ?>
            <?= Html::tag('textarea', Html::encode($model->home), ['class' => '', 'rows' => 6]) ?>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?= Html::tag('p', Yii::t('app', 'Տեղեկություն մատուցված ծառայության տեսակի մասին')) ?>
            <?= Html::tag('textarea', Html::encode($model->inform), ['class' => '', 'rows' => 6]) ?>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?= Html::tag('p', Yii::t('app', 'Հիմնախնդրի նկարագրություն')) ?>
            <?= Html::tag('textarea', Html::encode($model->problem), ['class' => '', 'rows' => 6]) ?>

        </div>
    </section>


</div>
