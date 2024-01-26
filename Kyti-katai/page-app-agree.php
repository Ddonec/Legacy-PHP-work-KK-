<?php
/*
Template Name: app-agree
*/
?>


<?php
get_header();
?>

<section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="index.html">Главная</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Пользовательское соглашение для мобильного приложения</p>
         </div>
         <h1 class="h1-no-main-page text-gradient"><?php the_field('zagolovok_straniczy_app_agreement') ?></h1>

         <div class="main-text-area-rules-page">
         <?php the_field('tekst_s_html_tegami_app_agreement') ?>
         </div>
      </section>


<?php
get_footer();
?>