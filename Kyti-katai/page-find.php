

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
            <p><a href="index">Главная</a></p>
            <p>/</p>
            <p><a href="#">Лето</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Найди свой парк</p>
         </div>
         <div class="title-of-section-news-page">
            <h3 class="text-gradient"><?php the_field('find-park-title') ?></h3>
         </div>

         <div class="map-area-find-page"></div>

         <h2 class="text-36-700 h2-find-page">Список парков</h2>

         <div class="parks-area-find-page-overflow-container">
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
                  <p class="second-text-sub-block-news-p-cont text-18-500">Наши специалисты ответят на все ваши вопросы</p>
               </div>
               <div class="input-zone-news-p-cont">
                  <input class="input-in-news-p-cont i-n-p-c-name" type="text" placeholder="Ваше имя" />
                  <input class="input-in-news-p-cont i-n-p-c-email" type="email" placeholder="Электронная почта" />
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