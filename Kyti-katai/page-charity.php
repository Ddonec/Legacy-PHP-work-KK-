<?php
/*
Template Name: charity
*/
?>




<?php
get_header();
?>

<section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="<?php echo bloginfo('template_url'); ?>">Главная</a></p>
            <p>/</p>
            <p><a href="#">Лето</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Благотворительность</p>
         </div>
         <h1 class="h1-no-main-page text-gradient charity-title"><?php the_field('charity-page-zagolovk_straniczy') ?></h1>

         <div class="text-blicks-repair-page">
            <div><?php the_field('charity-page-levyj_tekst') ?></div>
            <p><?php the_field('charity-page-srednij_tekst') ?>​</p>
            <p><?php the_field('charity-page-pravyj_tekst') ?></p>
         </div>

         <div class="our-values-about-us-page-container flex-charity-margin">
            <div>
               <h3 class="main-text-in-card-about-page"><?php the_field('charity-page-zagolovok_kartochki_1') ?></h3>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-1.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('charity-page-zagolovok_kartochki_2') ?></h4>
                  <div class="p-about-us-cont"><?php the_field('charity-page-opisanie_kartochki_2') ?></div>
               </div>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-2.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('charity-page-zagolovok_kartochki_3') ?></h4>
                  <div class="p-about-us-cont"><?php the_field('charity-page-opisanie_kartochki_3') ?></div>
               </div>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-3.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('charity-page-zagolovok_kartochki_4') ?></h4>
                  <div class="p-about-us-cont"><?php the_field('charity-page-opisanie_kartochki_4') ?></div>
               </div>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-4.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('charity-page-zagolovok_kartochki_5') ?></h4>
                  <div class="p-about-us-cont"><?php the_field('charity-page-opisanie_kartochki_5') ?></div>
               </div>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-5.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('charity-page-zagolovok_kartochki_6') ?></h4>
                  <div class="p-about-us-cont"><?php the_field('charity-page-opisanie_kartochki_6') ?></div>
               </div>
            </div>
         </div>
      </section>


<?php
get_footer();
?>