<?php
/**
 * Enqueue Scripts and Styles
 */
// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

function holdens_enqueue_scripts() {
    // Fonts (highest priority)
    wp_enqueue_style(
        'holdens-fonts',
        ASSETS_URL . '/css/fonts.css',
        [],
        THEME_VERSION
    );

    // Common styles (variables, reset, typography, buttons, etc.)
    wp_enqueue_style(
        'holdens-common-style',
        ASSETS_URL . '/css/common.css',
        array('holdens-fonts'),
        THEME_VERSION
    );

    // Header styles
    wp_enqueue_style(
        'holdens-header-style',
        ASSETS_URL . '/css/header.css',
        array('holdens-common-style'),
        THEME_VERSION
    );

    // Footer styles
    wp_enqueue_style(
        'holdens-footer-style',
        ASSETS_URL . '/css/footer.css',
        array('holdens-common-style'),
        THEME_VERSION
    );

    // Page-specific styles
    holdens_enqueue_page_styles();

    // Only enqueue main.js if it exists
    $main_js_path = THEME_PATH . '/assets/js/main.js';
    if (file_exists($main_js_path)) {
        wp_enqueue_script(
            'holdens-main-js',
            ASSETS_URL . '/js/main.js',
            [],
            THEME_VERSION,
            true
        );

        // Pass basic theme data to JavaScript
        wp_localize_script('holdens-main-js', 'holdens_theme_data', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'theme_url' => THEME_URL,
            'is_mobile' => wp_is_mobile()
        ));
    }

    // AJAX Filter for blog page - DEBUG VERSION
    $template_name = get_current_template_name();
    
    // TEMPORARY: Force load on all pages for testing
    wp_enqueue_script('jquery'); // Make sure jQuery loads
    
    // Check if ajax-filter.js file exists before enqueuing
    $ajax_filter_path = THEME_PATH . '/js/ajax-filter.js';
    if (file_exists($ajax_filter_path)) {
        wp_enqueue_script(
            'holdens-ajax-filter',
            THEME_URL . '/js/ajax-filter.js',
            array('jquery'), // Depend on jQuery
            THEME_VERSION,
            true
        );

        // Localize AJAX filter script
        wp_localize_script('holdens-ajax-filter', 'ajax_filter', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('ajax_filter_nonce')
        ));
        
        // Add debug info to console
        wp_add_inline_script('holdens-ajax-filter', '
            console.log("=== AJAX DEBUG INFO ===");
            console.log("Template name: ' . $template_name . '");
            console.log("Ajax filter file exists and should be loaded");
            console.log("jQuery should be available");
            console.log("========================");
        ', 'before');
    } else {
        // Add debug info if file doesn't exist
        wp_add_inline_script('jquery', '
            console.log("ERROR: ajax-filter.js file not found at: ' . $ajax_filter_path . '");
        ', 'after');
    }

    // Remove jQuery migrate AFTER we've enqueued what we need
    wp_deregister_script('jquery-migrate');
}
add_action('wp_enqueue_scripts', 'holdens_enqueue_scripts');

// Enqueue page-specific styles based on template
function holdens_enqueue_page_styles() {
    $template_name = get_current_template_name();

    // Map templates to CSS files
    $template_styles = array(
        'front-page' => 'home',
        // 'page-about' => 'about',
        'page-contact-us' => 'contact-us',
        'single' => 'single',
        'archive' => 'archive',
        'index' => 'blog'
    );

    // Default to template name if not in map
    $css_file = isset($template_styles[$template_name]) ? $template_styles[$template_name] : $template_name;
    $css_path = ASSETS_URL . '/css/' . $css_file . '.css';

    // Check if file exists before enqueuing
    $file_path = THEME_PATH . '/assets/css/' . $css_file . '.css';
    if (file_exists($file_path)) {
        wp_enqueue_style(
            'holdens-page-style',
            $css_path,
            array('holdens-common-style'),
            THEME_VERSION
        );
    }

    // Also preload footer CSS
    echo '<link rel="preload" href="' . ASSETS_URL . '/css/footer.css" as="style">';
}

// Preload critical resources
function holdens_preload_resources() {
    // Preload critical CSS
    echo '<link rel="preload" href="' . ASSETS_URL . '/css/fonts.css" as="style">';
    echo '<link rel="preload" href="' . ASSETS_URL . '/css/common.css" as="style">';
    echo '<link rel="preload" href="' . ASSETS_URL . '/css/header.css" as="style">';
}
add_action('wp_head', 'holdens_preload_resources', 1);