<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;

class News extends ActiveRecord
{

    public static function tableName()
    {
        return 'news';
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
