<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="ハンバーガーサイト（ダミーサイト）">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_deregister_script('jquery'); ?> <!-- WP本体からのjs読込を無効化 -->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="l-grid">
            <!-- header -->
            <header class="l-grid__item1 p-header">
                <h1 class="p-header__logo c-text__ttl--e"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <?php get_search_form(); ?>
                <!-- tablet/spのメニューボタン -->
                <h2 class="p-menu-button__open c-button">Menu</h2>
            </header><!-- ここまでheader -->