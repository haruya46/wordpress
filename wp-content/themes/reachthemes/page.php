<?php get_header(); ?>
<div>
    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>