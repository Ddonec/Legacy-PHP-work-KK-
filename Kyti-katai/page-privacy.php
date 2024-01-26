


<?php
/*
Template Name: privacy
*/
?>




<?php
get_header();
?>


<section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="index.html">Главная</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Политика конфиденциальности</p>
         </div>
         <h1 class="h1-no-main-page text-gradient"><?php the_field('privacy-osnovonoj_zagolovok') ?></h1>

         <div class="top-discription-private-page">
            <p><?php the_field('privacy-pometka_1') ?></p>
            <h3><?php the_field('privacy-zagolovok_stati') ?></h3>
         </div>
         <div class="main-text-area-rules-page">
         <?php the_field('privacy-statya') ?>
         </div>


      </section>







<?php
get_footer();
?>
