<?php get_header(); ?>

<!-- contents -->
<article class="l-grid__item2 p-contents">
    <!-- page-title -->
    <div class="p-page-title c-bg">
        <div class="p-page-title__wrapper c-bg--black">
            <h2 class="p-page-title__main c-text__ttl--e">Menu:</h2>
            <h3 class="p-page-title__sub c-text__sub-ttl--ja">チーズバーガー</h3>
        </div>
    </div><!-- ここまでpage-title -->

    <div class="c-contents-wrapper"> <!-- レイアウト用 -->
        <!-- container -->
        <div class="c-container"> <!-- コンテンツ領域用 -->
            <!-- info -->
            <section class="p-info">
                <h2 class="p-info__head c-text__ttl--ja">小見出しが入ります</h2>
                <p class="p-info__text c-text--ja">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
            </section><!-- ここまでinfo -->

            <!-- menu-list -->
            <section class="p-menu-list">
                <?php get_template_part( 'menu-card' ); ?>
                <!-- <div class="p-menu-card c-card">
                    <img src="img/menu-thumbnail.jpg" alt="商品サムネイル" class="p-menu-card__thumbnail c-card__thumbnail">
                    <div class="p-menu-card__contents c-card__contents">
                        <h2 class="p-menu-card__title c-card__title">チーズバーガー</h2>
                        <h3 class="p-menu-card__subtitle c-card__subtitle">小見出しが入ります</h3>
                        <p class="p-menu-card__description c-card__description">
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
                        <p class="p-menu-card__button c-card__button">詳しく見る</p>
                        <a href="#" class="c-card__link"></a>
                    </div>
                </div>
                <div class="p-menu-card c-card">
                    <img src="img/menu-thumbnail.jpg" alt="商品サムネイル" class="p-menu-card__thumbnail c-card__thumbnail">
                    <div class="p-menu-card__contents c-card__contents">
                        <h2 class="p-menu-card__title c-card__title">ダブルチーズバーガー</h2>
                        <h3 class="p-menu-card__subtitle c-card__subtitle">小見出しが入ります</h3>
                        <p class="p-menu-card__description c-card__description">
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
                        <p class="p-menu-card__button c-card__button">詳しく見る</p>
                        <a href="#" class="c-card__link"></a>
                    </div>
                </div>
                <div class="p-menu-card c-card">
                    <img src="img/menu-thumbnail.jpg" alt="商品サムネイル" class="p-menu-card__thumbnail c-card__thumbnail">
                    <div class="p-menu-card__contents c-card__contents">
                        <h2 class="p-menu-card__title c-card__title">スペシャルチーズバーガー</h2>
                        <h3 class="p-menu-card__subtitle c-card__subtitle">小見出しが入ります</h3>
                        <p class="p-menu-card__description c-card__description">
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
                        <p class="p-menu-card__button c-card__button">詳しく見る</p>
                        <a href="#" class="c-card__link"></a>
                    </div>
                </div> -->
            </section><!-- ここまでmenu-list -->
        </div><!-- ここまでcontainer -->

        <!-- pagination -->
        <div class="c-pagination">
            <p class="c-pagination__page-count">page 1/10</p>
            <ul class="c-pagination__ul">
                <li class="c-pagination__li">≪</li>
                <li class="c-pagination__li">1</li>
                <li class="c-pagination__li">2</li>
                <li class="c-pagination__li">3</li>
                <li class="c-pagination__li">4</li>
                <li class="c-pagination__li">5</li>
                <li class="c-pagination__li">6</li>
                <li class="c-pagination__li">7</li>
                <li class="c-pagination__li">8</li>
                <li class="c-pagination__li">9</li>
                <li class="c-pagination__li">≫</li>
            </ul>
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