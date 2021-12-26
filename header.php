<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="UTF-8">
        <!-- <title>Hamburger</title> -->
        <meta name="description" content="ハンバーガーサイト（ダミーサイト）">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- リセットCSS -->
        <!-- <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" /> -->
        <!-- Webフォント -->
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
        <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet"> -->
        <!-- <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css"> -->
        <!-- スタイルシート -->
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <!-- favicon -->
        <!-- <link rel="icon" href="img/favicon.ico"> -->
        <?php wp_deregister_script('jquery'); ?> <!-- WP本体からのjs読込を無効化 -->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="l-grid">
            <!-- header -->
            <header class="l-grid__item1 p-header">
                <h1 class="p-header__logo c-text__ttl--e"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <!-- <form action="" class="p-search-form" name="search">
                    <input type="search" placeholder="" class="p-search-form__input c-form__input">
                    <input type="submit" value="検索" class="p-search-form__button c-form__button">
                </form> -->
                <?php get_search_form(); ?>
                <!-- tablet/spのメニューボタン -->
                <h2 class="p-menu-button__open c-button">Menu</h2>
            </header><!-- ここまでheader -->