<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;

class Categorys extends ActiveRecord
{

    public static function tableName()
    {
        return 'categorys';
    }

    public function rules()
    {
        return [
            [['title', 'position'], 'required'],
            [['position'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 40],
            [['is_visible'], 'string', 'max' => 1],
        ];
    
    }

}
