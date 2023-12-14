
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
         <h1 class="h1-no-main-page text-gradient">Часто задаваемые вопросы</h1>
         <p class="faq-page-first-text">В данном разделе мы постараемся дать вам ответы на самые популярные вопросы</p>
         <div class="faq-page-questions-container">
            <div>
               <div class="text-question-faq-page">Как вы считаете, какие технологии будут наиболее значимыми в ближайшие 10 лет?</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/plus-black.svg" alt="" />
            </div>
            <div>
               <div class="text-question-faq-page">Какие самые интересные факты о космосе вы знаете?</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/plus-black.svg" alt="" />
            </div>
            <div>
               <div class="text-question-faq-page">Какая книга или фильм вас больше всего вдохновили?</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/plus-black.svg" alt="" />
            </div>
            <div>
               <div class="text-question-faq-page">В каких странах вы бы хотели побывать?</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/plus-black.svg" alt="" />
            </div>
            <div>
               <div class="text-question-faq-page">Какой самый важный жизненный урок вы усвоили?</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/plus-black.svg" alt="" />
            </div>
            <div>
               <div class="text-question-faq-page">Если бы у вас была возможность поговорить с любой исторической личностью, кто бы это был и что бы вы хотели узнать у него?</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/plus-black.svg" alt="" />
            </div>
         </div>

         <div class="call-back-form-container-f-p">
            <div class="text-sub-block-news-inside">
               <h4 class="main-text-sub-block-news-p-cont text-gradient">Давайте созвонимся!</h4>
               <p class="second-text-sub-block-news-p-cont text-24-600">Наши специалисты ответят на все ваши вопросы</p>
            </div>
            <div class="input-zone-news-p-cont">
               <input class="input-in-news-p-cont i-n-p-c-name" type="text" placeholder="Ваше имя" />
               <input class="input-in-news-p-cont i-n-p-c-email" type="email" placeholder="Электронная почта" />
               <div class="send-btn-news-sub text-18-500 pointer">Отправить</div>
               <img class="convert-img-call-back-sub" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/phone-big-yellow.png" alt="mail" />
            </div>
            <p class="input-zone-discription-politic-provicy">Нажимая кнопку вы принимаете <a href="">Соглашение об обработке персональных данных</a></p>
         </div>
      </section>


<?php
get_footer();
?>