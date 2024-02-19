

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


            <?php
$arr = get_field('kartochki_s_razvlecheniyami_zima', 95);
if ($arr) {
    foreach ($arr as $item) {
?>
        <div class="pointer child-game-card-cataloc-child-page">
            <img src="<?php echo $item['izobradenie_kartochki']; ?>" alt="" />
            <p class="text-in-chill-for-kids-card"><?php echo $item['opisanie_kartochki']; ?></p>
        </div>
<?php
    }
}
?>  

         </div>

         <div class="kids-dosug-catalog-child-page-container summer-status none">

         <?php
$arr = get_field('kartochki_s_razvlecheniyami', 95);
if ($arr) {
    foreach ($arr as $item) {
?>
        <div class="pointer child-game-card-cataloc-child-page">
            <img src="<?php echo $item['izobradenie_kartochki']; ?>" alt="" />
            <p class="text-in-chill-for-kids-card"><?php echo $item['opisanie_kartochki']; ?></p>
        </div>
<?php
    }
}
?>     

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