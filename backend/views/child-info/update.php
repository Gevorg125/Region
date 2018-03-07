<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ChildInfo */
/* @var $excursus common\models\Excursus */
/* @var $childcurrentinfo common\models\ChildCurrentInfo */
/* @var $guardian common\models\Guardian */
/* @var $ReasonDelay common\models\ReasonDelay */
/* @var $Region common\models\Region */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'ԵՐԵԽԱՅԻ ԹԵՐԹԻԿ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="child-info-update">
    <?= $this->render('_form', [
        'model' => $model,
        'region' => $region,
        'childcurrentinfo' => $childcurrentinfo,
        'district' => $district,
        'childinfo' => $childinfo,
        'reasondelay' => $reasondelay,
        'excursus' => $excursus,
        'sendplace' => $sendplace,
        'file' => $file,


//        'guardian' => $guardian,
    ]) ?>

</div>
