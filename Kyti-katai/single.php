<?php
/*
Template Name: news-1
*/
?>


<?php
get_header();
?>

    <section class="main-content-news-1-page">
		<?php woocommerce_breadcrumb(); ?>

        <div class="news-second-page-main-container">
            <div class="social-left-block-news-2-page">
                <a href="#">
                    <div class="telegramm-bg-image-mews-2-page"></div>
                </a>
                <a href="#">
                    <div class="whatsapp-bg-image-mews-2-page"></div>
                </a>
                <a href="#"
                >
                    <div><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/assets/icon/mail-logo-white.svg"
                              alt="email"/></div
                    >
                </a>
            </div>
			<?php
			while ( have_posts() ) {
				the_post();
				?>
                <div class="news-1-center-block-info">
                    <h1 class="h1-news-1-page"><?php the_title(); ?></h1>
                    <div class="main-photo-of-news-1-page">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt=""/>
                    </div>
                    <div class="full-text-news-1-area">
                        <h4 class="text-24-600"><?php the_field( 'news-1-vtoroj_zagolovok' ) ?></h4>
                        <div class="text-18-500-left single-page-main-text">
							<?php the_content(); ?>
                         </div>
                    </div>
                    <div class="autor-of-state-news-1-page">
						<?php
						$photo = get_field( 'author-photo' );
						if ( $photo ) { ?>
                            <div class="image-user-news-1 text-18-500-left"><img src="<?php echo $photo; ?>" alt=""
                                                                                 width="40"/> <?php the_field( 'author-name' ); ?>
                            </div>
							<?php
						}

						?>
                        <div><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/assets/icon/dot-blue.svg"
                                  alt="dot"/></div>
                        <div class="text-18-500-left"><?php echo get_the_date(); ?></div>
                    </div>
                </div>
				<?php
			}
			?>
            <aside class="aside-right-block-news-1-page">
                <p class="some-states-news-1-p text-24-600">Похожие статьи</p>
                <div class="aside-right-block-news-1hidden-slide-area">
                    <div class="aside-right-block-news-max-width-area">
						<?php
						$args       = array( 'posts_per_page' => 2, 'orderby' => 'rand' );
						$rand_posts = get_posts( $args );
						foreach ( $rand_posts as $post ) : ?>
                        <a href="<?php echo get_permalink(); ?>">
                            <div class="sick-cart-news">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                                     alt=""/>
                                <div class="text-inside-cart-blog">
                                    <p class="hide-text-2-string"><?php echo $post->post_title ?></p>
                                    <span class="truncate-tex hide-text-3-string"><?php echo $post->post_excerpt; ?></span>
	                                <?php
	                                $photo = get_field( 'author-photo' );
	                                if ( $photo ): ?>
                                        <div class="image-user-zone">
                                            <img src="<?php echo $photo; ?>" alt="" />
			                                <?php the_field( 'author-name' ); ?>
                                        </div>
	                                <?php endif; ?>
                                    <div class=" date-in-material-card"><?php echo get_the_date(); ?></div>

                                </div>
                            </div>
                        </a>
						<?php endforeach; ?>
						<?php wp_reset_postdata() ?>
                    </div>
                </div>
            </aside>
        </div>

        <a href="/category/articles/"><div class="show-more-btn-news text-14-500 pointer">Показать еще</div></a>
        <div class="subscribe-for-our-news-container">
            <div class="text-sub-block-news-inside">
                <h4 class="main-text-sub-block-news-p-cont text-gradient">Подпишитесь на наши новости</h4>
                <p class="second-text-sub-block-news-p-cont text-20-">И будьте в курсе последних событий проката!</p>
            </div>
            <div class="input-zone-news-p-cont">
                <input class="input-in-news-p-cont i-n-p-c-name" type="text" placeholder="Ваше имя"/>
                <input class="input-in-news-p-cont i-n-p-c-email" type="email" placeholder="Электронная почта"/>
                <div class="send-btn-news-sub text-18-500 pointer">Отправить</div>
                <img class="convert-img-news-sub"
                     src="<?php echo bloginfo( 'template_url' ); ?>/assets/assets/content/convert-yellow.png"
                     alt="mail"/>
                <div class="data-agreement-12px">
                    Нажимая кнопку вы принимаете <a
                            href="https://agency-5.ru/soglashenie-ob-obrabotke-personalnyh-dannyh/">Соглашение об
                        обработке персональных данных</a>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
?>