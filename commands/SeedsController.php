<?php

namespace app\commands;


use yii\console\Controller;
use app\models\Categorys;
use Faker\Factory;
class SeedsController extends Controller {
  public function actionCreateCategorys($categorys_number = 1) {
for ($i=0; $i < 8 ; $i++) {
  $faker = Factory::create();
  $category = new Categorys();
  $category -> title = $faker -> word;
  $category -> position = 4;
  $category -> is_visible = 1;
  $category -> save(false);

}
  }
}
