<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$minimum_1 = 30;

$mod_class = '';

if ( WC()->cart->subtotal < $minimum_1 ) {

  $only_books = true;
  $only_virtual = true;

  // Loop over $cart items
  foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
     $product = $cart_item['data'];
     $product_id = $cart_item['product_id'];
     
     $product_cats = get_the_terms( $product_id, 'product_cat' );
     $product_cats = array_map( function($cat){ return $cat->term_id; } , $product_cats);

     if( array_search(142, $product_cats) === FALSE ){ // 142 - E-BOOKS
      $only_books = false;
     }

     if( !$product->is_virtual() ){
      $only_virtual = false;
     }
  }

  if (!$only_books && !$only_virtual){

  		$mod_class = 'disabled';
  }   	
}




?>

<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button button alt wc-forward <?=$mod_class;?>">
	<?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>
</a>
