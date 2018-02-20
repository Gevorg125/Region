<?php

namespace frontend\widgets;

use common\models\Locality;
use common\models\Menu;
use Yii;
use yii\base\Widget;



class AboutWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        echo $this->message;
        if ($this->message === null) {
            $this->message = 'Welcome user';
        } else {
            $this->message = 'Welcome' . $this->message;
        }
    }


    public static function getAboutRecursive()
    {
        $menuID = Menu::find()
            ->select(['id', 'name'])
            ->asArray()
            ->all();
        $menus =[];
        foreach ($menuID as $key => $val) {


                $menus[$val['name']] = Locality::find()

                    ->where(['route' => $val['name']])
                    ->asArray()
                    ->all();
            }


        return $menus;
    

    }

    public function run()
    {

        $result = self::getAboutRecursive();
        return $this->render('about', ['result' => $result]);
    }
}