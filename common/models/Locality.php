<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property int $id
 * @property resource $name
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
           // [['name', 'title','img_name', 'images','route', 'type', 'order', 'active'], 'required'],
            [['name', 'data', 'active'], 'string'],
            [['order'], 'integer'],
            [['title', 'img_name'], 'string', 'max' => 255],
            [['route'], 'string', 'max' => 60],
            [['lat', 'lng', 'type'], 'string', 'max' => 11],
            [['img_name'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg,jpeg'],
            [['images'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg,jpeg'],
            [['videos'], 'file','extensions' => 'png,jpg,jpeg','maxFiles' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
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
