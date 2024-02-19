<?php

add_filter( 'woocommerce_breadcrumb_defaults', function () {
    return array(
        'delimiter'   => '/',
        'wrap_before' => '<div class="bread-crumbs">',
        'wrap_after'  => '</div>',
        'before'      => '<p>',
        'after'       => '</p>',
        'home'        => __( 'Главная', 'Kyti-katai' ),
    );
} );


remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );


//устанавливаем сезон глобально
global $season;
if ($_COOKIE['SummerWinterCheckStatus'] == 'true') {
    $season = 'zima';
} else {
    $season = 'leto';
}


//получаем родительские категории где есть товары с учетом сезона
function get_parent_product_categories_season($season) {
    // Получаем все термины (категории) с типом 'product_cat'
    $terms = get_terms( array(
        'taxonomy'   => 'product_cat',
        'parent' => 0,
        'hide_empty' => false,
    ) );

    $categories_with_tag = array();

    // Перебираем все категории
    foreach ( $terms as $term ) {
        // Получаем все товары в текущей категории с заданным тегом
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => 1,
            'product_cat'    => $term->slug,
            'tax_query'      => array(
                array(
                    'taxonomy' => 'product_tag',
                    'field' => 'slug',
                    'terms' => $season
                ),
            ),
        );

        $products = new WP_Query( $args );

        // Если в категории есть товары с заданным тегом, добавляем ее в массив
        if ( $products->have_posts() ) {
            $categories_with_tag[] = $term;
        }
        wp_reset_postdata();
    }

    return $categories_with_tag;
}


// изменяем стандартный вывод товаров с учетом сезона
add_action( 'woocommerce_product_query', 'custom_product_query' );
function custom_product_query( $q ){
    global $season;

    $tax_query = (array) $q->get( 'tax_query' );

    $tax_query[] = array(
        'taxonomy' => 'product_tag',
        'field' => 'slug',
        'terms' => $season,
    );

    $q->set( 'tax_query', $tax_query );
}