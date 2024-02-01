
<?php
/*
Template Name: item
*/
?>



<?php
get_header();
?>










      <section class="main-content-item">
         <div class="bread-crumbs">
            <p><a href="index">Главная</a></p>
            <p>/</p>
            <p><a href="#">Лето</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Прокат</p>
            <p>/</p>
            <p>...</p>
         </div>
         <h1 class="text-gradient">Городской велоипед</h1>
         <div class="main-info-info-page">
            <div class="photo-item-i-p"></div>
            <div class="right-section-info-page">
               <div class="title-of-section-item-page text-gradient">
               <?php the_field('item-page-pervyj_zagolovok') ?>
                  <!-- <div class="black-text-section">Городской</div>
                  <div class="opacity-text-section o-t-s-all">велосипед</div>
                  <div class="shadow-section item-shadow-section"></div> -->
               </div>
               <div class="buttons-abd-discription-i-p">
                  <ul class="discription-of-item-i-p">
                     <li class="pointer item-disc-i-p-1 i-p-d i-p-d-active text-14-500-left">Описание</li>
                     <li class="pointer item-disc-i-p-2 i-p-d text-14-500-left">Характеристики</li>
                  </ul>
                  <p class="text-18-500-left">
                  <?php the_field('item-page-tekst_opisaniya') ?>
                  </p>
               </div>
               <div class="price-cards-i-p">
                  <div class="price-card-i-p text-18-500-left">
                     <p class="">Стоимость (₽)</p>
                     <div class="prices-area-i-p-flex text-14">
                        <div class="grey-i-p">
                           <p>Часов</p>
                           <p>Будни</p>
                           <p>Выходные</p>
                        </div>
                        <div>
                           <div class="hours-area-i-p-flex grey-i-p">
                              <p>1</p>
                              <p>2</p>
                              <p>3</p>
                           </div>
                           <div class="prices-area-i-p-flex-in-card">
                              <p><span class="grey-i-p text-14">от </span><?php the_field('item-page-stoimost_budni_1') ?></p>
                              <p><span class="grey-i-p text-14">от </span><?php the_field('item-page-stoimost_budni_2') ?></p>
                              <p><span class="grey-i-p text-14">от </span><?php the_field('item-page-stoimost_budni_3') ?></p>
                           </div>
                           <div class="prices-area-i-p-flex-in-card text-14">
                              <p><span class="grey-i-p text-14">от </span>350</p>
                           </div>
                        </div>
                     </div>
                     <p class="text-14"><span class="grey-i-p">Залог:</span> <?php the_field('item-page-zalog') ?></p>
                  </div>
                  <div class="avalibale-card-i-p">
                     <p class="text-18-500-left">Наличие</p>
                     <div class="">
                        <p class="grey-i-p text-14">В 12 парках:</p>
                        <p class="text-14-500-left-lato div-dics-right-card-i-p ">
                        <?php the_field('item-page-nali4ie') ?>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="item-page-map-block">
            <div class="button-on-map-item-page pointer"><a target="_blank" href="https://yandex.ru/maps/213/moscow/?ll=37.617700%2C55.755863&z=10">Смотреть&nbsp;на&nbsp;карте</a></div>
         </div>
      </section>
      <h3 class="text-gradient second-title-item-page"><?php the_field('item-page-vtoroj_zagolovok') ?></h3>
      <div class="last-section-area-i-p">
         <div class="last-section-of-i-p">
            <div class="slider-area-item-page">
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
               
            </div>
            <div class="left-arrow-i-p arrows-i-p"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-left.svg" alt="" /></div>

            <div class="right-arrow-i-p arrows-i-p"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-1.svg" alt="" /></div>
         </div>
      </div>

<?php
get_footer();
?>