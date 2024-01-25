








<footer>
         <div class="images-footer">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Group3.svg" alt="" />
            <div class="apps-links-footer-1">
               <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/appstore.png" alt="" />
               <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/googleplay.png" alt="" />
            </div>

            <div class="social-circles-footer-index">
               <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/socials.svg" alt="" />
               <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/tg.svg" alt="" />
            </div>
         </div>
         <div class="columns-footer">
            <div class="row-footer-1">
               <div class="title-list-1 poinetr">Компания</div>
               <ul>
                  <li class="pointer"><a href="<?php echo get_option('home'); ?>/item">Техника</a></li>
                  <li class="pointer"><a href="<?php echo get_option('home'); ?>/find">Мы в парках</a></li>
                  <li class="pointer"><a href="<?php echo get_option('home'); ?>/about-us">О нас</a></li>
                  <li class="pointer"><a href="<?php echo get_option('home'); ?>/news-1">Новости</a></li>
                  <li class="pointer"><a href="<?php echo get_option('home'); ?>/charity">Благотворительность</a></li>
                  <li class="pointer"><a href="<?php echo get_option('home'); ?>/work">Работа у нас</a></li>
               </ul>
            </div>

            <div class="row-footer-1">
               <div class="title-list-1 pointer">Сервис</div>
               <ul>
                  <li class="pointer"><a href="<?php echo get_option('home'); ?>/repair">Ремонт техники</a></li>
                  <li class="pointer">Сезонное хранение</li>
                  <li class="pointer">Велотур</li>
                  <li class="pointer"><a href="<?php echo get_option('home'); ?>/corporative">Корп. клиентам</a></li>
                  <li class="pointer"><a href="<?php echo get_option('home'); ?>/franchise">Франшиза</a></li>

               </ul>
            </div>

            <div class="row-footer-2">
               <div class="title-list-1 pointer">Документация</div>
               <ul>
                  <li class="pointer"><a class="white-text-section" href="<?php echo get_option('home'); ?>/rules">Правила проката</a></li>
                  <li class="pointer"><a class="white-text-section" href="<?php echo get_option('home'); ?>/oferta">Договор оферта</a></li>
                  <li class="pointer"><a class="white-text-section" href="<?php echo get_option('home'); ?>/privacy-politic">Политика конфиденциальности</a></li>
                  <li class="pointer"><a class="white-text-section" href="<?php echo get_option('home'); ?>/app-agreement">Пользовательское соглашение для мобильного приложения</a></li>
               </ul>
            </div>
            <div class="apps-links-footer-">
               <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/appstore.png" alt="" />
               <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/googleplay.png" alt="" />
            </div>
            <div class="row-footer-1">
               <a href="<?php echo get_option('home'); ?>/contacts"><div class="title-list-1">Контакты</div></a>
               <ul>
                  <li>
                     <span class="yellow-number-footer pointer"><a id="yellow-tel-numb-footer" href="tel:+79254297029">+7(925) 429-70-29</a></span>
                  </li>
                  <li class="pointer"><a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></li>
               </ul>
               <div class="social-media-footer">
                  <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/socials.svg" alt="" />
                  <img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/tg.svg" alt="" />
               </div>
            </div>
         </div>
         <div class="footer-line"></div>
         <div class="payments-metod">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/mir.svg" alt="" />
            <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/mastercard.svg" alt="" />
            <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/visa.svg" alt="" />
         </div>
      </footer>
   </body>
</html>











  <?php  wp_footer()?>

  </html>
