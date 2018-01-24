<?php

namespace frontend\widgets;
use Yii;
use yii\base\Widget;
class ContactWidget extends Widget
{
    public $message;
    public function init()
    {
        parent::init();
        echo $this->message ;
        if($this->message === null) {
            $this->message = 'Welcome user';
        } else {
            $this->message = 'Welcome' . $this->message;
        }
    }
    public function run()
    {
        return $this->render('contact');
    }
}