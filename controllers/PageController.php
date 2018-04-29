<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\NewCategoryForm;
use app\models\NewGoodForm;

use Yii;
class PageController extends Controller{
  public $layout = 'basic';

  public function actionLanding(){
    return $this -> render('landing', ['id' => '242']);
  }
  public function actionIndex(){
    return 'hello';
  }
  public function actionShow(){
    return 'show';
  }
  public function actionNew(){
    return 'new';
  }
  public function actionEdit(){
    return 'edit';
  }
  public function actionUpdate(){
    return 'hello, i am update';
  }
  public function actionDelete(){
    return 'hello, i am delete';
  }
  public function actionCreate(){
    return 'hello, i am create';
  }
  public function actionAdmin(){
    $this -> layout = 'admin';
      return $this -> render('admin', ['id' => '242']);
  }

   public function actionAbout(){
     $this -> view -> title = 'About';
     return $this -> render('about_us');
   }

   public function actionCatalog(){
     $this -> view -> title = 'catalog';
     return $this -> render('catalog');
   }

   public function actionDelivery(){
     $this -> view -> title = 'delivery';
     return $this -> render('delivery');
   }

   public function actionGoods(){
     $this -> view -> title = 'goods';
     return $this -> render('goods');
   }

}
?>
