<?php
    if(have_posts()):
        while(have_posts()): the_post(); ?>
            <div class="p-menu-card c-card">
                <?php
                    if(has_post_thumbnail() ):
                        the_post_thumbnail("large", array("alt" => get_the_title(), "class" => "p-menu-card__thumbnail c-card__thumbnail"));
                    else:
                        ?><img src="<?php echo get_template_directory_uri() ?>/img/no-image.png" class="p-menu-card__thumbnail c-card__thumbnail"><?php
                    endif;
                ?>
                <div class="p-menu-card__contents c-card__contents">
                    <h2 class="p-menu-card__title c-card__title"><?php the_title() ?></h2>
                    <?php the_excerpt() ?>
                    <p class="p-menu-card__button c-card__button">詳しく見る</p>
                    <a href="<?php the_permalink() ?>" class="c-card__link"></a>
                </div>
            </div><?php
        endwhile;
    else:
        ?><p>お探しの商品は見つかりませんでした。</p><?php
    endif;