<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
//use kartik\export\ExportMenu;


/* @var $this yii\web\View */
/* @var $searchModel common\models\search\SheetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Sheets');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sheet-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Sheet'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php
$gridColumns = [
    ['class' => 'yii\grid\SerialColumn'],
'absenteeism_date',
    'out_date',
    'name',
    'surname'

];
?>

    <?= \kartik\export\ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'fontAwesome' => true,
        'dropdownOptions' => [
            'label' => 'Բեռնել',
            'class' => 'btn btn-default'
        ]
    ]) ?>
    <hr>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pager' => [
            'options' => ['class' => 'pagination'],   // set clas name used in ui list of pagination
            'prevPageLabel' => 'Նախորդ',   // Set the label for the "previous" page button
            'nextPageLabel' => 'Հաջորդ',   // Set the label for the "next" page button
            'firstPageLabel' => 'Սկիզբ',   // Set the label for the "first" page button
            'lastPageLabel' => 'Վերջին',    // Set the label for the "last" page button
            'nextPageCssClass' => 'next',    // Set CSS class for the "next" page button
            'prevPageCssClass' => 'prev',    // Set CSS class for the "previous" page button
            'firstPageCssClass' => 'first',    // Set CSS class for the "first" page button
            'lastPageCssClass' => 'last',    // Set CSS class for the "last" page button
            'maxButtonCount' => 10,    // Set maximum number of page buttons that can be displayed
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'prev_ids',
            'surname',
            'name',
            'fname',
            //'alias',
            //'birth_date',
            //'city_village',
            //'address',
            //'passport_ser',
            //'passport_number',
            //'gender',
            //'nation',
            //'birthplace',
            //'region_id',
            //'region',
            //'phone',
            //'image',
            //'reason_delay_text',
            //'gurdian:ntext',
            //'bervq',
            //'out_home_date',
            //'ngbh',
            //'accounting_department',
            //'dprkax',
            //'school_phone',
            //'not_attend_mount',
            //'not_attend_year',
            //'out_education',
            //'off_surname',
            //'off_name',
            //'off_facility_name',
            //'off_job',
            //'absenteeism_date',
            //'quality_clothes',
            //'hnsn',
            //'berum',
            //'ngb',
            //'michpast',
            //'yntbt',
            //'yntht',
            //'yntmt',
            //'yntsat',
            //'ynthht',
            //'bazmkh',
            //'out_date',
            //'temp_out_date',
            //'out_set_date:ntext',
            //'ughhanv',
            //'send_region',
            //'send_city',
            //'send_street',
            //'send_phone',
            //'cv',
            //'hard_working_start',
            //'hard_working_end',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
