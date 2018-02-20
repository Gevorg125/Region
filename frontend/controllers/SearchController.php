<?php
/**
 * Created by PhpStorm.
 * User: gev
 * Date: 2/19/18
 * Time: 2:12 PM
 */

namespace frontend\controllers;

use frontend\models\Search;
use Yii;
use yii\web\Controller;

class ElasticController extends Controller
{

    public function actionIndex()
    {

        return $this->render('index');

    }

    public function actionSearch()
    {

        $elastic = new Search();
        $result  = $elastic->Searches(Yii::$app->request->queryParams);
        $query = Yii::$app->request->queryParams;
        return $this->render('search', [
            'searchModel'  => $elastic,
            'dataProvider' => $result,
            'query'        => $query['search'],
        ]);

    }

}