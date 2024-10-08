<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

class Category extends  \yii\db\ActiveRecord
{
    public static  function  tableName()
    {
        return 'category';
    }

}