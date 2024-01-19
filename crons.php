<?php
// WordPress çekirdeğini yükleyin
define('WP_USE_THEMES', false);
require_once('wp-load.php');

// Rastgele bir taslak yazıyı alın
$args = array(
    'post_type' => 'post',
    'post_status' => 'draft',
    'posts_per_page' => 1,
    'orderby' => 'rand'
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        // Şu anın tarih ve saati
        $current_date = current_time('mysql');

        // Taslak yazıyı yayınlanabilir hale getirin
        wp_update_post(array(
            'ID' => get_the_ID(),
            'post_status' => 'publish',
            'post_date' => $current_date,
            'post_date_gmt' => get_gmt_from_date($current_date)
        ));

        // Yayınlanan yazının başlığını ekrana yazdırın
        echo 'Yayınlanan Yazı Başlığı: ' . get_the_title();
    }
}

// Sorguyu sıfırlayın
wp_reset_postdata();
?>
