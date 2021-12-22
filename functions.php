<?php
function custom_theme_support() {
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'menus' );
    register_nav_menus( array(
        'footer_nav' => esc_html__( 'footer navigation', 'develop' ),
        'category_nav' => esc_html__( 'category navigation', 'develop' ),
    ) );
}
add_action( 'after_setup_theme', 'custom_theme_support' );

function readScript() {
    wp_enqueue_style( 'modern-reset', '//unpkg.com/modern-css-reset/dist/reset.min.css' , array(), '' );
    wp_enqueue_style( 'robot', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap', array(), '' );
    wp_enqueue_style( 'mplus-e', '//mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css', array(), '' );
    wp_enqueue_style( 'mplus-j', '//mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css', array(), '' );
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css' );
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.4.1.min.js', '', '', true );
    wp_enqueue_script( 'script', get_template_directory_uri(). '/js/script.js', 'jquery', $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'readScript' );