




<?php
/*
Template Name: work-in
*/
?>






<?php
get_header();
?>


<style>
.photos-work-in__photo-1 {
   background-image: url(<?php the_field('absolyut_foto_1') ?>);
}
.photos-work-in__photo-2 {
   background-image: url(<?php the_field('absolyut_foto_2') ?>);
}
.photos-work-in__photo-3 {
   background-image: url(<?php the_field('absolyut_foto_3') ?>);
}
.photos-work-in__photo-4 {
   background-image: url(<?php the_field('absolyut_foto_4') ?>);
}
</style>




      <section class="main-content-news-page">
         <div class="bread-crumbs">
            <p><a href="index.html">Главная</a></p>
            <p>/</p>
            <p><a href="#">Лето</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Вакансии</p>
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
            <div class="opacity-text-section o-t-s-all">Кути Катай</div>
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
                  <!-- <div class="text-18-500 vac__active nav-menu-of-vacancies__vac">Оператор-Кассир</div>
                  <div class="text-18-500 opacity nav-menu-of-vacancies__vac">Сотрудник проката</div>
                  <div class="text-18-500 opacity nav-menu-of-vacancies__vac">Директор по маркетингу</div> -->

                  <?php
$vac = get_field('nazvanie_vakansii_strokgo');
if ($vac) {
    $co = 0;
    foreach ($vac as $vacancy) {
        $co++;
?>
<div class="text-18-500 <?php echo ($co == 1) ? 'vac__active' : 'opacity'; ?> nav-menu-of-vacancies__vac pointer">
      <?php echo $vacancy['nazvanie_vakansii_nomer_povtoritel']; ?></div>
<?php
    }
}
?>

               </div>
            </div>
            <div class="discriptions-of-vacancies-container">
            <div class="discription-area-of-vacancier-work-page">
            <?php
$vac2 = get_field('opisanie_vakansii_povtoritel_2');
if ($vac2) {
    $count = 0;
    foreach ($vac2 as $vacancy) {
        $count++;
?>
<div class="area-of-vacancier-work-page-gap-12<?php echo ($count == 1) ? '' : ' none'; ?>">
        <h5 class="text-18-500"><?php echo $vacancy['work-tekst_kogo_ishhem_vac_2']; ?></h5>
        <div>
            <p class="requirements-vacancie-work-page"><?php echo $vacancy['work-tekst_v_vakansii_sinij_1_vac_2']; ?></p>
            <ul>
                <?php echo $vacancy['work-spisok_posle_sinego_1_vac_2']; ?>
            </ul>
        </div>
        <div>
            <p class="requirements-vacancie-work-page"><?php echo $vacancy['work-tekst_v_vakansii_sinij_2_vac_2']; ?></p>
            <ul>
                <?php echo $vacancy['work-spisok_posle_sinego_2_vac_2']; ?>
            </ul>
        </div>
</div>
<?php
    }
}
?>

               <button class="respond-btn-work-in-page text-18-500 pointer">Откликнуться</button>
            </div>

         </div>
      </div>
         <script>
            
            
            const vacancies = document.querySelectorAll('.nav-menu-of-vacancies-work-in-page div');

// Перебираем полученные элементы
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

<div class="call-back-form-container-work-in-page">
            <div class="text-sub-block-news-inside-work-in" id="work-in-form">
               <h4 class="main-text-sub-block-news-p-cont text-gradient"><?php the_field('work-tvjtl_formy') ?></h4>
               <p class="second-text-sub-block-news-p-cont text-18-500-left"><?php the_field('work-subtajtl_formy') ?></p>
            </div>
  
            <?php echo do_shortcode( '[contact-form-7 id="24c1000" title="Работа в Кути Катай"]' ); ?>
            <img class="koleso-work-in-1" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/koleso-blue.svg" alt="" />
            <img class="koleso-work-in-2" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/spici-blue.svg" alt="" />
            <div class="data-agreement-12px">Нажимая кнопку вы принимаете <a href="https://agency-5.ru/soglashenie-ob-obrabotke-personalnyh-dannyh/">Соглашение об обработке персональных данных</a></div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- Подключаем jQuery -->
<script>
jQuery(document).ready(function($) {
    // Ищем все элементы input типа file внутри формы Contact Form 7
    $('.wpcf7-form-control-wrap input[type="file"]').each(function() {
        var input = $(this);
        // Скрываем кнопку
        input.hide();
        // Создаем и добавляем элемент, который будет отображаться вместо кнопки
        var customButton = $('<div class="custom-file-button">Выберите файл</div>');
        input.after(customButton);
        // Добавляем обработчик события клика на новый элемент
        customButton.on('click', function() {
            // Эмулируем клик на скрытой кнопке
            input.trigger('click');
        });
    });
});

</script>

<script>
    // Находим кнопку "Откликнуться"
    const respondButton = document.querySelector('.respond-btn-work-in-page');

    // Добавляем обработчик события клика на кнопку
    respondButton.addEventListener('click', function() {
        // Находим элемент, к которому нужно прокрутить
        const workInForm = document.getElementById('work-in-form');

        // Выполняем прокрутку к элементу
        workInForm.scrollIntoView({ behavior: 'smooth' }); // Используем плавную прокрутку
    });
</script>
      </section>








<?php
get_footer();
?>