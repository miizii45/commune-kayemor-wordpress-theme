<?php
/**
 * Theme functions and definitions
 */

// Theme Setup
function kayemor_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register Navigation Menus
    register_nav_menus(array(
        'primary-menu' => __('Menu Principal', 'kayemor'),
        'footer-menu'  => __('Menu Footer', 'kayemor'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'kayemor_theme_setup');

// Enqueue scripts and styles
function kayemor_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), null);

    // Enqueue main stylesheet
    wp_enqueue_style('kayemor-style', get_stylesheet_uri(), array(), '1.0.0');

    // Enqueue Slick Slider CSS
    wp_enqueue_style('slick-slider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
    wp_enqueue_style('slick-slider-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1');

    // Enqueue jQuery (already included with WordPress)
    wp_enqueue_script('jquery');

    // Enqueue Slick Slider JS
    wp_enqueue_script('slick-slider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);

    // Enqueue custom scripts
    wp_enqueue_script('kayemor-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'slick-slider'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'kayemor_scripts');

// Register Custom Post Types
function kayemor_register_post_types() {
    // Projects Post Type
    register_post_type('projects', array(
        'labels' => array(
            'name' => __('Projets', 'kayemor'),
            'singular_name' => __('Projet', 'kayemor'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-portfolio',
    ));

    // News Post Type
    register_post_type('news', array(
        'labels' => array(
            'name' => __('Actualités', 'kayemor'),
            'singular_name' => __('Actualité', 'kayemor'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-aside',
    ));
}
add_action('init', 'kayemor_register_post_types');

// Register Widget Areas
function kayemor_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Principal', 'kayemor'),
        'id'            => 'sidebar-1',
        'description'   => __('Ajoutez des widgets ici.', 'kayemor'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'kayemor_widgets_init');

// Custom excerpt length
function kayemor_custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'kayemor_custom_excerpt_length', 999);

// Custom excerpt more
function kayemor_custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'kayemor_custom_excerpt_more');

// Add custom image sizes
add_image_size('hero-image', 1920, 800, true);
add_image_size('card-image', 400, 300, true);

// Remove emoji scripts
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Remove jQuery Migrate
function kayemor_remove_jquery_migrate($scripts) {
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        if ($script->deps) {
            $script->deps = array_diff($script->deps, array('jquery-migrate'));
        }
    }
}
add_action('wp_default_scripts', 'kayemor_remove_jquery_migrate');
