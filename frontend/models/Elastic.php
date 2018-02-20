<?php
/**
 * Created by PhpStorm.
 * User: gev
 * Date: 2/19/18
 * Time: 12:23 PM
 */

namespace frontend\models;

use yii\elasticsearch\ActiveRecord;

class Elastic extends ActiveRecord
{

    public function attributes()
    {

        return['name', 'email'];

    }

}