            <footer class="l-grid__item4 p-footer">
                <nav class="p-footer__wrapper">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer_nav' ) ); ?>
                    <small class="p-footer__copyright c-text--ja">Copyright: RaiseTech</small>
                </nav>
            </footer>
            
            <!-- サイドバーの黒い透過 -->
            <div class="c-overlay"></div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>