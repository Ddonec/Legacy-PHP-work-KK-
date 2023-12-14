
<?php
/*
Template Name: catalog
*/
?>


<?php
get_header();
?>

<section class="main-content-catalog">
         <div class="bread-crumbs">
            <p><a href="index.html">Главная</a></p>
            <p>/</p>
            <p><a href="#">Лето</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Прокат</p>
         </div>
         <div class="title-of-section t-o-s">
            <div class="black-text-section">Возьми</div>
            <div class="opacity-text-section o-t-s-all">в прокат</div>
            <div class="shadow-section s-s-shadow"></div>
         </div>

         <ul class="nav-catalog">
            <li class="pointer cat-c-1 cat-c active-category">Каталог</li>
            <li class="pointer cat-c-2 cat-c">Велосипеды</li>
            <li class="pointer cat-c-3 cat-c">Веломобили</li>
            <li class="pointer cat-c-4 cat-c">Электро</li>
            <li class="pointer cat-c-5 cat-c">Коньки</li>
            <li class="pointer cat-c-6 cat-c">Катамараны</li>
            <li class="pointer cat-c-7 cat-c">Лодки</li>
            <li class="pointer cat-c-8 cat-c">Ракетки</li>
         </ul>

         <div class="hide-filters-cat">
            <div class="hide-filter-btn">
               <p class="text-18-500">Скрыть фильтры</p>
               <img src="./assets/icon/sliders-horizontal.svg" alt="" />
            </div>
            <div class="popular-filter-btn">
               <p class="text-18-500">По популярности</p>
               <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-black.svg" alt="" /></div>
            </div>
         </div>

         <div class="catalog-container">
            <aside class="filters-container-catalog">
               <p class="text-24-700">Найдено по фильтрам: 9</p>
               <div style="width: 300px"></div>
            </aside>
            <div class="cpoduct-zone-cat">
               <div class="in-stock-discription">Доступно сейчас</div>
               <div class="in-stock-catalog">
                  <div class="card-of-product">
                     <a href="item.html"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

                     <div class="discription-of-product">
                        Велосипед 12-K
                        <ul>
                           <li><span class="opacity-text-discription-product-card">Вид: </span>Горный</li>
                           <li><span class="opacity-text-discription-product-card">Залог: </span>200₽</li>
                           <li><span class="opacity-text-discription-product-card">Доступно: </span>в 3 парках</li>
                        </ul>
                        <div class="price-of-product pointer">
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+.svg" alt="" />
                           <span class="prise-of-rent-1">1 200₽/час</span>
                        </div>
                     </div>
                  </div>

                  <div class="card-of-product">
                     <a href="item.html"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>

                     <div class="discription-of-product">
                        Городской велосипед
                        <ul>
                           <li><span class="opacity-text-discription-product-card">Вид: </span>Прогулочный</li>
                           <li><span class="opacity-text-discription-product-card">Залог: </span>300₽</li>
                           <li><span class="opacity-text-discription-product-card">Доступно: </span>3шт</li>
                        </ul>
                        <div class="price-of-product pointer">
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+.svg" alt="" />
                           <span class="prise-of-rent-1">1 000₽/час</span>
                        </div>
                     </div>
                  </div>

                  <div class="card-of-product">
                     <a href="item.html"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

                     <div class="discription-of-product">
                        Велосипед 12-K
                        <ul>
                           <li><span class="opacity-text-discription-product-card">Вид: </span>Горный</li>
                           <li><span class="opacity-text-discription-product-card">Залог: </span>200₽</li>
                           <li><span class="opacity-text-discription-product-card">Доступно: </span>в 3 парках</li>
                        </ul>
                        <div class="price-of-product pointer">
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+.svg" alt="" />
                           <span class="prise-of-rent-1">1 200₽/час</span>
                        </div>
                     </div>
                  </div>

                  <div class="card-of-product">
                     <a href="item.html"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>

                     <div class="discription-of-product">
                        Городской велосипед
                        <ul>
                           <li><span class="opacity-text-discription-product-card">Вид: </span>Прогулочный</li>
                           <li><span class="opacity-text-discription-product-card">Залог: </span>300₽</li>
                           <li><span class="opacity-text-discription-product-card">Доступно: </span>3шт</li>
                        </ul>
                        <div class="price-of-product pointer">
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+.svg" alt="" />
                           <span class="prise-of-rent-1">1 000₽/час</span>
                        </div>
                     </div>
                  </div>

                  <div class="card-of-product">
                     <a href="item.html"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

                     <div class="discription-of-product">
                        Велосипед 12-K
                        <ul>
                           <li><span class="opacity-text-discription-product-card">Вид: </span>Горный</li>
                           <li><span class="opacity-text-discription-product-card">Залог: </span>200₽</li>
                           <li><span class="opacity-text-discription-product-card">Доступно: </span>в 3 парках</li>
                        </ul>
                        <div class="price-of-product pointer">
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+.svg" alt="" />
                           <span class="prise-of-rent-1">1 200₽/час</span>
                        </div>
                     </div>
                  </div>

                  <div class="card-of-product">
                     <a href="item.html"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>

                     <div class="discription-of-product">
                        Городской велосипед
                        <ul>
                           <li><span class="opacity-text-discription-product-card">Вид: </span>Прогулочный</li>
                           <li><span class="opacity-text-discription-product-card">Залог: </span>300₽</li>
                           <li><span class="opacity-text-discription-product-card">Доступно: </span>3шт</li>
                        </ul>
                        <div class="price-of-product pointer">
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+.svg" alt="" />
                           <span class="prise-of-rent-1">1 000₽/час</span>
                        </div>
                     </div>
                  </div>

                  <div class="card-of-product">
                     <a href="item.html"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

                     <div class="discription-of-product">
                        Велосипед 12-K
                        <ul>
                           <li><span class="opacity-text-discription-product-card">Вид: </span>Горный</li>
                           <li><span class="opacity-text-discription-product-card">Залог: </span>200₽</li>
                           <li><span class="opacity-text-discription-product-card">Доступно: </span>в 3 парках</li>
                        </ul>
                        <div class="price-of-product pointer">
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+.svg" alt="" />
                           <span class="prise-of-rent-1">1 200₽/час</span>
                        </div>
                     </div>
                  </div>

                  <div class="card-of-product">
                     <a href="item.html"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>

                     <div class="discription-of-product">
                        Городской велосипед
                        <ul>
                           <li><span class="opacity-text-discription-product-card">Вид: </span>Прогулочный</li>
                           <li><span class="opacity-text-discription-product-card">Залог: </span>300₽</li>
                           <li><span class="opacity-text-discription-product-card">Доступно: </span>3шт</li>
                        </ul>
                        <div class="price-of-product pointer">
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+.svg" alt="" />
                           <span class="prise-of-rent-1">1 000₽/час</span>
                        </div>
                     </div>
                  </div>

                  <div class="card-of-product">
                     <a href="item.html"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

                     <div class="discription-of-product">
                        Велосипед 12-K
                        <ul>
                           <li><span class="opacity-text-discription-product-card">Вид: </span>Горный</li>
                           <li><span class="opacity-text-discription-product-card">Залог: </span>200₽</li>
                           <li><span class="opacity-text-discription-product-card">Доступно: </span>в 3 парках</li>
                        </ul>
                        <div class="price-of-product pointer">
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+.svg" alt="" />
                           <span class="prise-of-rent-1">1 200₽/час</span>
                        </div>
                     </div>
                  </div>

                  <div class="card-of-product">
                     <a href="item.html"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>

                     <div class="discription-of-product">
                        Городской велосипед
                        <ul>
                           <li><span class="opacity-text-discription-product-card">Вид: </span>Прогулочный</li>
                           <li><span class="opacity-text-discription-product-card">Залог: </span>300₽</li>
                           <li><span class="opacity-text-discription-product-card">Доступно: </span>3шт</li>
                        </ul>
                        <div class="price-of-product pointer">
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+.svg" alt="" />
                           <span class="prise-of-rent-1">1 000₽/час</span>
                        </div>
                     </div>
                  </div>

                  <div class="card-of-product">
                     <a href="item.html"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

                     <div class="discription-of-product">
                        Велосипед 12-K
                        <ul>
                           <li><span class="opacity-text-discription-product-card">Вид: </span>Горный</li>
                           <li><span class="opacity-text-discription-product-card">Залог: </span>200₽</li>
                           <li><span class="opacity-text-discription-product-card">Доступно: </span>в 3 парках</li>
                        </ul>
                        <div class="price-of-product pointer">
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+.svg" alt="" />
                           <span class="prise-of-rent-1">1 200₽/час</span>
                        </div>
                     </div>
                  </div>

                  <div class="card-of-product">
                     <a href="item.html"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>

                     <div class="discription-of-product">
                        Городской велосипед
                        <ul>
                           <li><span class="opacity-text-discription-product-card">Вид: </span>Прогулочный</li>
                           <li><span class="opacity-text-discription-product-card">Залог: </span>300₽</li>
                           <li><span class="opacity-text-discription-product-card">Доступно: </span>3шт</li>
                        </ul>
                        <div class="price-of-product pointer">
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+.svg" alt="" />
                           <span class="prise-of-rent-1">1 000₽/час</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="show-more-btn-catalog text-18-500">Показать еще</div>
            </div>
         </div>
      </section>



<?php
get_footer();
?>