<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Foster */

$this->title = Yii::t('app', 'Ստեղծել խնամատար ընտանիք');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fosters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foster-create">

    <?= $this->render('_form', [
        'model' => $model,
        'finalModel' => $finalModel
    ]) ?>

</div>
