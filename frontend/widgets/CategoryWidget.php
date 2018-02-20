<?php
/**
 * Created by PhpStorm.
 * User: gev
 * Date: 1/23/18
 * Time: 3:06 PM
 */

namespace frontend\widgets;

use yii\base\Widget;

use common\models\Categories;


class CategoryWidget extends Widget
{
    public $message;
    public $tree;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Welcome user';
        } else {
            $this->message = 'Welcome' . $this->message;
        }
    }

    public static function getMenuRecursive($parent)
    {
        $menus = Categories::find()
            ->select(['id', 'category_parent_id', 'route'])
            ->where(['category_parent_id' => $parent,
                 ] )
            ->orderBy('order')
            ->asArray()
            ->all();
        $tree = [];
        foreach ($menus as $key => $val) {
            $i = null;
            if (!empty(static::getMenuRecursive($val['id']))) {
                $i = static::getMenuRecursive($val['id']);
            }
            $tree[] = [
                'name' => $val['route'],
                'items' => $i,
            ];
        }

        return $tree;
    }

   public static function print_list($menu)
    {
        echo '<ul >';
        foreach ($menu as $list_item) {
            echo '<li >';
            echo "<a href='#'>{$list_item['name']}</a>";
            if (array_key_exists('items', $list_item) && is_array($list_item['items']))
                print_list($list_item['items']);
            echo '</li>';
        }
        echo "</ul>";
    }

    public function run()

    {
        $menu = self::getMenuRecursive(0);
        return $this->render('category', ['menu' => $menu]);
    }

}