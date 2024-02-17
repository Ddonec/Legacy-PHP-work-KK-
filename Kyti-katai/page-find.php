

<?php
/*
Template Name: find
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
    document.getElementById('map-area-first-section').addEventListener('mouseleave', function() {
    const leftBlock = document.querySelector('.absolute-map-info-left-container');
    leftBlock.classList.add('none');
});

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






      <section class="main-content-news-page">

      <div class="bread-crumbs">
            <p><a href="index">Главная</a></p>
            <p>/</p>
            <p><a href="#">Лето</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Найди свой парк</p>
         </div>
         <div class="title-of-section-find-page">
            <h3 class="text-gradient"><?php the_field('find-park-title') ?></h3>
         </div>
      </section>
      <section class="map-fill">
         <div class="map-container" id="map-area-first-section">
            <section class="absolute-map-info-left-container none">
               <div class="park-info-map-zone text-14-500-left-lato-left">
                  <img class="Vector-close-10" src="assets/icon/Vector-close-10.7.svg" alt="" />
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
<!-- 

      <section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="index">Главная</a></p>
            <p>/</p>
            <p><a href="#">Лето</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Найди свой парк</p>
         </div>
         <div class="title-of-section-find-page">
            <h3 class="text-gradient"><?php the_field('find-park-title') ?></h3>
         </div>
      </section>
         <div class="map-container map-containep-find-page" id="map-area-first-section">
            <div class="absolute-on-map-home-page-text-comtainer">
               <h3 class="text-gradient">Найди свой парк</h3>
            </div>
            <section class="absolute-map-info-left-container">
               <div class="park-info-map-zone text-14-500-left-lato-left">
                  <img class="Vector-close-10" src="assets/icon/Vector-close-10.7.svg" alt="" />
                  <p class="park-info-map-zone-title">Красногвардейский пруд</p>
                  <div class="park-info-map-zone-line0info">
                     <p class="opacity">Время работы:</p>
                     <p>Круглосуточно</p>
                  </div>
                  <div class="park-info-map-zone-line0info">
                     <p class="opacity">Техника парка:</p>
                     <p>Велосипеды, Электросамокаты, Батуты, Зорбинг, Лодки и Катамараны</p>
                  </div>
                  <div class="map-area-first-section__button">Выбрать парк</div>
               </div>
            </section>
            <section class="absolute-map-info-right-container">
               <div class="park-list-map-zone text-14-500-left-lato-left">
                  <p class="park-info-map-zone-title">Парки</p>
                  <input class="park-list-map-zone__input" type="text" placeholder="Парк, город или метро" />
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
         </div> -->
      <section class="main-content-news-page">
         <h2 class="text-36-700 h2-find-page">Список парков</h2>

         <div class="parks-area-find-page-overflow-container none">
            <div class="parks-area-find-page">
               <div class="side-of-region-button-f-p s-o-r-f-p-active"><?php the_field('najdi_svoj_park_navigacziya_1') ?></div>
               <div class="side-of-region-button-f-p"><?php the_field('najdi_svoj_park_navigacziya_2') ?></div>
               <div class="side-of-region-button-f-p"><?php the_field('najdi_svoj_park_navigacziya_3') ?></div>
               <div class="side-of-region-button-f-p"><?php the_field('najdi_svoj_park_navigacziya_4') ?></div>
               <div class="side-of-region-button-f-p"><?php the_field('najdi_svoj_park_navigacziya_5') ?></div>
               <div class="side-of-region-button-f-p"><?php the_field('najdi_svoj_park_navigacziya_6') ?></div>
            </div>
         </div>
         <div class="search-container-find-page">
            <input class="input-search-find-page" id="searchInput" type="text" placeholder="Введите название парка, адреса или техники" />
            <img class="search-icon" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/search-icon-black.svg" alt="" />
         </div>

         

         <div class="table-info-find-page text-14-500-left list">

         </div>
<script>
    $.getJSON("/wp-content/uploads/points.json", function(data) {
        // Получение списка парков
        var parks = data.features;

        // Находим контейнер для списка парков
        var parkListContainer = document.querySelector(".table-info-find-page");

        // Создаем HTML-элементы для каждого парка и добавляем их в контейнер
        parks.forEach(function(park) {
            var listItem = document.createElement("div");
            listItem.classList.add("discription-table-find-page");

            var name = document.createElement("p");
            name.textContent = park.properties.name;
            listItem.appendChild(name);

            var adress = document.createElement("p");
            if(park.properties.adress){
            adress.textContent = park.properties.adress;
             } else {adress.textContent = "Адрес не указан"}
            listItem.appendChild(adress);

            var worktime = document.createElement("p");
            worktime.textContent = park.properties.worktime;
            listItem.appendChild(worktime);

            var equipment = document.createElement("p");
            equipment.textContent = park.properties.equipment;
            listItem.appendChild(equipment);

            // Добавляем обработчик события клика на элемент списка
            listItem.addEventListener('click', function() {
                // Показываем карточку
                const leftBlock = document.querySelector('.absolute-map-info-left-container');
                leftBlock.classList.remove('none');
            });

            // Добавляем элемент списка в контейнер
            parkListContainer.appendChild(listItem);
        });
    });
</script>

<script>
const searchInput = document.querySelector(".input-search-find-page");
const list = document.querySelector(".table-info-find-page");

// Добавляем прослушиватель событий при вводе в input
searchInput.addEventListener("input", function () {
  // Получаем поисковый запрос
  const searchTerm = this.value.toLowerCase();

  // Перебираем элементы списка
  const items = list.querySelectorAll("div.discription-table-find-page");
  items.forEach(function(item) {
    // Если поисковый запрос найден в тексте элемента, показываем его
    const name = item.querySelector("p:first-child").textContent.toLowerCase();
    if (name.includes(searchTerm)) {
      item.style.display = "flex";
    } else {
      item.style.display = "none";
    }
  });
});
</script>
  
<div class="mobile-viev-table-find-page none" id="mobile-park-list"></div>




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