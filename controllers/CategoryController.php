<?php
namespace app\controllers;

use yii\web\Controller;
use yii\helpers\VarDumper;
use app\models\Categorys;
use Yii;


class CategoryController extends Controller{
  public $layout = 'basic';

  public function actionNew() {
    $this -> view -> title = 'New Category';
    $model = new Categorys();
    return $this -> render('new.php', ['model' => $model]);
  }
  public function actionCreate() {
    var_dump($_POST);
    $model = new Categorys();
    $model -> title = $_POST['Categorys']['title'];
    $model -> position = $_POST['Categorys']['position'];
    $model -> is_visible = $_POST['Categorys']['is_visible'];
    if ($model -> save()) {
          return $this -> redirect('/categorys');
        } else {
          return $this -> redirect('new', compact('model'));
        }
    }

    public function actionIndex($order = NULL){
      if (!$order) {
        $categorys = Categorys::find() -> all();
      }else {
        switch ($order) {
          case 'active':
            $categorys =  Categorys::find() -> where(['is_visible' => 1])-> all();
            break;
          case 'newest':
            $categorys =  Categorys::find() -> orderBy('created_at DESC')-> all();
            break;
          case 'by_title_asc':
            $categorys =  Categorys::find() -> orderBy('title ASC')-> all();
            break;
          case 'by_title_desc':
            $categorys =  Categorys::find() -> orderBy('title DESC')-> all();
            break;


        }
      }

      return $this -> render('index', compact('categorys'));
    }

    public function actionDelete($id) {
      $category= Categorys::findOne($id) -> delete();
      return $this -> redirect('/categorys');

    }

}
