<footer>

<div class="footer-container">
    <div class="footer-text">
        <p class="date-footer"> &copy <?php echo date('Y'); ?></p>
        <p class="class-footer"> idm250 </p>
        <p class="name-footer"> ella fromherz </p>
    </div>

    <img class="footer-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="logo">

    <?php wp_nav_menu([
    'theme_location' => 'footer'
]); ?>
</div>

</footer>
<?php wp_footer(); ?>

</body>

</html>