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


    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Welcome user';
        } else {
            $this->message = 'Welcome' . $this->message;
        }
    }

    public function run()

    {
        $tree = [];
        $x = new Categories();

        $result = $x->find()->select(['id', 'parent_id', 'category_name'])->indexBy('id')->asArray()->all();


        foreach ($result as $key => &$value ){
            if($value['parent_id'] == 0){
                $tree[$key] = &$value;
            }else {
                $result[$value['parent_id']]['child'][$value['id']] = &$value;
            }
           // return $tree;
        }
    $treee = \GuzzleHttp\json_encode($tree);
        return $this->render('category',['treee'=>$treee]);
    }

}