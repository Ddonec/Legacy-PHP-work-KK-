<?php

get_header();

?>
    <section class="main-content-catalog">
        <?php woocommerce_breadcrumb(); ?>
        <div class="title-of-section-catalog-page t-o-s">
            <h1 class="text-gradient"><span
                        class="catalog-page-title-h1-desctop"><?php woocommerce_page_title(); ?></span><span
                        class="catalog-page-title-h1-mobile none">Каталог</span></h1>
        </div>

        <?php get_parent_product_categories(get_queried_object_id());?>

        <div class="hide-filters-cat">
            <div class="hide-filter-btn">
                <p class="text-14-500">Скрыть фильтры</p>
                <img src="./assets/icon/sliders-horizontal.svg" alt=""/>
            </div>
            <div class="hide-filter-text-btn none">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/chevron-up-bold.svg" alt=""/>

                Фильтр
            </div>
            <div class="popular-filter-btn">
                <p class="text-14-500">По популярности</p>
                <div><img src="<?php echo bloginfo('template_url'); ?>/assets/assets/icon/Vector-black.svg" alt=""/>
                </div>
            </div>
        </div>

        <div class="catalog-container">
            <aside class="filters-container-catalog">
                <p class="text-18-700">Найдено по фильтрам: 9</p>
                <!-- <div style="width: 300px"></div> -->
                <?php do_action('woocommerce_sidebar'); ?>
            </aside>
            <div class="cpoduct-zone-cat">
                <div class="in-stock-discription">Доступно сейчас</div>
                <div class="items-title-catalog-page none">Товары</div>
                <div class="in-stock-catalog">


                    <?php
                    if (woocommerce_product_loop()) {

                        woocommerce_output_all_notices();

                        woocommerce_result_count();

                        woocommerce_catalog_ordering();

                        woocommerce_product_loop_start();


                        if (wc_get_loop_prop('total')) {
                            while (have_posts()) {
                                the_post();

                                /**
                                 * Hook: woocommerce_shop_loop.
                                 */
                                do_action('woocommerce_shop_loop');

                                wc_get_template_part('content', 'product');
                            }
                        }

                        woocommerce_product_loop_end();

                    } else {
                        wc_no_products_found();
                    }
                    ?>

                </div>

                <div class="show-more-btn-catalog text-18-500">Показать еще</div>
            </div>
        </div>
    </section>

<?php

get_footer();
