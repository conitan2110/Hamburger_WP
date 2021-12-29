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
            'category_nav' => esc_html__( 'category navigation', 'develop' ),
            'footer_nav' => esc_html__( 'footer navigation', 'develop' ),
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
        wp_enqueue_script( 'script', get_template_directory_uri(). '/js/script.js', 'jquery', '' , true );
    }
    add_action( 'wp_enqueue_scripts', 'readScript' );

    function custom_main_query ( $query ) {
        if ( is_admin() || ! $query -> is_main_query() )  {
            return;
        }
        if ( $query -> is_search() ) {
            $query -> set( 'posts_per_page', 5 );  // 検索ページのみ投稿表示数を変更
            $query -> set( 'post_type', 'post' );  // 投稿ページのみを検索対象とする
        }
    }
    add_action( 'pre_get_posts', 'custom_main_query' );

    remove_filter( 'term_description', 'wpautop' );  // 説明文からpタグを除去