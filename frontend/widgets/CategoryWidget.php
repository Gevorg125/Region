<?php
/**
 * Created by PhpStorm.
 * User: gev
 * Date: 1/23/18
 * Time: 3:06 PM
 */

namespace frontend\widgets;

use yii\base\Widget;
use Yii;
use common\models\Categories;


class CategoryWidget extends Widget
{

    public function init()
    {
        parent::init();
    }


    public function run()
    {
        $category = self::getCatRecursive(0);
        return $this->render('category', ['category' => $category]);
    }

    public static function getCatRecursive($parent)
    {
        $lang = Yii::$app->language;
        $menus = Categories::find()
            ->select(['id', 'category_parent_id', 'name', 'route', 'title'])
            ->where(['category_parent_id' => $parent])
            ->orderBy('order')
            ->asArray()
            ->all();
        $tree = [];

        foreach ($menus as $key => $val) {

            $i = null;
            if (!empty(static::getCatRecursive($val['id']))) {
                $i = static::getCatRecursive($val['id']);
            }
            $cat_name = json_decode($val['name'], true);
            $cat = $cat_name[$lang]['name'];
            $tree[] = [
                'title' => $val['title'],
                'name' => $cat,
                'items' => $i,
                'route' => Yii::$app->homeUrl . "category/" . $val['route'],
            ];
        }

        return $tree;
    }
}