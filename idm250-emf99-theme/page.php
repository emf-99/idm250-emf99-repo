<?php get_header(); ?>
<h1>

   <?php
    echo get_the_title();
   ?>

</h1>



<div class="content">

<div class="featured-image">
    <?php
    if(has_post_thumbnail()){
        the_post_thumbnail('full');
    }
    ?>
</div>

<main class="flex flex-row">

  <div class="w-2/3" id="left-side">
            <?php
            echo get_the_content();
            ?>
  </div>

  <aside class="w-1/3"  id="right-side">
            <?php
            if (is_active_sidebar('right_sidebar')) :
            dynamic_sidebar('right_sidebar');
            endif;
            ?>
  </aside>

</main>

</div>

<!-- <p> this is a page.php file </p> -->

<?php get_footer(); ?>
