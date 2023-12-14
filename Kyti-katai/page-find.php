

<?php
/*
Template Name: find
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
            <p class="grey-bread-crumbs">Найди свой парк</p>
         </div>
         <div class="title-of-section-news-page">
            <div class="black-text-section">Найди</div>
            <div class="opacity-text-section o-t-s-all">свой парк</div>
            <div class="item-shadow-section-find-page"></div>
         </div>

         <div class="map-area-find-page"></div>

         <h2 class="text-36-700 h2-find-page">Список парков</h2>

         <div class="parks-area-find-page">
            <div class="side-of-region-button-f-p s-o-r-f-p-active">Все парки</div>
            <div class="side-of-region-button-f-p">Север</div>
            <div class="side-of-region-button-f-p">Запад</div>
            <div class="side-of-region-button-f-p">Юг</div>
            <div class="side-of-region-button-f-p">Восток</div>
            <div class="side-of-region-button-f-p">Московская область</div>
         </div>
         <div class="search-container-find-page">
            <input class="input-search-find-page" type="search" placeholder="Введите название парка, адреса или техники" />
            <img class="search-icon" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/search-icon-black.svg" alt="" />
         </div>

         <div class="table-info-find-page">
            <div class="title-table-find-page grey-i-p">
               <p>Название</p>
               <p>Адрес</p>
               <p>Режим работы</p>
               <p>Техника парка</p>
            </div>
            <div class="discription-table-find-page">
               <p>Парк Строгино</p>
               <p>Москва, ул. Парковая, 5</p>
               <p>Круглосуточно</p>
               <p>Велосипеды, Электросамокаты, Батуты, Зорбинг, Лодки, Катамараны</p>
            </div>
            <div class="discription-table-find-page">
               <p>ВДНХ</p>
               <p>Москва, проспект Мира, 119В</p>
               <p>10:00 - 22:00</p>
               <p>Велосипеды, Электросамокаты, Батуты, Зорбинг, Лодки, Катамараны</p>
            </div>
            <div class="discription-table-find-page">
               <p>Красногвардейский пруд</p>
               <p>Москва, Красногвардейский бульвар, 1А</p>
               <p>Круглосуточно</p>
               <p>Велосипеды, Электросамокаты, Батуты, Зорбинг, Лодки, Катамараны</p>
            </div>
            <div class="discription-table-find-page">
               <p>Парк Строгино</p>
               <p>Москва, ул. Парковая, 5</p>
               <p>Круглосуточно</p>
               <p>Велосипеды, Электросамокаты, Батуты, Зорбинг, Лодки, Катамараны</p>
            </div>
            <div class="discription-table-find-page">
               <p>ВДНХ</p>
               <p>Москва, проспект Мира, 119В</p>
               <p>10:00 - 22:00</p>
               <p>Велосипеды, Электросамокаты, Батуты, Зорбинг, Лодки, Катамараны</p>
            </div>
            <div class="discription-table-find-page">
               <p>Красногвардейский пруд</p>
               <p>Москва, Красногвардейский бульвар, 1А</p>
               <p>Круглосуточно</p>
               <p>Велосипеды, Электросамокаты, Батуты, Зорбинг, Лодки, Катамараны</p>
            </div>
         </div>
         <div class="call-back-form-container">
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
      </section>

<?php
get_footer();
?>