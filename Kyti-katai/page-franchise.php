
<?php
/*
Template Name: franchise
*/
?>

<?php
get_header();
?>

<style>
   .comand-card-franchise {
   background-image: url(<?php the_field('chlen_komandy_1'); ?>);
}
.comand-card-franchise-2 {
   background-image: url(<?php the_field('chlen_komandy_2'); ?>);
}
.comand-card-franchise-3 {
   background-image: url(<?php the_field('chlen_komandy_3'); ?>);
}
.comand-card-franchise-4 {
   background-image: url(<?php the_field('chlen_komandy_4'); ?>);
}
.comand-card-franchise-5 {
   background-image: url(<?php the_field('chlen_komandy_5'); ?>);
}
.comand-card-franchise-6 {
   background-image: url(<?php the_field('chlen_komandy_6'); ?>);
}
</style>

<section class="first-section">
    <div class="bacground-image-main-page-first-section-franchese">
        <div class="absolute-peoples-container-f-s-frahciese">
            <div class="absolute-fs-container-left-frahciese"></div>
            <div class="absolute-fs-container-right-frahciese"></div>
        </div>
        <div class="text-area-first-section-1920">
            <h1 class="franchese-h1"><?php the_field('franchise-bolshoj_zagolovok_straniczy') ?></h1>
            <div class="last-text-first-section"><?php the_field('franchise-podzagolovok_bolshogo') ?></div>
            <div class="buttons-fs-frahciese-page">
                <button class="download-fin-model-btn class-to-switch-season-btn" onclick="openPopupFranchise()">Получить финансовую модель</button>
                <a href="https://forms.gle/bhaVfoQnFYgQi2v36" target="_blank"
                ><button class="download-prez-btn class-to-switch-season-btn">Получить презентацию франшизы <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/arrow-down-to-line.svg" alt="" /></button
                    ></a>
            </div>
        </div>
    </div>
    <ul class="blue-list-frahciese">
        <div class="burger-blue-list-franchese none" onclick="openPopupBurgerBottom()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <li><a href="#format-of-service-franchise-page"><?php the_field('franchise-sinyaya_navigacziya_1') ?></a></li>
        <li><a href="#they-chose-us"><?php the_field('franchise-sinyaya_navigacziya_2') ?></a></li>
        <li><a href="#finnodel-section"><?php the_field('franchise-sinyaya_navigacziya_3') ?></a></li>
        <li><a href="#our-team-franchise"><?php the_field('franchise-sinyaya_navigacziya_4') ?></a></li>
        <li><a href="#contacts-franchise-page"><?php the_field('franchise-sinyaya_navigacziya_5') ?></a></li>
        <li onclick="openPopupFranchise()" class="b-l-f-active"><?php the_field('franchise-sinyaya_navigacziya_6') ?></li>
    </ul>
    <div class="cunter-container-left-margin-francheise-page">
        <div class="overflov-block-advantages-cards-frahciese-page scroll-container-js">
            <div class="max-width-contaimer-owerflov-inside-franchaise">
                <div class="advantage-card-frahciese-page">
                    <div class="advantage-card__first-text">
                        <div class="first-text__flex">
                            <?php the_field('franchise-3_kartochki_nazvanie_1') ?>
                        </div>
                        <p class="first-text__grey-text-14px"><?php the_field('franchise-3_kartochki_podnazvanie_1') ?></p>
                    </div>
                    <div class="advantage-card__bottom-text"><?php the_field('franchise-3_kartochki_opisanie_1') ?></div>
                    <img class="absolut-image-z-coin" src="<?php echo esc_url(get_field('logotip_perevogo_slajdera_kartochka_1')); ?>" alt="" />
                </div>

                <div class="advantage-card-frahciese-page">
                    <div class="advantage-card__first-text">
                        <div class="first-text__flex">
                            <p class="first-text__main-text"><?php the_field('franchise-3_kartochki_nazvanie_2') ?></p>
                        </div>
                        <p class="first-text__grey-text-14px"><?php the_field('franchise-3_kartochki_podnazvanie_2') ?></p>
                    </div>
                    <div class="advantage-card__bottom-text">
                        <?php the_field('franchise-3_kartochki_opisanie_2') ?>
                    </div>
                    <img class="absolut-image-gold-calendar" src="<?php echo esc_url(get_field('logotip_perevogo_slajdera_kartochka_2')); ?>" alt="" />
                </div>

                <div class="advantage-card-frahciese-page">
                    <div class="advantage-card__first-text">
                        <div class="first-text__flex">
                            <p class="first-text__main-text"><?php the_field('franchise-3_kartochki_nazvanie_3') ?></p>
                        </div>
                        <p class="first-text__grey-text-14px"><?php the_field('franchise-3_kartochki_podnazvanie_3') ?></p>
                    </div>
                    <div class="advantage-card__bottom-text">
                        <?php the_field('franchise-3_kartochki_opisanie_3') ?>
                    </div>
                    <img class="absolut-image-gold-calendar" src="<?php echo esc_url(get_field('logotip_perevogo_slajdera_kartochka_3')); ?>" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<section id="format-of-service-franchise-page" class="format-of-service-franchise-page">
    <h3 class="title-of-section-gradient text-gradient"><?php the_field('franchise-zagolovok_vtoroj_sekczii') ?></h3>
    <div class="vacancies-list-container-vacancy-page">
        <div class="overflow-nav-vacancies-container">
            <div class="nav-menu-of-vacancies-work-in-page">
                <div class="text-18-500">ВДНХ</div>
                <div class="text-18-500 opacity">Парк Перхорка</div>
                <div class="text-18-500 opacity">Городской парк Ивантеевки</div>
            </div>
        </div>
        <div class="discription-area-of-format-franchise-page">
            <div class="format__numbers-and-lines">
                <div>
                    <div class="format__number"><?php the_field('franchise-sinyaya_czifra_1') ?></div>
                    <div class="format__number-title"><?php the_field('franchise-opisanie_k_sinej_czifre_1') ?></div>
                </div>
                <div></div>
                <div>
                    <div class="format__number"><?php the_field('franchise-sinyaya_czifra_2') ?></div>
                    <div class="format__number-title"><?php the_field('franchise-opisanie_k_sinej_czifre_2') ?></div>
                </div>
                <div></div>
                <div>
                    <div class="format__number"><?php the_field('franchise-sinyaya_czifra_3') ?></div>
                    <div class="format__number-title"><?php the_field('franchise-opisanie_k_sinej_czifre_3') ?></div>
                </div>
            </div>
            <div class="format__who-is">
                <div class="who-is__title">
                    <?php the_field('franchise-v_belom_pole_tekst') ?>
                </div>
                <div class="who-is__person-card">
                    <img class="person-card__photo" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/manager-photo.svg" alt="" />
                    <div class="person-card__discription">
                        <p><?php the_field('franchise-imya_sotrudnika') ?></p>
                        <p class="person-card__discription_opacity"><?php the_field('franchise-kakaya_to_dolzhnost') ?></p>
                    </div>
                </div>
            </div>
            <div class="format__pictures scroll-container-js">
                <div class="format__pictures_max-width">
                    <div class="format__pictures_first"></div>
                    <div class="format__pictures_second"></div>
                    <div class="format__pictures_third"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="fill-for-hand-no-hide-franchise">
        <div class="mobile-app-container-franchise">
            <div class="column-container-in-app-banner-franchise">
                <div class="title-in-app-banner-franchise"><span class="text-gradient"><?php the_field('franchise-prilodenie_banner_tajtl') ?></div>
                <div class="discription-in-app-banner-franchise">
                    <?php the_field('franchise-prilodenie_banner_opisanie') ?>
                </div>

                <div class="apps-links-app-cart-franchise"> <a href="https://apps.apple.com/ru/app/кутикатай/id1645059794"><img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/appstore.png" alt="" /></a><a href="https://play.google.com/store/apps/details?id=com.kutikataj.app_clients_kutikatay"><img class="pointer" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/googleplay.png" alt="" /></a></div>
            </div>
            <img class="phone-hand-full-size" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/phone-hand-full.png" alt="" />
            <img class="phone-screen-full-size" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/phone-screen-full.png" alt="" />
        </div>
    </div>
