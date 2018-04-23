<?php use yii\helpers\Html; ?>
<?php $this -> registerCssFile('@web/css/landing.css', ['depends' => 'app\assets\AppAsset']);?>
<main class="mt-25">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://flowingo.com/app/assets/src/basic-pic/slid.jpg" alt="slid_1" style="width:100%;">
            </div>
            <div class="item">
              <img src="http://flowingo.com/app/assets/src/basic-pic/slid.jpg" alt="slid_2" style="width:100%;">
            </div>
            <div class="item">
              <img src="http://flowingo.com/app/assets/src/basic-pic/slid.jpg" alt="slid_3" style="width:100%;">
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center offers">TOP</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="row">

              <div class="col-lg-3 col-md-6 col-sm-4 col-xs-12 goods">
                <div class="row img-height">
                  <div class="col-lg-12 text-center">
                    <p>

                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">

                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <button type="button" name="button" class="buy">
                      <i class="fa fa-shopping-cart"></i>
                    </button>
                  </div>
                </div>
              </div>

          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center offers">NEW</p>
      </div>
    </div>
    <div class="row products">
      <div class="col-lg-12">
        <div class="row">


<div class="col-lg-2 col-md-6 col-sm-4 goods">
                <div class="row img-height">
                  <div class="col-lg-12 text-center">
                    <p>
                      <img class="width-img" src="" alt="goods_1">
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">

                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <button type="button" name="button" class="buy">
                      <i class="fa fa-shopping-cart"></i>
                    </button>
                  </div>
                </div>
              </div>
            </a>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center offers">Новости</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">

          <div class="row align-news">
            <div class="col-lg-1">
              <span>

              </span>
            </div>
            <div class="col-lg-8">
              <ul class="list-unstyled news-inf">

              </ul>
            </div>
          </div>

      </div>
      <div class="col-lg-3">

          <?= Html::img('@web/src/social-net/vk.png', ['alt'=>'VK_share', 'class'=>'pull-right mt-10']);?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center offers">О нас</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p>Lorem ipsum operator/dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur  adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</main>
