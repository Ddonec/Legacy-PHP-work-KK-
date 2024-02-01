<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div <?php wc_product_class( 'card-of-product', $product ); ?>>
    <a href="<?php echo $product->get_permalink() ?>"><?php echo $product->get_image() ?></a>

    <div class="discription-of-product">
        <?php echo $product->get_title() ?>
        <ul>
            <li><span class="opacity-text-discription-product-card">Вид: </span>Горный</li>
            <li><span class="opacity-text-discription-product-card">Залог: </span>200₽</li>
            <li><span class="opacity-text-discription-product-card">Доступно: </span>в <?php echo ParkClass::park_count() ?> парках</li>
        </ul>
        <div class="price-of-product pointer">
            <img class="add-to-cart-btn"
                 src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector+13px.svg"
                 alt="" />
            <a href="<?php echo $product->get_permalink() ?>" class="prise-of-rent-1">Подробнее</a>
        </div>
    </div>
</div>

