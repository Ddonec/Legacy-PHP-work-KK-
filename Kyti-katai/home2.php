<?php
/*
Template Name: main-page
*/
?>
<?php
get_header();
?>


<script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?load=package.full&lang=ru-RU"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
ymaps.ready(function() {
    var myMap = new ymaps.Map('map', {
        center: [55.76, 37.64],
        zoom: 11
    }, {
        searchControlProvider: 'yandex#search'
    });
        myMap.behaviors.disable('scrollZoom');

   const leftBlock = document.querySelector('.absolute-map-info-left-container');
    document.getElementById('map-area-first-section').addEventListener('mouseleave', function() {
    leftBlock.classList.add('none');
   });
   leftBlock.addEventListener("click", function(){
     leftBlock.classList.add('none');
   })

    // Загрузка данных и добавление ObjectManager
    $.getJSON("/wp-content/uploads/points.json", function(data) {
        var objectManager = new ymaps.ObjectManager({
            clusterize: true,
            gridSize: 50,
            clusterDisableClickZoom: false
        });
        objectManager.clusters.options.set('preset', 'islands#invertedNightClusterIcons');
        myMap.geoObjects.add(objectManager);
        objectManager.add(data);

        // Добавляем обработчик события click на объекте objectManager
        objectManager.objects.events.add('click', function(e) {
            var objectId = e.get('objectId'); // Получаем id объекта, на котором произошел клик
            var objectInfo = objectManager.objects.getById(objectId); // Получаем информацию о кликнутом объекте
            if (objectInfo && objectInfo.properties) {
                // Если информация о объекте доступна, можно её отобразить
                var objectName = objectInfo.properties.name;
                const data1 = document.querySelector(".left-park-json-data-1");
                 const data2 = document.querySelector(".left-park-json-data-2");
                 const data3 = document.querySelector(".left-park-json-data-3"); // Пример: получаем название точки
                 const leftBlock = document.querySelector('.absolute-map-info-left-container')
                leftBlock.classList.remove('none')
                const parkName = objectInfo.properties.name;
                const parkTime = objectInfo.properties.worktime;
                const parkEquipment = objectInfo.properties.equipment;

                // Вставляем данные в соответствующие элементы HTML
                data1.textContent = parkName;
                data2.textContent = parkTime;
                data3.textContent = parkEquipment;

               //  alert(`Название: ${objectInfo.properties.name}, Время: ${objectInfo.properties.worktime}, Оборудование: ${objectInfo.properties.equipment}`);
            }
        });

        // Добавляем обработчик события click на карту для отслеживания клика вне объектов
        myMap.events.add('click', function(e) {
            // Проверяем, был ли клик выполнен за пределами объектов на карте
            if (e.get('target') === myMap) {
                console.log('Click outside objects');
                const leftBlock = document.querySelector('.absolute-map-info-left-container')
                leftBlock.classList.add('none')
                // Здесь можно выполнить нужные действия, если клик был выполнен за пределами объектов на карте
            }
        });
    });
});

