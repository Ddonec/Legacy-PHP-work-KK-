

<?php
/*
Template Name: contacts
*/
?>


<?php
get_header();
?>


      <section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="index">Главная</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Контакты</p>
         </div>
         <div class="title-of-section-news-page">
            <h3 class="text-gradient"><?php the_field('contacts-zagolovok') ?></h3>
            <!-- <div class="opacity-text-section o-t-s-all">Контакты</div>
            <div class="item-shadow-section-contact-page"></div> -->
         </div>
      </section>
      <div class="map-area-contacts-page">
         <div class="blie-map-point-contacts-page">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/bike-contact-page-2.svg" alt="" />
            <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/bike-contact-page.svg" alt="" />
         </div>
      </div>
      <div class="contact-info-area-contacts-page">
         <li>
            <p class="text-18-500-l"><?php the_field('contacts-verh_blok_1') ?></p>
            <p class="opacity"><?php the_field('contacts-niz_blok_1') ?></p>
         </li>
         <li class="line-contact-zone-contacts-page"></li>
         <li>
            <p><a class="text-18-500-blue" href="mailto:kuti.katai@mail.ru"><?php the_field('contacts-verh_blok_2') ?></a></p>
            <p class="opacity"><?php the_field('contacts-niz_blok_2') ?></p>
         </li>
         <li class="line-contact-zone-contacts-page"></li>
         <li>
            <p class="text-18-500-l"><?php the_field('contacts-verh_blok_3') ?></p>
            <p class="opacity"><?php the_field('contacts-niz_blok_3') ?></p>
         </li>
         <li class="line-contact-zone-contacts-page"></li>
         <li>
            <p class="text-18-500-l"><?php the_field('contacts-verh_blok_4') ?></p>
            <p class="opacity"><?php the_field('contacts-niz_blok_4') ?></p>
         </li>
      </div>
      <div class="call-back-form-contact-p">
         <div class="text-sub-block-news-inside">
            <h4 class="main-text-sub-block-news-p-cont">Давайте <span>созвонимся!</span></h4>
            <p class="second-text-sub-block-news-p-cont text-18-500-l">Наши специалисты ответят на все ваши вопросы</p>
         </div>
         <div class="input-zone-news-p-cont">
            <input class="input-in-news-p-cont i-n-p-c-name" type="text" placeholder="Ваше имя" />
            <input class="input-in-news-p-cont i-n-p-c-email" type="email" placeholder="Электронная почта" />
            <div class="send-btn-news-sub text-18-500 pointer">Отправить</div>
            <img class="convert-img-call-back-sub" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/phone-big-yellow.png" alt="mail" />
         </div>
      </div>







<?php
get_footer();
?>