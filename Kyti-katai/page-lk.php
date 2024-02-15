
<?php
/*
Template Name: cabinet
*/
?>








<?php
get_header();
?>

<?php if (is_user_logged_in()): ?>
<section class="cabinet-main-section">
    <?php woocommerce_breadcrumb(); ?>
    <?php
    $curr_user = wp_get_current_user();
    $curr_user_phone = get_user_meta( $curr_user->ID, 'phone_number', true );
    ?>
         <h1 class="h1-no-main-page text-gradient cabinet-title"><?php the_field('zagolovok_straniczy') ?></h1>
         <main class="cabinet-content-container text-14-500-left-lato">
            <div class="user-data-cabinet">
               <div class="user-title-cabinet mons-28-700"><?php the_field('lichnye_dannye') ?></div>
               <div class="user-data-cabinet__discription">
                  <div>
                     <p class="user-data-cabinet__data-title opacity">Ваше имя</p>
                     <p class="user-data-cabinet__data-value"><?php echo $curr_user->data->display_name; ?></p>
                  </div>
                  <div>
                     <p class="user-data-cabinet__data-title opacity">Номер телефона</p>
                     <p class="user-data-cabinet__data-value"><?php echo $curr_user_phone; ?></p>
                  </div>
                  <div>
                     <p class="user-data-cabinet__data-title opacity">Способ оплаты</p>
                     <p class="user-data-cabinet__data-value">Наличные</p>
                  </div>
               </div>
               <div class="user-data-cabinet__buttons-zone">
                  <div class="user-data-cabinet__btn-edit none">Редактировать</div>
                  <div class="user-data-cabinet__btn-exit"><a href="<?php echo wp_logout_url( get_permalink() ) ?>">Выйти</a></div>
               </div>
            </div>
            <!-- <div class="cabinet-verification-container text-14-500-left-lato"> -->
            <div class="cabinet-go-check none">
               <div class="cabinet-go-check__verif-info">
                  <p class="cabinet-go-check__verif-title mons-28-700"><?php the_field('verefikacziya') ?></p>
                  <p class="cabinet-go-check__verif-subtitle"><span class="phone-verif-cabinet"><?php echo $curr_user_phone; ?></span> ваш номер телефона?</p>
               </div>
               <div class="cabinet-go-check__buttons-zone">
                  <div class="cabinet-go-check__btn-1">Да, всё верно</div>
                  <div class="cabinet-go-check__btn-2">Ввести другой</div>
                  <div class="cabinet-go-check__btn-3">
                     <img src="<?php echo esc_url(get_field('gosuslugi')); ?>" alt="" />
                     <p>Госулуги</p>
                  </div>
                  <div class="cabinet-go-check__btn-4">
                     <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/sber.svg" alt="" />
                     <p>ID</p>
                  </div>
                  <div class="cabinet-go-check__btn-5">
                     <img src="<?php echo esc_url(get_field('tinkoff')); ?>" alt="" />
                     <p>ID</p>
                  </div>
               </div>
               <img class="image-blue-check-cabinet" src="<?php echo esc_url(get_field('galochka_logo')); ?>" alt="" />
            </div>
            <div class="cabinet-orders mons-28-700 none"><?php the_field('orders') ?></div>
            <!-- </div> -->
         </main>
      </section>
<?php else: ?>
    <?php echo do_shortcode( '[idehweb_lwp]' ); ?>

<?php endif; ?>
<?php
get_footer();
?>r