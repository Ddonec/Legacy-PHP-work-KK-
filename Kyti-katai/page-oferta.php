
<?php
/*
Template Name: oferta
*/
?>







<?php
get_header();
?>

<section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="index.html">Главная</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Договор оферты</p>
         </div>
         <h1 class="h1-no-main-page text-gradient"><?php the_field('zagolovok_straniczy_oferty') ?></h1>

         <div class="top-discription-private-page">
            <p>
            <?php the_field('rekvishhzity_straniczy_oferty') ?>
            </p>
         </div>
         <div class="main-text-area-rules-page">
         <?php the_field('tekst_oferty_1') ?>
         </div>
         <?php the_field('tekst_oferty_2') ?>

         <div class="annex-1-oferta-page">
         <?php the_field('tekst_oferty_3') ?>

            <img src="<?php the_field('oferta_izobradenie_1') ?>" />
         </div>
         <?php the_field('tekst_oferty_4') ?>
 
         <div class="annex-1-oferta-page">
         <?php the_field('tekst_oferty_5') ?>

            <img src="<?php the_field('oferta_izobradenie_2') ?>" />
         </div>
         <div class="annex-1-oferta-page">
         <?php the_field('tekst_oferty_6') ?>

            <img src="<?php the_field('oferta_izobradenie_3') ?>" />
         </div>      </section>


<?php
get_footer();
?>