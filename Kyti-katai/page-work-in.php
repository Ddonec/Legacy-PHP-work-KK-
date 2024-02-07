




<?php
/*
Template Name: work-in
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
            <p class="grey-bread-crumbs">Веревочный парк</p>
         </div>
         <div class="photos-zone-work-in-page">
            <div class="photos-work-in__photo-1"></div>
            <div class="photos-work-in__photo-2"></div>
            <div class="photos-work-in__photo-3"></div>
            <div class="photos-work-in__photo-4"></div>
         </div>
         <div class="title-of-section-news-page">
            <h3 class="text-gradient"><?php the_field('work-zagolovok_straniczy') ?></h3>
            <!-- <div class="black-text-section">Работа в</div>
            <div class="opacity-text-section o-t-s-all">КутиКатай</div>
            <div class="item-shadow-section-vacancies-page"></div> -->
         </div>
         <div class="first-2-blocks-rope-park-page">
            <div class="k-k-about-rope-park-page"><?php the_field('work-levyj_tekst') ?></div>
            <div class="k-k-div-510w-vacancies"><?php the_field('work-srednij_tekst') ?></div>
            <div class="k-k-div-510w-vacancies"><?php the_field('work-pravyj_tekst') ?></div>
         </div>
         <div class="company-princips-vacancies-page none">
            <p class="text-18-500">Принципы компании</p>
            <div class="row-of-table-vacancies-page">
               <h4 class="h4-vacancies-page">Добросовестность</h4>
               <p class="discr-table-vacancies-page">Мы всегда и везде действуем в соответствии с высокими моральными принципами.</p>
            </div>
            <div class="row-of-table-vacancies-page">
               <h4 class="h4-vacancies-page">Сотрудничество</h4>
               <p class="discr-table-vacancies-page">Сотрудничество помогает нам в поиске оптимальных решений, ведущих к результату</p>
            </div>
            <div class="row-of-table-vacancies-page">
               <h4 class="h4-vacancies-page">Ответственность</h4>
               <p class="discr-table-vacancies-page">Мы направляем все усилия на решение задачи, берём на себя ответственность</p>
            </div>
            <div class="row-of-table-vacancies-page">
               <h4 class="h4-vacancies-page">Результативность</h4>
               <p class="discr-table-vacancies-page">Мы неизменно добиваемся высоких результатов и стремимся превзойти ожидания.</p>
            </div>
            <div class="row-of-table-vacancies-page">
               <h4 class="h4-vacancies-page">Сотрудничество</h4>
               <p class="discr-table-vacancies-page">Сотрудничество помогает нам в поиске оптимальных решений, ведущих к результату</p>
            </div>
         </div>

         <div class="title-of-section-news">
            <div class="black-text-section"><?php the_field('work-zagolovok_sekczii') ?></div>
            <!-- <div class="opacity-text-section o-t-s-all">Вакансии</div>
            <div class="item-shadow-section-vacancies-page-2"></div> -->
         </div>

         <div class="vacancies-list-container-vacancy-page">
            <div class="overflow-nav-vacancies-container">
               <div class="nav-menu-of-vacancies-work-in-page">
                  <div class="text-18-500">Оператор-Кассир</div>
                  <div class="text-18-500 opacity">Сотрудник проката</div>
                  <div class="text-18-500 opacity">Директор по маркетингу</div>
               </div>
            </div>
            <div class="discription-area-of-vacancier-work-page">
               <h5 class="text-18-500"><?php the_field('work-tekst_kogo_ishhem') ?></h5>
               <div>
                  <p class="requirements-vacancie-work-page"><?php the_field('work-tekst_v_vakansii_sinij_1') ?></p>
                  <ul>
                  <?php the_field('work-spisok_posle_sinego_1') ?>
                  </ul>
               </div>
               <div>
                  <p class="requirements-vacancie-work-page"><?php the_field('work-tekst_v_vakansii_sinij_2') ?></p>
                  <ul>
                  <?php the_field('work-spisok_posle_sinego_2') ?>
                  </ul>
               </div>
               <div>
                  <p class="requirements-vacancie-work-page"><?php the_field('work-tekst_v_vakansii_sinij_3') ?></p>
                  <ul>
                  <?php the_field('work-spisok_posle_sinego_3') ?>
                  </ul>
               </div>
               <div class="respond-btn-work-in-page text-18-500">Откликнуться</div>
            </div>
         </div>

         <div class="call-back-form-container-work-in-page">
            <div class="text-sub-block-news-inside-work-in">
               <h4 class="main-text-sub-block-news-p-cont text-gradient"><?php the_field('work-tvjtl_formy') ?></h4>
               <p class="second-text-sub-block-news-p-cont text-18-500-left"><?php the_field('work-subtajtl_formy') ?></p>
            </div>
             <?php echo do_shortcode( '[contact-form-7 id="24c1000" title="Работа в КутиКатай"]' ); ?>
            <div class="input-zone-news-work-page-cont">
               <input class="input-small-vacancies i-n-p-c-work-in-name" type="text" placeholder="Ваше имя" />
               <input class="input-small-vacancies i-n-p-c-work-in-number" type="text" placeholder="Номер телефона" />
               <input class="input-small-vacancies i-n-p-c-work-in-email" type="email" placeholder="Электронная почта" />
               <input class="input-small-vacancies i-n-p-c-work-in-work-type" type="text" placeholder="Специальность" />
               <input class="input-big-vacancies i-n-p-c-work-in-about" type="text" placeholder="Расскажите о себе" />
               <div class="grey-btd-add-resume">
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/plus.svg" alt="" />
                  <p>Прикрепить&nbsp;резюме</p>
               </div>
            </div>
            <img class="koleso-work-in-1" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/koleso-blue.svg" alt="" />
            <img class="koleso-work-in-2" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/spici-blue.svg" alt="" />
            <div class="send-btn-news-sub text-18-500 pointer">Отправить</div>
            <div class="data-agreement-12px">Нажимая кнопку вы принимаете <a href="https://agency-5.ru/soglashenie-ob-obrabotke-personalnyh-dannyh/">Соглашение об обработке персональных данных</a></div>
         </div>
      </section>








<?php
get_footer();
?>