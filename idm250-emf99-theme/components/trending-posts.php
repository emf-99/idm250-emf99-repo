<?php
$args_trending = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'offset'         => 3 
);

$query_trending = new WP_Query($args_trending);

if ($query_trending->have_posts()) {
    echo '<div class="trending-posts-section">';
    echo '<h2 class="section-title-home-trending"><span class="first-word">Trending </span> Posts</h2>';
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

        echo '<h4 class="home-post-category">' . get_the_category_list() . '</h4>';
        echo '<h3 class="home-post-title">' . get_the_title() . '</h3>';
        echo '<h5 class="home-post-author">By: ' . get_the_author() . '</h5>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
} else {
    // No posts found
}
wp_reset_postdata();
?>
