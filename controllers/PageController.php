<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\CreateCategoryForm;
use Yii;
class PageController extends Controller{
  public $layout = 'basic';
  public function actionLanding(){
    return $this -> render('landing', ['id' => '242']);

  }
  public function actionAdmin(){
    $this -> layout = 'admin';
      return $this -> render('admin', ['id' => '242']);
  }
  public function actionAbout(){
    return $this -> render('about_us');

  }
  public function actionCreateCategory(){
    // var_dumpYii::$app->request->post();
    $model = new CreateCategoryForm;
    return $this -> render('create_category', ['model' => $model]);
  }
}
?>
