<?php
use yii\helpers\Html;
$this -> registerCssFile('@web/css/catalog.css', ['depends' => 'app\assets\AppAsset']);
use app\models\Categorys;
use app\models\Goods;
?>

<main class="mt-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-2">

          <div class="col-lg-10">
            <div class="row">
              <div class="col-ld-12">
                <p class="pull-right sort">
                  <span>Упорядочить:</span> <br>
                  <a href="/catalog?order=price_by_asc">По цене по возрастанию</a> <br>
                  <a href="/catalog?order=price_by_desc">По цене по убыванию</a> <br>
                  <a href="/catalog?order=by_title_asc">По названию от A-Z</a> <br>
                  <a href="/catalog?order=by_title_desc">По названию от Z-А</a> <br>
                  <a href="/catalog?order=by_newing">Самые новые</a>
                </p>
              </div>
              <div class="row products mt-40">

                  <a href="">
                    <div class="col-lg-3 col-md-6 col-sm-4 col-xs-12 goods">

                        <span>
                          <?= Html::img('/web/src/top.png');?>
                        </span>

                        <span>
                          <?= Html::img('/web/src/new.png');?>
                        </span>

                      <div class="row img-height">
                        <div class="col-lg-12 text-center">
                          <p>

                          
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p>title></p>
                          <p>priceгрн</p>
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
        </div>
      </div>
    </div>
  </div>
</main>
