<?php $this -> registerCssFile('@web/css/landing.css', ['depends' => 'app\assets\AppAsset']);
use yii\widgets\ActiveForm;
use yii\helpers\Html;
 ?>
 <div class="dropdown">
 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
   Все категории
</button>
<ul class="dropdown-menu">
 <li>
   <a href="/categorys?order=active">Только активные</a>
 </li>
 <li>
   <a href="/categorys?order=newest">По дате создание</a>
 </li>
 <li>
   <a href="/categorys?order=by_title_asc">По Название A-Z</a>
 </li>
 <li>
   <a href="/categorys?order=by_title_desc">По Название Z-A</a>

 </li>
</ul>
</div>
<div class="btn-group">
  <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Кнопка <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li>
        <a href="/categorys?order=active">Только активные</a>
      </li>
      <li>
        <a href="/categorys?order=newest">По дате создание</a>
      </li>
      <li>
        <a href="/categorys?order=by_title_asc">По Название A-Z</a>
      </li>
      <li>
        <a href="/categorys?order=by_title_desc">По Название Z-A</a>
        </a>
      </li>
   </ul>
</div>
<!-- <h1>All Categories</h1>
<a href="/categorys?order=active">Только активные</a>
<br>
<a href="/categorys?order=newest">По дате создание</a>
<br>
<a href="/categorys?order=by_title_asc">По Название A-Z</a>
<br>
<a href="/categorys?order=by_title_desc">По Название Z-A</a> -->


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

<span>
  <ul class="nav nav-pills">
    <li role="presentation"><a href="/admin/goods/new">new_goods</a></li>
    <li role="presentation"><a href="/admin/goods/index">all_goods</a></li>
    <li role="presentation"><a href="/admin/categorys/new">new_category</a></li>
    <li role="presentation" class="active"><a href="/admin/categorys/index">all_categorys</a></li>
  </ul>
</span>
