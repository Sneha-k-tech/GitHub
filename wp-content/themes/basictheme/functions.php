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
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');