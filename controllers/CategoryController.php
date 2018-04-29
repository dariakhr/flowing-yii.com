<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\NewCategoryForm;

use Yii;
class CategoryController extends Controller{
  public $layout = 'basic';

  public function actionNewCategory() {
    $this -> view -> title = 'New Category';
    $model = new NewCategoryForm;
    return $this -> render('new_category.php', ['model' => $model]);
  }
  public function actionCreate() {
    $model = new NewCategoryForm();
    if ($model -> load(Yii::$app -> request -> get())) {
        Yii::$app -> session -> setFlash('Congrats! New category created)!');
        $model -> save();
      }else {
        Yii::$app -> session -> setFlash('Error, category not created');
      }
      return $this -> redirect('index.php?r=goods/new-category');
    }

    public function actionIndex(){
      return $this -> render('index');
    }

}
