<?php
  $this -> registerCssFile('@web/css/about_us.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
  use app\models\Goods;
  
  $my_form = ActiveForm::begin([
    'action' => ['goods/create'],
    'method' => 'post'
  ]);
?>

<h1 class="text-center">Create Goods </h1>
<?= $my_form -> field($model, 'title'); ?>
<?= $my_form -> field($model, 'price'); ?>
<?= $my_form -> field($model, 'description'); ?>
<?= $my_form -> field($model, 'photo_url'); ?>
<?= $my_form -> field($model, 'is_newing') -> checkbox(); ?>
<?= $my_form -> field($model, 'is_top') -> checkbox(); ?>
<?= $my_form -> field($model, 'is_visible') -> checkbox(); ?>



<?=HTML::submitButton('Create', ['class' => 'btn btn-success'])?>

<?php $my_form = ActiveForm::end(); ?>
?>
