<?php
/* Front Page Template */
get_header();
?>

<div class="home-content"> 
<div class="latest-posts">
  <?php get_template_part('components/latest-posts'); ?>
</div>

<div class="trending-posts">
  <?php get_template_part('components/trending-posts'); ?>
</div>


</div>

<?php get_footer(); ?>
