<?php

namespace app\models;
use yii\base\Model;

class NewForm extends Model {
  public $title;
  public $short_description;
  public $full_text;
  public $created_at;
  public $updated_at;
  public $posted_at;
  public $photo_url;


  public function rules(){
    return [
      ['title' , 'required'],
      ['title', 'trim'],
      ['photo_url', 'string'],
      [['created_at', 'updated_at', 'posted_at'], 'safe'],
    ];
  }
  public function attributeLabels() {
    return;
  }
}
?>
