
<?php
/*
Template Name: make-child-fun
*/
?>

<?php
get_header();
?>


<main class="main-section-make-fun-page">
         <section class="first-section-make-fun">
            <div class="bread-crumbs">
               <p><a href="<?php echo get_option('home'); ?>">Главная</a></p>
               <p>/</p>
               <p><a href="#">Лето</a></p>
               <p>/</p>
               <p class="grey-bread-crumbs">Новости</p>
               <p>/</p>
               <p class="grey-bread-crumbs">...</p>
            </div>
            <div class="title-of-section-news-page">
               <h1 class="h1-rope-park-page text-gradient"><?php the_field('make-child-fun-zagolovok_straniczy') ?></h1>
            </div>
            <div class="first-2-blocks-make-fun">
               <div class="make-fun__first-text">
               <?php the_field('make-child-fun-levyj_tekst') ?>
               </div>
               <div class="make-fun__second-text">
               <?php the_field('make-child-fun-pravyj_tekst') ?>
               </div>
            </div>
            <div class="birthday-cards-container">
               <div class="birthday-kid-card">
                  <img class="birthday-kid-card__icon" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/kids-holidays-icon-1.svg" alt="" />
                  <p><?php the_field('make-child-fun-4_kartochki_opisanie_1') ?></p>
               </div>

               <div class="birthday-kid-card">
                  <img class="birthday-kid-card__icon" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/kids-holidays-icon-2.svg" alt="" />
                  <p><?php the_field('make-child-fun-4_kartochki_opisanie_2') ?></p>
               </div>

               <div class="birthday-kid-card">
                  <img class="birthday-kid-card__icon" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/kids-holidays-icon-3.svg" alt="" />
                  <p><?php the_field('make-child-fun-4_kartochki_opisanie_3') ?></p>
               </div>

               <div class="birthday-kid-card">
                  <img class="birthday-kid-card__icon" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/kids-holidays-icon-4.svg" alt="" />
                  <p><?php the_field('make-child-fun-4_kartochki_opisanie_4') ?></p>
               </div>
            </div>
         </section>
         <section class="second-section-make-fun">
            <div class="photos-rope-perk-container">
               <h4 class="title-of-block-small-text-28-700-mons"><?php the_field('make-child-fun-zagolovok_sekczii_2') ?></h4>
               <div class="photos-of-rope-park-overflow">
                  <div class="photos-of-rope-park">
                     <div class="photos-of-rope-park__big-layout photos-make-fun__img1"></div>
                     <div class="photos-of-rope-park__small-layout photos-make-fun__img2"></div>
                     <div class="photos-of-rope-park__small-layout photos-make-fun__img3"></div>
                     <div class="photos-of-rope-park__small-layout photos-make-fun__img4"></div>
                     <div class="photos-of-rope-park__big-layout photos-make-fun__img5"></div>
                     <div class="photos-of-rope-park__small-layout photos-make-fun__img6"></div>
                  </div>
               </div>
            </div>

            <div class="our-values-about-us-page-container">
               <div>
                  <h3 class="main-text-in-card-about-page text-gradient"><?php the_field('make-child-fun-6_kartochek_zagolovok_1') ?></h3>

                  <p class="disc-why-our-trust"><?php the_field('make-child-fun-6_kartochek_opisanie_1') ?></p>
               </div>
               <div>
                  <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-1.svg" alt="" />
                  <div>
                     <h4 class="h4-about-us-cont"><?php the_field('make-child-fun-6_kartochek_zagolovok_2') ?></h4>
                     <div class="p-about-us-cont"><?php the_field('make-child-fun-6_kartochek_opisanie_2') ?></div>
                  </div>
               </div>
               <div>
                  <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-2.svg" alt="" />
                  <div>
                     <h4 class="h4-about-us-cont"><?php the_field('make-child-fun-6_kartochek_zagolovok_3') ?></h4>
                     <div class="p-about-us-cont"><?php the_field('make-child-fun-6_kartochek_opisanie_3') ?></div>
                  </div>
               </div>
               <div>
                  <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-3.svg" alt="" />
                  <div>
                     <h4 class="h4-about-us-cont"><?php the_field('make-child-fun-6_kartochek_zagolovok_4') ?></h4>
                     <div class="p-about-us-cont"><?php the_field('make-child-fun-6_kartochek_opisanie_4') ?></div>
                  </div>
               </div>
               <div>
                  <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-4.svg" alt="" />
                  <div>
                     <h4 class="h4-about-us-cont"><?php the_field('make-child-fun-6_kartochek_zagolovok_5') ?></h4>
                     <div class="p-about-us-cont"><?php the_field('make-child-fun-6_kartochek_opisanie_5') ?></div>
                  </div>
               </div>
               <div>
                  <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-5.svg" alt="" />
                  <div>
                     <h4 class="h4-about-us-cont"><?php the_field('make-child-fun-6_kartochek_zagolovok_6') ?></h4>
                     <div class="p-about-us-cont"><?php the_field('make-child-fun-6_kartochek_opisanie_6') ?></div>
                  </div>
               </div>
            </div>
         </section>
         <section class="third-section-make-fun">
            <h4 class="title-of-block-small-text-28-700-mons"><?php the_field('make-child-fun-zagolovok_3_sekczii') ?></h4>
            <div class="avalible-park-make-fun-container">
               <div class="avalible-park__catd">
                  <div class="avalible-park__image-1"></div>

                  <div class="avalible-park__menu">
                     <div class="avalible-park__title-text">
                        <p>Наташинский парк (Гуливер)</p>
                        <p class="opacity">МО, Люберцы, ул. Митрофанова, 22,</p>
                     </div>
                     <p class="avalible-park__name-of-park">Школа супергероев</p>
                     <div class="avalible-park__options">
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/avalible-park__1.svg" alt="" />Терраса для праздника 3 часа</div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/avalible-park__2.svg" alt="" />Минимум 10 человек</div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/avalible-park__3.svg" alt="" />от 1 000₽/человек</div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/avalible-park__4.svg" alt="" />Аниматоры</div>
                     </div>
                     <div class="avalible-park__button">Забронировать праздник</div>
                  </div>
               </div>

               <div class="avalible-park__catd">
                  <div class="avalible-park__image-2"></div>

                  <div class="avalible-park__menu">
                     <div class="avalible-park__title-text">
                        <p>Пехорка</p>
                        <p class="opacity">МО, Балашиха, парк Пехорка</p>
                     </div>
                     <p class="avalible-park__name-of-park">Школа супергероев</p>
                     <div class="avalible-park__options">
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/avalible-park__1.svg" alt="" />Комната для праздника 3 часа</div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/avalible-park__2.svg" alt="" />Минимум 7 человек</div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/avalible-park__3.svg" alt="" />от 2 000₽/человек</div>
                        <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/avalible-park__4.svg" alt="" />Аниматоры</div>
                     </div>
                     <div class="avalible-park__button">Забронировать праздник</div>
                  </div>
               </div>
            </div>
         </section>
         <section class="four-section-make-fun">
            <div class="feedback-absolute-pseudo-container">
               <div class="feedback-overflov-pseudo-container">
                  <ul class="feedback-containers-zone-franchise">
                     <li class="feedback-container-franchise">
                        <div class="feedback__title">Масса удовольствия, Персонал был очень вежлив.</div>
                        <div class="feedback__profile">
                           <img class="feedback__avatar" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/manager-photo.svg" alt="" /><span>Никита Мельников</span> <img class="feedback__star" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/star.svg" alt="" />
                           <span>5</span>
                        </div>
                        <div class="feedback__main-discription">
                           Брали с другом велики на выходной день. Масса удовольствия! Персонал помог определиться с велосипедом и был вежлив. Удобно и недорого! Обязательно порекомендую этот прокат
                           своим знакомым и друзьям. Большое спасибо!
                        </div>
                        <div class="feedback__show-more-link"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/chevron-down.svg" alt="" /> <span>Читать отзыв полностью</span></div>
                        <div class="feedback__opacity">25.10.23</div>
                     </li>

                     <li class="feedback-container-franchise">
                        <div class="feedback__title">Масса удовольствия, Персонал был очень вежлив.</div>
                        <div class="feedback__profile">
                           <img class="feedback__avatar" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/avatar-1.svg" alt="" /><span>Мария Зворыкина</span> <img class="feedback__star" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/star.svg" alt="" />
                           <span>5</span>
                        </div>
                        <div class="feedback__main-discription">
                           Чудесное место для отдыха со своей семьёй. Широкий ассортимент услуг: детские машинки, велосипеды, аттракционы и так далее. Очень вежливый персонал и приятная атмосфера.
                           Настоятельно рекомендую посетить! Скрыть
                        </div>
                        <div class="feedback__show-more-link"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/chevron-down.svg" alt="" /> <span>Читать отзыв полностью</span></div>
                        <div class="feedback__opacity">23.10.23</div>
                     </li>

                     <li class="feedback-container-franchise">
                        <div class="feedback__title">Масса удовольствия, Персонал был очень вежлив.</div>
                        <div class="feedback__profile">
                           <img class="feedback__avatar" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/avatar-2.svg" alt="" /><span>Андрей Потанин</span> <img class="feedback__star" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/star.svg" alt="" />
                           <span>5</span>
                        </div>
                        <div class="feedback__main-discription">
                           Великолепное место для отдыха!!! Отзывчивый и вежливый персонал, который при любых вопросов с радостью готов ответить и помочь. Большое количество разной техники, точно
                           найдете что-то на свое предпочтение, также много аттракционов
                        </div>
                        <div class="feedback__show-more-link"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/chevron-down.svg" alt="" /> <span>Читать отзыв полностью</span></div>
                        <div class="feedback__opacity">17.10.23</div>
                     </li>
                  </ul>
               </div>
               <div class="franchise-arrows-feedback">
                  <div class="arrows-feedback-rignt"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-right.svg" alt="" /></div>
                  <div class="arrows-feedback-left arrows-feedback-opacity"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-left.svg" alt="" /></div>
               </div>
            </div>

            <div class="call-back-form-container-overflow-container-default">
                <div class="call-back-form-container-franchise">
                   <div class="text-sub-block-news-inside">
                      <h4 class="main-text-sub-block-news-p-cont text-gradient">Давайте созвонимся!</h4>
                      <p class="second-text-sub-block-news-p-cont text-18-500-left">Наши специалисты ответят на все ваши вопросы</p>
                   </div>
                   <div class="input-zone-news-p-cont">
                      <input class="input-in-news-p-cont i-n-p-c-name" type="text" placeholder="Ваше имя" />
                      <input class="input-in-news-p-cont i-n-p-c-email" type="text" placeholder="Номер телефона" />
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
      </main>

<?php
get_footer();
?>