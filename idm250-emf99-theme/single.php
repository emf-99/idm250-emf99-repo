<?php get_header(); ?>
<h1>

   <?php
    echo get_the_title();
   ?>

</h1>

<div class="content">
      <?php
      echo get_the_content();
      ?>
</div>

<p> this is a single.php file </p>

<?php get_footer(); ?>
