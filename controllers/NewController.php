<?php
namespace app\controllers;

use yii\web\Controller;

use app\models\NewNewsForm;

use Yii;
class NewsController extends Controller{
  public $layout = 'basic';
  public function actionNew(){
    $this -> view -> title = 'time for a New';
    $model = new NewForm;
    return $this -> render('new.php', ['model' => $model]);
  }
  public function actionCreate() {
    $model = new NewForm();
    if ($model -> load(Yii::$app -> request -> get())) {
      if ($model -> validate()) {
        Yii::$app -> session -> setFlash('Congrats! New good created)!');
        $model -> save();
      }else {
        Yii::$app -> session -> setFlash('Error, good not created');
      }
      return $this -> redirect('http://flowingo-yii.com/web/index.php?r=news%2Fnew');
    }
  }
}
