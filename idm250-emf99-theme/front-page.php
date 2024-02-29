<?php
/* Front Page Template */
get_header();
?>

<div class="home-content"> 
    <?php
     get_template_part('components/related-posts'); 
    ?>
  <!-- <p> this is a front-page.php file </p> -->
</div>

<?php get_footer(); ?>
