<?php
/*
Template Name: ACF-Test-Page
*/
?>


<?php
get_header();
?>

<?php
$data = get_field('format_uslug');
var_dump($data);
?>

<?php
get_footer();
?>
