<?php get_header(); ?>

<!-- contents -->
<article class="l-grid__item2 p-contents">
    <!-- page-title -->
    <div class="p-page-title c-bg">
        <div class="p-page-title__wrapper c-bg--black">
            <h2 class="p-page-title__main c-text__ttl--e">Menu:</h2>
            <h3 class="p-page-title__sub c-text__sub-ttl--ja"><?php echo esc_html( single_term_title( '', false ) ) ?></h3>
        </div>
    </div><!-- ここまでpage-title -->

    <div class="c-contents-wrapper"> <!-- レイアウト用 -->
        <!-- container -->
        <div class="c-container"> <!-- コンテンツ領域用 -->
            <!-- info -->
            <section class="p-info">
                <h2 class="p-info__head c-text__ttl--ja">
                    <?php echo esc_html( single_term_title( '', false ) ) ?>
                </h2>
                <p class="p-info__text c-text--ja">
                    <?php echo category_description(); ?>
                </p>
            </section><!-- ここまでinfo -->

            <!-- menu-list -->
            <section class="p-menu-list">
                <?php get_template_part( 'components/archive' ); ?>
            </section><!-- ここまでmenu-list -->
        </div><!-- ここまでcontainer -->

        <!-- pagination -->
        <div class="c-pagination">
            <?php wp_pagenavi(); ?>
        </div><!-- ここまでpagination -->
    </div>
</article><!-- ここまでcontents -->

<!-- tablet/spの閉じるボタン -->
<div class="p-menu-button__close c-button">
    <div>
        <span></span>
        <span></span>
    </div>
</div><!-- ここまで閉じるボタン -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>