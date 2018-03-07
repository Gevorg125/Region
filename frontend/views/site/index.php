<?php


/* @var $this yii\web\View */
use frontend\widgets\CategoryWidget;
use frontend\widgets\MapWidget;

$this->title = 'My Yii Application';

?>
<div>
    <?= MapWidget::widget(); ?>
</div>
<div class="container cont">
    <div class="row">
        <div class="col-md-6">
            <form class="opt">
                <div class="input-group src">
                    <select class ="form-control" id="sel1">


                        <?php

                        foreach ($loc as $key => $value) {
                            print_r($value);

                            ?>
                            <option value="<?= $key;?>"><?= $value;?></option>
                            <?php
                        }

                        ?>

                    </select>
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><?=Yii::t('app', 'search');?><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>


        <div class="col-md-6">
            <form class="opt">
                <div class="input-group src">
                    <select class ="form-control" id="sel1">


                        <?php
                        foreach ($cat as $key => $value) {
                            ?>
                            <option value="<?= $key;?>"><?= $value;?></option>
                            <?php
                        }
                        ?>

                    </select>
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><?=Yii::t('app', 'search');?><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>


    </div>
</div>
<!--<div class="container cont">-->
<!--    <div class="row">-->
<!--        <div class="col-md-6">-->
<!--            <form class="opt">-->
<!--                <div class="input-group src">-->
<!--                    <select class ="form-control" id="sel1">-->
<!---->
<!---->
<!--                        --><?php
//
//                        foreach ($loc as $key => $value) {
//                            print_r($value);
//
//                            ?>
<!--                            <option value="--><?//= $key;?><!--">--><?//= $value;?><!--</option>-->
<!--                            --><?php
//                        }
//
//                        ?>
<!---->
<!--                    </select>-->
<!--                    <div class="input-group-btn">-->
<!--                        <button class="btn btn-default" type="submit">Որոնում<i class="glyphicon glyphicon-search"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!---->
<!--        <div class="col-md-6">-->
<!--            <form class="opt">-->
<!--                <div class="input-group src">-->
<!--                    <select class ="form-control" id="sel1">-->
<!---->
<!---->
<!--                        --><?php
//                        foreach ($cat as $key => $value) {
//                            ?>
<!--                            <option value="--><?//= $key;?><!--">--><?//= $value;?><!--</option>-->
<!--                            --><?php
//                        }
//                        ?>
<!---->
<!--                    </select>-->
<!--                    <div class="input-group-btn">-->
<!--                        <button class="btn btn-default" type="submit">Որոնում<i class="glyphicon glyphicon-search"></i></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<div>
    <?= CategoryWidget::widget(); ?>
</div>


