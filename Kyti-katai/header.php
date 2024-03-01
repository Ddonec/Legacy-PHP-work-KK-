



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



      <title><?php echo wp_get_document_title() ?></title>
   </head>
   <style>
.green-samokat::before {
   background-image: url('<?php the_field('kartinka_zelenogo_samokata'); ?>');
}




.absolute-fs-container-right-frahciese {
   background-image: url(<?php the_field('pravaya_kartinka_sverhu'); ?>);
}
.absolute-fs-container-left-frahciese {
   background-image: url(<?php the_field('levaya_kartinka_sverhu'); ?>);
}

.bacground-image-main-page-first-section {
   background-image: url(<?php the_field('banner_glavnoj_straniczy_zima'); ?>);
}
.bacground-image-main-page-first-section.summer {
   background-image: url(<?php the_field('banner_glavnoj_straniczy_leto'); ?>);
}
.summer-body-status .bacground-image-main-page-first-section {
   background-image: url(<?php the_field('banner_glavnoj_straniczy_leto'); ?>);
}

.bacground-image-main-page-first-section-franchese {
   background-image: url(<?php the_field('banner_glavnoj_straniczy_zima'); ?>);
}

.absolute-fs-container-left {
   background-image: url(<?php the_field('levaya_kartinka_banera'); ?>);
}
.absolute-fs-container-left.summer {
   background-image: url(<?php the_field('levaya_kartinka_banera_leto'); ?>);
}
.summer-body-status .absolute-fs-container-left {
   background-image: url(<?php the_field('levaya_kartinka_banera_leto'); ?>);
}

.absolute-fs-container-right {
   background-image: url(<?php the_field('pravaya_kartinka_banera'); ?>);
}
.absolute-fs-container-right.summer {
   background-image: url(<?php the_field('pravaya_kartinka_banera_leto'); ?>);
}
.summer-body-status .absolute-fs-container-right {
   background-image: url(<?php the_field('pravaya_kartinka_banera_leto'); ?>);
}

.photo-area-about-us-page {
   background-image: url(<?php the_field('mejn_foto_straniczy'); ?>);
}


.photos-make-fun__img1 {
   background: url(<?php the_field('pervyj_slajder_foto_1'); ?>), lightgray 0px -33.03px / 100% 118.312% no-repeat;
}
.photos-make-fun__img2 {
   background: url(<?php the_field('pervyj_slajder_foto_2'); ?>), lightgray 0px -33.03px / 100% 118.312% no-repeat;
}
.photos-make-fun__img3 {
   background: url(<?php the_field('pervyj_slajder_foto_3'); ?>), lightgray 0px -33.03px / 100% 118.312% no-repeat;
}
.photos-make-fun__img4 {
   background: url(<?php the_field('pervyj_slajder_foto_4'); ?>), lightgray 0px -33.03px / 100% 118.312% no-repeat;
}
.photos-make-fun__img5 {
   background: url(<?php the_field('pervyj_slajder_foto_5'); ?>), lightgray 0px -33.03px / 100% 118.312% no-repeat;
}
.photos-make-fun__img6 {
   background: url(<?php the_field('pervyj_slajder_foto_6'); ?>), lightgray 0px -33.03px / 100% 118.312% no-repeat;
}

</style>

