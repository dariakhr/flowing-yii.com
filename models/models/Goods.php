<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;

class Goods extends ActiveRecord
{

    public static function tableName()
    {
        return 'goods';
    }

    public function rules()
    {
        return [
            ['title', 'required'],
            [['price'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 50],

        ];

    }

}
