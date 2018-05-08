<?php

namespace app\models;

use Yii;


class Recalls extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'recalls';
    }


    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['phone_number'], 'string', 'max' => 16],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone_number' => 'Phone Number',
            'created_at' => 'Created At',
        ];
    }
}
