<?php

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