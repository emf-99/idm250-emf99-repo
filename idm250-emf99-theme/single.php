<?php get_header(); ?>
<h1>

   <?php
    echo get_the_title();
   ?>

</h1>

<div class="meta">
    <p>Posted on <?php echo get_the_date(); ?> by <?php echo get_the_author(); ?></p>
</div>

<!-- get featured image -->
<div class="featured-image">
    <?php
    if(has_post_thumbnail()){
        the_post_thumbnail('custom-thumbnail', array('style' => 'width: 100vw;'));
    }
    ?>
</div>

<div class="content">
      <?php
      echo get_the_content();
      ?>
</div>

<div class="video" id="video">
        <?php
        if (is_active_sidebar('video_widget')) :
        dynamic_sidebar('video_widget');
        endif;
        ?>
</div>

<!-- <p> this is a single.php file </p> -->

<?php get_footer(); ?>
