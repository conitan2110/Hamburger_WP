<?php get_header(); ?>

<!-- contents -->
<article class="l-grid__item2 p-contents">
    <?php
        if(have_posts()):
            while(have_posts()): the_post(); ?>
                <!-- titlevisual -->
                <?php
                    if(has_post_thumbnail()):
                        $id = get_post_thumbnail_id();
                        $img = wp_get_attachment_image_src( $id, 'large');
                    else:
                        $img = array(get_template_directory_uri().'/img/single-title-pc.jpg');
                    endif;
                ?>
                <div class="p-single-titlevisual c-titlevisual c-bg" style="background-image: url('<?php echo $img[0]; ?>')">
                    <h1 class="p-single-titlevisual__title c-titlevisual__title c-text__ttl--ja">
                        <?php the_title() ?>
                    </h1>
                </div><!-- ここまでtitlevisual -->

                <!-- container -->
                <div class="p-article__container c-container"> <!-- コンテンツ領域用 -->
                    <!-- 記事本文 -->
                    <section class="p-article">
                        <?php the_content() ?>
                        <!-- <h2>見出しh2</h2>
                        <p>
                            Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                            Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                            Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                            Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                            Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                        </p>
                        <h3>見出しh3</h3>
                        <h4>見出しh4</h4>
                        <h5>見出しh5</h5>
                        <h6>見出しh6</h6>
                        <blockquote>
                            <p>
                                Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                            </p>
                            <cite>出典元：<a href="#">○○○○○○○○○○○○</a></cite>
                        </blockquote>
                        <img src="img/cooked-foods-big.jpg" alt="写真大" class="big">
                        <div class="flex-row">
                            <img src="img/cooked-foods-mid.png" alt="写真中" class="medium">
                            <p class="flex-row text-right">
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります
                            </p>
                        </div>
                        <div class="flex-row">
                            <p class="flex-row text-left">
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります テキストが入ります テキストが入ります 
                                テキストが入ります テキストが入ります
                            </p>
                            <img src="img/cooked-foods-mid.png" alt="写真中" class="medium">
                        </div>
                        <img src="img/cooked-foods-mid.png" alt="写真中" class="center medium">
                        <div class="flex-row flex-wrap">
                            <img src="img/cooked-foods-small.jpg" alt="写真小" class="small">
                            <img src="img/cooked-foods-small.jpg" alt="写真小" class="small">
                            <img src="img/cooked-foods-small.jpg" alt="写真小" class="small">
                            <img src="img/cooked-foods-small.jpg" alt="写真小" class="small">
                            <img src="img/cooked-foods-small.jpg" alt="写真小" class="small">
                            <img src="img/cooked-foods-small.jpg" alt="写真小" class="small">
                            <img src="img/cooked-foods-small.jpg" alt="写真小" class="small">
                            <img src="img/cooked-foods-small.jpg" alt="写真小" class="small">
                            <img src="img/cooked-foods-small.jpg" alt="写真小" class="small">
                        </div>
                        <ol class="first decimal">
                            <li>リストリストリスト</li>
                            <li>リストリストリスト</li>
                        </ol>
                        <ol class="second decimal">
                            <li>リスト2リスト2リスト2</li>
                            <li>リスト2リスト2リスト2</li>
                        </ol>
                        <ol class="first decimal">
                            <li>リストリストリスト</li>
                            <li>リストリストリスト</li>
                        </ol>
                        <br><br>
                        <ul class="first">
                            <li>リストリストリスト</li>
                            <li>リストリストリスト</li>
                        </ul>
                        <ul class="second">
                            <li>リスト2リスト2リスト2</li>
                            <li>リスト2リスト2リスト2</li>
                        </ul>
                        <ul class="first">
                            <li>リストリストリスト</li>
                            <li>リストリストリスト</li>
                        </ul>
                        <br><br>
                        <code>
                            <pre>&lt;html&gt;<br>    &lt;head&gt;<br>    &lt;/head&gt;<br>    &lt;body&gt;<br>    &lt;/body&gt;<br>&lt;/html&gt;</pre>
                        </code>
                        <table>
                            <tr><td class="td_left">テーブル</td><td class="td_right">テーブル</td></tr>
                            <tr><td class="td_left">テーブル</td><td class="td_right">テーブル</td></tr>
                            <tr><td class="td_left">テーブル</td><td class="td_right">テーブル</td></tr>
                            <tr><td class="td_left">テーブル</td><td class="td_right">テーブル</td></tr>
                        </table>
                        <input  type="submit" value="ボタン" class="p-article__button c-form__button">
                        <p class="c-text--e"><b>boldboldboldboldboldboldbold</b></p>
                        <br><br><br><br><br><br><br><br><br> -->
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