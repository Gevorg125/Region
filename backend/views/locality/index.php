<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\LocalitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Localities');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="locality-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Locality'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
            'id',
=======
            'ID',
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
            'localityName',
            'localityLat',
            'localityLong',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
