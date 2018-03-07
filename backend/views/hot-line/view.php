<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\HotLine */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hot Lines'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="hot-line-view">
    <h4 class="col-lg-12">Թեժ գիծ</h4>
<?php
$r = \common\models\Reason::find()->where(['id'=>$model->reason_id])->asArray()->one();
$s = \common\models\Relationship::find()->where(['id'=>$model->rel_id])->asArray()->one();?>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
        <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('child_id'))) ?>
        <?= Html::tag('p', Html::encode($model->child_id), ['class' => 'show']) ?>

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

        <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('phone'))) ?>
        <?= Html::tag('p', Html::encode($model->phone), ['class' => 'show']) ?>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
        <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('rel_id'))) ?>
        <?= Html::tag('p', $s['name'], ['class' => 'show']) ?>

    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
        <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('reason_id'))) ?>
        <?= Html::tag('p', $r['name'], ['class' => 'show']) ?>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('problem'))) ?>
        <?= Html::tag('p', $model->problem, ['class' => 'show']) ?>

    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('home_visit'))) ?>
        <?= Html::tag('p', $model->home_visit, ['class' => 'show']) ?>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('events'))) ?>
        <?= Html::tag('p', $model->events, ['class' => 'show']) ?>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
        <?= Html::tag('p', Yii::t('app', $model->getAttributeLabel('date'))) ?>
        <?= Html::tag('p', $model->date, ['class' => 'show']) ?>

    </div>


</section>
