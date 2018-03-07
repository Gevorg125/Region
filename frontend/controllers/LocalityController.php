<?php

namespace frontend\controllers;

use Yii;
use common\models\Locality;

class LocalityController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $get = Yii::$app->request->get('route');
        $lang = Yii::$app->language;
        $locality = Locality::find()
            ->select(['id', 'data'])
            ->where(['route' => $get])
            ->asArray()
            ->all();


        foreach ($locality as $index => $item) {
            $content = $item['data'];
            $content = json_decode($content, true);
            $data = $content[$lang]['name'];
        }
        return $this->render('index',[
            'data' => $data,
        ]);
    }

}
