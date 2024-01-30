<?php

add_action('wp_enqueue_scripts', 'kk_scripts');
function kk_scripts()
{
    wp_enqueue_style('main_style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('item_style', get_template_directory_uri() . '/assets/css/item.css');
    wp_enqueue_style('catalog_style', get_template_directory_uri() . '/assets/css/catalog.css');
    wp_enqueue_style('media_style', get_template_directory_uri() . '/assets/css/media.css');

    wp_enqueue_script('main_script', get_template_directory_uri() . '/assets/js/index.js', array(), null, true);
    wp_enqueue_script('catalog_script', get_template_directory_uri() . '/assets/js/catalog.js', array(), null, true);
    wp_enqueue_script( 'modal_scripts', get_template_directory_uri( ) . '/assets/js/test-modal.js', array(), null, true);


    // отключение стилей woocommerce
    wp_deregister_style('woocommerce-general');
    wp_deregister_style('woocommerce-layout');

}
// поддержка тем woocommerce
add_theme_support('woocommerce');


// Таксономия "Точка проката"
add_action('init', 'kk_register_point_taxonomy', 0);

function kk_register_point_taxonomy()
{

    $args = array(
        'labels' => array(
            'name' => 'Точки', // основное название во множественном числе
            'singular_name' => 'Точка', // название единичного элемента таксономии
            'all_items' => 'Все точки',
            'edit_item' => 'Изменить точку',
            'view_item' => 'Просмотр точки', // текст кнопки просмотра записи на сайте (если поддерживается типом)
            'update_item' => 'Обновить точку',
            'add_new_item' => 'Добавить новую точку',
            'new_item_name' => 'Название новой точки',
            'search_items' => 'Искать точку',
            'popular_items' => 'Популярные точки', // для таксономий без иерархий
            'separate_items_with_commas' => 'Разделяйте точки запятыми',
            'add_or_remove_items' => 'Добавить или удалить точку',
            'choose_from_most_used' => 'Выбрать из часто используемых точек',
            'not_found' => 'Точка не найдена',
            'back_to_items' => '← Назад к точкам',
        )
    );
    register_taxonomy('point', 'product', $args);
}


add_action('point_add_form_fields', 'kk_add_point_fields');

function kk_add_point_fields($taxonomy)
{
    $parks = get_posts(array('post_type' => 'parks', 'posts_per_page' => -1, 'orderby' => 'post_title', 'order' => 'ASC'));
    if ($parks) {

        echo '<div class="form-field">
		<label for="park">Парк</label>
        <select name="park">';
        foreach ($parks as $park) {
            echo '
            <option value="' . $park->ID . '" >' . esc_html($park->post_title) . '</option>
            ';
        }
        echo '</select></div>';

    } else {
        echo 'Перед добавлением Точек необходимо добавить Парки!';
    }


    echo '<div class="form-field">
		<label for="coordinates">Координаты</label>
		<input type="text" name="coordinates" id="coordinates" />
	</div>
';

}

add_action('point_edit_form_fields', 'kk_edit_point_fields', 10, 2);

function kk_edit_point_fields($term, $taxonomy)
{
    $parks = get_posts(array('post_type' => 'parks', 'posts_per_page' => -1, 'orderby' => 'post_title', 'order' => 'ASC'));
//    todo: сделать получение парка и координат одним запросом
    $park_id = get_term_meta($term->term_id, 'park', true);

    echo '<tr class="form-field">
	<th>
		<label for="park">Парк</label>
	</th>
	<td>
		<select name="park">';
    foreach ($parks as $park) {
        echo '
            <option value="' . $park->ID . '" ' . selected($park->ID, $park_id) . '>' . esc_html($park->post_title) . '</option>
            ';
    }
    echo '</select>
	</td>
	</tr>';

    $coordinates = get_term_meta($term->term_id, 'coordinates', true);

    echo '<tr class="form-field">
	<th>
		<label for="coordinates">Координаты</label>
	</th>
	<td>
		<input name="coordinates" id="coordinates" type="text" value="' . esc_attr($coordinates) . '" />
	</td>
	</tr>';

}

add_action('created_point', 'kk_save_point_fields');
add_action('edited_point', 'kk_save_point_fields');

function kk_save_point_fields($term_id)
{

    if (isset($_POST['park'])) {
        update_term_meta($term_id, 'park', (int)sanitize_text_field($_POST['park']));
    }

    if (isset($_POST['coordinates'])) {
        update_term_meta($term_id, 'coordinates', sanitize_text_field($_POST['coordinates']));
    } else {
        delete_term_meta($term_id, 'coordinates');
    }

}


// Парки
add_action('init', function () {
    $labels = array(
        'name' => 'Парки',
        'singular_name' => 'Парк',
        'add_new' => 'Добавить парк',
        'add_new_item' => 'Добавить нового парка',
        'edit_item' => 'Редактировать парка',
        'new_item' => 'Новый парк',
        'all_items' => 'Все парки',
        'view_item' => 'Посмотреть парк на сайте',
        'search_items' => 'Искать парк',
        'not_found' => 'Парк не найден!',
        'not_found_in_trash' => 'В корзине нет парка',
        'menu_name' => 'Парки'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать в админке
        'menu_icon' => 'dashicons-buddicons-activity',
        'menu_position' => 50, // порядок в меню
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('parks', $args);
});


function kk_register_city_taxonomy()
{

    $args = array(
        'labels' => array(
            'name' => 'Города', // основное название во множественном числе
            'singular_name' => 'Город', // название единичного элемента таксономии
            'all_items' => 'Все города',
            'edit_item' => 'Изменить города',
            'view_item' => 'Просмотр города', // текст кнопки просмотра записи на сайте (если поддерживается типом)
            'update_item' => 'Обновить города',
            'add_new_item' => 'Добавить новый город',
            'new_item_name' => 'Название нового города',
            'search_items' => 'Искать город',
            'popular_items' => 'Популярные города', // для таксономий без иерархий
            'separate_items_with_commas' => 'Разделяйте города запятыми',
            'add_or_remove_items' => 'Добавить или удалить город',
            'choose_from_most_used' => 'Выбрать из часто используемых городов',
            'not_found' => 'Город не найдена',
            'back_to_items' => '← Назад к городам',
        )
    );
    register_taxonomy('city', 'parks', $args);
}

add_action('init', 'kk_register_city_taxonomy');


require_once get_template_directory() . '/inc/Park.php';
require_once get_template_directory() . '/inc/woocommerce-hooks.php';
?>