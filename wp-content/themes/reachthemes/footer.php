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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('stylesheet_url');?>/index.js"></script> 
</body>
</html>

<?php wp_footer(); ?>