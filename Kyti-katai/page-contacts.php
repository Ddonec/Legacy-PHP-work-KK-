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
   <div class="title-of-section-contacts-page">
      <h3 class="text-gradient"><?php the_field('contacts-zagolovok') ?></h3>
      <!-- <div class="opacity-text-section o-t-s-all">Контакты</div>
            <div class="item-shadow-section-contact-page"></div> -->
   </div>
</section>
<!-- <div class="map-area-contacts-page">
   <div class="blie-map-point-contacts-page">
      <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/bike-contact-page-2.svg" alt="" />
      <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/bike-contact-page.svg" alt="" />
   </div>
</div> -->

<div id="map-test" class="map" style="margin:auto;"></div>

<script src="https://api-maps.yandex.ru/2.1/?apikey=4e215164-d278-42d9-abf5-0345e2b353a0
API-4e215164-d278-42d9-abf5-0345e2b353a0
&lang=ru_RU"></script>
<script>
   let center = [55.82859156889557,37.624722999999996];

   function init() {
      let map = new ymaps.Map("map-test", {
         center: center,
         zoom: 15,
      });

      let placemark = new ymaps.Placemark(
         center,
         {},
         {
            iconLayout: "default#image",
            iconImageHref: "<?php echo bloginfo('template_url'); ?>/assets/assets/content/map-dot.png",
            iconImageSize: [116, 96],
            iconImageOffset: [-116, -96],
         }
      );

      map.controls.remove("geolocationControl"); // удаляем геолокацию
      map.controls.remove("searchControl"); // удаляем поиск
      map.controls.remove("trafficControl"); // удаляем контроль трафика
      map.controls.remove("typeSelector"); // удаляем тип
      map.controls.remove("fullscreenControl"); // удаляем кнопку перехода в полноэкранный режим
      map.controls.remove("zoomControl"); // удаляем контрол зуммирования
      map.controls.remove("rulerControl"); // удаляем контрол правил
      // map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)

      map.geoObjects.add(placemark);
   }

   ymaps.ready(init);
</script>
<div class="contact-info-area-contacts-page">
   <li>
      <p class="text-18-500-l"><?php the_field('contacts-verh_blok_1') ?></p>
      <p class="opacity"><?php the_field('contacts-niz_blok_1') ?></p>
   </li>
   <li class="line-contact-zone-contacts-page"></li>
   <li>
      <p>
         <a class="text-18-500-blue" href="mailto:kuti.katai@mail.ru"><?php the_field('contacts-verh_blok_2') ?></a>
      </p>
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
<section class="callback-form-section-max-1200px">
   <div class="call-back-form-container-overflow-container-default">
      <div class="call-back-form-container-franchise">
         <div class="text-sub-block-news-inside">
            <h4 class="main-text-sub-block-news-p-cont text-gradient">Давайте созвонимся!</h4>
            <p class="second-text-sub-block-news-p-cont text-18-500-left">Наши специалисты ответят на все ваши вопросы</p>
         </div>
         <div class="input-zone-news-p-cont">
            <input class="input-in-news-p-cont i-n-p-c-name" type="text" placeholder="Ваше имя" />
            <input class="input-in-news-p-cont i-n-p-c-email" type="text" placeholder="Номер телефона" />
            <div class="send-btn-news-sub text-18-500 pointer">Отправить</div>
            <img class="google-piexel-phone-callback-form" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/google-piexel-phone-full.png" alt="" />
            <img class="google-piexel-screen-callback-form" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/google-piexel-full.png" alt="" />
            <div class="data-agreement-12px">Нажимая кнопку вы принимаете <a href="https://agency-5.ru/soglashenie-ob-obrabotke-personalnyh-dannyh/">Соглашение об обработке персональных данных</a></div>
         </div>
      </div>
   </div>
</section>

<?php
get_footer();
?>
