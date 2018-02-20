<?php
/**
 * Created by PhpStorm.
 * User: gev
 * Date: 1/26/18
 * Time: 1:47 PM
 */

namespace frontend\widgets;
use frontend\widgets\CategoryWidget;

class ContentWidget extends CategoryWidget
{
    public function run()

    {
        $menu = self::getMenuRecursive(0);
        return $this->render('content', ['menu' => $menu]);
    }
}