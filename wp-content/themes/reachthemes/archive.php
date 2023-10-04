<?php
/**
 * Author"hirayama seiya"
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage reachtheme
 * @since reachtheme0.1
 */
get_header();
 ?>
<div class="font">
    <!-- トップ画像、見出し -->
    <div class="main-top">
        <img src="<?php bloginfo('template_url') ?>/asset/image/entrepreneur-593378_1280.png" alt="top">
        <h2>株式会社reach</h2>
    </div>

    <div class="content4">
        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <div class="content4-content">
                <p class="content4-ymd"><?php echo get_the_date('Y.M.d') ?></p>
                <p class="content4-title"><?php the_title(); ?></p>
            </div>
            </a>
        <?php endwhile; endif; ?>
    </div>


</div>
 <?php
 get_footer();
 ?>
