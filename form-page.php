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
        <div classs="abc">
            <?php echo do_shortcode( '[contact-form-7 id="9f34528" title="Франшиза"]' ); ?>
        </div>

<style>
    .wpcf7.js .wpcf7-form {
   flex-direction: column;
}
.wpcf7.js .form50 {
   width: 100%;
}

.wpcf7.js p {
   display: flex;
   flex-wrap: wrap;
   gap: 12px;
   width: 861px;
   z-index: 5;
}
.wpcf7.js p > label {
   width: 49%;
}
.wpcf7.js p > label input{
   width: 100%;
}
.wpcf7.js label + br {
   display: none;
}
.wpcf7.js p > label:nth-child(9) {
   width: 100%;
   position: relative;
}
.wpcf7.js .form100 {
   display: flex;
   height: 100px;
   padding: 14px 20px 16px 30px;
   align-items: flex-start;
   gap: 8px;
   border-radius: 15px;
   border: 1.5px solid rgba(51, 51, 51, 0.5);
   background: #f4f5fd;
   width: 100%;
   font-family: lato, sans-serif;
   border: 1.5px solid #333;
   opacity: 0.5;
   background: white;
}
.wpcf7.js .form50{
    border-radius:15px;
}
.wpcf7-form-control.wpcf7-submit.franchise-submitt{
    width: 100%;
}
#your-checkbox-id label:after{
    content: '';
}
#your-checkbox-id label input {
    display: none;
    width: 100%;
}

.wpcf7.js .wpcf7-list-item{
    display:flex;
    
}
.wpcf7.js .wpcf7-form-control-wrap{
width:100%;    
cursor: pointer;
}
.wpcf7.js .wpcf7-list-item.first.last{
margin: 0;}


#your-checkbox-id label {
   display: flex;
   justify-content: space-between;
   width: 100%;
   height: 46px;
   border: 1px solid #ffc93a;
   align-items: center;
   border-radius: 23px;
   cursor: pointer;
}
.bcd {
   width: 50%;
   display: flex;
   justify-content: center;
   align-items: center;
}

.toggle-input {
   display: none;
   width: 100%;
}

.toggle-slider {
   position: absolute;
   top: 50%;
   left: 0;
   width: 49%;
   height: 40px;
   background-color: #ffc93a;
   border-radius: 20px;
   transition: 0.3s;
   z-index: -1;
   transform: translateY(-50%);
   margin-left: 1%;
}

#your-checkbox-id label input:checked + .toggle-slider {
   transform: translate(100%, -50%);
}





/* login modal  */


</style>

<script>

document.getElementById('your-checkbox-id').querySelector('label').innerHTML = '<div class="bcd text-14-500-left-lato-left">Напишите на почту</div><div class="bcd text-14-500-left-lato-left">Позвоните мне</div><input type="checkbox" name="checkbox-142[]" value="Позвоните мне"><div class="toggle-slider"></div>';

</script>
        
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




        <br>
        <br>
        <br>
        <br>
        <button id="openModalButton">Открыть</button>


 
         <?php echo do_shortcode( '[idehweb_lwp type="log"]' ); ?>



    </section>
<?php
get_footer();
?>