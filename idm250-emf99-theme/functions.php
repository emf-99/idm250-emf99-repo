<?php

/**
 * Theme initialization
 */
require get_template_directory() . '/includes/setup.php';

/**
 * Register custom post types
 */
require get_template_directory() . '/includes/post-types.php';

/**
 * Custom Helper functions
 */
require get_template_directory() . '/includes/helper.php';

// add sidebar and widget
function add_widgets()
{
    register_sidebar([
        'name' => 'Right Sidebar',
        'id' => 'right_sidebar',
    ]);

    register_sidebar([
        'name' => 'Left Sidebar',
        'id' => 'left_sidebar',
    ]);
}
add_action('widgets_init', 'add_widgets');



