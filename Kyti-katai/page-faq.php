
<?php
/*
Template Name: faqs
*/
?>



<?php
get_header();
?>

<section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="index.html">Главная</a></p>
            <p>/</p>
            <p><a href="#">Лето</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Часто задаваемые вопросы</p>
         </div>
         <h1 class="h1-no-main-page text-gradient faq-title"><?php the_field('zagolovok_faq') ?></h1>
         <p class="faq-page-first-text"><?php the_field('opisanie_faq') ?></p>
         <div class="faq-page-questions-container">
            <div>
               <div class="text-question-faq-page"><?php the_field('faq_vopros_1') ?></div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/plus-black.svg" alt="" />
            </div>
            <div>
               <div class="text-question-faq-page"><?php the_field('faq_vopros_2') ?></div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/plus-black.svg" alt="" />
            </div>
            <div>
               <div class="text-question-faq-page"><?php the_field('faq_vopros_3') ?></div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/plus-black.svg" alt="" />
            </div>
            <div>
               <div class="text-question-faq-page"><?php the_field('faq_vopros_4') ?></div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/plus-black.svg" alt="" />
            </div>
            <div>
               <div class="text-question-faq-page"><?php the_field('faq_vopros_5') ?></div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/plus-black.svg" alt="" />
            </div>
            <div>
               <div class="text-question-faq-page"><?php the_field('faq_vopros_6') ?></div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/plus-black.svg" alt="" />
            </div>
         </div>

         <div class="call-back-form-container-overflow-container-default">
            <div class="call-back-form-container-franchise">
               <div class="text-sub-block-news-inside">
                  <h4 class="main-text-sub-block-news-p-cont text-gradient">Давайте созвонимся!</h4>
                  <p class="second-text-sub-block-news-p-cont text-18-500">Наши специалисты ответят на все ваши вопросы</p>
               </div>
               <div class="input-zone-news-p-cont">
                  <input class="input-in-news-p-cont i-n-p-c-name" type="text" placeholder="Ваше имя" />
                  <input class="input-in-news-p-cont i-n-p-c-email" type="text" placeholder="Номер телефона" />
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