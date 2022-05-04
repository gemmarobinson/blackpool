<?php
/**
 * Add ACF options page - we'll put global fields in here
 * so nothing is hard coded (social links, footer address, phone num etc.)
 */
add_action('init', function () {
    if (!function_exists('acf_add_options_page')) {
        return;
    }
    acf_add_options_page([
        'page_title' => 'Website Options',
        'menu_title' => 'Website Options',
        'menu_slug' => 'website-options',
        'capability' => 'edit_posts',
        'parent_slug' => '',
        'position' => 2, // Below 'Dashboard' menu item
        'icon_url' => 'dashicons-admin-generic'
    ]);
    acf_add_options_sub_page([
        'page_title' => 'App Settings',
        'menu_title' => 'App Settings',
        'menu_slug' => 'settings',
        'capability' => 'manage_options',
        'parent_slug' => 'sage'
    ]);
});
/**
 * Place ACF JSON in field-groups directory
 */
add_filter('acf/settings/save_json', function ($path) {
    $path = dirname(__FILE__) . '/field-groups';
    return $path;
});
add_filter('acf/settings/load_json', function ($paths) {
    unset($paths[0]);
    $paths[] = dirname(__FILE__) . '/field-groups';
    return $paths;
});

