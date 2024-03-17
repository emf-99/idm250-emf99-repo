<?php 
/* Template Name: NEW Listing Template */
get_header(); 
?>

<?php
    echo '<div class="top-of-page">';
        echo '<h1 class="listing-title">' . get_the_title() . '</h1>';
        echo get_the_content();
    echo '</div>';
?>

<?php
$args_trending = array(
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$query_trending = new WP_Query($args_trending);

if ($query_trending->have_posts()) {
    echo '<div class="listing-posts-section">';
    echo '<div class="post-grid">';
    while ($query_trending->have_posts()) {
        $query_trending->the_post();
        $permalink = get_permalink();

        echo '<div class="grid-column">';

        echo '<a href="' . esc_url($permalink) . '" class="grid-column-link">';
        if (has_post_thumbnail()) {
            the_post_thumbnail();
        }
        echo '</a>';

        echo '<h4 class="listing-post-category">' . get_the_category_list() . '</h4>';
        echo '<h3 class="listing-post-title">' . get_the_title() . '</h3>';
        echo '<h5 class="listing-post-author">By: ' . get_the_author() . '</h5>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
} else {
    // No posts found
}
wp_reset_postdata();
?>

<?php get_footer(); ?>