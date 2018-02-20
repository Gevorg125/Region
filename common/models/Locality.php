<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "locality".
 *
 * @property int $id
 * @property string $title
 * @property string $route
 * @property string $lat
 * @property string $lng
 * @property resource $data
 * @property string $img_name
 * @property string $type
 * @property int $order
 * @property string $active
 * @property string $images
 * @property string $videos
 */
class Locality extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'locality';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'route', 'type', 'order', 'active'], 'required'],
            [['data', 'active', 'images', 'videos'], 'string'],
            [['order'], 'integer'],
            [['title', 'img_name'], 'string', 'max' => 255],
            [['route'], 'string', 'max' => 60],
            [['lat', 'lng', 'type'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'route' => Yii::t('app', 'Route'),
            'lat' => Yii::t('app', 'Lat'),
            'lng' => Yii::t('app', 'Lng'),
            'data' => Yii::t('app', 'Data'),
            'img_name' => Yii::t('app', 'Img Name'),
            'type' => Yii::t('app', 'Type'),
            'order' => Yii::t('app', 'Order'),
            'active' => Yii::t('app', 'Active'),
            'images' => Yii::t('app', 'Images'),
            'videos' => Yii::t('app', 'Videos'),
        ];
    }
}
