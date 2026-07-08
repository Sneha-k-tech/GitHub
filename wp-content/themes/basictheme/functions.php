<?php

// Theme Support
function my_custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register Navigation Menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme'),
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

// Enqueue Styles and Scripts
function my_custom_theme_scripts() {

    // Google Fonts: Poppins and Merriweather
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
        array(),
        null
    );

    // Bootstrap 5 CSS (CDN)
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Theme's main stylesheet (style.css in theme root - required by WP)
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Your custom main.css (inside /css/ subfolder)
    wp_enqueue_style(
        'custom-main-css',
        get_template_directory_uri() . '/css/main.css',
        array('bootstrap-css'), // loads after bootstrap so it can override
        '1.0.0'
    );

    // Bootstrap 5 JS Bundle (includes Popper) (CDN)
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');