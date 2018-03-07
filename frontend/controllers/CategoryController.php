<?php
/**
 * Created by PhpStorm.
 * User: gev
 * Date: 3/6/18
 * Time: 5:29 PM
 */

namespace frontend\controllers;

use Yii;
use common\models\Categories;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $get = Yii::$app->request->get('route');
        $lang = Yii::$app->language;
        $category = Categories::find()
            ->select(['id', 'data'])
            ->where(['route' => $get])
            ->asArray()
            ->all();


        foreach ($category as $index => $item) {
            $content = $item['data'];
            $content = json_decode($content, true);
            $data = $content[$lang]['name'];
        }
        return $this->render('index',[
            'data' => $data,
        ]);
    }

}