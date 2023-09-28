<?php get_header(); ?>
<div class="font">
    <div class="main-top">
        <img src="<?php bloginfo('template_url') ?>/asset/image/contact.png" alt="top">
        <h2>応募フォーム</h2>
    </div>
    <div>
        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>