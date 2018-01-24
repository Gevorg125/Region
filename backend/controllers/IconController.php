<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;

class IconsController extends Controller {

    public function actionIndex(){
        return $this->render('index');
    }
}