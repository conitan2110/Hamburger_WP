            <!-- footer -->
            <footer class="l-grid__item4 p-footer">
                <div class="p-footer__wrapper">
                    <!-- <ul class="p-footer__menu">
                        <li class="p-footer__menu-li c-text--ja">ショップ情報</li>
                        <li class="p-footer__menu-li c-text--ja">ヒストリー</li>
                    </ul> -->
                    <?php wp_nav_menu( array( 'theme_location' => 'footer_nav' ) ); ?>
                    <small class="p-footer__copyright c-text--ja">Copyright: RaiseTech</small>
                </div>
            </footer><!-- ここまでfooter -->
            
            <!-- サイドバーの黒い透過 -->
            <div class="c-overlay"></div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>