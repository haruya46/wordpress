<?php 
/*
Template Name:事業内容
*/
?>
<?php get_header(); ?>
    <!-- トップ画像、見出し -->
    <div class="font">
        <div class="main-top">
            <img src="<?php bloginfo('template_url') ?>/asset/image/entrepreneur-593378_1280.png" alt="top">
            <h2>事業内容</h2>
        </div>

        <div class="main-menu">
            <div class="main-heading">
                <div class="heading-point heading1">
                    <ul>
                        <li class="radius-red"></li>
                    </ul>
                </div>
                <h3 class="text-underline"><?php echo CFS()->get('g-title1'); ?></h3>
            </div>
            <div class="content1">
                <p><?php echo CFS()->get('g-main1'); ?></p>
            </div>
        </div>

        <div class="main-menu">
            <div class="main-heading">
                <div class="heading-point heading2">
                    <ul>
                        <li class="radius-red"></li>
                        <li class="radius-red"></li>
                    </ul>
                </div>
                <h3 class="text-underline"><?php echo CFS()->get('g-title2'); ?></h3>
            </div>
            <div class="content1">
                <p><?php echo CFS()->get('g-main2'); ?></p>
            </div>
        </div>

        <div class="main-menu">
            <div class="main-heading">
                <div class="heading-point heading3">
                    <ul>
                        <li class="radius-red"></li>
                        <li class="radius-red"></li>
                        <li class="radius-red"></li>
                    </ul>
                </div>
                <h3 class="text-underline"><?php echo CFS()->get('g-title3'); ?></h3>
            </div>
            <div class="content1">
                <p><?php echo CFS()->get('g-main3'); ?></p>
            </div>
        </div>
    </div>

<?php get_footer(); ?>