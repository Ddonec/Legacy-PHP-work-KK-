<?php
/*
Template Name: form-page
*/
get_header();
?>
    <section class="main-content-news-page">
        <h3>форма на страницу Работа</h3>


        <div class="call-back-form-container-work-in-page">
            <div class="text-sub-block-news-inside-work-in">
               <h4 class="main-text-sub-block-news-p-cont text-gradient"><?php the_field('work-tvjtl_formy') ?></h4>
               <p class="second-text-sub-block-news-p-cont text-18-500-left"><?php the_field('work-subtajtl_formy') ?></p>
            </div>

            <?php echo do_shortcode( '[contact-form-7 id="24c1000" title="Работа в КутиКатай"]' ); ?>
  
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


        <h3>форма на страницу Франшиза (модальное окно)</h3>

        <?php echo do_shortcode( '[contact-form-7 id="9f34528" title="Франшиза"]' ); ?>

        
        <form class="modal-reserve-franchise">
            <div class="modal-r-c__top-container">
                <div class="modal-title modal-r-c__title">Оставить заявку</div>
                <div class="modal-subtitle modal-r-c__title">Укажите ваши данные, чтобы наши специалисты связались с вами</div>
            </div>
            <div class="modal-r-c__input-container">
                <input type="text" class="modal-franchise-1 modal-franchise__input" placeholder="Ваше имя" />
                <input type="text" class="modal-franchise-2 modal-franchise__input" placeholder="Город открытия" />
                <input type="email" placeholder="Электронная почта" class="modal-franchise-3 modal-franchise__input" />
                <input type="tel" placeholder="Номер телефона" class="modal-franchise-4 modal-franchise__input" />
                <input type="text" placeholder="Ваше сообщение" class="modal-r-c__input-5 modal-r-c__input modal-franchise-5" />
            </div>
            <div class="modal-r-c__button-area">
                <div class="toggle-container">
                    <label class="toggle-label " for="toggle"
                    ><p class="text-14-500-left-lato-left">Напишите на почту</p>
                        <p class="text-14-500-left-lato-left">Позвоните мне</p></label
                    >
                    <input type="checkbox" id="toggle" class="toggle-input" />
                    <div class="toggle-slider"></div>
                </div>

                <button class="modal-r-c__button">Отправить</button>
                <p class="modal-r-c__data-agree modal-data-agree">Отправляя данную форму, вы соглашаетесь с <br /><a href="#">условиями обработки персональных данных</a></p>
            </div>
            <div class="close-modal-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M1 15L15 1M15 15L1 1" stroke="black" stroke-width="2" stroke-linecap="round" />
                </svg>
            </div>
        </form>


        <form class="log-in-modal-container1">
        <div class="log-in-modal__image"></div>
         <div class="log-in-modal__main-container">
            <form action="" class="log-in-modal__form">
               <p class="log-in-modal__title text-gradient">Вход</p>
               <p class="log-in-modal__subtitle">Введите ваш номер телефона для входа в систему</p>
               <input type="tel" placeholder="Номер телефона" class="log-in-modal__input" />
               <button class="log-in-modal__button">Отправить</button>
            </form>
            <div class="log-in-modal__go-sign-up">
               <p class="opacity">Еще не зарегистрированы?</p>
               <p class="log-in-modal__create-acc">Создайте аккаунт</p>
            </div>
            <div class="close-modal-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                     <path d="M1 15L15 1M15 15L1 1" stroke="black" stroke-width="2" stroke-linecap="round" />
                  </svg>
               </div>
         </div>
         
        </form>
<br>
<br>

        <form class="log-in-modal-container2">
<div class="log-in-modal__image"></div>
         <div class="log-in-modal__main-container">
            <form action="" class="log-in-modal__form">
               <p class="log-in-modal__title text-gradient">Регистрация</p>
               <p class="log-in-modal__subtitle">Введите ваши данные</p>
               <div class="log-in-modal__input-zone">
                  <input type="text" placeholder="Ваше имя" class="log-in-modal__input" />
                  <input type="tel" placeholder="Номер телефона" class="log-in-modal__input" />
               </div>
               <button class="log-in-modal__button">Отправить</button>
            </form>
            <div class="log-in-modal__go-sign-up">
               <p class="log-in-modal__i-have-acc">У меня уже есть аккаунт</p>
            </div>
            <div class="close-modal-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                     <path d="M1 15L15 1M15 15L1 1" stroke="black" stroke-width="2" stroke-linecap="round" />
                  </svg>
               </div>
         </div>
        </form>


        <br>
        <br>
        <br>
        <br>
        <?php echo do_shortcode( '[idehweb_lwp type="reg"]' ); ?>
    </section>
<?php
get_footer();
?>