</section>
<section id="they-chose-us" class="they-chose-us">
    <h3 class="title-of-section-gradient-yellow"><?php the_field('franchise-tretyaya_sekcziya_sinyaya-title') ?></h3>

    <div class="chose-us__second-title"><?php the_field('franchise-tretyaya_sekcziya_sinyaya_subtitle') ?></div>
    <div class="feedback-absolute-pseudo-container">
        <div class="feedback-overflov-pseudo-container">
            <ul class="feedback-containers-zone-franchise">
                <li class="feedback-container-franchise">
                    <div class="feedback__title"><?php the_field('zagolovok_otzyva_1') ?></div>
                    <div class="feedback__profile">
                        <img class="feedback__avatar" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/manager-photo.svg" alt="" /><span><?php the_field('fio_otzyva_1') ?></span> <img class="feedback__star" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/star.svg" alt="" />
                        <span>5</span>
                    </div>
                    <div class="feedback__main-discription">
                        <?php the_field('tekst_otzyva_1') ?>
                    </div>
                    <div class="feedback__show-more-link"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/chevron-down.svg" alt="" /> <span><?php the_field('ssylka_na_otzyv_1') ?></span></div>
                    <div class="feedback__opacity"><?php the_field('data_otzyva_1') ?></div>
                </li>

                <li class="feedback-container-franchise">
                    <div class="feedback__title"><?php the_field('zagolovok_otzyva_2') ?></div>
                    <div class="feedback__profile">
                        <img class="feedback__avatar" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/avatar-1.svg" alt="" /><span><?php the_field('fio_otzyva_2') ?></span> <img class="feedback__star" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/star.svg" alt="" />
                        <span>5</span>
                    </div>
                    <div class="feedback__main-discription">
                        <?php the_field('tekst_otzyva_2') ?>
                    </div>
                    <div class="feedback__show-more-link"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/chevron-down.svg" alt="" /> <span><?php the_field('ssylka_na_otzyv_2') ?></span></div>
                    <div class="feedback__opacity"><?php the_field('data_otzyva_2') ?></div>
                </li>

                <li class="feedback-container-franchise">
                    <div class="feedback__title"><?php the_field('zagolovok_otzyva_3') ?></div>
                    <div class="feedback__profile">
                        <img class="feedback__avatar" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/avatar-2.svg" alt="" /><span><?php the_field('fio_otzyva_3') ?></span> <img class="feedback__star" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/star.svg" alt="" />
                        <span>5</span>
                    </div>
                    <div class="feedback__main-discription">
                        <?php the_field('tekst_otzyva_3') ?>
                    </div>
                    <div class="feedback__show-more-link"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/chevron-down.svg" alt="" /> <span><?php the_field('ssylka_na_otzyv_3') ?></span></div>
                    <div class="feedback__opacity"><?php the_field('data_otzyva_3') ?></div>
                </li>
            </ul>
        </div>
        <div class="franchise-arrows-feedback">
            <div class="arrows-feedback-rignt"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-right.svg" alt="" /></div>
            <div class="arrows-feedback-left arrows-feedback-opacity"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-left.svg" alt="" /></div>
        </div>
    </div>
