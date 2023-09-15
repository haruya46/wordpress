<?php get_header(); ?>
        <div class="main-top">
            <img src="<?php bloginfo('template_url') ?>../image/contact.png" alt="top">
            <h1 class="font">お問い合わせ</h1>
        </div>
        <div>
    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>
        
    </main>

<?php get_footer(); ?>