

<?php
/*
Template Name: about-us
*/
?>


<?php
get_header();
?>





      <section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="index">Главная</a></p>
            <p>/</p>
            <p><a href="#">Лето</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">О нас</p>
         </div>
         <div class="title-of-section-news-page">
            <h3 class="text-gradient"><?php the_field('title-about-us-page') ?></h3>
         </div>
         <div class="first-2-blocks-about-us-page">
            <div class="k-k-about-us-1-cont">
               <?php the_field('tekst_sleva-about-us-page') ?>
            </div>
            <div class="k-k-about-us-2-cont">
               <?php the_field('tekst_sprava-about-us-page') ?>
            </div>
         </div>
         <div class="photo-area-about-us-page"></div>
         <div class="our-values-about-us-page-container">
            <div>
               <h3 class="main-text-in-card-about-page text-gradient"><?php the_field('tekst_kartochki_1-about-us-page') ?></h3>
               <p class="t-14-50-about"><?php the_field('opisanie_kartochki_1-about-us-page') ?></p>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-update-1.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('tekst_kartochki_2-about-us-page') ?></h4>
                  <div class="p-about-us-cont">
                  <?php the_field('opisanie_kartochki_2-about-us-page') ?>
                  </div>
               </div>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-update-2.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('tekst_kartochki_3-about-us-page') ?></h4>
                  <div class="p-about-us-cont"><?php the_field('opisanie_kartochki_3-about-us-page') ?></div>
               </div>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-update-3.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('tekst_kartochki_4-about-us-page') ?></h4>
                  <div class="p-about-us-cont"><?php the_field('opisanie_kartochki_4-about-us-page') ?></div>
               </div>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-update-4.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('tekst_kartochki_5-about-us-page') ?></h4>
                  <div class="p-about-us-cont"><?php the_field('opisanie_kartochki_5-about-us-page') ?></div>
               </div>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-update-5.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('tekst_kartochki_6-about-us-page') ?></h4>
                  <div class="p-about-us-cont"><?php the_field('opisanie_kartochki_6-about-us-page') ?></div>
               </div>
            </div>
         </div>
      </section>
      <section class="blue-bacground-section-about-us">
         <div class="left-margin-container">
            <h3 class="h-3-our-history text-yellow-gradient"><?php the_field('sinij_blok_zagolovok-about-us-page') ?></h3>
            <p class="p-disc-our-history-about-page">
               <?php the_field('sinij_blok_opisanie-about-us-page') ?>
            </p>
            <img class="logo-about-us-bike-white" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/bike-white-w145.svg" alt="" />
            <div class="blue-scroll-relative-container">
               <div class="shadow-container-blue-section-about-us"></div>
               <div class="blue-pseudo-shadow-about-us">
                  <div class="overflow-container-for-blue-section-about-us-page">
                     <div class="yellow-line-container">
                        <img class="blue-yellow-dot-about-page-1" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/dot-blue-and-yellow.svg" alt="" />
                        <img class="blue-yellow-dot-about-page-2" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/dot-blue-and-yellow.svg" alt="" />
                        <img class="blue-yellow-dot-about-page-3" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/dot-blue-and-yellow.svg" alt="" />
                        <img class="blue-yellow-dot-about-page-4" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/dot-blue-and-yellow.svg" alt="" />
                        <img class="blue-yellow-dot-about-page-5" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/dot-blue-and-yellow.svg" alt="" />
                        <img class="blue-yellow-dot-about-page-6" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/dot-blue-and-yellow.svg" alt="" />
                     </div>
                     <div class="history-cards-container-about-page">
                       <div class="history-block-2009-about-us-page">
                           <h3 class="h-3-our-history"><?php the_field('sinij_blok_god_1-about-us-page') ?></h3>
                            <img src="<?php the_field('izobrazhenie_goda_1') ?>" alt="" />
                            <p class="p-disc-history-card-a-u-p"><?php the_field('sinij_blok_opisanie_goda_1-about-us-page') ?></p>
                       </div>

                       <div class="history-block-2009-about-us-page ">
                          <h3 class="h-3-our-history"><?php the_field('sinij_blok_god_2-about-us-page') ?></h3>
                          <img src="<?php the_field('izobrazhenie_goda_2') ?>" alt="" />
                          <p class="p-disc-history-card-a-u-p"><?php the_field('sinij_blok_opisanie_goda_2') ?></p>
                       </div>

                       <div class="history-block-2009-about-us-page">
                           <h3 class="h-3-our-history"><?php the_field('sinij_blok_god_3') ?></h3>
                            <img src="<?php the_field('izobrazhenie_goda_3') ?>" alt="" />
                            <p class="p-disc-history-card-a-u-p"><?php the_field('sinij_blok_opisanie_goda_3') ?></p>
                       </div>

                       <div class="history-block-2009-about-us-page ">
                          <h3 class="h-3-our-history"><?php the_field('sinij_blok_god_4') ?></h3>
                          <img src="<?php the_field('izobrazhenie_goda_4') ?>" alt="" />
                          <p class="p-disc-history-card-a-u-p"><?php the_field('sinij_blok_opisanie_goda_4') ?></p>
                       </div>

                       <div class="history-block-2009-about-us-page">
                           <h3 class="h-3-our-history"><?php the_field('sinij_blok_god_5') ?></h3>
                            <img src="<?php the_field('izobrazhenie_goda_5') ?>" alt="" />
                            <p class="p-disc-history-card-a-u-p"><?php the_field('sinij_blok_opisanie_goda_5') ?></p>
                       </div>

                       <div class="history-block-2009-about-us-page ">
                          <h3 class="h-3-our-history"><?php the_field('sinij_blok_god_6') ?></h3>
                          <img src="<?php the_field('izobrazhenie_goda_6') ?>" alt="" />
                          <p class="p-disc-history-card-a-u-p"><?php the_field('sinij_blok_opisanie_goda_6') ?></p>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="call-back-form-container-f-p">
         <div class="call-back-form-container-franchise">
               <div class="text-sub-block-news-inside">
                  <h4 class="main-text-sub-block-news-p-cont text-gradient">Давайте созвонимся!</h4>
                  <p class="second-text-sub-block-news-p-cont text-18-500">Наши специалисты ответят на все ваши вопросы</p>
               </div>
               <div class="input-zone-news-p-cont">
                  <input class="input-in-news-p-cont i-n-p-c-name" type="text" placeholder="Ваше имя" />
                  <input class="input-in-news-p-cont i-n-p-c-email" type="email" placeholder="Электронная почта" />
                  <div class="send-btn-news-sub text-18-500 pointer">Отправить</div>
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