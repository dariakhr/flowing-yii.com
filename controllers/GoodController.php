<?php
namespace app\controllers;

use yii\web\Controller;

use app\models\NewGoodForm;

use Yii;
class GoodsController extends Controller{
  public $layout = 'basic';

public function actionNewGood() {
  $this -> view -> title = 'New Good';
  $model = new NewGoodForm;
  return $this -> render('new_good.php', ['model' => $model]);
}
public function actionCreate() {
  $model = new NewGoodForm();
  if ($model -> load(Yii::$app -> request -> get())) {
    if ($model -> validate()) {
      Yii::$app -> session -> setFlash('Congrats! New good created)!');
      $model -> save();
    }else {
      Yii::$app -> session -> setFlash('Error, good not created');
    }
    return $this -> redirect('http://flowingo-yii.com/web/index.php?r=goods%2Fnew-good');
  }
}
}
