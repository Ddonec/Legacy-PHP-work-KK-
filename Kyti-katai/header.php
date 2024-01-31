



    <!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />

      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
         rel="stylesheet"
      />

      <!-- catalog-pgae -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.1/nouislider.min.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.1/nouislider.min.js"></script>
      <!-- catalog-pgae -->

      <!-- <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/item.css" />
      <link rel="stylesheet" href="css/catalog.css" />
      <link rel="stylesheet" href="css/media.css" />       -->

      <?php 
    wp_head()
    ?>

    

      <title>Document</title>
   </head>
   <style>
.green-samokat::before {
   background-image: url('<?php the_field('kartinka_zelenogo_samokata'); ?>');
}
</style>
   <body>
      <header>
         <div class="heaer-fake-fullscreen">
            <div class="blue-line-fake"></div>
            <div class="gray-line-fake"></div>
         </div>

         <div class="header-top-blue">
            <div class="under-bike"></div>

            <div class="year-time-button">
               <label class="switch">
                  <input type="checkbox" checked />
                  <span class="slider round pointer">
                     <div class="text-in-slider-buton" id="season-content">
                        <!-- В начальном состоянии отображаем зиму -->
                        <div class="season winter">
                           <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/sun-yellow.svg" alt="sun" id="sun-header-button" />
                           <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/snowflake.svg" alt="snow" id="snow-header-button" />
                           <span class="time-of-year-text"> Зима </span>
                        </div>
                        <!-- В скрытом состоянии отображаем лето -->
                        <div class="season summer" style="display: none">
                           <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/sun.svg" alt="sun" id="sun-header-button-2" />
                           <span class="time-of-year-text"> Лето </span>
                           <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/snowflake-blue.svg" alt="sun" id="snow-header-button-2" />
                        </div>
                     </div>
                  </span>
               </label>

               <a class="number-headr-yellow number-header-yellow" href="tel:89351680416"><?php the_field('phone') ?></a>
            </div>

            <ul class="header-1920-list">
               <li class="pointer">Компания <img class="winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-36.svg" /> <img class="summer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-black.svg" alt="" /></li>
               <!-- <li class="pointer">Сообщества <img class="winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-36.svg" /><img class="summer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-black.svg" alt="" /></li> -->
               <li class="pointer"><a class="white-text-section" href="/franchise">Франшиза</a></li>
               <li class="pointer"><a class="white-text-section" href="/faq">FAQ</a></li>
            </ul>
            <div class="zero-block-header"></div>
            <div class="number-h-y-container">
               <!-- <a class="number-header-yellow n-h-y" href="tel:89351680416"><?php the_field('phone', 95) ?></a> -->
            </div>
            <div class="input-zone-1920">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector.svg" alt="" id="search-icon-1920" />
               <input type="text" placeholder="Поиск" id="search-header-1920" class="search-header-1920" />
            </div>
            <div class="profile-icon-header">
               <ul class="icun-list-h">
                  <li class="pointer list-under-700" id="shopping-cart-icon-header">
                     <a href="tel:89351680416"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/phone-call.svg" alt="" /></a>
                  </li>
                  <li class="search-icon-list-h none">
                     <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector.svg" alt="" />
                  </li>
                  <li><img class="pointer winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/login.svg" alt="" /> <img class="summer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/login-black.svg" alt="" /></li>
                  <li><img class="pointer winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/heart.svg" alt="" /> <img class="summer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/heart-black.svg" alt="" /></li>
                  <li class="pointer reserve-button-less-470px">
                     Рус <img class="winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-36.svg" alt="" /> <img class="summer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-black.svg" alt="" />
                  </li>
                  <li class="pointer list-under-700" id="shopping-cart-icon-header">
                     <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/shopping-cart.svg" alt="" />
                  </li>
                  <li>
                     <div class="burger">
                        <span class="burgers"></span>
                        <span class="burgers"></span>
                        <span class="burgers"></span>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="logo-header">
               <a href="<?php echo get_option('home'); ?>">
                  <img class="winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group3.svg" alt="" />
                  <img class="summer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/bike-logo-black.svg" alt="" />
               </a>
            </div>
         </div>
         <div class="second-line-header">
            <div class="header-second-line-container">
               <div class="left-list">
                  <ul>
                     <li class="text-second-line-header pointer"><a href="#map-area-first-section">Найди свой парк</a></li>
                     <li class="text-second-line-header pointer"><a href="#second-section">Возьми в прокат</a></li>
                     <li class="text-second-line-header pointer"><a href="#third-section">Развлечения детям</a></li>
                  </ul>
               </div>
               <div class="spase-between-header"></div>
               <div class="right-list">
                  <ul>
                     <li class="text-second-line-header pointer"><a href="#four-section">Веревочный парк</a></li>
                     <li class="text-second-line-header pointer"><a href="#five-section">Организация детских праздников</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </header>



    