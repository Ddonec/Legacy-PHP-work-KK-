<?php

class ParkClass {
    private static function get_park_titles() {
        global $product;

        if (!taxonomy_exists('point'))
            return;

        $parks = get_the_terms($product->get_id(), 'point');


        if (!empty($parks)) {
            global $wpdb;
            $parks_title = [];
            foreach ($parks as $park) {
                $results = $wpdb->get_results("SELECT wp_posts.post_title
                FROM wp_termmeta
                LEFT JOIN wp_posts on wp_termmeta.meta_value = wp_posts.ID
                WHERE wp_termmeta.term_id = ". $park->term_id ." AND wp_termmeta.meta_key = 'park'");
                $parks_title[] = $results[0]->post_title;
            }

            return array_unique($parks_title);
        }

    }

    public static function park_list ( ) {
        $parks_title = self::get_park_titles();
        echo '<p class="grey-i-p text-14">В ' . count($parks_title) . ' парках:</p>';
        echo '<p class="text-18-500-left div-dics-right-card-i-p text-14">';
        foreach ($parks_title as $title) {
            echo $title;
            if (next($parks_title)) {
                echo ', ';
            }
        }
        echo '</p>';
    }

    public static function park_count ( ) {
        return count(self::get_park_titles());
    }
}

