<?php
/**
 * Created by PhpStorm.
 * User: gev
 * Date: 2/19/18
 * Time: 1:50 PM
 */
namespace frontend\models;

use common\models\Categories;
use frontend\models\Elastic;

use yii\base\Model;

use yii\data\ActiveDataProvider;

use yii\elasticsearch\Query;

use yii\elasticsearch\QueryBuilder;

/**

 * ArticlesSearch represents the model behind the search form about `app\models\Articles`.

 */

class Search extends Elastic

{

    public function Searches($value)

    {

        $searchs      = $value['search'];

        $query        = new Query();

        $db           = Categories::getDb();

        $queryBuilder = new QueryBuilder($db);

        $match   = ['match' => ['article_content' =>$searchs]];

        $query->query = $match;

        $build        = $queryBuilder->build($query);

        $re           = $query->search($db, $build);

        $dataProvider = new ActiveDataProvider([

            'query'      => $query,

            'pagination' => ['pageSize' => 10],

        ]);

        return $dataProvider;

    }

}