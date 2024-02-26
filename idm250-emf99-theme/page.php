<?php get_header(); ?>
<h1>

   <?php
    echo get_the_title();
   ?>

</h1>



<div class="content">
<main class="flex flex-row">

  <div class="w-2/3">
            <?php
            echo get_the_content();
            ?>
  </div>

  <aside class="w-1/3">
            <?php
            if (is_active_sidebar('left_sidebar')) :
            dynamic_sidebar('left_sidebar');
            endif;
            ?>
  </aside>

</main>

</div>

<p> this is a page.php file </p>

<?php get_footer(); ?>
