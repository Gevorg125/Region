<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "locality".
 *
<<<<<<< HEAD
 * @property int $id
=======
 * @property int $ID
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
 * @property string $localityName
 * @property string $localityLat
 * @property string $localityLong
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
<<<<<<< HEAD
            [['name','id', 'lat', 'lng', 'type'], 'required'],
            [['localityName', 'lat', 'lng', 'localityType'], 'string', 'max' => 11],
=======
            [['localityName', 'localityLat', 'localityLong', 'type'], 'required'],
            [['localityName', 'localityLat', 'localityLong', 'localityType'], 'string', 'max' => 11],
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
<<<<<<< HEAD
            'id' => Yii::t('app', 'ID'),
=======
            'ID' => Yii::t('app', 'ID'),
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
            'localityName' => Yii::t('app', 'Locality Name'),
            'localityLat' => Yii::t('app', 'Locality Lat'),
            'localityLong' => Yii::t('app', 'Locality Long'),
        ];
    }
}
