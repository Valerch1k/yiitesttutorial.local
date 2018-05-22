<?php

/* @var $this yii\web\View */

use app\components\BrandsProductsWidget;
use app\components\CategoryTabWidget;
use app\components\MenuCategoryWidget;
use app\components\RecommendedItemsWidget;
use app\components\SliderTopWidget;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Категории';
?>

<?= SliderTopWidget::widget();?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Категории</h2>
                    <div class="panel-group" id="accordian"> <!--category-products-->
                        <ul class=" catalog category-products" id="vidgetcatalog">
                            <?= MenuCategoryWidget::widget(['tpl'=>'menu'])?>
                        </ul>
                    </div> <!--/category-products-->

                    <!--brands_products-->
                        <?= BrandsProductsWidget::widget();?>
                    <!--/brands_products-->

                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well text-center">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Новые товары</h2>
                    <? if(!empty($hits)):?>
                        <? foreach ($hits as $hit) :?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <?= Html::img("@web/images/products/{$hit->product_image}",['alt'=>$hit->product_title])?>
                                            <h2><?=round($hit->product_price,2)?></h2>
                                            <a href="<?= Url::to(['category/details','id'=>$hit->id])?>"><p><?=$hit->product_description?></p></a>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                      <? if($hit->product_new):?>
                                          <?= Html::img("@web/images/home/new.png",['alt'=>'Новинка','class'=>'new'])?>
                                      <? endif;?>
                                      <? if($hit->product_sale):?>
                                          <?= Html::img("@web/images/home/sale.png",['alt'=>'Распродажа','class'=>'new'])?>
                                      <? endif;?>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>В список желаний</a></li>
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Добавить к сравнению</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <? endforeach;?>
                    <? endif;?>
                </div><!--features_items-->

                <!--  Category Tab-->
                    <?= CategoryTabWidget::widget()?>
                <!-- Category Tab-->

                <!--recommended_items-->
                    <?= RecommendedItemsWidget::widget();?>
                <!--/recommended_items-->

            </div>
        </div>
    </div>
</section>