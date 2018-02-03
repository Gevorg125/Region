<?php
/**
 * Created by PhpStorm.
 * User: gugo
 * Date: 1/15/18
 * Time: 5:29 PM
 */
namespace frontend\widgets;

use common\models\Categories;

use Yii;
use yii\base\Widget;




class MapWidget extends Widget
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
        $l = new Categories();
        $ll = json_encode($l->find()->select(['name','lat', 'lng', 'locality_type'])->where(['type' => 'locality'])->asArray()->all());

        return $this->render('map',['ll'=> $ll]);
    }
}

