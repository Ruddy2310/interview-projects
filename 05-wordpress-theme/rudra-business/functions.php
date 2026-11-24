<?php
// Theme setup
function rudra_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );
    register_nav_menus( array( 'primary' => __( 'Primary Menu', 'rudra-business' ) ) );
}
add_action( 'after_setup_theme', 'rudra_setup' );

// Styles
function rudra_assets() {
    wp_enqueue_style( 'rudra-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'rudra_assets' );

// Footer widget area
function rudra_widgets() {
    register_sidebar( array(
        'name'          => __( 'Footer Widgets', 'rudra-business' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'rudra_widgets' );
