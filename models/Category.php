<?php

namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getUniversities() 
    {
        return $this->hasMany(University::className(), ['category_id' => 'alias']);
    }


}