</section>
<section id="finnodel-section" class="finnodel-section">
    <h3 class="title-of-section-gradient text-gradient"><?php the_field('franchise-4_sekcziya_zagolovok') ?>
    </h3>
    <div class="finmodel-container">
        <p class="finmodel__title"><?php the_field('franchise-4_sekcziya_nazvanie_polya') ?>
        </p>
        <div class="finmodel__main">
            <div class="finmodel__data">
                <ul class="data__list-fin">
                    <?php the_field('franchise-nazvanie_spiska') ?>

                    <li>
                        <div class="data__circle1"></div>
                        <div class="data__procent"><?php the_field('franchise-proczent_spiska_1') ?></div>
                        <div class="data__title"><?php the_field('franchise-element_spiska_1') ?></div>
                    </li>
                    <li>
                        <div class="data__circle2"></div>
                        <div class="data__procent"><?php the_field('franchise-proczent_spiska_2') ?></div>
                        <div class="data__title"><?php the_field('franchise-element_spiska_2') ?></div>
                    </li>
                    <li>
                        <div class="data__circle3"></div>
                        <div class="data__procent"><?php the_field('franchise-proczent_spiska_3') ?></div>
                        <div class="data__title"><?php the_field('franchise-element_spiska_3') ?></div>
                    </li>
                    <li>
                        <div class="data__circle4"></div>
                        <div class="data__procent"><?php the_field('franchise-proczent_spiska_4') ?></div>
                        <div class="data__title"><?php the_field('franchise-element_spiska_4') ?></div>
                    </li>
                    <li>
                        <div class="data__circle5"></div>
                        <div class="data__procent"><?php the_field('franchise-proczent_spiska_5') ?></div>
                        <div class="data__title"><?php the_field('franchise-element_spiska_5') ?></div>
                    </li>
                    <li>
                        <div class="data__circle6"></div>
                        <div class="data__procent"><?php the_field('franchise-proczent_spiska_6') ?></div>
                        <div class="data__title"><?php the_field('franchise-element_spiska_6') ?></div>
                    </li>
                    <li>
                        <div class="data__circle7"></div>
                        <div class="data__procent"><?php the_field('franchise-proczent_spiska_7') ?></div>
                        <div class="data__title"><?php the_field('franchise-element_spiska_7') ?></div>
                    </li>
                    <li>
                        <div class="data__circle8"></div>
                        <div class="data__procent"><?php the_field('franchise-proczent_spiska_8') ?></div>
                        <div class="data__title"><?php the_field('franchise-element_spiska_8') ?></div>
                    </li>
                    <li>
                        <div class="data__circle9"></div>
                        <div class="data__procent"><?php the_field('franchise-proczent_spiska_9') ?></div>
                        <div class="data__title"><?php the_field('franchise-element_spiska_6') ?></div>
                    </li>
                </ul>
            </div>
            <div class="pin-diagramm"></div>
        </div>
    </div>
    <div class="dynamic-finmodel-container">
        <div class="dynamic__title">
            <p class="dynamic__title_small-text">Динамика открытия новых пунктов проката</p>
            <div class="dynamic__title-title">Рост колличества точек <span class="text-gradient">за 4 года в 2,5 раза!</span></div>
        </div>
        <div class="row-diagramm">
            <div class="row-diagramm-item">
                <div class="row-diagramm__value row-diagramm__value_2018"></div>
                <div class="row-diagramm__year">2018</div>
            </div>

            <div class="row-diagramm-item">
                <div class="row-diagramm__value row-diagramm__value_2019"></div>
                <div class="row-diagramm__year">2019</div>
            </div>

            <div class="row-diagramm-item">
                <div class="row-diagramm__value row-diagramm__value_2020"></div>
                <div class="row-diagramm__year">2020</div>
            </div>

            <div class="row-diagramm-item">
                <div class="row-diagramm__value row-diagramm__value_2021"></div>
                <div class="row-diagramm__year">2021</div>
            </div>

            <div class="row-diagramm-item">
                <div class="row-diagramm__value row-diagramm__value_2022"></div>
                <div class="row-diagramm__year">2022</div>
            </div>

            <div class="row-diagramm-item">
                <div class="row-diagramm__value row-diagramm__value_2023"></div>
                <div class="row-diagramm__year">2023</div>
            </div>
        </div>
    </div>
    <div class="call-back-form-container-overflow-container">
        <div class="call-back-form-container-franchise">
            <div class="text-sub-block-news-inside">
                <h4 class="main-text-sub-block-news-p-cont text-gradient">Давайте созвонимся!</h4>
                <p class="second-text-sub-block-news-p-cont text-18-500">Наши специалисты ответят на все ваши вопросы</p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="2b64add" title="Давайте созвонимся"]' ); ?>
            <div class="input-zone-news-p-cont">
                <img class="google-piexel-phone-callback-form" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/google-piexel-phone-full.png" alt="" />
                <img class="google-piexel-screen-callback-form" src="<?php echo bloginfo('template_url'); ?>/assets/assets/content/google-piexel-full.png" alt="" />
                <div class="data-agreement-12px">
                    Нажимая кнопку вы принимаете <a href="https://agency-5.ru/soglashenie-ob-obrabotke-personalnyh-dannyh/">Соглашение об обработке персональных данных</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="our-team-franchise" class="our-team-franchise">
    <h3 class="title-of-section-gradient text-gradient"><?php the_field('franchise-zagolovok_5_sekczii') ?></h3>
    <div class="overflow-comand-cards-franchise">
        <div class="comand-cards-franchise">
            <div class="card">
                <div class="card__front">
                    <div class="comand-card-franchise">
                        <img class="team-fr__refresh-icon" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/refresh-ccw.svg" alt="" />
                        <p class="team-fr__who"><?php the_field('dolzhnost_chlena_komandy_1') ?></p>
                        <p class="team-fr__name"><?php the_field('imya_chlena_komandy_1') ?></p>
                    </div>
                </div>
                <div class="card__back">
                    <div class="comand-card-text-franchise">
                        <p class="team-fr__back-name"><?php the_field('imya_chlena_komandy_1') ?></p>
                        <p class="team-fr__back-who"><?php the_field('dolzhnost_chlena_komandy_1') ?></p>
                        <p class="team-fr__back-discription">
                            <?php the_field('opisanie_chlena_komandy_1') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__front">
                    <div class="comand-card-franchise-2">
                        <img class="team-fr__refresh-icon" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/refresh-ccw.svg" alt="" />
                        <p class="team-fr__who"><?php the_field('dolzhnost_chlena_komandy_2') ?></p>
                        <p class="team-fr__name"><?php the_field('imya_chlena_komandy_2') ?></p>
                    </div>
                </div>
                <div class="card__back">
                    <div class="comand-card-text-franchise">
                        <p class="team-fr__back-name"><?php the_field('imya_chlena_komandy_2') ?></p>
                        <p class="team-fr__back-who"><?php the_field('dolzhnost_chlena_komandy_2') ?></p>
                        <p class="team-fr__back-discription">
                            <?php the_field('opisanie_chlena_komandy_2') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="comand-card-text-franchise">
                <p class="text-18-500-left">Будем рядом</p>
                <p class="team-fr__title">За вами закрепляется менеджер от <span>каждого департамента,</span> а не один специалист</p>
            </div>
            <div class="card">
                <div class="card__front">
                    <div class="comand-card-franchise-3">
                        <img class="team-fr__refresh-icon" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/refresh-ccw.svg" alt="" />
                        <p class="team-fr__who"><?php the_field('dolzhnost_chlena_komandy_3') ?></p>
                        <p class="team-fr__name"><?php the_field('imya_chlena_komandy_3') ?></p>
                    </div>
                </div>
                <div class="card__back">
                    <div class="comand-card-text-franchise">
                        <p class="team-fr__back-name"><?php the_field('imya_chlena_komandy_3') ?></p>
                        <p class="team-fr__back-who"><?php the_field('dolzhnost_chlena_komandy_3') ?></p>
                        <p class="team-fr__back-discription">
                            <?php the_field('opisanie_chlena_komandy_3') ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card__front">
                    <div class="comand-card-franchise-4">
                        <img class="team-fr__refresh-icon" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/refresh-ccw.svg" alt="" />
                        <p class="team-fr__who"><?php the_field('dolzhnost_chlena_komandy_4') ?></p>
                        <p class="team-fr__name"><?php the_field('imya_chlena_komandy_4') ?></p>
                    </div>
                </div>
                <div class="card__back">
                    <div class="comand-card-text-franchise">
                        <p class="team-fr__back-name"><?php the_field('imya_chlena_komandy_4') ?></p>
                        <p class="team-fr__back-who"><?php the_field('dolzhnost_chlena_komandy_4') ?></p>
                        <p class="team-fr__back-discription">
                            <?php the_field('opisanie_chlena_komandy_4') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__front">
                    <div class="comand-card-franchise-5">
                        <img class="team-fr__refresh-icon" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/refresh-ccw.svg" alt="" />
                        <p class="team-fr__who"><?php the_field('dolzhnost_chlena_komandy_5') ?></p>
                        <p class="team-fr__name"><?php the_field('imya_chlena_komandy_5') ?></p>
                    </div>
                </div>
                <div class="card__back">
                    <div class="comand-card-text-franchise">
                        <p class="team-fr__back-name"><?php the_field('imya_chlena_komandy_5') ?></p>
                        <p class="team-fr__back-who"><?php the_field('dolzhnost_chlena_komandy_5') ?></p>
                        <p class="team-fr__back-discription">
                            <?php the_field('opisanie_chlena_komandy_5') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__front">
                    <div class="comand-card-franchise-6">
                        <img class="team-fr__refresh-icon" src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/refresh-ccw.svg" alt="" />
                        <p class="team-fr__who"><?php the_field('dolzhnost_chlena_komandy_6') ?></p>
                        <p class="team-fr__name"><?php the_field('imya_chlena_komandy_6') ?></p>
                    </div>
                </div>
                <div class="card__back">
                    <div class="comand-card-text-franchise">
                        <p class="team-fr__back-name"><?php the_field('imya_chlena_komandy_6') ?></p>
                        <p class="team-fr__back-who"><?php the_field('dolzhnost_chlena_komandy_6') ?></p>
                        <p class="team-fr__back-discription">
                            <?php the_field('opisanie_chlena_komandy_6') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="what-we-can-do">
        <p class="what-we-can-do-title"><?php the_field('franchise-chem_pomozhem') ?></p>
        <div class="we-can-row">
            <div class="we-can-row__title"><?php the_field('franchise-spisok_pomoshhi_usluga_1') ?></div>
            <p class="we-can-row__disc">
                <?php the_field('franchise-opisanie_uslugi_pomoshhi_1') ?>
            </p>
        </div>

        <div class="we-can-row">
            <div class="we-can-row__title"><?php the_field('franchise-spisok_pomoshhi_usluga_2') ?></div>
            <p class="we-can-row__disc">
                <?php the_field('franchise-opisanie_uslugi_pomoshhi_2') ?>
            </p>
        </div>

        <div class="we-can-row">
            <div class="we-can-row__title"><?php the_field('franchise-spisok_pomoshhi_usluga_3') ?></div>
            <p class="we-can-row__disc"><?php the_field('franchise-opisanie_uslugi_pomoshhi_3') ?></p>
        </div>

        <div class="we-can-row">
            <div class="we-can-row__title"><?php the_field('franchise-spisok_pomoshhi_usluga_4') ?></div>
            <p class="we-can-row__disc"><?php the_field('franchise-opisanie_uslugi_pomoshhi_4') ?></p>
        </div>

        <div class="we-can-row">
            <div class="we-can-row__title"><?php the_field('franchise-spisok_pomoshhi_usluga_5') ?></div>
            <p class="we-can-row__disc">
                <?php the_field('franchise-opisanie_uslugi_pomoshhi_5') ?>
            </p>
        </div>
    </div>
