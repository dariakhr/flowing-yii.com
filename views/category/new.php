<?php
  $this -> registerCssFile('@web/css/about_us.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
  use app\models\Categorys;
  $my_form = ActiveForm::begin([
    'action' => ['category/create'],
    'method' => 'post'
  ]);
?>

<h1 class="text-center">Create Category:</h1>
  <?= $my_form -> field($model, 'title'); ?>
  <?= $my_form -> field($model, 'is_visible')-> checkbox(); ?>
  <?= $my_form -> field($model, 'position'); ?>
  <?=HTML::submitButton('Create', ['class' => 'btn btn-success'])?>
<?php $my_form = ActiveForm::end(); ?>
