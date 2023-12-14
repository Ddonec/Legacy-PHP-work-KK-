

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
            <p><a href="index.html">Главная</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Контакты</p>
         </div>
         <div class="title-of-section-news-page">
            <div class="opacity-text-section o-t-s-all">Контакты</div>
            <div class="item-shadow-section-contact-page"></div>
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
            <p class="text-24-600">+7(925) 429-70-29</p>
            <p class="opacity">номер телефона</p>
         </li>
         <li class="line-contact-zone-contacts-page"></li>
         <li>
            <p><a class="text-24-600-blue" href="mailto:kuti.katai@mail.ru">kuti.katai@mail.ru</a></p>
            <p class="opacity">почта</p>
         </li>
         <li class="line-contact-zone-contacts-page"></li>
         <li>
            <p class="text-24-600">Верхняя Красносельская улица, 3с2</p>
            <p class="opacity">адрес офиса</p>
         </li>
         <li class="line-contact-zone-contacts-page"></li>
         <li>
            <p class="text-24-600">Пн—Пт, 9:00—18:00</p>
            <p class="opacity">формат работы</p>
         </li>
      </div>
      <div class="call-back-form-contact-p">
         <div class="text-sub-block-news-inside">
            <h4 class="main-text-sub-block-news-p-cont">Давайте <span>созвонимся!</span></h4>
            <p class="second-text-sub-block-news-p-cont text-24-600">Наши специалисты ответят на все ваши вопросы</p>
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