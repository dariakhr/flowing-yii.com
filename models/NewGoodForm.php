<?php

namespace app\models;
use yii\base\Model;

class NewGoodForm extends Model {
  public $title;
  public $price;
  public $description;
  public $photo_url;
  public $is_newing;
  public $is_top;
  public $is_visible;


  public function rules(){
    return [
      ['title' , 'required'],
      ['title', 'trim'],
      ['photo_url', 'string'],
      [['is_newing', 'is_top', 'is_visible'], 'safe'],
    ];
  }
  public function attributeLabels() {
    return [
      'title' => 'write title of good',
      'price' => 'white the price',
      'description' => 'write full description about good'
    ];
  }
}
?>
