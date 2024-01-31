
<?php
/*
Template Name: cabinet
*/
?>








<?php
get_header();
?>


<section class="cabinet-main-section">
         <div class="bread-crumbs">
            <p><a href="index.html">Главная</a></p>
            <p>/</p>
            <p class="grey-bread-crumbs">Личный кабинет</p>
         </div>
         <h1 class="h1-no-main-page text-gradient cabinet-title">Личный кабинет</h1>
         <main class="cabinet-content-container text-14-500-left-lato">
            <div class="user-data-cabinet">
               <div class="user-title-cabinet mons-28-700">Ваши данные</div>
               <div class="user-data-cabinet__discription">
                  <div>
                     <p class="user-data-cabinet__data-title opacity">Ваше имя</p>
                     <p class="user-data-cabinet__data-value">Влад</p>
                  </div>
                  <div>
                     <p class="user-data-cabinet__data-title opacity">Номер телефона</p>
                     <p class="user-data-cabinet__data-value">8 902 510 54 73</p>
                  </div>
                  <div>
                     <p class="user-data-cabinet__data-title opacity">Способ оплаты</p>
                     <p class="user-data-cabinet__data-value">Наличные</p>
                  </div>
               </div>
               <div class="user-data-cabinet__buttons-zone">
                  <div class="user-data-cabinet__btn-edit">Редактировать</div>
                  <div class="user-data-cabinet__btn-exit">Выйти</div>
               </div>
            </div>
            <!-- <div class="cabinet-verification-container text-14-500-left-lato"> -->
            <div class="cabinet-go-check">
               <div class="cabinet-go-check__verif-info">
                  <p class="cabinet-go-check__verif-title mons-28-700">Пройдите верификацию</p>
                  <p class="cabinet-go-check__verif-subtitle"><span class="phone-verif-cabinet">8 902 510 54 73</span> ваш номер телефона?</p>
               </div>
               <div class="cabinet-go-check__buttons-zone">
                  <div class="cabinet-go-check__btn-1">Да, всё верно</div>
                  <div class="cabinet-go-check__btn-2">Ввести другой</div>
                  <div class="cabinet-go-check__btn-3">
                     <img src="assets/content/gosuslugi.png" alt="" />
                     <p>Госулуги</p>
                  </div>
                  <div class="cabinet-go-check__btn-4">
                     <img src="assets/icon/sber.svg" alt="" />
                     <p>ID</p>
                  </div>
                  <div class="cabinet-go-check__btn-5">
                     <img src="assets/content/tinkoff.png" alt="" />
                     <p>ID</p>
                  </div>
               </div>
               <img class="image-blue-check-cabinet" src="assets/content/image-blue-check-cabinet.png" alt="" />
            </div>
            <div class="cabinet-orders mons-28-700">Заказы</div>
            <!-- </div> -->
         </main>
      </section>

<?php
get_footer();
?>