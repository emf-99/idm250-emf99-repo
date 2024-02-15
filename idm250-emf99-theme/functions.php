<?php

function theme_scripts_and_styles () 
{
  wp_enqueue_script('emf99-tailwind-script', 'https://cdn.tailwindcss.com');
  wp_enqueue_script('emf99-main-script', get_template_directory_uri() . '/dist/scripts/main.js', [], false, ['in_footer' => true]);

  wp_enqueue_style('emf99-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
  wp_enqueue_style('emf99-main-style', get_template_directory_uri() . '/dist/styles/main.css');

}

add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');


function register_theme_menus()
{
    register_nav_menus([
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
        '404-menu' => '404 Menu'
    ]);
}

add_action('init', 'register_theme_menus');



/**
 * Get menu items as a flat array to use for custom markup
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 * @param string $menu_name - Name of the registered menu id
 * @return array $menu_items - Array of WP_Post objects.
 */
function get_theme_menu($menu_name)
{
    // Get menu items as a flat array
    $locations = get_nav_menu_locations();
    // If menu doesn't exist, let's just return an empty array
    if (!isset($locations[$menu_name])) {
        return [];
    }
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
    return $menu_items;
}



// Enable featured images
add_theme_support('post-thumbnails');

// enable excerpt
add_post_type_support('page', 'excerpt');

// create custom post type called portfolio
function create_custom_post_type()
{
    $post_type_name = 'portfolio';
    $post_type_options = [
        'labels' => [
            'name' => __('Projects'),
            'singular_name' => __('Project'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'rewrite' => ['slug' => 'portfolio'],
        'show_in_rest' => true,

    ];

    register_post_type($post_type_name, $post_type_options);

    $post_type_name = 'menu';
    $post_type_options = [
        'labels' => [
            'name' => __('Menu'),
            'singular_name' => __('Menu'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'rewrite' => ['slug' => 'menu'],
        'show_in_rest' => true,

    ];

    register_post_type($post_type_name, $post_type_options);
}
add_action('init', 'create_custom_post_type');

/**
 * Retrieves the URL and alt text for a post's featured image.
 *
 * This function checks if the specified post has a featured image set.
 * If an image is found, it retrieves the full-size image URL and its alt text.
 * If no featured image is set, it returns false.
 *
 * @param int $post_id The ID of the post for which to retrieve the featured image data.
 * @return array|bool Returns an associative array with 'url' and 'alt' keys if a featured image exists,
 *                    otherwise returns false.
 */
function get_featured_image_data($post_id)
{
    // Ensure there is a post thumbnail before proceeding
    if (has_post_thumbnail($post_id)) {
        // Get the ID of the post's featured image
        $post_thumbnail_id = get_post_thumbnail_id($post_id);

        // Get the URL of the featured image
        $featured_image_data = wp_get_attachment_image_src($post_thumbnail_id, 'full'); // 'full' can be changed to any registered image size

        // Get the alt text of the featured image
        $featured_image_alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);

        // Return an array with the image URL and alt text
        return [
            'url' => $featured_image_data[0],
            'alt' => $featured_image_alt,
        ];
    }

    // Return false if there is no post thumbnail
    return false;
}