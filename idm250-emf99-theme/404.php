<?php get_header(); ?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/styles/main.css">
<div class="container mx-auto my-8 text-center">
    <h2 class="four_sub_text"> oops!</h2>
    <h1 class="four_main_text">404</h1>
    <h2 class="four_sub_text"> page not found!</h2>
    <p class="four_text">Seems like you’ve ventured too far...<br>Click here to return to the home page</p>
    <div class="center_home_button">
        <button class="return_home_button"><a href="<?php echo home_url(); ?>">return home</a></button>
    </div>

</div>

<?php get_footer(); ?>