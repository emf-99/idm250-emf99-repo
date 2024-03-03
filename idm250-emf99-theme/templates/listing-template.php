<?php 
/* Template Name: Listing Template */
get_header(); 
?>

<?php
    echo '<div class="top-of-page">';
        echo '<h1 class="listing-title">' . get_the_title() . '</h1>';
        echo get_the_content();
    echo '</div>';
?>

<?php
    get_template_part('components/related-posts'); 
?>



<?php get_footer(); ?>