<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

?>

<section class="main-content-item">
    <?php do_action( 'woocommerce_before_single_product' ); ?>
<!--    Что это за заголовок-->
    <h1 class="text-gradient"><?php echo $product->get_title(); ?></h1>
    <?php woocommerce_breadcrumb(); ?>
    <div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'main-info-info-page', $product ); ?>>
        <div class="photo-item-i-p">
            <?php echo $product->get_image(); ?>
        </div>
        <div class="right-section-info-page">
            <div class="title-of-section-item-page text-gradient">
                <?php echo $product->get_title(); ?>
            </div>
            <div class="buttons-abd-discription-i-p">
                <ul class="discription-of-item-i-p">
                    <li class="pointer item-disc-i-p-1 i-p-d i-p-d-active text-16-500-left">Описание</li>
                    <li class="pointer item-disc-i-p-2 i-p-d text-16-500-left">Характеристики</li>
                </ul>
                <p class="text-18-500-left">
                    <?php echo $product->get_description(); ?>
                </p>
            </div>
            <div class="price-cards-i-p">
                <div class="price-card-i-p text-18-500-left">
                    <p class="">Стоимость (₽)</p>
                    <div class="prices-area-i-p-flex text-14">
                        <div class="grey-i-p">
                            <p>Часов</p>
                            <p>Будни</p>
                            <p>Выходные</p>
                        </div>
                        <div>
                            <div class="hours-area-i-p-flex grey-i-p">
                                <p>1</p>
                                <p>2</p>
                                <p>3</p>
                            </div>
                            <div class="prices-area-i-p-flex-in-card">
                                <p><span class="grey-i-p text-14">от </span>350</p>
                                <p><span class="grey-i-p text-14">от </span>450</p>
                                <p><span class="grey-i-p text-14">от </span>700</p>
                            </div>
                            <div class="prices-area-i-p-flex-in-card text-14">
                                <p><span class="grey-i-p text-14">от </span>350</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-14"><span class="grey-i-p">Залог:</span> документ или 10 000₽</p>
                </div>
                <div class="avalibale-card-i-p">
                    <p class="text-18-500-left">Наличие</p>
                    <div class="">
                        <?php ParkClass::park_list(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item-page-map-block">
        <div class="button-on-map-item-page pointer"><a target="_blank" href="https://yandex.ru/maps/213/moscow/?ll=37.617700%2C55.755863&z=10">Смотреть&nbsp;на&nbsp;карте</a></div>
    </div>
</section>
<h3 class="text-gradient second-title-item-page">Могут заинтересовать</h3>
<div class="last-section-area-i-p">
    <div class="last-section-of-i-p">
        <div class="slider-area-item-page">
            <?php
//             Выводим похожие товары
            $related_products = wc_get_related_products($product->get_id(), 6);

            foreach ( $related_products as $related_product ) {
                $post_object = get_post( $related_product );

                setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

                wc_get_template_part( 'content', 'product' );
            }
            ?>

        </div>
        <div class="left-arrow-i-p arrows-i-p"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-left.svg" alt="" /></div>

        <div class="right-arrow-i-p arrows-i-p"><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-1.svg" alt="" /></div>
    </div>
</div>