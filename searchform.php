<!-- <form action="" class="p-search-form" name="search">
    <input type="search" placeholder="" class="p-search-form__input c-form__input">
    <input type="submit" value="検索" class="p-search-form__button c-form__button">
</form> -->

<form role="search" method="get" class="search-form p-search-form" action="<?php echo home_url( '/' ); ?>">
	<label><span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span></label>
	<input type="search" class="search-field p-search-form__input c-form__input" placeholder="<?php echo esc_attr_x( '検索 …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	<input type="submit" class="search-submit p-search-form__button c-form__button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>