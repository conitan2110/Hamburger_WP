<?php get_header(); ?>

<!-- contents -->
<article class="l-grid__item2 p-contents">
    <!-- page-title -->
    <div class="p-page-title c-bg">
        <div class="p-page-title__wrapper c-bg--black">
            <h2 class="p-page-title__main c-text__ttl--e">Sorry...</h2>
        </div>
    </div><!-- ここまでpage-title -->

    <div class="c-contents-wrapper"> <!-- レイアウト用 -->
        <!-- container -->
        <div class="c-container"> <!-- コンテンツ領域用 -->
            <!-- info -->
            <section class="p-info">
                <h2 class="p-info__text c-text--ja" style="font-size: 16px">
                    お探しのページが見つかりませんでした。
                </h2>
            </section><!-- ここまでinfo -->
        </div><!-- ここまでcontainer -->
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