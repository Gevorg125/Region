<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ChildInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Child Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Child Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'prev_ids',
            'name',
            'surname',
            'fname',
            //'gender',
            //'nation',
            //'birthplace',
            //'city_village',
            //'passport_birth_certificate',
            //'birth_date',
            //'alias',
            //'count_from_center',
            //'img_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
