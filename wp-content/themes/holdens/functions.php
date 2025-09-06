<?php
/**
 * Holdens Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme setup
require_once get_template_directory() . '/inc/theme-setup.php';

// Enqueue scripts and styles
require_once get_template_directory() . '/inc/enqueue-scripts.php';

// Add page-specific script loading function (for future use)
function load_page_scripts($scripts = []) {
    foreach($scripts as $script) {
        if (wp_script_is($script, 'registered')) {
            wp_enqueue_script($script);
        }
    }
}

// Get current template name helper
function get_current_template_name() {
    global $template;
    return basename($template, '.php');
}

// Add theme constants
define('THEME_VERSION', '1.0.0');
define('THEME_PATH', get_template_directory());
define('THEME_URL', get_template_directory_uri());
define('ASSETS_URL', THEME_URL . '/assets');

// Disable WordPress emoji scripts (for performance)
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// Disable Gutenberg editor
add_filter('use_block_editor_for_post', '__return_false', 10);


add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});


function remove_comments(){
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'remove_comments' );


// Add custom image sizes
add_action('after_setup_theme', function() {
    add_image_size('custom_small', 600, 9999, false);   // 600px wide, unlimited height
    add_image_size('custom_medium', 900, 9999, false);  // 900px wide, unlimited height
    add_image_size('custom_large', 1600, 9999, false);  // 1600px wide, unlimited height
});

// Optionally, make these sizes selectable in the media library
add_filter('image_size_names_choose', function($sizes) {
    return array_merge($sizes, [
        'custom_small' => __('Small (600px wide)'),
        'custom_medium' => __('Medium (900px wide)'),
        'custom_large' => __('Large (1600px wide)'),
    ]);
});

function register_mobile_menu() {
    register_nav_menu('mobile-menu', __('Mobile Menu', 'text_domain'));
}
add_action('after_setup_theme', 'register_mobile_menu');

// version number for main logo
function add_logo_version() {
    $logo_version = '?v=' . time(); // or use a manual version like '?v=2.1'
    return $logo_version;
}

// Register Custom Post Type for Clients
function create_client_post_type() {
    register_post_type('clients',
        array(
            'labels' => array(
                'name' => __('Clients'),
                'singular_name' => __('Client')
            ),
            'public' => true,
            'has_archive' => false,
            'publicly_queryable' => false, // This prevents single pages
            'supports' => array('title', 'thumbnail'),
            'menu_icon' => 'dashicons-businessman'
        )
    );
}
add_action('init', 'create_client_post_type');

// Register Custom Post Type for Staff
function create_staff_post_type() {
    register_post_type('staff',
        array(
            'labels' => array(
                'name' => __('Staff'),
                'singular_name' => __('Staff Member')
            ),
            'public' => true,
            'has_archive' => false,
            'publicly_queryable' => false,
            'supports' => array('title', 'thumbnail'),
            'menu_icon' => 'dashicons-groups'
        )
    );
}
add_action('init', 'create_staff_post_type');

// Register Custom Post Type for Projects
function create_project_post_type() {
    register_post_type('projects',
        array(
            'labels' => array(
                'name' => __('Projects'),
                'singular_name' => __('Project'),
                'add_new' => __('Add New Project'),
                'add_new_item' => __('Add New Project'),
                'edit_item' => __('Edit Project'),
                'view_item' => __('View Project'),
                'search_items' => __('Search Projects'),
                'not_found' => __('No projects found'),
                'not_found_in_trash' => __('No projects found in trash')
            ),
            'public' => true,
            'has_archive' => true,
            'publicly_queryable' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'menu_icon' => 'dashicons-portfolio',
            'rewrite' => array('slug' => 'projects')
        )
    );
}
add_action('init', 'create_project_post_type');

// AJAX handler for filtering posts
// AJAX handler for filtering posts
function ajax_filter_posts() {
    // Check nonce for security
    if (!wp_verify_nonce($_POST['nonce'], 'ajax_filter_nonce')) {
        wp_die('Security check failed');
    }
    
    $category = sanitize_text_field($_POST['category']);
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    
    // Set up query arguments
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 12,
        'paged' => $page,
        'post_status' => 'publish'
    );
    
    // Add category filter if not 'all'
    if ($category !== 'all') {
        $args['category_name'] = $category;
    }
    
    $query = new WP_Query($args);
    
    $posts_html = '';
    $pagination_html = '';
    
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            
            // Get post categories for data attribute
            $categories = get_the_category();
            $category_slugs = array();
            if ($categories) {
                foreach($categories as $cat) {
                    $category_slugs[] = $cat->slug;
                }
            }
            
            // Build the post HTML - MATCH the index.php structure exactly
            $posts_html .= '<a href="' . get_permalink() . '" class="post-item card" data-category="' . implode(' ', $category_slugs) . '">';
            
            if (has_post_thumbnail()) {
                $posts_html .= '<div class="post-thumbnail">';
                $posts_html .= get_the_post_thumbnail(get_the_ID(), 'medium');
                $posts_html .= '</div>';
            }
            
            $posts_html .= '<div class="post-content">';
            $posts_html .= '<h2>' . get_the_title() . '</h2>';
            $posts_html .= '<p>' . wp_trim_words(get_the_excerpt(), 16, '...') . '</p>';
            
            // Categories
            $posts_html .= '<div class="post-categories">';
            $categories = get_the_category();
            if ($categories) {
                foreach($categories as $cat) {
                    $posts_html .= esc_html($cat->name) . ' ';
                }
            }
            $posts_html .= '</div>';
            
            // Read time - use get_field() for ACF
            $posts_html .= '<div class="read">';
            $read_time = get_field('read_time');
            if ($read_time) {
                $posts_html .= '<span>' . esc_html($read_time) . ' min read</span>';
            } else {
                $posts_html .= '<span>5 min read</span>'; // fallback
            }
            $posts_html .= '</div>';
            
            $posts_html .= '<div class="button readButton">Read blog</div>';
            $posts_html .= '</div>';
            $posts_html .= '</a>';
        }
        
        // Generate pagination
        if ($query->max_num_pages > 1) {
            $pagination_html = paginate_links(array(
                'total' => $query->max_num_pages,
                'current' => $page,
                'prev_text' => 'Prev',
                'next_text' => 'Next',
                'type' => 'plain'
            ));
        }
        
        wp_reset_postdata();
        
        wp_send_json_success(array(
            'posts' => $posts_html,
            'pagination' => $pagination_html
        ));
    } else {
        wp_send_json_error('No posts found');
    }
}

// Hook for logged in users
add_action('wp_ajax_filter_posts', 'ajax_filter_posts');
// Hook for non-logged in users
add_action('wp_ajax_nopriv_filter_posts', 'ajax_filter_posts');


// Force jQuery in header
add_action('wp_head', function() {
    echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>';
    echo '<script>console.log("jQuery manually loaded, version:", jQuery.fn.jquery);</script>';
});

// Also manually add our AJAX script
add_action('wp_footer', function() {
    if (is_home() || get_current_template_name() === 'index') {
        echo '<script>
            var ajax_filter = {
                ajax_url: "' . admin_url('admin-ajax.php') . '",
                nonce: "' . wp_create_nonce('ajax_filter_nonce') . '"
            };
        </script>';
        echo '<script src="' . THEME_URL . '/js/ajax-filter.js?v=' . time() . '"></script>';
    }
});

// Set default image size for media uploads in editor
add_action('after_setup_theme', function() {
    update_option('image_default_size', 'full');
});

// Alternative method - set default link and size options
add_action('after_setup_theme', function() {
    update_option('image_default_align', 'none');
    update_option('image_default_link_type', 'none');
    update_option('image_default_size', 'full');
});