<?php
$cookie_name = 'SummerWinterCheckStatus';
if (isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name];
    
    $class = ($cookie_value == 'true') ? 'winter-body-status' : 'summer-body-status';
} else {
    $class = 'summer-body-status';
}
?>
   <body <?php echo 'class="' . $class . '"'; ?>>
      <nav class="burger-menu text-14-500-left-lato-left" id="burgerMenu">
            <img class="close-btn-burger-menu" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/close-vector-btn-black.svg" alt="" />
            <a href="<?php echo get_option('home'); ?>"><img class="logo-blue-burger" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/logo-blue.svg" alt="" /></a>
            <li>
               <div class="dropdown" id="companyDropdown">
                  <div class="dropdown-header" onclick="toggleDropdown()">Компания <img id="burger-company-drop-arrow" src="assets/icon/dropdown-arrow-up.svg" alt="" /></div>
                  <ul class="dropdown-list" id="companyDropdownList">
                     <li><a href="<?php echo get_option('home'); ?>/about-us">О нас</a></li>
                     <li><a href="<?php echo get_option('home'); ?>/category/articles/">Новости</a></li>
                     <li><a href="<?php echo get_option('home'); ?>/work">Работа в Кути Катай</a></li>
                     <li><a href="<?php echo get_option('home'); ?>/contacts">Контакты</a></li>
                  </ul>
               </div>
            </li>
            <li><a href="<?php echo get_option('home'); ?>/franchise">Франшиза</a></li>
            <li><a href="<?php echo get_option('home'); ?>/faq">FAQ</a></li>
            <li><a href="<?php echo get_option('home'); ?>/find">Найди свой парк</a></li>
            <li><a href="<?php echo get_option('home'); ?>/shop">Возьми в прокат</a></li>
            <li><a href="<?php echo get_option('home'); ?>/catalog-child">Развлечения детям</a></li>
            <li class="winter-opacity"><a href="<?php echo get_option('home'); ?>/rope-park">Веревочный парк</a></li>
            <li class="winter-opacity"><a href="<?php echo get_option('home'); ?>/make-child-fun/">Организация детских праздников</a></li>
         </nav>
      <header>





         <div class="heaer-fake-fullscreen">
            <div class="blue-line-fake"></div>
            <div class="gray-line-fake"></div>
         </div>
         

         <div class="header-top-blue">
            <div class="under-bike"></div>
            <div class="year-time-button">
   <label class="switch">
      <!-- Добавляем name и value для чекбокса -->
      <input type="checkbox" name="seasonCheckbox" value="true" <?php echo (isset($_COOKIE["SummerWinterCheckStatus"]) && $_COOKIE["SummerWinterCheckStatus"] == 'true') ? 'checked' : ''; ?> />
      <span class="slider round pointer">
         <div class="text-in-slider-buton" id="season-content">
            <!-- В начальном состоянии отображаем зиму -->
            <div class="season winter" <?php echo (isset($_COOKIE["SummerWinterCheckStatus"]) && $_COOKIE["SummerWinterCheckStatus"] == 'true') ? 'style="display: none;"' : ''; ?>>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/sun-yellow.svg" alt="sun" id="sun-header-button" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/snowflake.svg" alt="snow" id="snow-header-button" />
               <span class="time-of-year-text"> Зима </span>
            </div>
            <!-- В скрытом состоянии отображаем лето -->
            <div class="season summer" <?php echo (!isset($_COOKIE["SummerWinterCheckStatus"]) || $_COOKIE["SummerWinterCheckStatus"] != 'true') ? 'style="display: none;"' : ''; ?>>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/sun.svg" alt="sun" id="sun-header-button-2" />
               <span class="time-of-year-text"> Лето </span>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/snowflake-blue.svg" alt="sun" id="snow-header-button-2" />
            </div>
         </div>
      </span>
   </label>

   <a class="number-headr-yellow number-header-yellow" href="tel:89351680416"><?php the_field('phone') ?></a>
