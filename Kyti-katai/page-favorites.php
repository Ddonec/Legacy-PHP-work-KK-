

<?php
/*
Template Name: favorites
*/
?>




<?php
get_header();
?>





      <section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="index">Главная</a></p>
            <p>/</p>

            <p class="grey-bread-crumbs">Избранное</p>
         </div>
         <div class="favorite-and-switch">
            <h1 class="h1-no-main-page text-gradient">Избранное</h1>

            <div class="switch-double-container">
               <label class="switch">
                  <input type="checkbox" checked />
                  <span class="slider round pointer">
                     <div class="text-in-slider-buton" id="season-content">
                        <!-- В начальном состоянии отображаем зиму -->
                        <div class="season winter">
                           <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/sun.svg" alt="sun" id="sun-header-button" />
                           <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/snowflake.svg" alt="snow" id="snow-header-button" />
                           <span class="time-of-year-text"> Зима </span>
                        </div>
                        <!-- В скрытом состоянии отображаем лето -->
                        <div class="season summer" style="display: none">
                           <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/sun.svg" alt="sun" id="sun-header-button-2" />
                           <span class="time-of-year-text"> Лето </span>
                           <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/sun.svg" alt="sun" id="snow-header-button-2" />
                        </div>
                     </div>
                  </span>
               </label>
            </div>
         </div>

         <div class="nav-repair-page">
            <ul>
               <li class="pointer">Каталог</li>
               <li class="pointer">Велосипеды</li>
               <li class="pointer">Веломобили</li>
               <li class="pointer">Электро</li>
               <li class="pointer">Коньки</li>
               <li class="pointer">Катамараны</li>
               <li class="pointer">Лодки</li>
            </ul>
            <div class="arrow-right-list pointer">
               <img id="vector-1" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-1.svg" alt="" />
            </div>
         </div>
         <div class="slider-area-favorite-page">
            <div class="card-of-product">
               <a href="item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>

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
               <a href="item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

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
               <a href="item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>
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
               <a href="item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

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
               <a href="item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>

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
               <a href="item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

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
               <a href="item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>
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
               <a href="item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

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
               <a href="item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>
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
               <a href="item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

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
         </div>
         <div class="buton-show-more-favorite-page">Показать еще</div>
      </section>



<?php
get_footer();
?>