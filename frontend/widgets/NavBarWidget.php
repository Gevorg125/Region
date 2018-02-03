<?php
//
//namespace frontend\widgets;
//use Yii;
//use common\models\Locality;
//use yii\base\Widget;
//use common\models\Menu;

//
//class NavBarWidget extends Widget
//{
//    public $message;
//
//    public function init()
//    {
//        parent::init();
//        echo $this->message;
//        if ($this->message === null) {
//            $this->message = 'Welcome user';
//        } else {
//            $this->message = 'Welcome' . $this->message;
//        }
//    }
//
//    public static function getNavBarRecursive()
//    {
//        $menuID = Menu::find()->select(['id','name'])->asArray()->all();
//
//        foreach($menuID as $key => $val ){
//
//            $result[$key]['name'] = $val['name'];
//            $result[$key]['array']=   Locality::find()
//                ->select([ 'locality_name'])
////                ->join('RIGHT JOIN', 'locality', 'menu.id = locality.parent_id ')
//                ->where(['parent_id' => $val['id']])
//                ->asArray()
//                ->all();
//        }
//
//        return $result;
//
//
//
//
//    }
//
//    public function run()
//    {
//
//        $NavBarResult = self::getNavBarRecursive();
//        return $this->render('NavBar', ['NavBarResult' => $NavBarResult]);
//    }
//}