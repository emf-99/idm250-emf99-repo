<?php
/*
 * Front Page Template */

get_header();

?>

<img src="" alt="">

<p>This is a custom template called page with sidebar</p>
<main class="flex flex-row">
  <div class="w-2/3">
            <?php

            $query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 6,
            'order' => 'DESC',
            ]);

            if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                  echo '<h2>' . get_the_title() . '</h2> <br>';
                  echo '<p>' . get_the_excerpt() . '</p>';
                  echo '<a href="' . get_the_permalink() . '">Read More</a>';
                  echo '<hr>';
            endwhile;
            wp_reset_postdata();
            endif;

            ?>
  </div>
  <aside class="w-1/3">

            <?php

            if (is_active_sidebar('right_sidebar')) :
            dynamic_sidebar('right_sidebar');
            endif;

            ?>

  </aside>
</main>

<?php get_footer(); ?>
