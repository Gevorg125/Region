<?php
namespace frontend\widgets;

use Yii;
use common\models\Menu;
use yii\base\Widget;
use yii\helpers\Url;
use common\models\Categories;


class FooterWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('footer');

    }


}
