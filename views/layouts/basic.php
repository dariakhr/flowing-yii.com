<?php
use app\assets\AppAsset;

AppAsset::register($this);
use yii\helpers\Html;
?>


<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <?php $this->head(); ?>
</head>
<body>
  <?php $this->beginBody() ?>
  <header>
    <div class="row">
      <div class="col-lg-12 header">
        <div class="container">

        </div>
      </div>
    </div>
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-4 col-xs-8">
              <a href="/">
                <?= Html::img('@web/src/basic-pic/log.png', ['alt'=>'log', 'class'=>'logo']);?>

              </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-8 hidden-xs">
              <ul class="list-inline number">
                <li>
                  <?= Html::img('@web/src/operator/life.png');?>093 55 55 555
                </li>
                <li>
                  <?= Html::img('@web/src/operator/kievstar.png');?>067 77 77 777
                </li>
                <li>
                  <?= Html::img('@web/src/operator/mtc.png');?>099 99 99 999</li>
              </ul>
              <form class="pull-right feedback" action="/recalls/create" method="post">
                <label for="call">Обраный звонок:</label>
                <input type="text" id="call" placeholder="введите номер" name="recalls">

                <button type="submit" name="button"><i class="fa fa-phone" aria-hidden="true"></i></button>
              </form>
            </div>
            <div class="col-lg-2 col-md-2 hidden-sm col-xs-4">
              <ul class="list-unstyled work-time">
                <li>часы работы</li>
                <li>c 8:00 до 20:00</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 hidden-xs undulating">
        <ul class="list-inline text-center ml-30">
          <li><a href="/pages/about_us">О нас</a></li>
          <li><a href="/pages/catalog">Цветы</a></li>
          <li><a href="/pages/delivery">Доставка</a></li>
          <li><a href="#">Оплата</a></li>
          <li><a href="#">Вопросы</a></li>
          <li><a href="#">Контакты</a></li>
        </ul>
      </div>
    </div>
  </header>

  <?= $content ?>
  <footer class="mt-40">
    <div class="row footer">
      <div class="col-lg-12">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <span>
                <?= Html::img('@web/src/social-net/vkk.png', ['alt'=>'VK', 'class'=>'icon-vk']);?>
              </span>
              <span>
                <?= Html::img('@web/src/social-net/fcc.png', ['alt'=>'FB', 'class'=>'mt-13']);?>
              </span>
              <span class="reserved"><strong>Flowingo 2018 all rights reserved</strong></span>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 hidden-xs about-us-footer">
              <ul class="list-inline text-center">
                <li><a href="/about_us.php">О нас</a></li>
                <li><a href="/catalog.php">Цветы</a></li>
                <li><a href="#">Доставка</a></li>
                <li><a href="#">Оплата</a></li>
                <li><a href="#">Вопросы</a></li>
                <li><a href="#">Контакты</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <p class="footer-text">hello.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div id="authorizing" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header  mod-head">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h1 class="modal-title text-center">Вход</h1>
                    </div>
                    <div class="modl-body mod-body">
                      <p class="errors"></p>
                      <form class="text-center" action="/actions/auth.php" method="post">
                        <input type="email" name="email" value="" placeholder="e-mail">
                        <br>
                        <input class="mt-20" type="password" name="password" value="" placeholder="пароль">
                        <br>
                        <input type="checkbox" name="" value="">
                        <label class="mt-10" for="">Запомнить меня</label>
                        <br>
                        <button class="btn mt-15 mb-15 auth-button-js" type="button" name="button">ВОйТИ</button>
                        <br>
                        <a href="#">Забыли пароль?</a>
                        <p>Войти через</p>
                      </form>
                    </div>
                    <div class="modal-footer mod-foot">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div id="registration" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header mod-head">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h1 class="modal-title text-center">Регистрация</h1>
                    </div>
                    <div class="modal-body mod-body">
                      <p class="errors"></p>
                      <form class="text-center" action="/actions/registration.php" method="post">
                        <input type="text" name="email" value="" placeholder="e-mail">
                        <br>
                        <input class="mt-20" type="password" name="password" value="" placeholder="пароль">
                        <br>
                        <input class="mt-20" type="password" name="password_confirm" value="" placeholder="телефон">
                        <br>
                        <p class="mt-10">Я ознакомился с политикой</p>
                        <a href="#">Сервиса покупки и доставки цветов Flowingo</a>
                        <br>
                        <button class="btn mt-15 mb-15 registration-button-js" type="button" name="button">Готово</button>
                      </form>
                    </div>
                    <div class="modal-footer mod-foot"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div id="registrated" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header mod-head">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body mod-body">
                      <h1>Спасибо за регистрацию</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage(); ?>
