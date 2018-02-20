<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property int $category_parent_id
 * @property string $title
 * @property string $route
 * @property string $description
 * @property resource $data
 * @property int $order
 * @property string $date
 * @property string $img_name
 * @property string $active
 * @property string $images
 * @property string $videos
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
            [['category_parent_id', 'order'], 'integer'],
            [['route', 'active'], 'required'],
            [['data', 'active', 'images', 'videos'], 'string'],
            [['date'], 'safe'],
            [['title', 'description', 'img_name'], 'string', 'max' => 255],
            [['route'], 'string', 'max' => 63],
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
            'title' => Yii::t('app', 'Title'),
            'route' => Yii::t('app', 'Route'),
            'description' => Yii::t('app', 'Description'),
            'data' => Yii::t('app', 'Data'),
            'order' => Yii::t('app', 'Order'),
            'date' => Yii::t('app', 'Date'),
            'img_name' => Yii::t('app', 'Img Name'),
            'active' => Yii::t('app', 'Active'),
            'images' => Yii::t('app', 'Images'),
            'videos' => Yii::t('app', 'Videos'),
        ];
    }
}
