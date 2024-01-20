
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
         <div class="title-of-section-catalog-page t-o-s">
            <h1 class="text-gradient"><span class="catalog-page-title-h1-desctop"><?php the_field('catalog-page-title') ?></span><span class="catalog-page-title-h1-mobile none">Каталог</span></h1>
            <!-- <div class="black-text-section">Возьми</div>
            <div class="opacity-text-section o-t-s-all">в прокат</div>
            <div class="shadow-section s-s-shadow"></div> -->
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
               <p class="text-14-500">Скрыть фильтры</p>
               <img src="./assets/icon/sliders-horizontal.svg" alt="" />
            </div>
            <div class="hide-filter-text-btn none">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/chevron-up-bold.svg" alt="" />

               Фильтр
            </div>
            <div class="popular-filter-btn">
               <p class="text-14-500">По популярности</p>
               <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-black.svg" alt="" /></div>
            </div>
         </div>

         <div class="catalog-container">
            <aside class="filters-container-catalog">
               <p class="text-18-700">Найдено по фильтрам: 9</p>
               <!-- <div style="width: 300px"></div> -->
               <section class="catalog-filter-section">
                  <div class="filter-container-catalog">
                     <div class="catalog-input-container">
                        <p>Стоимость аренды</p>
                        <label for="input-min"></label>
                        <input type="number" id="input-min" min="300" max="50000" step="1" />

                        <label for="input-max"></label>
                        <input type="number" id="input-max" min="300" max="50000" step="1" />
                        <div id="price-values">
                           <span id="price-min"></span>
                           <span id="price-max"></span>
                        </div>
                        <div id="price-slider"></div>
                     </div>
                  </div>
                  <div class="checkbox-container_catalog">
                     <p>Производители</p>
                     <div><input type="checkbox" /><label for="">Format</label></div>
                     <div><input type="checkbox" /><label for="">Aspect</label></div>
                     <div><input type="checkbox" /><label for="">BBB</label></div>
                     <div><input type="checkbox" /><label for="">Hamax</label></div>
                     <div><input type="checkbox" /><label for="">SKS</label></div>
                     <div class="show-more-filter-catalog">+ Показать еще</div>
                  </div>
                  <div class="checkbox-container_catalog">
                     <p>Диаметр колеса</p>
                     <div><input type="checkbox" /><label for="">8”</label></div>
                     <div><input type="checkbox" /><label for="">12”</label></div>
                     <div><input type="checkbox" /><label for="">12,5”</label></div>
                     <div><input type="checkbox" /><label for="">14”</label></div>
                     <div><input type="checkbox" /><label for="">16”</label></div>
                     <div><input type="checkbox" /><label for="">18”</label></div>
                     <div><input type="checkbox" /><label for="">20”</label></div>
                     <div><input type="checkbox" /><label for="">21”</label></div>
                     <div><input type="checkbox" /><label for="">24”</label></div>
                     <div class="show-more-filter-catalog">- Скрыть</div>
                  </div>
                  <div class="checkbox-container_catalog">
                     <p>Цвет</p>
                     <div><input type="checkbox" /><label for="">Синий</label></div>
                     <div><input type="checkbox" /><label for="">Зеленый</label></div>
                     <div><input type="checkbox" /><label for="">Фиолетовый</label></div>
                     <div><input type="checkbox" /><label for="">Белый</label></div>
                     <div><input type="checkbox" /><label for="">Красный</label></div>
                     <div class="show-more-filter-catalog">+ Показать еще</div>
                  </div>
                  <div class="button-reset-filter-catalog-page">Сбросить фильтры</div>
               </section>
            </aside>
            <div class="cpoduct-zone-cat">
               <div class="in-stock-discription">Доступно сейчас</div>
               <div class="items-title-catalog-page none">Товары</div>
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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
                           <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
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