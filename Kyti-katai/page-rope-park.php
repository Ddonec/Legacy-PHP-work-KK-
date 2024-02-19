
<?php
/*
Template Name: rope-park
*/
?>



<?php
get_header();
?>

<style>
   .photo-area-about-rope-park-page__first {
   background: linear-gradient(78deg, rgba(51, 51, 51, 0.6) 1.23%, rgba(51, 51, 51, 0) 75.3%), url(<?php the_field('bolshoe_foto_1') ?>), lightgray 0px -41.505px / 100% 156.143% no-repeat;
}
.photo-area-about-rope-park-page__second {
   background: linear-gradient(78deg, rgba(51, 51, 51, 0.6) 1.23%, rgba(51, 51, 51, 0) 75.3%), url(<?php the_field('bolshoe_foto_2') ?>), lightgray 0px -41.505px / 100% 156.143% no-repeat;
}

.park-characteristics__image1 {
   background-image: url(<?php the_field('foto_harakteristik_1') ?>);
}
.park-characteristics__image2 {
   background-image: url(<?php the_field('foto_harakteristik_2') ?>);
}
.park-characteristics__image3 {
   background-image: url(<?php the_field('foto_harakteristik_3') ?>);
}
.park-characteristics__image4 {
   background-image: url(<?php the_field('foto_harakteristik_4') ?>);
}

.photos-of-rope-park__img1 {
   background: url(<?php the_field('foto_snizu_iz_6_1') ?>);
   background-size: cover;
}
.photos-of-rope-park__img2 {
   background: url(<?php the_field('foto_snizu_iz_6_2') ?>);
   background-size: cover;
}
.photos-of-rope-park__img3 {
   background: url(<?php the_field('foto_snizu_iz_6_3') ?>);
   background-size: cover;
}
.photos-of-rope-park__img4 {
   background: url(<?php the_field('foto_snizu_iz_6_4') ?>);
   background-size: cover;
}
.photos-of-rope-park__img5 {
   background: url(<?php the_field('foto_snizu_iz_6_5') ?>);
   background-size: cover;
}
.photos-of-rope-park__img6 {
   background: url(<?php the_field('foto_snizu_iz_6_6') ?>);
   background-size: cover;
}

</style>

<section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="<?php echo get_option('home'); ?>">Главная</a></p>
            <p>/</p>
            <p><a href="#">Лето</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Веревочный парк</p>
         </div>
         <div class="title-of-section-news-page">
            <h1 class="h1-rope-park-page text-gradient"><?php the_field('rope-park-zagolovok_straniczy') ?></h1>
         </div>
         <div class="first-2-blocks-rope-park-page">
            <div class="k-k-about-rope-park-page"><?php the_field('rope-park-pervyj_blok_tekst_sleva') ?></div>
            <div class="k-k-div-530w-disc-rope-park-page">
            <?php the_field('rope-park-pervyj_blok_tekst_poseredine') ?>
               <span class="k-k-div-530w-disc-rope-park-page-pseudo none"><?php the_field('rope-park-pervyj_blok_tekst_sprava') ?></span>
            </div>
            <div class="k-k-div-530w-disc-rope-park-page"><?php the_field('rope-park-pervyj_blok_tekst_sprava') ?></div>
         </div>
         <div class="photo-area-about-rope-park-page">
            <div class="photo-area-about-rope-park-page__first">
               <div class="poller-park-photo__discription-area">
                  <p class="poller-park-photo__discription-area_title"><?php the_field('rope-park-pervaya_kartinka_zagolovok') ?></p>
                  <p class="poller-park-photo__discription-area_discription">
                  <?php the_field('rope-park-pervaya_kartinka_opisanie') ?>
                  </p>
               </div>
            </div>
            <div class="photo-area-about-rope-park-page__second">
               <div class="poller-park-photo__discription-area">
                  <p class="poller-park-photo__discription-area_title"><?php the_field('rope-park-vtoraya_kartinka_zagolovok') ?></p>
                  <p class="poller-park-photo__discription-area_discription"><?php the_field('rope-park-vtoraya_kartinka_opisanie') ?></p>
               </div>
            </div>
         </div>
         <div class="park-characteristics-container">
            <h4 class="title-of-block-small-text-28-700-mons"><?php the_field('rope-park-zagolovok_vtoroj_sekczii') ?></h4>
            <div class="park-characteristics">
               <div class="park-characteristics__text1 park-characteristics__text">
                  <p class="park-characteristics__title"><?php the_field('rope-park-sinij_zagolovok_1') ?></p>
                  <p class="park-characteristics__discription"><?php the_field('rope-park-opisanie_sinego_1') ?></p>
               </div>
               <div class="park-characteristics__image1"></div>

               <div class="park-characteristics__text2 park-characteristics__text">
                  <p class="park-characteristics__title"><?php the_field('rope-park-sinij_zagolovok_2') ?></p>
                  <p class="park-characteristics__discription"><?php the_field('rope-park-opisanie_sinego_2') ?></p>
               </div>
               <div class="park-characteristics__image2"></div>

               <div class="park-characteristics__image3"></div>
               <div class="park-characteristics__text3 park-characteristics__text">
                  <p class="park-characteristics__title"><?php the_field('rope-park-sinij_zagolovok_3') ?></p>
                  <p class="park-characteristics__discription"><?php the_field('rope-park-opisanie_sinego_3') ?></p>
               </div>

               <div class="park-characteristics__image4"></div>
               <div class="park-characteristics__text4 park-characteristics__text">
                  <p class="park-characteristics__title"><?php the_field('rope-park-sinij_zagolovok_4') ?></p>
                  <p class="park-characteristics__discription"><?php the_field('rope-park-opisanie_sinego_4') ?></p>
               </div>
            </div>
         </div>
         <div class="park-tikket-buy-container">
            <h4 class="title-of-block-small-text-28-700-mons">Билеты можно приобрести в парках</h4>
            <div class="tickets__card-zone">


               <?php
