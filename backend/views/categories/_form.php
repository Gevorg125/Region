<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Categories;

/* @var $this yii\web\View */
/* @var $model common\models\Categories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categories-form">

    <div class="locality-form">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        <div class="container"><h1>Content in available languages</h1></div>
        <div id="exTab1">
            <ul class="nav nav-pills">
                <?php

                foreach ($activeLanguages as $key => $lang):
                    ?>
                    <li class="<?= ($key == 0) ? 'active' : ''; ?>">
                        <a href="#<?= $lang['id'] ?>" data-toggle="tab"><?= $lang['name'] ?></a>
                    </li>
                    <?php
                endforeach;
                ?>
            </ul>
            <div class="tab-content clearfix">
                <?php


                foreach ($activeLanguages as $key => $lang):
                    $i = $lang['code'];
                    ?>
                    <div class="tab-pane <?= ($key == 0) ? 'active' : ''; ?>" id="<?= $lang['id'] ?>">
                        <?= $form->field($finalModel[$lang['code']], "[$i]name")->textInput()->label(Yii::t('app', 'Name')) ?>
                        <?= $form->field($finalModel[$lang['code']], "[$i]keywords")->textInput() ?>
                        <?= $form->field($finalModel[$lang['code']], "[$i]description")->textInput() ?>
                        <?= $form->field($finalModel[$lang['code']], "[$i]content")->widget(\mihaildev\ckeditor\CKEditor::className(), [
                            'editorOptions' => [
                                'preset' => 'full',
                                'inline' => false,
                            ],]);
                        ?>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>


    <?= $form->field($model, 'category_parent_id')->dropDownList(ArrayHelper::map(Categories::find()->all(), 'id','route'), ['prompt' => '']) ?>

    

    <?= $form->field($model, 'route')->textInput(['maxlength' => true]) ?>

    

    

    <?= $form->field($model, 'order')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    

    <?= $form->field($model, 'active')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'img_name')->fileInput() ?><button>Load</button>


    <?= $form->field($model, 'images')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'videos')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
