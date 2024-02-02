<?php
/*
Template Name: news-1
*/
?>


<?php
get_header();
?>

<section class="main-content-news-1-page">
         <div class="bread-crumbs">
            <p><a href="index.html">Главная</a></p>
            <p>/</p>
            <p><a href="#">Лето</a></p>
            <p>/</p>
            <p>Новости</p>
            <p>/</p>
            <p class="grey-bread-crumbs">...</p>
         </div>

         <div class="news-second-page-main-container">
            <div class="social-left-block-news-2-page">
               <a href="#"><div class="telegramm-bg-image-mews-2-page"></div></a>
               <a href="#"><div class="whatsapp-bg-image-mews-2-page"></div></a>
               <a href="#"
                  ><div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/mail-logo-white.svg" alt="email" /></div
               ></a>
            </div>
            <div class="news-1-center-block-info">
               <h1 class="h1-news-1-page"><?php the_field('top_title_news-1') ?></h1>
               <div class="main-photo-of-news-1-page">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/state-main-photo.png" alt="" />
               </div>
               <div class="full-text-news-1-area">
                  <h4 class="text-24-600"><?php the_field('news-1-vtoroj_zagolovok') ?></h4>
                  <p class="text-18-500-left">
                  <?php the_field('news-1-tekst_novosti') ?>
                  </p>
               </div>
               <div class="autor-of-state-news-1-page">
                  <div class="image-user-news-1 text-18-500-left"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/Ellipse1.svg" alt="" /> <?php the_field('news-1-imya_avtora') ?></div>
                  <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/dot-blue.svg" alt="dot" /></div>
                  <div class="text-18-500-left"><?php the_field('news-1-data') ?></div>
               </div>
            </div>
            <aside class="aside-right-block-news-1-page">
               <p class="some-states-news-1-p text-24-600">Похожие статьи</p>
               <div class="aside-right-block-news-1hidden-slide-area">
                  <div class="aside-right-block-news-max-width-area">
                     <div class="sick-cart-news">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img(2).png" alt="" />
                        <div class="text-inside-cart-blog">
                           <p>Электровелосипеды доступны москвичам</p>
                           <span class="truncate-text">
                              Парк моделей превысит 2000 устройств. Городской<br />
                              велосипед рассчитан на 7 км к действующим инициативам по безопасности мы предоставим меры к действующим инициативам по безопасности мы предоставим меры
                        
                           </span>
      
                           <div class="image-user-zone"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/Ellipse1.svg" alt="" /> Савелий Октябрьский</div>
                           <div class="date-in-material-card">15.07.23</div>
                        </div>
                     </div>
      
                     <div class="sick-cart-news">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/img(3).png" alt="" />
                        <div class="text-inside-cart-blog">
                           <p>Кути Катай оснастит самокаты шлемами</p>
                           <span class="truncate-text">
                              В дополнение к действующим инициативам по безопасности мы предоставим меры к действующим инициативам по безопасности мы предоставим меры к действующим инициативам по безопасности мы предоставим меры по защ...
                        
                           </span>
      
                           <div class="image-user-zone"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/Ellipse1(1).svg" alt="" /> Елена Васильева</div>
                           <div class="date-in-material-card">30.06.23</div>
                        </div>
                     </div>

                  </div>
               </div>
            </aside>
         </div>

         <div class="show-more-btn-news text-14-500 pointer">Показать еще</div>
         <div class="subscribe-for-our-news-container">
            <div class="text-sub-block-news-inside">
               <h4 class="main-text-sub-block-news-p-cont text-gradient">Подпишитесь на наши новости</h4>
               <p class="second-text-sub-block-news-p-cont text-20-">И будьте в курсе последних событий проката!</p>
            </div>
            <div class="input-zone-news-p-cont">
               <input class="input-in-news-p-cont i-n-p-c-name" type="text" placeholder="Ваше имя" />
               <input class="input-in-news-p-cont i-n-p-c-email" type="email" placeholder="Электронная почта" />
               <div class="send-btn-news-sub text-18-500 pointer">Отправить</div>
               <img class="convert-img-news-sub" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/convert-yellow.png" alt="mail" />
               <div class="data-agreement-12px">
                     Нажимая кнопку вы принимаете <a href="https://agency-5.ru/soglashenie-ob-obrabotke-personalnyh-dannyh/">Соглашение об обработке персональных данных</a>
               </div>
            </div>
         </div>
      </section>


<?php
get_footer();
?>