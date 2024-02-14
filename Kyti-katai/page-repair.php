
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
         <h1 class="h1-repair-page text-gradient"><?php the_field('repair-zagolovok_straniczy') ?></h1>

         <section class="mibile-version-top-content-repair-page none">
            <!-- <div class="mobile-image-repair"></div> -->
            <div class="mobile-content-repair__title">К каждому клиенту у нас индивидуальный подход и гибкая ценовая политика</div>
            <div class="mobile-content-repair__discription">
               В нашу мастерскую Вы можете обратиться с любой поломкой самоката. Срок и стоимость работ будут зависеть от сложности поломки, а также от необходимых для ремонта запчастей. <br />
               <br />Самые распространенные запчасти мы храним в мастерской, полный же перечень позиций есть на нашем центральном складе, откуда мы привезем практически любую запчасть.
            </div>
         </section>

         <div class="text-blicks-repair-page">
            <div><?php the_field('repair-levyj_tekst') ?></div>
            <p><?php the_field('repair-srednij_tekst') ?>​</p>
            <p><?php the_field('repair-pravyj_tekst') ?></p>
         </div>

         <div class="nav-repair-page">
            <ul>
               <!-- <li class="pointer">Всё</li> -->
               <li class="pointer"><?php the_field('repair-pole_navigaczii_1') ?></li>
               <li class="pointer"><?php the_field('repair-pole_navigaczii_2') ?></li>
               <li class="pointer"><?php the_field('repair-pole_navigaczii_3') ?></li>
               <li class="pointer"><?php the_field('repair-pole_navigaczii_4') ?></li>
               <li class="pointer"><?php the_field('repair-pole_navigaczii_5') ?></li>
               <li class="pointer"><?php the_field('repair-pole_navigaczii_6') ?></li>
               <div class="arrow-right-list pointer">
                  <img id="vector-repair" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-right.svg" alt="" />
               </div>
            </ul>
         </div>
         <div class="desctop-photo-repair-page"><img class="photo-repair-page" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/repair-page-photo.png" alt="" /></div>

         <div class="price-repair-page-container">
            <h5><?php the_field('repair-zagolovok_czen') ?></h5>
            <div>
               <div><?php the_field('repair-usluga_1') ?></div>
               <p><?php the_field('repair-czena_za_uslugu_1') ?></p>
            </div>
            <div>
               <div><?php the_field('repair-usluga_2') ?></div>
               <p><?php the_field('repair-czena_za_uslugu_2') ?></p>
            </div>
            <div>
               <div><?php the_field('repair-usluga_3') ?></div>
               <p><?php the_field('repair-czena_za_uslugu_3') ?></p>
            </div>
            <div>
               <div><?php the_field('repair-usluga_4') ?></div>
               <p><?php the_field('repair-czena_za_uslugu_4') ?></p>
            </div>

            <div>
               <div><?php the_field('repair-usluga_5') ?></div>
               <p><?php the_field('repair-czena_za_uslugu_5') ?></p>
            </div>
            <div>
               <div><?php the_field('repair-usluga_6') ?></div>
               <p><?php the_field('repair-czena_za_uslugu_6') ?></p>
            </div>
            <div>
               <div><?php the_field('repair-usluga_7') ?></div>
               <p><?php the_field('repair-czena_za_uslugu_7') ?></p>
            </div>
            <div>
               <div><?php the_field('repair-usluga_8') ?></div>
               <p><?php the_field('repair-czena_za_uslugu_8') ?></p>
            </div>
            <div>
               <div><?php the_field('repair-usluga_9') ?></div>
               <p><?php the_field('repair-czena_za_uslugu_9') ?></p>
            </div>
         </div>
         <p class="example-text-repair-page"><?php the_field('repair-zagolovok_primerov_rabot') ?></p>
         <div class="phopos-container-example-repair-page">
            <div><p>Сборка из коробки</p></div>
            <div><p>Замена подшипников в колесах</p></div>
            <div><p>Ремонт рулевого штока</p></div>
            <div><p>Ремонт блока управления электромотором</p></div>
            <div><p>Ремонт блока управления электромотором</p></div>
         </div>

<script>
      const vacancies = document.querySelectorAll('.nav-menu-of-vacancies-work-in-page div');
   vacancies.forEach((vacancy, index) => {
    // Добавляем слушателя события клика
    vacancy.addEventListener('click', () => {
        // Убираем класс "vac__active" у всех соседних элементов
        vacancies.forEach((v) => {
            v.classList.remove('vac__active');
            v.classList.add('opacity');
        });
        // Добавляем класс "vac__active" к текущему элементу
        vacancy.classList.add('vac__active');
        vacancy.classList.remove('opacity');


        // Получаем все контейнеры описаний вакансий
        const descriptionContainers = document.querySelectorAll('.discription-area-of-vacancier-work-page > div');

        // Перебираем контейнеры
        descriptionContainers.forEach((container, i) => {
            // Если контейнер соответствует кликнутой вакансии, убираем класс "none"
            if (index === i) {
                container.classList.remove('none');
            } else {
                // Иначе добавляем класс "none"
                container.classList.add('none');
            }
        });
    });
});
</script>
         


         <div class="call-back-form-container-overflow-container-default">
            <div class="call-back-form-container-franchise">
               <div class="text-sub-block-news-inside">
                  <h4 class="main-text-sub-block-news-p-cont text-gradient">Давайте созвонимся!</h4>
                  <p class="second-text-sub-block-news-p-cont text-18-500">Наши специалисты ответят на все ваши вопросы</p>
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