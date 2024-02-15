
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
                  <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-update-1.svg" alt="" />
                  <div>
                     <h4 class="h4-about-us-cont"><?php the_field('make-child-fun-6_kartochek_zagolovok_2') ?></h4>
                     <div class="p-about-us-cont"><?php the_field('make-child-fun-6_kartochek_opisanie_2') ?></div>
                  </div>
               </div>
               <div>
                  <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-update-2.svg" alt="" />
                  <div>
                     <h4 class="h4-about-us-cont"><?php the_field('make-child-fun-6_kartochek_zagolovok_3') ?></h4>
                     <div class="p-about-us-cont"><?php the_field('make-child-fun-6_kartochek_opisanie_3') ?></div>
                  </div>
               </div>
               <div>
                  <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-update-3.svg" alt="" />
                  <div>
                     <h4 class="h4-about-us-cont"><?php the_field('make-child-fun-6_kartochek_zagolovok_4') ?></h4>
                     <div class="p-about-us-cont"><?php the_field('make-child-fun-6_kartochek_opisanie_4') ?></div>
                  </div>
               </div>
               <div>
                  <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-update-4.svg" alt="" />
                  <div>
                     <h4 class="h4-about-us-cont"><?php the_field('make-child-fun-6_kartochek_zagolovok_5') ?></h4>
                     <div class="p-about-us-cont"><?php the_field('make-child-fun-6_kartochek_opisanie_5') ?></div>
                  </div>
               </div>
               <div>
                  <img class="image-frame-about-card-p" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Frame-about-update-5.svg" alt="" />
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

            <?php
$array = get_field('park');
if ($array) {
    $counter = 1; // начинаем счетчик с 1
    foreach ($array as $i) {
        $image_class = 'avalible-park__image-' . $counter; // создаем уникальный класс
?>
<style>
.<?php echo $image_class; ?> {
   background: url(<?php echo $i['foto_parka_1']; ?>), lightgray 50% / cover no-repeat;
   position: relative;
    height: 200px;
    border-radius: 20px 20px 0px 0px;
    background-size: cover;
    background-position: center;
    top: 20px;
    z-index: -1;
}
</style>
<div class="avalible-park__catd">
    <div class="<?php echo $image_class; ?>"></div>
    <div class="avalible-park__menu">
        <div class="avalible-park__title-text">
            <p class="text-bold-600"><?php echo $i['nazvanie_parka_1']; ?></p>
            <p class="opacity"><?php echo $i['adres_parka_1']; ?></p>
        </div>
        <p class="avalible-park__name-of-park"><?php echo $i['vid_aktivnosti_parka_1']; ?></p>
        <div class="avalible-park__options">
            <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/avalible-park__1.svg" alt="" /><?php echo $i['atribut_parka_1_1']; ?></div>
            <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/avalible-park__2.svg" alt="" /><?php echo $i['atribut_parka_1_2']; ?></div>
            <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/avalible-park__3.svg" alt="" /><?php echo $i['atribut_parka_1_3']; ?></div>
            <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/avalible-park__4.svg" alt="" /><?php echo $i['atribut_parka_1_4']; ?></div>
        </div>
        <div onclick="openPopupReserve()" class="avalible-park__button pointer"><?php the_field('knopka_broni_paka_1') ?></div>
    </div>
</div>
<?php
        $counter++; // увеличиваем счетчик на 1 для следующего элемента
    }
}
?>

            </div>
         </section>
         <section class="four-section-make-fun">
            <div class="make-child-fun-feedback-title">Отзывы</div>
            <div class="feedback-absolute-pseudo-container">
               <div class="feedback-overflov-pseudo-container">
                  <ul class="feedback-containers-zone-franchise">
                     <?php
$arr = get_field('otzyv');
if ($arr) {
    foreach ($arr as $item) {
?>
                     <li class="feedback-container-franchise">
                        <div class="feedback__title"><?php echo $item['zagolovok_otzyva']; ?></div>
                        <div class="feedback__profile">
                           <img class="feedback__avatar" src="<?php echo $item['foto_cheloveka']; ?>" /><span><?php echo $item['imya_cheloveka']; ?></span> <img class="feedback__star" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/star.svg" alt="" />
                           <span><?php echo $item['czifra_oczenki']; ?></span>
                        </div>
                        <div class="feedback__main-discription">
                        <?php echo $item['tekst_otzyva']; ?>
                        </div>
                        <div class="">
                           <a target="_blank" class="feedback__show-more-link" href="<?php echo $item['ssylka_na_otzyv']; ?>"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/chevron-down.svg" alt="" /> <span>Читать отзыв полностью</span></div></a>
                        <div class="feedback__opacity"><?php echo $item['data_otzyva']; ?></div>
                     </li>
<?php
    }
}
?>

                  </ul>
               </div>



               <div class="franchise-arrows-feedback">
                  <div class="arrows-feedback-rignt"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-right.svg" alt="" /></div>
                  <div class="arrows-feedback-left arrows-feedback-opacity"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-left.svg" alt="" /></div>
               </div>

                     <script>

document.addEventListener("DOMContentLoaded", function() {
  const scrollWrapper = document.querySelector(".feedback-overflov-pseudo-container");
  const nextBtn = document.querySelector(".arrows-feedback-rignt");
  const prevBtn = document.querySelector(".arrows-feedback-left");

  nextBtn.addEventListener("click", function() {
    scrollWrapper.scrollBy({ left: 409, behavior: "smooth" });
    console.log("вправо 200");
    updateButtonOpacity();
  });

  prevBtn.addEventListener("click", function() {
    scrollWrapper.scrollBy({ left: -409, behavior: "smooth" });
    console.log("влево 200");
    updateButtonOpacity();
  });

  function updateButtonOpacity() {
    // Проверяем, можно ли скроллить влево
    prevBtn.style.opacity = scrollWrapper.scrollLeft > 0 ? 1 : 0.5;

    // Проверяем, можно ли скроллить вправо
    const maxScrollLeft = scrollWrapper.scrollWidth - scrollWrapper.clientWidth;
    nextBtn.style.opacity = scrollWrapper.scrollLeft < maxScrollLeft ? 1 : 0.5;
  }
  updateButtonOpacity();
});

                     </script>
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