</div>


            <ul class="header-1920-list font-color-default-white">
               <li class="pointer" id="pointer-for-drop">Компания <img class="winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-36.svg" /> <img class="summer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-black.svg" alt="" />

               <div id="drop-window-company">
                     <a class="text-14-500-left-lato" href="<?php echo get_option('home'); ?>/about-us/">О нас</a>
                     <a class="text-14-500-left-lato" href="<?php echo get_option('home'); ?>/category/articles/">Новости</a>
                     <a class="text-14-500-left-lato" href="<?php echo get_option('home'); ?>/work/">Работа в Кути Катай</a>
                     <a class="text-14-500-left-lato" href="<?php echo get_option('home'); ?>/contacts/">Контакты</a>
               </div>

            </li>
               <!-- <li class="pointer">Сообщества <img class="winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-36.svg" /><img class="summer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-black.svg" alt="" /></li> -->
               <li class="pointer"><a class="white-text-section" href="/franchise">Франшиза</a></li>
               <li class="pointer"><a class="white-text-section" href="/faq">FAQ</a></li>
            </ul>
            <div class="zero-block-header"></div>
            <div class="number-h-y-container">
               <!-- <a class="number-header-yellow n-h-y" href="tel:89351680416"><?php the_field('phone', 95) ?></a> -->
            </div>
            <div class="input-zone-1920">
            <?php echo do_shortcode('[fibosearch]'); ?>

               <!-- <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector.svg" alt="" id="search-icon-1920" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/search-icon-black.svg" alt="" id="search-icon-1920-black" class="none" />
               <input type="text" placeholder="Поиск" id="search-header-1920" class="search-header-1920" /> -->
            </div>
            <div class="profile-icon-header">
               <ul class="icun-list-h">
                  <li class="pointer list-under-700" id="shopping-cart-icon-header">
                     <a href="tel:89351680416"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/phone-call.svg" alt="" /></a>
                  </li>
                  <li class="search-icon-list-h none">
                     <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector.svg" class="winter-status icon-search-burger-show" alt="" />
                     <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/search-icon-black.svg" class="summer-status icon-search-burger-show none" alt="" />
                  </li>

                   <?php if (is_user_logged_in()): ?>
                       <li><a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')) ?>"><img class="pointer winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/login.svg" alt="" /> <img class="pointer summer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/login-black.svg" alt="" /></a></li>
                   <?php else: ?>
                       <li id="profile-icon-header"><img class="pointer winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/login.svg" alt="" /> <img class="pointer summer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/login-black.svg" alt="" /></li>
                   <?php endif; ?>

                   <!-- <li><img class="pointer winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/heart.svg" alt="" /> <img class="pointer summer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/heart-black.svg" alt="" /></li>
                  <li class="pointer reserve-button-less-470px">
                     Рус <img class="winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-36.svg" alt="" /> <img class=" pointer ummer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-black.svg" alt="" />
                  </li> -->
                  <!-- <li class="pointer list-under-700" id="shopping-cart-icon-header">
                     <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/shopping-cart.svg" alt="" />
                  </li> -->
                  <li>
                     <div class="burger" onclick="toggleBurgerMenu()">
                        <span class="burgers"></span>
                        <span class="burgers"></span>
                        <span class="burgers"></span>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="logo-header">
               <a href="<?php echo get_option('home'); ?>">
                  <img class="winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/logo-new-white.svg" alt="" />
                  <img class="summer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/logo-new-black.svg" alt="" />
               </a>
            </div>
         </div>
         <div class="second-line-header">
            <div class="header-second-line-container">
               <div class="left-list">
                  <ul>
                     <li class="text-second-line-header pointer"><a href="<?php echo get_option('home'); ?>/find/">Найди свой парк</a></li>
                     <li class="text-second-line-header pointer"><a href="<?php echo get_option('home'); ?>/shop/">Возьми в прокат</a></li>
                     <li class="text-second-line-header pointer"><a href="<?php echo get_option('home'); ?>/catalog-child/">Развлечения для детей</a></li>
                  </ul>
               </div>
               <div class="spase-between-header"></div>
               <div class="right-list winter-opacity opacity-zero">
                  <ul>
                     <li class="text-second-line-header pointer"><a href="<?php echo get_option('home'); ?>/rope-park/">Веревочный парк</a></li>
                     <li class="text-second-line-header pointer"><a href="<?php echo get_option('home'); ?>/make-child-fun/">Организация детских праздников</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </header>



    