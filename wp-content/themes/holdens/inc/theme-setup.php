<?php
/**
 * Theme Setup
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

function holdens_theme_setup() {
    
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    // Add custom image sizes
    // add_image_size('hero-image', 1920, 1080, true);
    // add_image_size('card-image', 600, 400, true);
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'holdens'),
        'footer' => __('Footer Menu', 'holdens'),
    ));
    
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Remove default WordPress styles/scripts we don't need
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    
}
add_action('after_setup_theme', 'holdens_theme_setup');

// Clean up WordPress head
function holdens_clean_head() {
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
}
add_action('init', 'holdens_clean_head');

// Set custom image sizes - more aggressive approach
function holdens_setup_image_sizes() {
    // Set our custom sizes
    update_option('thumbnail_size_w', 600);
    update_option('thumbnail_size_h', 9999);
    update_option('thumbnail_crop', 0);
    
    update_option('medium_size_w', 1024);
    update_option('medium_size_h', 9999);
    
    update_option('large_size_w', 1600);
    update_option('large_size_h', 9999);
    
    // Completely disable medium_large
    update_option('medium_large_size_w', 0);
    update_option('medium_large_size_h', 0);
}
add_action('after_setup_theme', 'holdens_setup_image_sizes');

// Aggressively remove unwanted sizes at multiple levels
function holdens_remove_unwanted_sizes($sizes) {
    // Remove medium_large completely
    unset($sizes['medium_large']);
    // Remove other unwanted sizes
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'holdens_remove_unwanted_sizes');
add_filter('intermediate_image_sizes', 'holdens_remove_unwanted_sizes');

// Remove at the global level
function holdens_unregister_sizes() {
    remove_image_size('medium_large');
    remove_image_size('1536x1536');
    remove_image_size('2048x2048');
}
add_action('init', 'holdens_unregister_sizes');

// Disable big image threshold completely
add_filter('big_image_size_threshold', '__return_false');

// Nuclear option - prevent medium_large from being added to the global array
function holdens_filter_image_sizes($sizes) {
    return array_diff($sizes, array('medium_large'));
}
add_filter('intermediate_image_sizes', 'holdens_filter_image_sizes', 999);