<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property resource $name
 * @property int $parent
 * @property string $route
 * @property int $order
 * @property resource $data
 * @property string $title
 * @property string $active
 * @property int $locality_id
 *
 * @property Menu $parent0
 * @property Menu[] $menus
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['name', 'title', 'active', ], 'required'],
            [['parent', 'order'], 'integer'],
            [['data', 'name'], 'string'],
            [['route', 'title',], 'string', 'max' => 255],
            [['active'], 'string', 'max' => 11],
            [['parent'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['parent' => 'id']],
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
            'parent' => Yii::t('app', 'Parent'),
            'route' => Yii::t('app', 'Route'),
            'order' => Yii::t('app', 'Order'),
            'data' => Yii::t('app', 'Data'),
            'title' => Yii::t('app', 'Title'),
            'active' => Yii::t('app', 'Active'),


        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent0()
    {
        return $this->hasOne(Menu::className(), ['id' => 'parent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenus()
    {
        return $this->hasMany(Menu::className(), ['parent' => 'id']);
    }

    public function getLocality()
    {
        return Menu::getLocality()
            ->hasOne(Categories::className(), ['id' => 'parent_id']);

    }
}
