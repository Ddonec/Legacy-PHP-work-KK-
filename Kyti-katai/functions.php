<?php 

add_action('wp_enqueue_scripts', 'kk_scripts');
    function kk_scripts(){
        wp_enqueue_style( 'main_style', get_template_directory_uri( ) . '/assets/css/style.css');
        wp_enqueue_style( 'item_style', get_template_directory_uri( ) . '/assets/css/item.css');
        wp_enqueue_style( 'catalog_style', get_template_directory_uri( ) . '/assets/css/catalog.css');
        wp_enqueue_style( 'media_style', get_template_directory_uri( ) . '/assets/css/media.css');

        wp_enqueue_script( 'main_script', get_template_directory_uri( ) . '/assets/js/index.js', array(), null, true);
        wp_enqueue_script( 'catalog_script', get_template_directory_uri( ) . '/assets/js/catalog.js', array(), null, true);
        wp_enqueue_script( 'modal_scripts', get_template_directory_uri( ) . '/assets/js/test-modal.js', array(), null, true);

    };

    
?>