$arr = get_field('povtoritel_parkov');
if ($arr) {
    $count = 1;
    foreach ($arr as $item) {
      $image_class = 'ticket__image-' . $count; // создаем уникальный класс
      ?>
<style>
   .<?php echo $image_class; ?> {
   height: 75%;
   width: 100%;
   background-image: url(<?php echo $item['izobrazhenie']; ?>);
   background-size: cover;
   position: absolute;
   top: 0;
}
</style>

             <div class="ticket__card">
                  <div class="<?php echo $image_class; ?>"></div>
                  <div class="ticket__discription">
                     <p class="text-18-600"><?php echo $item['nazvanie']; ?></p>
                     <p class="text-14-500-left-lato opacity"><?php echo $item['adres']; ?></p>
                  </div>
               </div>
<?php
$count ++;
    }
}
?>

            </div>
         </div>
         <div class="our-values-about-us-page-container">
            <div>
               <h3 class="main-text-in-card-about-page text-gradient"><?php the_field('rope-park-zagolovok_kartochki_1') ?></h3>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-1.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('rope-park-zagolovok_kartochki_2') ?></h4>
                  <div class="p-about-us-cont"><?php the_field('rope-park-opisanie_kartochki_2') ?></div>
               </div>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-2.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('rope-park-zagolovok_kartochki_3') ?></h4>
                  <div class="p-about-us-cont"><?php the_field('rope-park-opisanie_kartochki_3') ?></div>
               </div>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-3.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('rope-park-zagolovok_kartochki_4') ?></h4>
                  <div class="p-about-us-cont"><?php the_field('rope-park-opisanie_kartochki_4') ?></div>
               </div>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-4.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('rope-park-zagolovok_kartochki_5') ?></h4>
                  <div class="p-about-us-cont"><?php the_field('rope-park-opisanie_kartochki_5') ?></div>
               </div>
            </div>
            <div>
               <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-5.svg" alt="" />
               <div>
                  <h4 class="h4-about-us-cont"><?php the_field('rope-park-zagolovok_kartochki_6') ?></h4>
                  <div class="p-about-us-cont"><?php the_field('rope-park-opisanie_kartochki_6') ?></div>
               </div>
            </div>
         </div>
         <div class="photos-rope-perk-container">
            <h4 class="title-of-block-small-text-28-700-mons"><?php the_field('phone') ?></h4>
            <div class="photos-of-rope-park-overflow">
               <div class="photos-of-rope-park">
                  <div class="photos-of-rope-park__big-layout photos-of-rope-park__img1"></div>
                  <div class="photos-of-rope-park__small-layout photos-of-rope-park__img2"></div>
                  <div class="photos-of-rope-park__small-layout photos-of-rope-park__img3"></div>
                  <div class="photos-of-rope-park__small-layout photos-of-rope-park__img4"></div>
                  <div class="photos-of-rope-park__big-layout photos-of-rope-park__img5"></div>
                  <div class="photos-of-rope-park__small-layout photos-of-rope-park__img6"></div>
               </div>
            </div>
         </div>
         <div class="rules-of-rope-park-section">
            <h4 class="title-of-block-small-text-28-700-mons"><?php the_field('rope-park-zagolovok_chetvertoj_sekczii') ?></h4>
            <ol class="list-of-rules-rope-park">
            <?php the_field('rope-park-soderzhanie_4_sekczii') ?>
            </ol>

         </div>
         <div class="call-back-form-container-overflow-container-default">
            <div class="call-back-form-container-franchise">
               <div class="text-sub-block-news-inside">
                  <h4 class="main-text-sub-block-news-p-cont text-gradient">Давайте созвонимся!</h4>
                  <p class="second-text-sub-block-news-p-cont text-18-500-left">Наши специалисты ответят на все ваши вопросы</p>
               </div>
                <?php echo do_shortcode( '[contact-form-7 id="2b64add" title="Давайте созвонимся"]' ); ?>
               <div class="input-zone-news-p-cont">
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