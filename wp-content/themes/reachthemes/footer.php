<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage reachtheme
 * @since reachtheme0.1
 */
 ?>
    <footer class="font">
        <div class="footer-menu">
            <div class="footer-nav">
                <ul>
                    <a href="<?php bloginfo('url') ?>"><li>ホーム</li></a>
                    <a href="<?php bloginfo('url') ?>/business"><li>事業内容</li></a>
                    <a href="<?php bloginfo('url') ?>/recruitment"><li>採用情報</li></a>
                    <a href="<?php bloginfo('url') ?>/contact"><li>お問い合わせ</li></a>
                </ul>
            </div>
            <p>株式会社reach＠2023</p>
        </div>
    </footer>
    <script
		src="https://code.jquery.com/jquery-1.12.4.min.js"
		integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
		crossorigin="anonymous">
    </script>
    <script src="<?php bloginfo('template_url') ?>/index.js"></script>
    
</body>
</html>

<?php wp_footer(); ?>