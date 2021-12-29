<?php get_header(); ?>

<!-- contents -->
<article class="l-grid__item2 p-contents">
    <?php
        if(have_posts()):
            while(have_posts()): the_post(); ?>
                <!-- titlevisual -->
                <?php $img = array(get_template_directory_uri().'/img/page-title-pc.jpg'); ?>
                <div class="p-page-titlevisual c-titlevisual c-bg" style="background-image: url('<?php echo $img[0]; ?>')">
                    <h1 class="p-page-titlevisual__title c-titlevisual__title c-text__ttl--ja">
                        <?php the_title() ?>
                    </h1>
                </div><!-- ここまでtitlevisual -->

                <!-- container -->
                <div class="p-article__container c-container"> <!-- コンテンツ領域用 -->
                    <!-- 記事本文 -->
                    <section class="p-article">
                        <?php the_content() ?>
                    </section><!-- ここまで記事本文 -->
                </div><!-- ここまでcontainer -->
                <?php
            endwhile;
        else:
            ?><p>記事が見つかりませんでした。</p><?php
        endif;
    ?>
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