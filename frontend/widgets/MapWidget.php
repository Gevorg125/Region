<?php
/**
 * Created by PhpStorm.
 * User: gugo
 * Date: 1/15/18
 * Time: 5:29 PM
 */
namespace frontend\widgets;

use common\models\Categories;

use common\models\Locality;
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
        $l = new Locality();
        $ll = json_encode($l->find()->select(['lat', 'lng', 'type', 'name'])->asArray()->all());

        return $this->render('map',['ll'=> $ll]);
    }
}

