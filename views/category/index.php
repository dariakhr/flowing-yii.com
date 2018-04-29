<?php $this -> registerCssFile('@web/css/landing.css', ['depends' => 'app\assets\AppAsset']);
use yii\widgets\ActiveForm;
use yii\helpers\Html;
 ?>
<h1>All Categories</h1>
<a href="/categorys?order=active">Только активные</a>
<br>
<a href="/categorys?order=newest">По дате создание</a>
<br>
<a href="/categorys?order=by_title_asc">По Название A-Z</a>
<br>
<a href="/categorys?order=by_title_desc">По Название Z-A</a>


<table class='table'>
  <thead>
    <tr>
      <th>ID</th>
      <th>TITLE</th>
      <th>DELETE</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($categorys as $category): ?>
      <tr>
        <td><?= $category -> id ?></td>
        <td><?= $category -> title ?></td>
        <td>
        <?php  $my_form = ActiveForm::begin([
            'action' => ['category/delete/' . $category -> id],
            'method' => 'post'
          ]);
            ?>

          <?=HTML::submitButton('delete', ['class' => 'btn btn-success'])?>
        <?php $my_form = ActiveForm::end(); ?>
        </td>

      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<a href="category/new">Lets create new category</a>
