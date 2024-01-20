<?php
/*
Template Name: map-demo
*/
?>






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
    <script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?load=package.full&lang=ru-RU"></script>
    <!-- catalog-pgae -->

    <!-- <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/item.css" />
    <link rel="stylesheet" href="css/catalog.css" />
    <link rel="stylesheet" href="css/media.css" />       -->

    <?php
    wp_head()
    ?>

    <title>Карта с точками проката</title>
</head>
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
                           <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/sun.svg" alt="sun" id="sun-header-button" />
                           <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/snowflake.svg" alt="snow" id="snow-header-button" />
                           <span class="time-of-year-text"> Зима </span>
                        </div>
                         <!-- В скрытом состоянии отображаем лето -->
                        <div class="season summer" style="display: none">
                           <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/sun.svg" alt="sun" id="sun-header-button-2" />
                           <span class="time-of-year-text"> Лето </span>
                           <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/sun.svg" alt="sun" id="snow-header-button-2" />
                        </div>
                     </div>
                  </span>
            </label>

            <a class="number-headr-yellow number-header-yellow" href="tel:89351`680416">8 935 168 04 16</a>
        </div>

        <ul class="header-1920-list">
            <li class="pointer">Компания <img class="winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-36.svg" /> <img class="summer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-black.svg" alt="" /></li>
            <li class="pointer">Сообщества <img class="winter-status" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-36.svg" /><img class="summer-status none" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-black.svg" alt="" /></li>
            <li class="pointer">Франшиза</li>
            <li class="pointer"><a class="white-text-section" href="/faq.html">FAQ</a></li>
        </ul>
        <div class="zero-block-header"></div>
        <div class="number-h-y-container">
            <a class="number-header-yellow n-h-y" href="tel:89351680416">8 935 168 04 16</a>
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
                    <li class="text-second-line-header pointer">Найди свой парк</li>
                    <li class="text-second-line-header pointer">Возьми в прокат</li>
                    <li class="text-second-line-header pointer">Развлечения детям</li>
                </ul>
            </div>
            <div class="spase-between-header"></div>
            <div class="right-list">
                <ul>
                    <li class="text-second-line-header pointer">Веревочный парк</li>
                    <li class="text-second-line-header pointer">Организация детских праздников</li>
                </ul>
            </div>
        </div>
    </div>
</header>

<section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="index">Главная</a></p>
            <p>/</p>
            <p><a href="#">Лето</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">О нас</p>
         </div>
         <div class="title-of-section-news-page">
            <h3 class="text-gradient">Демо точек на карте</h3>
         </div>
      </section>


    <style>
        #map {
            width: 100%;
            height: 700px;
        }
        .map-container {
            margin-bottom: 50px;
        }
    </style>

    <div class="map-container">
        <div id="map"></div>
    </div>

<footer>
    <div class="images-footer">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group3.svg" alt="" />
        <div class="apps-links-footer-1">
            <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/appstore.png" alt="" />
            <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/googleplay.png" alt="" />
        </div>

        <div class="social-circles-footer-index">
            <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/socials.svg" alt="" />
            <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/tg.svg" alt="" />
        </div>
    </div>
    <div class="columns-footer">
        <div class="row-footer-1">
            <div class="title-list-1 poinetr">Компания</div>
            <ul>
                <li class="pointer"><a href="<?php echo get_option('home'); ?>/item">Техника</a></li>
                <li class="pointer"><a href="<?php echo get_option('home'); ?>/find">Мы в парках</a></li>
                <li class="pointer"><a href="<?php echo get_option('home'); ?>/about-us">О нас</a></li>
                <li class="pointer"><a href="<?php echo get_option('home'); ?>/news-1">Новости</a></li>
                <li class="pointer"><a href="<?php echo get_option('home'); ?>/work-in">Работа у нас</a></li>
            </ul>
        </div>

        <div class="row-footer-1">
            <div class="title-list-1 pointer">Сервис</div>
            <ul>
                <li class="pointer"><a href="<?php echo get_option('home'); ?>/repair">Ремонт техники</a></li>
                <li class="pointer">Сезонное хранение</li>
                <li class="pointer">Велотур</li>
                <li class="pointer">Корп. клиентам</li>
                <li class="pointer">Франшиза</li>
            </ul>
        </div>

        <div class="row-footer-2">
            <div class="title-list-1 pointer">Документация</div>
            <ul>
                <li class="pointer"><a class="white-text-section" href="<?php echo get_option('home'); ?>/rules">Правила проката</a></li>
                <li class="pointer"><a class="white-text-section" href="<?php echo get_option('home'); ?>/oferta">Договор оферта</a></li>
                <li class="pointer"><a class="white-text-section" href="<?php echo get_option('home'); ?>/privacy-politic">Политика конфиденциальности</a></li>
                <li class="pointer"><a class="white-text-section" href="<?php echo get_option('home'); ?>/app-agreement">Пользовательское соглашение для мобильного приложения</a></li>
            </ul>
        </div>
        <div class="apps-links-footer-">
            <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/appstore.png" alt="" />
            <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/googleplay.png" alt="" />
        </div>
        <div class="row-footer-1">
            <a href="<?php echo get_option('home'); ?>/contacts"><div class="title-list-1">Контакты</div></a>
            <ul>
                <li>
                    <span class="yellow-number-footer pointer"><a id="yellow-tel-numb-footer" href="tel:+79254297029">+7(925) 429-70-29</a></span>
                </li>
                <li class="pointer"><a href="mailto:kuti.katai@mail.ru">kuti.katai@mail.ru</a></li>
            </ul>
            <div class="social-media-footer">
                <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/socials.svg" alt="" />
                <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/tg.svg" alt="" />
            </div>
        </div>
    </div>
    <div class="footer-line"></div>
    <div class="payments-metod">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/mir.svg" alt="" />
        <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/mastercard.svg" alt="" />
        <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/visa.svg" alt="" />
    </div>
</footer>
</body>
</html>




<?php  wp_footer()?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    ymaps.ready(init);
    function init() {
        var myMap = new ymaps.Map('map', {
            center: [55.76, 37.64],
            zoom: 11
        }, {
            searchControlProvider: 'yandex#search'
        });
        $.getJSON( "/wp-content/uploads/points.json", function( data ) {
            objectManager = new ymaps.ObjectManager({
                clusterize: true,
                gridSize: 50,
                clusterDisableClickZoom: false
            });
            objectManager.clusters.options.set('preset', 'islands#invertedNightClusterIcons');
            myMap.geoObjects.add(objectManager);
            objectManager.add(data);
        });
    }
</script>

</html>