$.getJSON("/wp-content/uploads/points.json", function(data) {
    // Получение списка парков
    var parks = data.features;

    // Находим список на странице
    var list = document.querySelector(".park-list-map-zone__ul");

    // Очищаем текущие элементы списка
    list.innerHTML = '';

    // Добавляем названия парков в список
    parks.forEach(function(park) {
        // Создаем элемент списка
        var listItem = document.createElement("li");
        // Задаем текст элемента списка
        listItem.textContent = park.properties.name;
        // Добавляем элемент в список
        list.appendChild(listItem);

        // Добавляем обработчик события клика на элемент списка
        listItem.addEventListener('click', function() {
            // Отображаем информацию о парке в карточке
            const data1 = document.querySelector(".left-park-json-data-1");
            const data2 = document.querySelector(".left-park-json-data-2");
            const data3 = document.querySelector(".left-park-json-data-3");

            // Вставляем данные в соответствующие элементы HTML
            data1.textContent = park.properties.name;
            data2.textContent = park.properties.worktime;
            data3.textContent = park.properties.equipment;

            // Показываем карточку
            const leftBlock = document.querySelector('.absolute-map-info-left-container');
            leftBlock.classList.remove('none');
        });
    });



    var input = document.querySelector(".park-list-map-zone__input");
    input.addEventListener("input", function () {
        // Получаем поисковый запрос
        var searchTerm = this.value.toLowerCase();

        // Перебираем элементы списка
        var items = list.children;
        for (var i = 0; i < items.length; i++) {
            var item = items[i];
            // Если поисковый запрос найден в тексте элемента, показываем его
            if (item.textContent.toLowerCase().indexOf(searchTerm) !== -1) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Находим кнопку "Выбрать парк"
    var chooseParkButton = document.querySelector('.map-area-first-section__button');

    // Добавляем обработчик события клика на кнопку
    chooseParkButton.addEventListener('click', function() {
      console.log("порк изменен")
        // Получаем данные о выбранном парке
        var parkName = document.querySelector('.left-park-json-data-1').textContent;
        var parkTime = document.querySelector('.left-park-json-data-2').textContent;
        var parkEquipment = document.querySelector('.left-park-json-data-3').textContent;
        var parkNameStickyValue = document.querySelector('.park-name-sticky-value');
        parkNameStickyValue.textContent = parkName;
        // Формируем объект с данными о парке
        var parkData = {
            name: parkName,
            time: parkTime ? parkTime : "10:00-21:00",
            equipment: parkEquipment
        };

        // Преобразуем объект в строку JSON
        var parkDataString = JSON.stringify(parkData);

        // Сохраняем данные о парке в куки
        document.cookie = "parkData=" + parkDataString + "; expires=Thu, 18 Dec 2025 12:00:00 UTC; path=/";
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Функция для получения значения куки по её имени
    function getCookie(name) {
        var matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    // Получаем данные из куки
    var parkDataString = getCookie('parkData');

    // Если данные о парке есть в куки
    if (parkDataString) {
        // Преобразуем строку JSON обратно в объект
        var parkData = JSON.parse(parkDataString);

        // Находим элемент с классом park-name-sticky-value и устанавливаем его текстовое содержимое
        var parkNameStickyValue = document.querySelector('.park-name-sticky-value');
        parkNameStickyValue.textContent = parkData.name;
    }
});
</script>






      <section class="first-section">
         <div class="bacground-image-main-page-first-section">
            <div class="text-area-first-section-1920">
               <h1><?php the_field('title_1') ?><span class="text-gradient"><?php the_field('title_1_g') ?></span></h1>
               <!-- <div class="text-area-moscow">
                  <h2>Москвы и Московской области</h2>
                  <div class="shadow-moscow"></div>
               </div> -->
               <div class="last-text-first-section"><?php the_field('title_2') ?></div>
               <a href="<?php echo get_option('home'); ?>/catalog"><button class="to-choice-btn class-to-switch-season-btn">Перейти</button></a>
            </div>
            <div class="absolute-peoples-container-f-s">
               <div class="absolute-fs-container-left"></div>
               <div class="absolute-fs-container-right"></div>
            </div>
         </div>
         <div class="map-container" id="map-area-first-section">
            <div class="absolute-on-map-home-page-text-comtainer">
               <h3 class="text-gradient">Найди свой парк</h3>
            </div>
            <section class="absolute-map-info-left-container none">
               <div class="park-info-map-zone text-14-500-left-lato-left">
                  <img class="Vector-close-10" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-close-mod.svg" alt="" />
                  <p class="park-info-map-zone-title left-park-json-data-1">Красногвардейский пруд</p>
                  <div class="park-info-map-zone-line0info">
                     <p class="opacity">Время работы:</p>
                     <p class="map-info-left-container__time left-park-json-data-2">Круглосуточно</p>
                  </div>
                  <div class="park-info-map-zone-line0info">
                     <p class="opacity">Техника парка:</p>
                     <p class="map-info-left-container__technick left-park-json-data-3">Велосипеды, Электросамокаты, Батуты, Зорбинг, Лодки и Катамараны</p>
                  </div>
                  <div class="map-area-first-section__button">Выбрать парк</div>
               </div>
            </section>
            <section class="absolute-map-info-right-container">
               <div class="park-list-map-zone text-14-500-left-lato-left">
                  <p class="park-info-map-zone-title">Парки</p>
                  <input class="park-list-map-zone__input" type="text" placeholder="Парк" />
                  <ul class="park-list-map-zone__ul">
                     <li>Парк Строгино</li>
                     <li>Парк Победы</li>
                     <li>Красногвардейский пруд</li>
                     <li>ВДНХ</li>
                     <li>Лиазновский парк</li>
                     <li>ВДНХ</li>
                     <li>ВДНХ</li>
                     <li>ВДНХ</li>
                  </ul>
               </div>
            </section>

            <div id="map"></div>
            <a href="<?php echo get_option('home'); ?>/find">
            </a>
         </div>
      </section>
      <section class="second-section take-a-rent" id="second-section">
         <div class="title-of-section-1">
            <h3 class="title-of-section-gradient text-gradient">Возьми в прокат</h3>
            <!-- <div class="black-text-section">Возьми</div>
            <div class="opacity-text-section o-t-s-all">в прокат</div>
            <div class="shadow-section s-s-shadow"></div> -->
         </div>
         <div class="nav-shop">
             <?php

             $categories = get_parent_product_categories_season('zima');

             echo '<ul>';
             echo '<li class="pointer nav-shop__pointer yellow-border-1_5px">';
             echo 'Каталог</li>';
             foreach ( $categories as $category ) {
                 echo '<li class="pointer nav-shop__pointer ">';
                 echo $category->name . '</a></li>';
             }
             echo '</ul>';
             ?>
<!--            <ul>-->
<!--               <li class="pointer nav-shop__pointer yellow-border-1_5px">Каталог</li>-->
<!--               <li class="pointer nav-shop__pointer ">Велосипеды</li>-->
<!--               <li class="pointer nav-shop__pointer ">Веломобили</li>-->
<!--               <li class="pointer nav-shop__pointer ">Электро</li>-->
<!--               <li class="pointer nav-shop__pointer ">Коньки</li>-->
<!--               <li class="pointer nav-shop__pointer ">Катамараны</li>-->
<!--               <li class="pointer nav-shop__pointer ">Коньки</li>-->
<!--               <li class="pointer nav-shop__pointer ">Лодки</li>-->
<!--            </ul>-->

            <script>

document.addEventListener("DOMContentLoaded", function() {
  const listItems = document.querySelectorAll(".nav-shop__pointer");
  listItems.forEach(function(item) {
    item.addEventListener("click", function() {
      listItems.forEach(function(otherItem) {
        otherItem.classList.remove("yellow-border-1_5px");
      });
      item.classList.add("yellow-border-1_5px");
    });
  });
});

            </script>
            <div class="arrow-right-list pointer">
               <img id="vector-1" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-right.svg" alt="" />
            </div>
         </div>
         <div class="shop-take-rent">

             <?php
             global $season;
             global $parkName;

             $tax_query[] = array(
                 'taxonomy' => 'product_tag',
                 'field' => 'slug',
                 'terms' => array( 'vsesezon', $season ),
             );

             if ($parkName) {
                 $tax_query[] = array(
                     'taxonomy' => 'point',
                     'field' => 'name',
                     'terms' => $parkName,
                 );
             }

             $args = array(
                 'post_type' => 'product',
                 'tax_query' => $tax_query
             );
             $query = new WP_Query($args);

             while ($query->have_posts()) {
                 $query->the_post();
                 global $product;

                 ?>
                 <!--            <div class="card-of-product">-->
                 <!--                <a href="--><?php //echo get_option('home'); ?><!--/item"><img class="img-of-product"-->
                 <!--                                                                      src="--><?php //echo bloginfo('template_url'); ?><!--/assets/assets/content/img-bike-2.png"-->
                 <!--                                                                      alt=""/></a>-->
                 <!---->
                 <!--                <div class="discription-of-product">-->
                 <!--                    Велосипед 12-K-->
                 <!--                    <ul>-->
                 <!--                        <li><span class="opacity-text-discription-product-card">Вид: </span>Горный</li>-->
                 <!--                        <li><span class="opacity-text-discription-product-card">Залог: </span>200₽</li>-->
                 <!--                        <li><span class="opacity-text-discription-product-card">Доступно: </span>в 3 парках</li>-->
                 <!--                    </ul>-->
                 <!--                    <div class="price-of-product pointer">-->
                 <!--                        <img class="add-to-cart-btn"-->
                 <!--                             src="--><?php //echo bloginfo('template_url'); ?><!--/assets/assets/icon/Vector+13px.svg" alt=""/>-->
                 <!---->
                 <!--                        <span class="prise-of-rent-1">от 1 200₽/час</span>-->
                 <!--                    </div>-->
                 <!--                </div>-->
                 <!--            </div>-->
                 <div <?php wc_product_class( 'card-of-product', $product ); ?>>
                     <a href="<?php echo $product->get_permalink() ?>"><?php echo $product->get_image() ?></a>

                     <div class="discription-of-product">
                         <?php echo $product->get_title() ?>
                         <ul>
                             <li><span class="opacity-text-discription-product-card">Вид: </span>Горный</li>
                             <li><span class="opacity-text-discription-product-card">Залог: </span>200₽</li>
                             <li><span class="opacity-text-discription-product-card">Доступно: </span>в <?php echo ParkClass::park_count() ?> парках</li>
                         </ul>
                         <div class="price-of-product pointer">
                             <img class="add-to-cart-btn"
                                  src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg"
                                  alt="" />
                             <a href="<?php echo $product->get_permalink() ?>" class="prise-of-rent-1">Подробнее</a>
                         </div>
                     </div>
                 </div>

                 <?php
             }
             wp_reset_postdata();

             ?>

            <div class="card-of-product">
               <a href="<?php echo get_option('home'); ?>/item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

               <div class="discription-of-product">
                  Велосипед 12-K
                  <ul>
                     <li><span class="opacity-text-discription-product-card">Вид: </span>Горный</li>
                     <li><span class="opacity-text-discription-product-card">Залог: </span>200₽</li>
                     <li><span class="opacity-text-discription-product-card">Доступно: </span>в 3 парках</li>
                  </ul>
                  <div class="price-of-product pointer">
                     <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />

                     <span class="prise-of-rent-1">от 1 200₽/час</span>
                  </div>
               </div>
            </div>

            <div class="card-of-product">
               <a href="<?php echo get_option('home'); ?>/item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>

               <div class="discription-of-product">
                  Городской велосипед
                  <ul>
                     <li><span class="opacity-text-discription-product-card">Вид: </span>Прогулочный</li>
                     <li><span class="opacity-text-discription-product-card">Залог: </span>300₽</li>
                     <li><span class="opacity-text-discription-product-card">Доступно: </span>3шт</li>
                  </ul>
                  <div class="price-of-product pointer">
                     <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
                     <span class="prise-of-rent-1">от 1 000₽/час</span>
                  </div>
               </div>
            </div>

            <div class="card-of-product">
               <a href="<?php echo get_option('home'); ?>/item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

               <div class="discription-of-product">
                  Велосипед 12-K
                  <ul>
                     <li><span class="opacity-text-discription-product-card">Вид: </span>Горный</li>
                     <li><span class="opacity-text-discription-product-card">Залог: </span>200₽</li>
                     <li><span class="opacity-text-discription-product-card">Доступно: </span>в 3 парках</li>
                  </ul>
                  <div class="price-of-product pointer">
                     <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
                     <span class="prise-of-rent-1">от 1 200₽/час</span>
                  </div>
               </div>
            </div>

            <div class="card-of-product">
               <a href="<?php echo get_option('home'); ?>/item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>

               <div class="discription-of-product">
                  Городской велосипед
                  <ul>
                     <li><span class="opacity-text-discription-product-card">Вид: </span>Прогулочный</li>
                     <li><span class="opacity-text-discription-product-card">Залог: </span>300₽</li>
                     <li><span class="opacity-text-discription-product-card">Доступно: </span>3шт</li>
                  </ul>
                  <div class="price-of-product pointer">
                     <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
                     <span class="prise-of-rent-1">от 1 000₽/час</span>
                  </div>
               </div>
            </div>

            <div class="card-of-product">
               <a href="<?php echo get_option('home'); ?>/item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>

               <div class="discription-of-product">
                  Городской велосипед
                  <ul>
                     <li><span class="opacity-text-discription-product-card">Вид: </span>Прогулочный</li>
                     <li><span class="opacity-text-discription-product-card">Залог: </span>300₽</li>
                     <li><span class="opacity-text-discription-product-card">Доступно: </span>3шт</li>
                  </ul>
                  <div class="price-of-product pointer">
                     <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
                     <span class="prise-of-rent-1">от 1 000₽/час</span>
                  </div>
               </div>
            </div>

            <div class="card-of-product">
               <a href="<?php echo get_option('home'); ?>/item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

               <div class="discription-of-product">
                  Велосипед 12-K
                  <ul>
                     <li><span class="opacity-text-discription-product-card">Вид: </span>Горный</li>
                     <li><span class="opacity-text-discription-product-card">Залог: </span>200₽</li>
                     <li><span class="opacity-text-discription-product-card">Доступно: </span>в 3 парках</li>
                  </ul>
                  <div class="price-of-product pointer">
                     <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
                     <span class="prise-of-rent-1">от 1 200₽/час</span>
                  </div>
               </div>
            </div>

            <div class="card-of-product">
               <a href="<?php echo get_option('home'); ?>/item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>

               <div class="discription-of-product">
                  Городской велосипед
                  <ul>
                     <li><span class="opacity-text-discription-product-card">Вид: </span>Прогулочный</li>
                     <li><span class="opacity-text-discription-product-card">Залог: </span>300₽</li>
                     <li><span class="opacity-text-discription-product-card">Доступно: </span>3шт</li>
                  </ul>
                  <div class="price-of-product pointer">
                     <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
                     <span class="prise-of-rent-1">от 1 000₽/час</span>
                  </div>
               </div>
            </div>

            <div class="card-of-product">
               <a href="<?php echo get_option('home'); ?>/item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

               <div class="discription-of-product">
                  Велосипед 12-K
                  <ul>
                     <li><span class="opacity-text-discription-product-card">Вид: </span>Горный</li>
                     <li><span class="opacity-text-discription-product-card">Залог: </span>200₽</li>
                     <li><span class="opacity-text-discription-product-card">Доступно: </span>в 3 парках</li>
                  </ul>
                  <div class="price-of-product pointer">
                     <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
                     <span class="prise-of-rent-1">от 1 200₽/час</span>
                  </div>
               </div>
            </div>

            <div class="card-of-product">
               <a href="<?php echo get_option('home'); ?>/item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-1.png" alt="" /></a>

               <div class="discription-of-product">
                  Городской велосипед
                  <ul>
                     <li><span class="opacity-text-discription-product-card">Вид: </span>Прогулочный</li>
                     <li><span class="opacity-text-discription-product-card">Залог: </span>300₽</li>
                     <li><span class="opacity-text-discription-product-card">Доступно: </span>3шт</li>
                  </ul>
                  <div class="price-of-product pointer">
                     <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
                     <span class="prise-of-rent-1">от 1 000₽/час</span>
                  </div>
               </div>
            </div>

            <div class="card-of-product">
               <a href="<?php echo get_option('home'); ?>/item"><img class="img-of-product" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img-bike-2.png" alt="" /></a>

               <div class="discription-of-product">
                  Велосипед 12-K
                  <ul>
                     <li><span class="opacity-text-discription-product-card">Вид: </span>Горный</li>
                     <li><span class="opacity-text-discription-product-card">Залог: </span>200₽</li>
                     <li><span class="opacity-text-discription-product-card">Доступно: </span>в 3 парках</li>
                  </ul>
                  <div class="price-of-product pointer">
                     <img class="add-to-cart-btn" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg" alt="" />
                     <span class="prise-of-rent-1">от 1 200₽/час</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="boo">
            <a href="<?php echo get_option('home'); ?>/catalog"><div class="go-to-shop-btn class-to-switch-season-btn">Перейти в каталог</div></a>
         </div>
         <div class="hand-mask-app-banner">
            <img class="pointer" id="hand-iphone" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/hand-phone-full-size.png" alt="" />
            <img class="pointer" id="iphone-screen" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/iPhone-scren.png" alt="" />
            <div class="app-banner">
               <svg id="koleso" xmlns="http://www.w3.org/2000/svg" width="577" height="308" viewBox="0 0 577 308" fill="none">
                  <path
                     d="M313.512 209.436L332.294 172.322L335.424 170.236L333.619 182.122L313.512 209.436ZM336.346 183.605L341.142 177.129L342.985 188.958L328.494 234.189L336.346 183.605ZM343.629 173.761L345.573 171.085L347.491 174.898L344.979 182.669L343.629 173.761ZM346.002 189.303L349.372 178.654L353.828 187.375V239.888L346.002 189.303ZM353.828 180.727L350.697 174.553L352.212 169.804L353.828 171.372V180.727ZM353.828 167.026L353.285 166.479L353.828 164.753V167.026ZM353.828 145.742L353.285 144.015L353.828 143.454V145.742ZM351.089 163.616L350.899 164.206L350.748 164.062L351.089 163.616ZM350.748 146.433L350.899 146.332L351.089 146.937L350.748 146.433ZM353.828 139.108L352.212 140.691L350.697 135.942L353.828 129.797V139.108ZM347.58 142.13L348.779 139.755L349.839 142.979L348.842 143.9L347.58 142.13ZM348.842 166.638L349.839 167.516L348.779 170.797L347.58 168.365L348.842 166.638ZM348.842 161.486L348.514 161.874L348.35 161.774L348.842 161.486ZM348.35 148.764L348.514 148.606L348.842 149.052L348.35 148.764ZM353.828 123.12L349.372 131.869L346.002 121.234L353.828 70.6069V123.12ZM345.623 163.558L346.595 164.508L346.002 165.242L345.295 163.803L345.623 163.558ZM345.295 146.735L346.002 145.253L346.595 146.044L345.623 146.98L345.295 146.735ZM344.979 127.825L347.491 135.64L345.573 139.41L343.629 136.777L344.979 127.825ZM342.745 165.486L344.007 167.962L342.947 169.458L342.366 165.688L342.745 165.486ZM342.366 144.807L342.947 141.094L344.007 142.519L342.707 145.051L342.366 144.807ZM339.665 143.022L338.757 142.432L337.381 133.51L340.498 137.726L339.665 143.022ZM340.498 172.826L337.381 176.97L338.757 168.12L339.665 167.472L340.498 172.826ZM342.985 121.537L341.142 133.423L336.346 126.933L328.494 76.2914L342.985 121.537ZM336.346 164.306L336.106 165.99L335.235 166.537L336.346 164.306ZM335.235 143.958L336.106 144.548L336.346 146.188L335.235 143.958ZM333.619 128.372L335.424 140.245L332.294 138.172L313.512 101.101L333.619 128.372ZM330.148 140.648L333.821 147.872L317.614 132.387L330.148 140.648ZM333.821 162.623L330.148 169.905L317.664 178.122L333.821 162.623ZM356.807 124.012L375.601 86.8831L361.149 132.128L356.807 136.33V124.012ZM356.807 140.691L359.091 138.46L356.807 145.742V140.691ZM356.807 164.753L359.091 172.02L356.807 169.804V164.753ZM356.807 174.207L361.149 178.366L375.601 223.597L356.807 186.483V174.207ZM363.623 176.38L360.227 165.731L361.502 166.278L381.597 193.563L363.623 176.38ZM363.231 163.414L361.78 161.428L367.447 165.141L363.231 163.414ZM361.78 149.052L363.231 147.08L367.447 145.354L361.78 149.052ZM361.502 144.26L360.227 144.749L363.623 134.157L381.597 116.931L361.502 144.26ZM302.631 224.187L129.881 458.702C130.664 459.407 131.446 460.041 132.229 460.731L294.136 240.938L168.493 488.851C169.313 489.441 170.159 489.988 171.03 490.593L305.017 226.13L332.584 188.713L322.751 252.365L236.048 523.605C236.982 523.994 237.891 524.296 238.863 524.641L319.81 271.361L278.8 535.982C279.772 536.226 280.757 536.413 281.728 536.615L325.579 253.257L344.007 195.592L353.828 259.186V542.314C354.812 542.256 355.784 542.213 356.807 542.155V278.196L396.883 537.464C397.905 537.262 398.814 537.104 399.786 536.96L356.807 258.884V193.203L381.395 241.773L468.578 514.683C469.499 514.294 470.37 513.848 471.304 513.402L389.839 258.452L508.604 492.766C509.437 492.219 510.308 491.729 511.153 491.125L384.046 240.334L365.642 182.669L392.477 208.314L567.083 445.333C567.803 444.657 568.547 443.908 569.279 443.174L405.466 220.719L600.267 406.981C600.911 406.146 601.58 405.254 602.211 404.405L394.573 205.983L366.993 168.566L382.089 174.855L639.422 343.143L640.482 340.912L397.993 181.374L660.804 290.371C661.12 289.335 661.524 288.342 661.865 287.248L383.339 171.775L363.231 158.564L677.403 220.791C677.479 219.942 677.592 219.15 677.719 218.316L372.08 156.924H682.326C682.326 156.032 682.364 155.197 682.364 154.305V153.571H372.117L678.022 92.1214C677.832 90.9989 677.681 89.9628 677.529 88.869L363.231 151.973L383.339 138.705L662.408 23.088C662.067 21.9943 661.713 20.9582 661.385 19.922L397.993 129.106L641.227 -30.8637C640.722 -31.8135 640.255 -32.8064 639.75 -33.785L382.089 135.697L366.993 141.986L394.573 104.512L603.057 -94.7163C602.401 -95.6086 601.77 -96.4576 601.151 -97.2923L405.466 89.7613L570.113 -133.773C569.368 -134.507 568.648 -135.256 567.866 -136.004L392.477 102.181L365.642 127.825L384.046 70.204L511.936 -182.084C511.04 -182.674 510.169 -183.178 509.348 -183.768L389.839 52.0426L471.847 -204.606C470.913 -205.052 470.042 -205.44 469.108 -205.886L381.395 68.7793L356.807 117.277V51.5965L400.101 -228.264C399.117 -228.451 398.195 -228.653 397.211 -228.854L356.807 32.2982V-233.603C355.784 -233.661 354.812 -233.719 353.828 -233.762V51.2943L344.007 114.96L325.579 57.2809L281.438 -228.005C280.479 -227.775 279.532 -227.574 278.51 -227.372L319.81 39.1771L238.282 -215.888C237.373 -215.528 236.439 -215.212 235.505 -214.852L322.751 58.13L332.584 121.781L305.017 84.3647L170.298 -181.537C169.427 -180.933 168.594 -180.4 167.773 -179.81L294.136 69.614L131.333 -151.431C130.55 -150.755 129.843 -150.064 129.06 -149.359L302.631 86.2931L327.182 134.848L304.676 119.997L80.0098 -94.7739C79.3535 -93.8817 78.7728 -93.0326 78.0912 -92.1979L290.034 110.355L50.1831 -47.3557C49.5898 -46.3195 49.0975 -45.269 48.5043 -44.2329L302.972 122.774L329.807 148.404L324.556 147.383L21.0884 21.5482C20.7981 22.6419 20.4447 23.6348 20.1165 24.7142L307.844 144.015L6.38333 83.3285C6.15613 84.5662 5.95418 85.7462 5.80271 86.8831L323.761 150.649L330.931 153.571H0.678009V154.305V156.924H330.931L323.761 159.903L6.11826 223.554C6.3076 224.734 6.49694 225.885 6.68627 227.008L307.895 166.479L20.6467 285.579C20.9875 286.601 21.3409 287.694 21.6565 288.687L324.556 163.17L329.807 162.076L302.972 187.764L49.4005 354.468C50.0316 355.605 50.6122 356.656 51.2055 357.778L289.984 200.14L78.9243 401.887C79.6185 402.793 80.2496 403.57 80.8303 404.463L304.676 190.484L327.182 175.69L302.631 224.187Z"
                     fill="#5567EA"
                  />
               </svg>
               <svg id="krug" xmlns="http://www.w3.org/2000/svg" width="599" height="308" viewBox="0 0 599 308" fill="none">
                  <path
                     d="M102.835 404.463C102.254 403.571 101.61 402.793 100.929 401.887C90.8308 387.971 81.5534 373.22 73.2099 357.779C72.6167 356.656 72.0361 355.606 71.4049 354.469C60.4487 333.731 51.1334 311.756 43.6609 288.688C43.3327 287.695 42.9919 286.601 42.6385 285.579C36.7186 266.655 32.0609 247.17 28.6907 227.008C28.5014 225.885 28.2994 224.734 28.1101 223.554C24.6263 201.925 22.8213 179.647 22.6825 156.924V154.305V153.557C22.6825 130.848 24.4875 108.57 27.8072 86.8833C27.9586 85.7464 28.148 84.5663 28.3878 83.3287C31.6318 63.2245 36.2515 43.6241 42.121 24.7144C42.4365 23.6207 42.79 22.6421 43.0929 21.5483C50.4644 -1.47717 59.6661 -23.4953 70.5088 -44.2327C71.102 -45.2832 71.5943 -46.3194 72.1875 -47.3555C80.5688 -63.0273 89.9473 -78.0514 100.096 -92.1978C100.777 -93.0324 101.358 -93.8815 102.014 -94.7737C116.745 -114.777 133.141 -133.082 151.065 -149.359C151.848 -150.064 152.554 -150.754 153.337 -151.431C164.924 -161.792 177.054 -171.233 189.765 -179.81C190.586 -180.4 191.419 -180.932 192.29 -181.537C212.751 -195.107 234.6 -206.332 257.51 -214.852C258.431 -215.212 259.378 -215.528 260.287 -215.888C273.439 -220.594 286.857 -224.451 300.514 -227.372C301.537 -227.573 302.483 -227.775 303.443 -228.005C322.919 -231.977 343.026 -234.006 363.538 -234.006C367.628 -234.006 371.73 -233.905 375.832 -233.761C376.804 -233.718 377.776 -233.661 378.798 -233.603C392.456 -232.956 405.974 -231.329 419.215 -228.854C420.187 -228.653 421.121 -228.451 422.106 -228.264C446.051 -223.558 469.162 -215.989 491.113 -205.886C492.047 -205.44 492.905 -205.052 493.852 -204.606C506.777 -198.518 519.286 -191.538 531.34 -183.767C532.173 -183.177 533.044 -182.674 533.928 -182.098C553.934 -168.916 572.678 -153.431 589.87 -136.004C590.653 -135.255 591.36 -134.507 592.117 -133.773C603.136 -122.39 613.487 -110.158 623.155 -97.3066C623.774 -96.4575 624.405 -95.6084 625.061 -94.7162C638.921 -75.864 651.215 -55.472 661.742 -33.7849C662.26 -32.8063 662.727 -31.8133 663.219 -30.8779C670.944 -14.6305 677.722 2.33643 683.377 19.9078C683.705 20.9584 684.059 21.9945 684.412 23.0882C691.039 44.2141 696.113 66.1459 699.521 88.8692C699.672 89.963 699.824 90.9991 700.026 92.1216C702.803 112.125 704.33 132.675 704.368 153.557V154.305C704.368 155.197 704.33 156.032 704.33 156.924C704.217 177.805 702.651 198.356 699.723 218.301C699.584 219.151 699.483 219.942 699.395 220.791C695.924 243.702 690.647 265.921 683.869 287.249C683.516 288.342 683.125 289.335 682.796 290.371C677.078 307.828 670.25 324.723 662.487 340.912L661.427 343.143C650.71 364.96 638.214 385.452 624.216 404.405C623.585 405.254 622.916 406.147 622.272 406.981C612.654 419.804 602.316 431.892 591.284 443.174C590.552 443.908 589.807 444.657 589.088 445.333C571.909 462.674 553.202 478.058 533.145 491.125C532.299 491.73 531.428 492.219 530.608 492.766C518.591 500.522 506.158 507.358 493.309 513.402C492.375 513.848 491.504 514.295 490.582 514.683C468.72 524.685 445.672 532.269 421.79 536.96C420.818 537.104 419.91 537.263 418.887 537.464C405.735 539.939 392.38 541.508 378.798 542.155C377.776 542.213 376.804 542.256 375.832 542.314C371.73 542.515 367.628 542.616 363.538 542.616C343.115 542.616 323.146 540.587 303.733 536.615C302.761 536.413 301.776 536.226 300.805 535.982C287.172 533.161 273.856 529.333 260.867 524.642C259.895 524.296 258.974 523.994 258.052 523.605C235.256 515.144 213.432 504.091 193.022 490.593C192.151 489.988 191.305 489.441 190.497 488.851C177.85 480.389 165.745 470.978 154.233 460.731C153.451 460.041 152.668 459.407 151.885 458.702C133.962 442.541 117.565 424.308 102.835 404.463ZM0 156.535C0 385.251 162.766 570.621 363.538 570.621C564.285 570.621 727 385.251 727 156.535C727 -72.1943 564.285 -257.665 363.538 -257.665C162.766 -257.665 0 -72.1943 0 156.535Z"
                     fill="#5567EA"
                  />
               </svg>
               <div>
                  <div class="main-text-app-cart text-gradient">Для своих дешевле!</div>
                  <div class="discription-app-cart">
                     Скачай приложение - получи&nbsp;
                     <div>скидку&nbsp;15%</div>
                  </div>
               </div>
               <div class="apps-links-app-cart"><a href="https://apps.apple.com/ru/app/Кути Катай/id1645059794"><img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/appstore.png" alt="" /></a><a href="https://play.google.com/store/apps/details?id=com.kutikataj.app_clients_kutikatay"><img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/googleplay.png" alt="" /></a></div>
            </div>
         </div>
      </section>
      <section class="third-section-container " id="third-section">
         <div class="third-section">
            <div class="title-of-section-3 text-gradient">
            <?php the_field('razvlecheniya_dlya_detej_title_main') ?>         
                  <!-- <div class="black-text-section">Развлечения для</div>
            <div class="opacity-text-section o-t-s-all">детей</div>
            <div class="shadow-section-3 s-s-shadow"></div> -->
            </div>
            <div class="kids-chill-container">
               <div id="wide-card-on-chill-kids">
               <?php the_field('razvlecheniya_dlya_detej_title') ?>  
                  <p><?php the_field('razvlecheniya_dlya_detej_title_subtitle') ?> </p>
               </div>
               <div class="kids-chill kids-chill-summer none">
                  <div id="wide-card-on-chill-kids-copy">
                  <?php the_field('razvlecheniya_dlya_detej_title') ?>  
                     <p><?php the_field('razvlecheniya_dlya_detej_subtitle') ?>  </p>
                  </div>
                  <?php
$arr = get_field('kartochki_s_razvlecheniyami');
if ($arr) {
    foreach ($arr as $item) {
?>
        <div class="pointer">
        <div class="image-container-c-c">
            <img src="<?php echo $item['izobradenie_kartochki']; ?>" alt="" />
       </div>
            <p class="text-in-chill-for-kids-card"><?php echo $item['opisanie_kartochki']; ?></p>
        </div>
<?php
    }
}
?>                  
               </div>

               <div class="kids-chill kids-chill-winter">
                  <div id="wide-card-on-chill-kids-copy">
                  <?php the_field('razvlecheniya_dlya_detej_title') ?>  
                     <p><?php the_field('razvlecheniya_dlya_detej_subtitle') ?>  </p>
                  </div>

                  <?php
$arr = get_field('kartochki_s_razvlecheniyami_zima');
if ($arr) {
    foreach ($arr as $item) {
?>
        <div class="pointer">
         <div class="image-container-c-c">
            <img src="<?php echo $item['izobradenie_kartochki']; ?>" alt="" />
         </div>
            <p class="text-in-chill-for-kids-card"><?php echo $item['opisanie_kartochki']; ?></p>
        </div>
<?php
    }
}
?>  
               </div>
            </div>
            <div class="go-to-all-chill-btn-container">
               <a href="<?php echo get_option('home'); ?>/catalog-child"><div class="go-to-all-chill-btn class-to-switch-season-btn">Смотреть все развлечения для детей</div></a>
            </div>
         </div>
      </section>

      <section class="four-section none" id="four-section">
         <div class="title-of-section-4">
            <h3 class="title-of-section-gradient text-gradient"><?php the_field('verevochnyj_park_zagolovok_sekczii') ?></h3>
            <!-- <div class="opacity-text-section o-t-s-all">Верёвочный</div>
            <div class="black-text-section">парк</div>
            <div class="shadow-section-4 s-s-shadow"></div> -->
         </div>
         <div class="cards-rope-park">
            <img class="i-s-f-image-4" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/5.png" alt="" />
            <img class="i-s-f-image-3" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/4.png" alt="" />
            <img class="i-s-f-image-2" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/3.png" alt="" />
            <img class="i-s-f-image-1" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/2.png" alt="" />

            <!-- <div class="rope-mag-1-hide less-900-hide">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/9(3).png" alt="" />
            </div> -->
            <div class="emotion-card">
               <div>
                  <p><?php the_field('verevochnyj_park_zagolovok_kartochki') ?></p>
                  <ul>
                     <li><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/baby.svg" alt="" /><?php the_field('verevochnyj_park_kartochka_tekst_1') ?></li>
                     <li><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/heart-handshake.svg" alt="" /> <?php the_field('verevochnyj_park_kartochka_tekst_2') ?></li>
                     <li><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/roller-coaster.svg" alt="" /> <?php the_field('verevochnyj_park_kartochka_tekst_3') ?></li>
                  </ul>
               </div>
               <div class="emotion-card-buttons">
                  <div class="class-to-switch-season-btn pseudo-cllass-none-styles pointer" onclick="openPopupReserveRope()">
                     <!-- <a href="<?php echo get_option('home'); ?>/rope-park"> -->
                     <div>Пойти в веревочный парк</div>
                  <!-- </a> -->
                  </div>
                  <div>
                     <a href="<?php echo get_option('home'); ?>/rope-park"><div>Узнать больше</div></a>
                  </div>
               </div>
            </div>
            <!-- <div class="more-900-hide">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/9(3).png" alt="" />
            </div>
            <div class="less-900-hide">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/6.png" alt="" />
            </div> -->
         </div>
         <!-- <div class="cards-rope-park-2">
            <div class="more-900-hide">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/6.png" alt="" />
            </div>
            <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/8.png" alt="" /></div>
            <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/7.png" alt="" /></div>
         </div> -->
      </section>

      <section class="five-section none" id="five-section">
         <div class="title-of-section-5">
            <h3 class="title-of-section-gradient text-gradient-summer"><?php the_field('organizacziya_detskih_prazdnikov_section_title') ?></h3>

            <!-- <div class="black-text-section black-text-section-5">Организация</div>
            <div class="opacity-text-section o-t-s-all opacity-text-section-5">детских праздников</div>
            <div class="shadow-section-5 s-s-shadow"></div> -->
         </div>

         <div class="slider-five-section-vision">
            <div class="slider-five-section">
               <div class="left-side-slider">
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/Rectangle34.jpg" alt="" />
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/Rectangle30.png" alt="" />
                  <div></div>
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/Rectangle33.png" alt="" />
                  <div><?php the_field('organizacziya_detskih_prazdnikov_levyj_tekst') ?></div>
               </div>
               <div class="right-side-slider">
                  <div class="big-attention-for-kids"><?php the_field('organizacziya_detskih_prazdnikov_verhnij_tekst') ?></div>
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/Rectangle32.png" alt="" />
                  <div id="card-reserve">
                     <p><?php the_field('organizacziya_detskih_prazdnikov_pravyj_tekst_title') ?></p>
                     <span
                        ><?php the_field('organizacziya_detskih_prazdnikov_pravyj_tekst_title_subtitle') ?></span>
                     <button>Забронируйте дату вашего праздника</button>
                     <img class="gold-balls-img" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/blue-adn-tellow-bals-kk.png" alt="" />
                  </div>
               </div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/Rectangle35.jpg" alt="" />
            </div>
         </div>

         <div class="slider-five-section-5 none">
            <div class="image-bg i-b-el-1"></div>
            <div class="text-5-s-2 i-b-el-2">
               «Кути Катай» создает новый формат организации Дня рождения. Ваш ребенок и его друзья смогут ощутить себя настоящими «Супергероями» или «Чемпионами», пройти квест или поучаствовать в
               соревновании дружной командой.
            </div>
            <div class="image-bg-2 i-b-el-3"></div>
            <div class="text-5-s-2 i-b-el-4">Устроить праздник мечты поможет аниматор, который организует шоу-программу, проведет мастер-класс и увлечен детей в атмосферу веселья и радости.</div>
            <!-- <div id="card-reserve" class="i-b-el-5">
               <p>Кстати, комнату можно забронировать</p>
               <span
                  >Зарезервируйте место для себя <br />
                  и своей семьи на наших объектах<br
               /></span>
               <button>Забронируйте дату вашего праздника</button>
               <img class="gold-balls-img" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/image9.png" alt="" />
            </div> -->
            <div class="image-bg-3 i-b-el-6"></div>
            <div class="image-bg-4 i-b-el-7"></div>
            <div class="image-bg-5 i-b-el-8"></div>
         </div>

         <div class="card-reserve-mobile none">
            <p class="text-gradient-summer">
               Праздник как <br />
               приключение
            </p>
            <div class="discription-of-c-r-m">Преподнесите своему ребенку незабываемый праздник.</div>
            <div class="button-of-c-r-m" onclick="openPopupReserve()">Забронируйте дату вашего праздника</div>
            <img class="img-balls-c-r-m" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/blue-adn-tellow-bals-kk.png" alt="" />
         </div>

         <!-- <div class="slider-five-section-5-mobile">
            <div class="text-5-s-2 i-b-el-2">
               «Кути Катай» создает новый формат организации Дня рождения. Ваш ребенок и его друзья смогут ощутить себя настоящими «Супергероями» или «Чемпионами», пройти квест или поучаствовать в
               соревновании дружной командой.
            </div>
            <div class="images-slider-five-section-mobile">
               <div class="image-bg i-b-el-1"></div>
               <div class="image-bg-2 i-b-el-3"></div>
               <div class="image-bg-3 i-b-el-6"></div>
               <div class="image-bg-4 i-b-el-7"></div>
               <div class="image-bg-5 i-b-el-8"></div>
            </div>
            <div id="card-reserve" class="i-b-el-5">
               <p>Кстати, комнату можно забронировать</p>
               <span
                  >Зарезервируйте место для себя <br />
                  и своей семьи на наших объектах<br
               /></span>
               <button>
                  Забронируйте дату
                  <span class="reserve-button-less-470px">вашего </span>праздника
               </button>
               <img class="gold-balls-img" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/image9.png" alt="" />
            </div>
            <div class="text-5-s-2 i-b-el-4">Устроить праздник мечты поможет аниматор, который организует шоу-программу, проведет мастер-класс и увлечен детей в атмосферу веселья и радости.</div>
         </div> -->

         <a href="<?php echo get_option('home'); ?>/make-child-fun/"><button class="find-out-more-btn class-to-switch-season-btn">
            Узнать подробнее
            <span class="less700hide"> &nbsp;об организации праздников</span>
         </button></a>
      </section>

      <section class="six-section">
         <div class="title-of-section-6">
            <h3 class="title-of-section-gradient-yellow">О нас</h3>
            <!-- <div class="white-text-section">О</div>
            <div class="opacity-text-section-white">нас</div>
            <div class="shadow-section-6 s-s-shadow"></div> -->
         </div>
         <div class="info-area-six-section">
            <div class="text-blocks-6-s switch-color-text-black-white">
               <div class="blue-n-c-1">
               <?php the_field('about_us_1') ?>
               </div>
               <div class="blue-n-c-2-area">
                  <div class="blue-n-c-2">
                     <p>
                     <?php the_field('about_us_2') ?><span class="up-to-768px-hidden-text-home-page"
                           ><?php the_field('about_us_3') ?></span
                        >
                     </p>
                     <p>
                     <?php the_field('about_us_3') ?>
                     </p>
                  </div>
                  <a href="<?php echo get_option('home'); ?>/about-us/"><button  class="show-more-6-section-btn border-switch-status-blue switch-color-text-black-white">Узнать о Кути Катай</button></a>
               </div>
               <div class="overflow-blue-section-index-page-container">
                  <div class="three-elemrnts-container-home-page-blue-block">
                     <div class="img-circle blue-n-c-5">
                        <img src="<?php the_field('about_us_img_1') ?>" />
                     </div>
                     <div class="yellow-block blue-n-c-6"><?php the_field('about_us_4') ?></div>
                     <div class="last-photo blue-n-c-7" style="background-image: url(<?php the_field('about_us_img_2') ?>)"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="roll-park-list-visible">
            <div class="roll-park-list">
               <div>останкинский&nbsp;парк</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>строгино</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>митино</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>вднх</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>измайловский</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>останкинский&nbsp;парк</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>строгино</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>митино</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>вднх</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>измайловский</div>
            </div>
            <div class="roll-park-list2">
               <!-- <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14.svg" alt="" /> -->

               <div>останкинский&nbsp;парк</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>строгино</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>митино</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>вднх</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>измайловский</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>останкинский&nbsp;парк</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>строгино</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>митино</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group14-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>вднх</div>
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100.svg" alt="" class="show-hide-yellow-wheel" />
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/g100-blue.svg" alt="" class="show-hide-blue-wheel none" />

               <div>измайловский</div>
            </div>
         </div>
         <a href="<?php echo get_option('home'); ?>/about-us/"><div class="show-more-6-section-btn-2 border-switch-status-blue switch-color-text-black-white">Узнать о Кути Катай</div></a>
      </section>

      <section class="seven-section">
         <div class="title-of-section-7">
            <h3 class="title-of-section-gradient text-gradient">Полезные материалы</h3>
            <!-- <div class="black-text-section">Полезные</div>
            <div class="opacity-text-section o-t-s-all">материалы</div>
            <div class="shadow-section-7 s-s-shadow"></div> -->
         </div>
         <div class="six-cards-container">
            <div class="usrful-materials-cards-overflow">
            <div class="usrful-materials-cards">

                <?php
                global $post;

$on_index_posts = get_posts(array('numberposts' => 10));

                foreach( $on_index_posts as $post ){
                    $tags = wp_get_post_tags( get_the_ID() );
                    $tag_array = array();
                    foreach ( $tags as $tag ) {
                        $tag_array[] = $tag->name;
                    }
                    ?>
                    <?php if (in_array("важно", $tag_array)): ?>

                        <a href="<?php echo get_permalink(); ?>">
                            <div class="green-samokat">
                                <div class="green-samokat-before"> <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt=""></div>
                                <?php echo $post->post_title ?>
                                <p><span class="truncate-text"><?php echo $post->post_excerpt; ?></span></p>
                            </div>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo get_permalink(); ?>">
                            <div>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt=""/>
                                <div class="text-inside-cart-blog">
                                    <p class="hide-text-2-string"><?php echo $post->post_title ?></p>
                                    <span class="truncate-text"><?php echo $post->post_excerpt; ?></span>
	                                <?php
	                                $photo = get_field( 'author-photo' );
	                                if ( $photo ): ?>
                                        <div class="image-user-zone">
                                            <img src="<?php echo $photo; ?>" alt="" />
			                                <?php the_field( 'author-name' ); ?>
                                        </div>
	                                <?php endif; ?>
                                    <div class="date-in-material-card"><?php echo get_the_date(); ?></div>
                                </div>
                            </div>
                        </a>
                    <?php endif;?>


                    <?php
                }

                wp_reset_postdata();



                ?>

            </div>
            </div>
            <div class="cur-pointer">
               <button class="next-btn"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-right.svg" alt="" /></button>
               <button class=" prev-btn"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-left.svg" alt="" /></button>
            </div>


            <script>

document.addEventListener("DOMContentLoaded", function() {
  const scrollWrapper = document.querySelector(".usrful-materials-cards-overflow");
  const nextBtn = document.querySelector(".next-btn");
  const prevBtn = document.querySelector(".prev-btn");

  nextBtn.addEventListener("click", function() {
    scrollWrapper.scrollBy({ left: 244, behavior: "smooth" });
    console.log("вправо 200");
    updateButtonOpacity();
  });

  prevBtn.addEventListener("click", function() {
    scrollWrapper.scrollBy({ left: -244, behavior: "smooth" });
    console.log("влево 200");
    updateButtonOpacity();
  });

  function updateButtonOpacity() {
    // Проверяем, можно ли скроллить влево
    prevBtn.style.opacity = scrollWrapper.scrollLeft > 0 ? 1 : 0.5;

    // Проверяем, можно ли скроллить вправо
    const maxScrollLeft = scrollWrapper.scrollWidth - scrollWrapper.clientWidth;
    nextBtn.style.opacity = scrollWrapper.scrollLeft < maxScrollLeft ? 1 : 0.5;
  }
  updateButtonOpacity();
});

            </script>
         </div>
         <div class="button-news-container-main-page">
            <a href="/category/articles/"><button class="see-all-usefull-mat-btn class-to-switch-season-btn">Смотреть все полезные материалы</button></a>
         </div>
      </section>
      <div class="bottom-sticky-panel">
         <span href="<?php echo get_option('home'); ?>/modal">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
               <g clip-path="url(#clip0_2927_1340)">
                  <path d="M2.5 9.16663L18.3333 1.66663L10.8333 17.5L9.16667 10.8333L2.5 9.16663Z" stroke="#333333" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
               </g>
               <defs>
                  <clipPath id="clip0_2927_1340">
                     <rect width="20" height="18" fill="white" transform="translate(0 0.5)" />
                  </clipPath>
               </defs>
            </svg>
            <span class="park-name-sticky-value"></span>
         </span>
      </div>










    
    <?php
get_footer();
?>