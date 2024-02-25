<header> 

<img class="header-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="logo" class="w-30 h-16">

<?php wp_nav_menu([
    'theme_location' => 'primary'
]); ?>

<?php
      $menu_items = get_theme_menu('primary');
      foreach ($menu_items as $menu_item) {
          echo '<a href="' . $menu_item->url . $menu_item->title . '</a>';
          // <a href="/about" class="text-sm font-semibold leading-6 text-gray-900">About</a>
      }
      ?>

</header>