</section>
<section id="contacts-franchise-page" class="contacts-franchise-page">
    <h3 class="title-of-section-gradient-yellow"><?php the_field('franchise-tajtl_kontaktov') ?></h3>
    <div class="contact-cards-frabchise">
        <div class="director-card">
            <img class="director__photo" src="<?php the_field('avatarka_dirketor'); ?>" alt="" />
            <p class="director__name"><?php the_field('franchise-zagolovok_f') ?></p>
            <p><?php the_field('franchise-kommentarij_fio') ?></p>
        </div>
        <div class="director-phone-card">
            <a class="director__phone-number" href="tel:+79030030396"><?php the_field('franchise-pole_telefona') ?></a>
            <p class="director__phone-discription"><?php the_field('franchise-opisanie_polya_telefona') ?></p>
            <img class="director__phone-image" src="<?php the_field('trubka_zolotaya_snizu'); ?>" alt="" />
        </div>
        <div class="director-email-card">
            <a class="director__email" href="mailto:m.shekurov@kutikatai.ru"><?php the_field('franchise-pole_pochty') ?></a>
            <p class="director__email-discription"><?php the_field('franchise-opisanie_polya_pochty') ?></p>
            <img class="director__email-image" src="<?php the_field('pochtovyj_konvert_zolotoj_snizu'); ?>" alt="" />
        </div>
    </div>
</section>

<?php
get_footer();
?>