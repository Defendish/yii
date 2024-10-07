<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property-read Category $category
 */
class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
}