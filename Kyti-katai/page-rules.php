<?php
/*
Template Name: rules
*/
?>


<?php
get_header();
?>

<section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="index.html">Главная</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Правила проката</p>
         </div>
         <h1 class="h1-no-main-page text-gradient"><?php the_field('rules-page-title') ?></h1>

         <div class="main-text-area-rules-page">
         <?php the_field('rules-page-rules') ?>
         </div>


      </section>


<?php
get_footer();
?>