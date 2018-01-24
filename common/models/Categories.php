<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $category_name
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
<<<<<<< HEAD
            [['id', 'parent_id', 'category_name'], 'required'],
=======
            [['id','parent_id', 'category_name'], 'required'],
>>>>>>> d8fd41d4d6fe830d5f958951e3fb4f871f4e8aa2
            [['parent_id'], 'integer'],
            [['category_name'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'category_name' => Yii::t('app', 'Category Name'),
        ];
    }
}
