<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Locality */

<<<<<<< HEAD
$this->title = $model->id;
=======
$this->title = $model->ID;
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Localities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="locality-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
=======
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->ID], [
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
<<<<<<< HEAD
            'id',
=======
            'ID',
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
            'localityName',
            'localityLat',
            'localityLong',
        ],
    ]) ?>

</div>
