<?php
/**
 * Created by PhpStorm.
 * User: gev
 * Date: 2/19/18
 * Time: 12:18 PM
 */

namespace frontend\controllers;

use frontend\models\Elastic;
use yii\web\Controller;

class ElasticController extends Controller
{

    public function actionIndex()
    {

        $elastic        = new Elastic();
        $elastic->name  = 'ahmed';
        $elastic->email = 'ahmedkhan_847@hotmail.com';
        if ($elastic->insert()) {
            echo "Added Successfully";
        } else {
            echo "Error";
        }

    }

}