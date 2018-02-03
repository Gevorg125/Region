<?php

namespace frontend\widgets;

use common\models\Menu;
use Yii;
use yii\base\Widget;
use common\models\Categories;


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

                $menus[$val['name']] = Categories::find()
        
                    ->where(['locality_parent_id' => $val['id']])
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