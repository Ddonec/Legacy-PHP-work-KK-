<?php
get_header();
?>

    <section class="main-content-news-page">
		<?php woocommerce_breadcrumb(); ?>
        <div class="title-of-section-news-page">
            <h1 class="text-gradient"><?php single_cat_title(); ?></h1>
        </div>
        <div class="news-cards-container">
            <div class="all-material-cards">


				<?php
				global $post;

				$news_posts = get_posts( array(
						'numberposts' => 20
					)
				);

				foreach ( $news_posts as $post ) {
					$tags      = wp_get_post_tags( get_the_ID() );
					$tag_array = array();
					foreach ( $tags as $tag ) {
						$tag_array[] = $tag->name;
					}
					?>
					<?php if ( in_array( "важно", $tag_array ) ): ?>
                        <a href="<?php echo get_permalink(); ?>">
                        <div class="green-samokat">
                            <div class="green-samokat-before"><img
                                        src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                                        alt="">
                            </div>
	                        <?php echo $post->post_title ?>
                            <p><span class="truncate-text"><?php echo $post->post_excerpt; ?></span></p>
                        </div>
                        </a>
					<?php else: ?>
                        <a href="<?php echo get_permalink(); ?>">
                        <div class="sick-cart-news">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                                 alt=""/>
                            <div class="text-inside-cart-blog">
                                <p class="hide-text-2-string"><?php echo $post->post_title ?></p>
                                <span class="truncate-text hide-text-3-string"><?php echo $post->post_excerpt; ?></span>
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
					<?php endif; ?>
					<?php
				}
				wp_reset_postdata();
				?>
            </div>
        </div>


        <div class="show-more-btn-news text-14-500 pointer">Показать еще</div>
        <div class="subscribe-for-our-news-container">
            <div class="text-sub-block-news-inside">
                <h4 class="main-text-sub-block-news-p-cont text-gradient">Подпишитесь на наши новости</h4>
                <p class="second-text-sub-block-news-p-cont text-20-">И будьте в курсе последних событий проката!</p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="c5668af" title="Подпишитесь на наши новости"]' ); ?>
            <div class="input-zone-news-p-cont">
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