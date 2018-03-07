<?php


namespace frontend\widgets;

use Yii;
use common\models\Locality;
use common\models\Menu;
use common\models\Lang;
use yii\base\Widget;


class HeaderWidget extends Widget
{

    public function init()
    {
        parent::init();

    }

    /**
     * @return Widget[]
     */
    public function getLang()
    {
        $lng = new Lang();
        $language = $lng->find()
            ->select(['name', 'code'])
            ->asArray()
            ->all();
        return $language;
    }

    public static function getAboutRecursive()
    {
        $lang = Yii::$app->language;

        $locality = Locality::find()
            ->select(['id', 'name', 'route'])
            ->asArray()
            ->all();
        $i = 0;
        foreach ($locality as $k => $v) {
            $loc = json_decode($v['name'], true);
            $loc_name[$i]['name'] = $loc[$lang]['name'];
            $loc_name[$i]['route'] = $v['route'];
            $i++;
        }
        $menuID = Menu::find()
            ->select(['id', 'name', 'title'])
            ->asArray()
            ->all();
        foreach ($menuID as $key => $val) {
            $menus_name = json_decode($val['name'], true);
            if ($val['title'] == 'about us') {
                $j = 0;
                foreach ($loc_name as $keys => $item) {
                    $menus[$menus_name[$lang]['name']][$j]['name'] = $item['name'];
                    $menus[$menus_name[$lang]['name']][$j]['route'] = $item['route'];
                    $j++;
                }
            } else {
                $menus[$menus_name[$lang]['name']] = [];
            }
        }
        return $menus;
    }

    public function run()
    {
        $_menus = self::getAboutRecursive();
        $language = self::getLang();
        return $this->render('header', [
            '_menus' => $_menus,
            'language' => $language
        ]);
    }
}

