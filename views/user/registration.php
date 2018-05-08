<?php
  $this -> registerCssFile('@web/css/about_us.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
  use app\models\RegistrationForm;
  ?>
  <?php  $form = ActiveForm::begin([
      'action' => ['user/create'],
      'method' => 'post'
    ]);
  ?>
  <h1 class="text-center">Lets SignUp</h1>
    <?= $form -> field($model, 'email'); ?>
    <?= $form -> field($model, 'password') -> passwordInput(); ?>
    <?= $form -> field($model, 'confirm_password')-> passwordInput(); ?>
    <?= $form -> field($model, 'name'); ?>
    <?= $form -> field($model, 'surname'); ?>


    <?=HTML::submitButton('Create', ['class' => 'btn btn-success'])?>
  <?php $form = ActiveForm::end(); ?>
