
<?php
/*
Template Name: corporative
*/
?>

<?php
get_header();
?>


<section class="main-content-news-page">
      <div class="bread-crumbs">
         <p><a href="<?php echo get_option('home'); ?>">Главная</a></p>
         <p>/</p>
         <p class="grey-bread-crumbs">Корпоративным клиентам</p>
      </div>
      <div class="title-of-section-news-page">
         <h1 class="h1-rope-park-page text-gradient"><?php the_field('corporative-zakolovok_straniczy') ?></h1>
      </div>

      <div class="first-2-blocks-rope-park-page">
         <div class="k-k-about-rope-park-page"><?php the_field('corporative-levyj_tekst') ?></div>
         <div class="k-k-div-530w-disc-rope-park-page">
         <?php the_field('corporative-srednij_tekst') ?>
            <span class="k-k-div-530w-disc-rope-park-page-pseudo none"
               ><?php the_field('corporative-pravyj_tekst') ?></span
            >
         </div>
         <div class="k-k-div-530w-disc-rope-park-page"><?php the_field('corporative-pravyj_tekst') ?></div>
      </div>

      <div class="corparative-three-cards-container">
         <div>
            <img class="image-frame-corporative" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/corparative-three-card-1.svg" alt="" />
            <div>
               <h4 class="h4-casues-card"><?php the_field('corporative-3_kartochki_zagolovok_1') ?></h4>
               <div class="p-casues-card"><?php the_field('corporative-3_kartochki_opisanie_1') ?></div>
            </div>
         </div>
         <div>
            <img class="image-frame-corporative" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/corparative-three-card-2.svg" alt="" />
            <div>
               <h4 class="h4-casues-card"><?php the_field('corporative-3_kartochki_zagolovok_2') ?></h4>
               <div class="p-casues-card"><?php the_field('corporative-3_kartochki_opisanie_2') ?></div>
            </div>
         </div>
         <div>
            <img class="image-frame-corporative" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/corparative-three-card-3.svg" alt="" />
            <div>
               <h4 class="h4-casues-card"><?php the_field('corporative-3_kartochki_zagolovok_3') ?></h4>
               <div class="p-casues-card"><?php the_field('corporative-3_kartochki_opisanie_3') ?></div>
            </div>
         </div>
      </div>
      <section class="assortiment-section-corporative-page">
         <h4 class="title-of-block-small-text-28-700-mons"><?php the_field('corporative-zagolovok_2_sekczii') ?></h4>
         <div class="assiortement-overflow-container">
            <div class="assortement-main-container">
               <div class="assortement__card assortement__card_1">
                  <p class="assortement__title">Велосипеды</p>
               </div>

               <div class="assortement__card assortement__card_2">
                  <p class="assortement__title">Веломобили</p>
               </div>

               <div class="assortement__card assortement__card_3">
                  <p class="assortement__title">Роликовые коньки</p>
               </div>

               <div class="assortement__card assortement__card_4">
                  <p class="assortement__title">Электро— самокаты</p>
               </div>

               <div class="assortement__card assortement__card_5">
                  <p class="assortement__title">Лыжи</p>
               </div>

               <div class="assortement__card assortement__card_6">
                  <p class="assortement__title">Коньки</p>
               </div>

               <div class="assortement__card assortement__card_7">
                  <p class="assortement__title">Тюбинги</p>
               </div>
            </div>
         </div>
         <div class="submitt-application-btn">Оставить заявку</div>
      </section>

      <div class="corporative-casues-container">
         <div>
            <h3 class="main-text-in-casues-card text-gradient"><?php the_field('corporative-4_kartochki_zagolovok_1') ?></h3>
         </div>
         <div>
            <img class="image-frame-corporative" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-1.svg" alt="" />
            <div>
               <h4 class="h4-casues-card"><?php the_field('corporative-4_kartochki_zagolovok_2') ?></h4>
               <div class="p-casues-card"><?php the_field('4_kartochki_opisanie_2') ?></div>
            </div>
         </div>
         <div>
            <img class="image-frame-corporative" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-2.svg" alt="" />
            <div>
               <h4 class="h4-casues-card"><?php the_field('corporative-4_kartochki_zagolovok_3') ?></h4>
               <div class="p-casues-card"><?php the_field('4_kartochki_opisanie_3') ?></div>
            </div>
         </div>
         <div>
            <img class="image-frame-corporative" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-5.svg" alt="" />
            <div>
               <h4 class="h4-casues-card"><?php the_field('corporative-4_kartochki_zagolovok_4') ?></h4>
               <div class="p-casues-card"><?php the_field('4_kartochki_opisanie_4') ?></div>
            </div>
         </div>
      </div>

      <div class="call-back-form-container-overflow-container-default">
                <div class="call-back-form-container-franchise">
                   <div class="text-sub-block-news-inside">
                      <h4 class="main-text-sub-block-news-p-cont text-gradient">Давайте созвонимся!</h4>
                      <p class="second-text-sub-block-news-p-cont text-18-500-left">Наши специалисты ответят на все ваши вопросы</p>
                   </div>
                   <div class="input-zone-news-p-cont">
                      <input class="input-in-news-p-cont i-n-p-c-name" type="text" placeholder="Ваше имя" />
                      <input class="input-in-news-p-cont i-n-p-c-email" type="text" placeholder="Номер телефона" />
                      <div class="send-btn-news-sub text-12-500 pointer">Отправить</div>
                      <img class="google-piexel-phone-callback-form" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/google-piexel-phone-full.png" alt="" />
                      <img class="google-piexel-screen-callback-form" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/google-piexel-full.png" alt="" />
                      <div class="data-agreement-12px">
                         Нажимая кнопку вы принимаете <a href="https://agency-5.ru/soglashenie-ob-obrabotke-personalnyh-dannyh/">Соглашение об обработке персональных данных</a>
                      </div>
                   </div>
                </div>
             </div>
   </section>

<?php
get_footer();
?>