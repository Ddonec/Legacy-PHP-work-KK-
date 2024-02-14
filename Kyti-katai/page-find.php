

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
         </div>
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
            <input class="input-search-find-page" type="search" placeholder="Введите название парка, адреса или техники" />
            <img class="search-icon" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/search-icon-black.svg" alt="" />
         </div>

         

         <div class="table-info-find-page text-14-500-left">

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
  
<div class="mobile-viev-table-find-page none" id="mobile-park-list"></div>

<script>
    $.getJSON("/wp-content/uploads/points.json", function(data) {
        var parks = data.features;
        var mobileParkListContainer = document.getElementById("mobile-park-list");

        parks.forEach(function(park, index) {
            var parkContainer = document.createElement("div");
            parkContainer.classList.add("table-find-page-for-768less");

            var blockContainer = document.createElement("div");
            blockContainer.classList.add("block-of-768less-table");

            var nameElement = document.createElement("div");
            nameElement.classList.add("element-of-768less-table");
            nameElement.innerHTML = `
                <p><?php the_field('najdi_svoj_park_nazvanie') ?>:</p>
                <p>${park.properties.name}</p>
            `;
            blockContainer.appendChild(nameElement);

            var addressElement = document.createElement("div");
            addressElement.classList.add("element-of-768less-table");
            addressElement.innerHTML = `
                <p><?php the_field('najdi_svoj_park_adres') ?>:</p>
                <p>${park.properties.adress || "Адрес не указан"}</p>
            `;
            blockContainer.appendChild(addressElement);

            var worktimeElement = document.createElement("div");
            worktimeElement.classList.add("element-of-768less-table");
            worktimeElement.innerHTML = `
                <p><?php the_field('najdi_svoj_park_rezhim_raboty') ?>:</p>
                <p>${park.properties.worktime}</p>
            `;
            blockContainer.appendChild(worktimeElement);

            var equipmentElement = document.createElement("div");
            equipmentElement.classList.add("last-element-of-768less-table");
            equipmentElement.innerHTML = `
                <p><?php the_field('najdi_svoj_park_teznika_porka') ?>:</p>
                <p>${park.properties.equipment}</p>
            `;
            blockContainer.appendChild(equipmentElement);

            parkContainer.appendChild(blockContainer);
            mobileParkListContainer.appendChild(parkContainer);
        });
    });
</script>


         <div class="call-back-form-container-overflow-container-default">
                <div class="call-back-form-container-franchise">
                   <div class="text-sub-block-news-inside">
                      <h4 class="main-text-sub-block-news-p-cont text-gradient">Давайте созвонимся!</h4>
                      <p class="second-text-sub-block-news-p-cont text-18-500-left">Наши специалисты ответят на все ваши вопросы</p>
                   </div>
                    <?php echo do_shortcode( '[contact-form-7 id="2b64add" title="Давайте созвонимся"]' ); ?>
                   <div class="input-zone-news-p-cont">
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