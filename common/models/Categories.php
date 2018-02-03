<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property int $category_parent_id
 * @property int $locality_parent_id
 * @property string $name
 * @property string $title
 * @property string $route
 * @property string $keywords
 * @property string $description
 * @property resource $data
 * @property string $order_name
 * @property string $date
 * @property string $img_name
 * @property string $active
 * @property string $type
 * @property string $lat
 * @property string $lng
 * @property string $locality_type
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_parent_id', 'locality_parent_id'], 'integer'],
            [['name', 'route', 'type'], 'required'],
            [['data', 'active', 'type', 'locality_type'], 'string'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 25],
            [['title', 'keywords', 'description', 'order_name', 'img_name'], 'string', 'max' => 255],
            [['route'], 'string', 'max' => 63],
            [['lat', 'lng'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_parent_id' => Yii::t('app', 'Category Parent ID'),
            'locality_parent_id' => Yii::t('app', 'Locality Parent ID'),
            'name' => Yii::t('app', 'Name'),
            'title' => Yii::t('app', 'Title'),
            'route' => Yii::t('app', 'Route'),
            'keywords' => Yii::t('app', 'Keywords'),
            'description' => Yii::t('app', 'Description'),
            'data' => Yii::t('app', 'Data'),
            'order_name' => Yii::t('app', 'Order Name'),
            'date' => Yii::t('app', 'Date'),
            'img_name' => Yii::t('app', 'Img Name'),
            'active' => Yii::t('app', 'Active'),
            'type' => Yii::t('app', 'Type'),
            'lat' => Yii::t('app', 'Lat'),
            'lng' => Yii::t('app', 'Lng'),
            'locality_type' => Yii::t('app', 'Locality Type'),
        ];
    }
}
