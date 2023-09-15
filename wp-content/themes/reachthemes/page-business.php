<?php 
/*
Template Name:事業内容
*/
?>
<?php get_header(); ?>
        <div class="main-top">
            <img src="<?php bloginfo('template_url') ?>../image/business.png" alt="top">
            <h1 class="font">事業内容</h1>

        </div>
        <div class="menu1">
            <div class="radius-red menudot"></div>
            <h2 class="text-underline"><?php echo CFS()->get('g-title1'); ?></h2>
            <p><?php echo CFS()->get('g-main1'); ?></p>
        </div>
        <div class="menu1">
            <div class="radius-red menudot"></div>
            <h2 class="text-underline"><?php echo CFS()->get('g-title2'); ?></h2>
            <p><?php echo CFS()->get('g-main2'); ?></p>
        </div>
        <div class="menu1">
            <div class="radius-red menudot"></div>
            <h2 class="text-underline"><?php echo CFS()->get('g-title3'); ?></h2>
            <p><?php echo CFS()->get('g-main3'); ?></p>
        </div>
    </main>

<?php get_footer(); ?>