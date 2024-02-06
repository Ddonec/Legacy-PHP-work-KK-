

<?php
/*
Template Name: catalog-child
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
            <p class="grey-bread-crumbs">Развлечения для детей</p>
         </div>
         <div class="title-of-section-news-page">
<h1 class="text-gradient"><?php the_field('zagolovok-catalog-child-page') ?></h1>
         </div>
         <div class="kids-dosug-catalog-child-page-container winter-status">
            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g2.png" alt="" />
               <p class="text-18-500">Каток</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g1.svg" alt="" />
               <p class="text-18-500">Электромобили</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g2.png" alt="" />
               <p class="text-18-500">Зимняя горка</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g2.png" alt="" />
               <p class="text-18-500">Тюбинг</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g2.png" alt="" />
               <p class="text-18-500">Лыжи</p>
            </div>

         </div>

         <div class="kids-dosug-catalog-child-page-container summer-status">
            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g2.png" alt="" />
               <p class="text-18-500">Зорбинг</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g8.png" alt="" />
               <p class="text-18-500">Лабиринт</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g9.png" alt="" />
               <p class="text-18-500">Спортивные батуты</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g1.svg" alt="" />
               <p class="text-18-500">Электромобили</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g3.png" alt="" />
               <p class="text-18-500">Лодочки</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g4.svg" alt="" />
               <p class="text-18-500">Лодочная станция</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g5.png" alt="" />
               <p class="text-18-500">Карусель</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g6.png" alt="" />
               <p class="text-18-500">Паровозик</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g7.png" alt="" />
               <p class="text-18-500">Веревочный парк</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g8.png" alt="" />
               <p class="text-18-500">Лабиринт</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g9.png" alt="" />
               <p class="text-18-500">Спортивные батуты</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g10.png" alt="" />
               <p class="text-18-500">Батуты</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g2.png" alt="" />
               <p class="text-18-500">Зорбинг</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g8.png" alt="" />
               <p class="text-18-500">Лабиринт</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g9.png" alt="" />
               <p class="text-18-500">Спортивные батуты</p>
            </div>

            <div class="child-game-card-cataloc-child-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/g10.png" alt="" />
               <p class="text-18-500">Надувной парк</p>
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
                      <!-- <input class="input-in-news-p-cont i-n-p-c-name" type="text" placeholder="Ваше имя" />
                      <input class="input-in-news-p-cont i-n-p-c-email" type="text" placeholder="Номер телефона" />
                      <div class="send-btn-news-sub text-18-500 pointer">Отправить</div> -->
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