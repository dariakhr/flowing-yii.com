<?php
  $this -> registerCssFile('@web/css/about_us.css', ['depends' => 'app\assets\AppAsset']);
  use yii\widgets\ActiveForm;
  use yii\helpers\Html;
  use app\models\News;
  $my_form = ActiveForm::begin([
    'action' => ['news/create'],
    'method' => 'post'
  ]);
?>

<h1 class="text-center">Create news </h1>
<?= $my_form -> field($model, 'title'); ?>
<?= $my_form -> field($model, 'short_description'); ?>
<?= $my_form -> field($model, 'full_text'); ?>
<?= $my_form -> field($model, 'photo_url'); ?>
<?= $my_form -> field($model, 'created_at'); ?>
<?= $my_form -> field($model, 'updated_at'); ?>
<?= $my_form -> field($model, 'posted_at'); ?>



<?=HTML::submitButton('Create', ['class' => 'btn btn-success'])?>

<?php $my_form = ActiveForm::end(); ?>
