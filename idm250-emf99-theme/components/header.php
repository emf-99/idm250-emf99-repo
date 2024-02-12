<header> 

<img class="header-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="logo" class="w-30 h-16">

<?php wp_nav_menu([
    'theme_location' => 'primary'
]); ?>

</header>