<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Locality */
/* @var $form yii\widgets\ActiveForm */
?>

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
            //            var_export($finalModel);
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
                        ],

                    ]);
                    ?>


                </div>

            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>








<?= $form->field($model, 'lat')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'lng')->textInput(['maxlength' => true]) ?>




<?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'order')->textInput() ?>

<?= $form->field($model, 'active')->dropDownList(['0', '1',], ['prompt' => '']) ?>


<!--<h4>Image Upload</h4>-->
<?//= $form->field($model, 'images[]')->widget(\kartik\file\FileInput::classname(), [
//        'options' => [
//            'multiple' => true
//        ],
//        'pluginOptions' => [
//            'uploadUrl' => \yii\helpers\Url::to(['/locality/create']),
//            'allowedFileExtensions' => ['jpg', 'jpeg', 'png'],
//            'showUpload' => true,
//            'initialPreview' => [
////                                    $model-> img ? Html::img($model-> img) : null, // checks the models to display the preview
//            ],
//            'overwriteInitial' => false,
//        ],
//    ]);
//    ?>

<?= $form->field($model, 'img_name')->fileInput() ?>
<?= $form->field($model, 'images[]')->fileInput(['multiple' => true,]) ?>
<div class="input_fields_wrap">
    <button class="add_field_button">Add Videos</button>
    <div><input type="text" name="videos[]"></div>
</div>

<div class="form-group">
    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
