<?php

namespace app\models;
use yii\db\ActiveRecord;

class University extends ActiveRecord
{
    public static function tableName()
    {
        return 'university';
    }

    public function getCategory() 
    {
        return $this->hasOne(Category::className(), ['alias' => 'category_id']);
    }


}
