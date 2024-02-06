<?php get_header('simple'); ?>

<div class="container mx-auto my-8 text-center">
    <h1 class="text-4xl font-bold mb-4">404 Not Found</h1>
    <p class="text-lg mb-6">The page you are looking for might be in another castle.</p>
    <p class="mb-8"><a href="<?php echo home_url(); ?>" class="text-blue-500 underline">Go back to the home page</a></p>
    <?php wp_nav_menu([
    'theme_location' => '404-menu'
]); ?>
</div>

<?php get_footer(); ?>