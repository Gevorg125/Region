<?php
/**
 * Created by PhpStorm.
 * User: gugo
 * Date: 1/22/18
 * Time: 5:45 PM
 */

/**
 * Created by PhpStorm.
 * User: gugo
 * Date: 1/15/18
 * Time: 5:29 PM
 */
namespace frontend\widgets;
use Yii;
use yii\base\Widget;
use common\models\Categories;
class CategoriesWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();

        if($this->message === null) {
            $this->message = 'Welcome user';
        } else {
            $this->message = 'Welcome' . $this->message;
        }
    }
    public function run()
    {
        $x = new Categories();
        $result = json_encode($x->find()->select(['id','parent_id', 'category_name'])->asArray()->all());

        return $this->render('category',['result'=> $result]);
    }
}