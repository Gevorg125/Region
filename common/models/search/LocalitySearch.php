<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Locality;

/**
 * LocalitySearch represents the model behind the search form of `common\models\Locality`.
 */
class LocalitySearch extends Locality
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['id'], 'integer'],

            [['localityName', 'localityLat', 'localityLong'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Locality::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([

            'id' => $this->id,

        ]);

        $query->andFilterWhere(['like', 'localityName', $this->localityName])
            ->andFilterWhere(['like', 'localityLat', $this->localityLat])
            ->andFilterWhere(['like', 'localityLong', $this->localityLong]);

        return $dataProvider;
    }
}
