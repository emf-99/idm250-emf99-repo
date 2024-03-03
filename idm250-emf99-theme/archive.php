<?php get_header(); ?>

<?php
echo '<h2>' . single_cat_title('', false) . '</h2>';
echo category_description();

if (have_posts()) :
    while (have_posts()) : the_post();
        echo '<h2>' . get_the_title() . '</h2>';
        echo '<p>' . get_the_excerpt() . '</p>';
        echo '<a href="' . get_the_permalink() . '">Read More</a>';
        echo '<hr>';
    endwhile;
else:
    echo '<p>No content found</p>';
endif;
?>

<?php get_footer(); ?>