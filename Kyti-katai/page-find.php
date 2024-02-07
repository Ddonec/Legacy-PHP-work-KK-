

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
            <div class="title-table-find-page grey-i-p">
               <p><?php the_field('najdi_svoj_park_nazvanie') ?></p>
               <p><?php the_field('najdi_svoj_park_adres') ?></p>
               <p><?php the_field('najdi_svoj_park_rezhim_raboty') ?></p>
               <p><?php the_field('najdi_svoj_park_teznika_porka') ?></p>
            </div>
            <div class="discription-table-find-page">
               <p><?php the_field('najdi_svoj_park_nazvanie_1') ?></p>
               <p><?php the_field('najdi_svoj_park_adres_1') ?></p>
               <p><?php the_field('najdi_svoj_park_rezhim_raboty_1') ?></p>
               <p><?php the_field('najdi_svoj_park-tehnika_parka_1') ?></p>
            </div>
            <div class="discription-table-find-page">
               <p><?php the_field('najdi_svoj_park_nazvanie_2') ?></p>
               <p><?php the_field('najdi_svoj_park_adres_2') ?></p>
               <p><?php the_field('najdi_svoj_park_rezhim_raboty_2') ?></p>
               <p><?php the_field('najdi_svoj_park-tehnika_parka_2') ?></p>
            </div>            <div class="discription-table-find-page">
               <p><?php the_field('najdi_svoj_park_nazvanie_3') ?></p>
               <p><?php the_field('najdi_svoj_park_adres_3') ?></p>
               <p><?php the_field('najdi_svoj_park_rezhim_raboty_3') ?></p>
               <p><?php the_field('najdi_svoj_park-tehnika_parka_3') ?></p>
            </div>            <div class="discription-table-find-page">
               <p><?php the_field('najdi_svoj_park_nazvanie_4') ?></p>
               <p><?php the_field('najdi_svoj_park_adres_4') ?></p>
               <p><?php the_field('najdi_svoj_park_rezhim_raboty_4') ?></p>
               <p><?php the_field('najdi_svoj_park-tehnika_parka_4') ?></p>
            </div>            <div class="discription-table-find-page">
               <p><?php the_field('najdi_svoj_park_nazvanie_5') ?></p>
               <p><?php the_field('najdi_svoj_park_adres_5') ?></p>
               <p><?php the_field('najdi_svoj_park_rezhim_raboty_5') ?></p>
               <p><?php the_field('najdi_svoj_park-tehnika_parka_5') ?></p>
            </div>            <div class="discription-table-find-page">
               <p><?php the_field('najdi_svoj_park_nazvanie_6') ?></p>
               <p><?php the_field('najdi_svoj_park_adres_6') ?></p>
               <p><?php the_field('najdi_svoj_park_rezhim_raboty_6') ?></p>
               <p><?php the_field('najdi_svoj_park-tehnika_parka_6') ?></p>
            </div>
         </div>
         <div class="mobile-viev-table-find-page none">
            <div class="table-find-page-for-768less">
               <div class="block-of-768less-table">
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_nazvanie') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_nazvanie_1') ?></p>
                  </div>
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_adres') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_adres_1') ?></p>
                  </div>
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_rezhim_raboty') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_rezhim_raboty_1') ?></p>
                  </div>
                  <div class="last-element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_teznika_porka') ?>:</p>
                     <p><?php the_field('najdi_svoj_park-tehnika_parka_1') ?></p>
                  </div>
               </div>
            </div>

            <div class="table-find-page-for-768less">
               <div class="block-of-768less-table">
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_nazvanie') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_nazvanie_2') ?></p>
                  </div>
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_adres') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_adres_2') ?></p>
                  </div>
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_rezhim_raboty') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_rezhim_raboty_2') ?></p>
                  </div>
                  <div class="last-element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_teznika_porka') ?>:</p>
                     <p><?php the_field('najdi_svoj_park-tehnika_parka_2') ?></p>
                  </div>
               </div>
            </div>

            <div class="table-find-page-for-768less">
               <div class="block-of-768less-table">
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_nazvanie') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_nazvanie_3') ?></p>
                  </div>
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_adres') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_adres_3') ?></p>
                  </div>
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_rezhim_raboty') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_rezhim_raboty_3') ?></p>
                  </div>
                  <div class="last-element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_teznika_porka') ?>:</p>
                     <p><?php the_field('najdi_svoj_park-tehnika_parka_3') ?></p>
                  </div>
               </div>
            </div>

            <div class="table-find-page-for-768less">
               <div class="block-of-768less-table">
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_nazvanie') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_nazvanie_4') ?></p>
                  </div>
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_adres') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_adres_4') ?></p>
                  </div>
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_rezhim_raboty') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_rezhim_raboty_4') ?></p>
                  </div>
                  <div class="last-element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_teznika_porka') ?>:</p>
                     <p><?php the_field('najdi_svoj_park-tehnika_parka_4') ?></p>
                  </div>
               </div>
            </div>

            <div class="table-find-page-for-768less">
               <div class="block-of-768less-table">
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_nazvanie') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_nazvanie_5') ?></p>
                  </div>
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_adres') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_adres_5') ?></p>
                  </div>
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_rezhim_raboty') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_rezhim_raboty_5') ?></p>
                  </div>
                  <div class="last-element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_teznika_porka') ?>:</p>
                     <p><?php the_field('najdi_svoj_park-tehnika_parka_5') ?></p>
                  </div>
               </div>
            </div>

            <div class="table-find-page-for-768less">
               <div class="block-of-768less-table">
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_nazvanie') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_nazvanie_6') ?></p>
                  </div>
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_adres') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_adres_6') ?></p>
                  </div>
                  <div class="element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_rezhim_raboty') ?>:</p>
                     <p><?php the_field('najdi_svoj_park_rezhim_raboty_6') ?></p>
                  </div>
                  <div class="last-element-of-768less-table">
                     <p><?php the_field('najdi_svoj_park_teznika_porka') ?>:</p>
                     <p><?php the_field('najdi_svoj_park-tehnika_parka_6') ?></p>
                  </div>
               </div>
            </div>

            
         </div>
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