
<?php
/*
Template Name: repair
*/
?>

<?php
get_header();
?>


<section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="<?php echo get_option('home'); ?>">Главная</a></p>
            <p>/</p>
            <p><a href="#">Лето</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Ремонт техники</p>
         </div>
         <h1 class="h1-repair-page text-gradient">Ремонт техники</h1>

         <section class="mibile-version-top-content-repair-page none">
            <div class="mobile-image-repair"></div>
            <div class="mobile-content-repair__title">К каждому клиенту у нас индивидуальный подход и гибкая ценовая политика</div>
            <div class="mobile-content-repair__discription">
               В нашу мастерскую Вы можете обратиться с любой поломкой самоката. Срок и стоимость работ будут зависеть от сложности поломки, а также от необходимых для ремонта запчастей. <br />
               <br />Самые распространенные запчасти мы храним в мастерской, полный же перечень позиций есть на нашем центральном складе, откуда мы привезем практически любую запчасть.
            </div>
         </section>

         <div class="text-blicks-repair-page">
            <div>Оказываем услуги по обслуживанию и ремонту</div>
            <p>У нас Вы сможете провести профессиональное обслуживание, настройку или ремонт велосипедов. Мы работаем с отечественными и зарубежными производителями.​</p>
            <p>Самые распространенные запчасти мы храним в мастерской, полный же перечень позиций есть на нашем центральном складе, откуда мы привезем практически любую запчасть.</p>
         </div>

         <div class="nav-repair-page">
            <ul>
               <!-- <li class="pointer">Всё</li> -->
               <li class="pointer">Велосипеды</li>
               <li class="pointer">Веломобили</li>
               <li class="pointer">Электро</li>
               <li class="pointer">Коньки</li>
               <li class="pointer">Катамараны</li>
               <li class="pointer">Лодки</li>
               <li class="arrow-right-list pointer">
                  <img id="vector-repair" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-right.svg" alt="" />
               </li>
            </ul>
         </div>
         <div class="desctop-photo-repair-page"><img class="photo-repair-page" src="/assets/content/repair-page-photo.png" alt="" /></div>

         <div class="price-repair-page-container">
            <h5>Распространенные поломки и стоимость их ремонта</h5>
            <div>
               <div>Диагностика электрики и электроники</div>
               <p>1 500₽</p>
            </div>
            <div>
               <div>Регулировка тормозов</div>
               <p>400 — 600₽</p>
            </div>
            <div>
               <div>Замена камеры на приводном колесе</div>
               <p>700 — 1400₽</p>
            </div>
            <div>
               <div>Замена камеры на ведомом колесе</div>
               <p>500 — 1 200₽</p>
            </div>

            <div>
               <div>Замена подшипников в колесах</div>
               <p>300₽</p>
            </div>
            <div>
               <div>Аргонная сварка рамы</div>
               <p>1500 — 4 000₽</p>
            </div>
            <div>
               <div>Обслуживание/замена рулевой колонки</div>
               <p>400 — 800₽</p>
            </div>
            <div>
               <div>Ремонт амортизатора переднего колеса</div>
               <p>1 500 — 3 500₽</p>
            </div>
            <div>
               <div>Напрессовка литой покрышки в термопрессе на диск (не считая стоимости демонтажа)</div>
               <p>300-1200₽</p>
            </div>
         </div>
         <p class="example-text-repair-page">Примеры наших работ</p>
         <div class="phopos-container-example-repair-page">
            <div><p>Сборка из коробки</p></div>
            <div><p>Замена подшипников в колесах</p></div>
            <div><p>Ремонт рулевого штока</p></div>
            <div><p>Ремонт блока управления электромотором</p></div>
            <div><p>Ремонт блока управления электромотором</p></div>
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