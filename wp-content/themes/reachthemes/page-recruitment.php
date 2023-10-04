<?php 
/*
Template Name:採用情報
*/
?>

<?php get_header(); ?>
<div class="font">
    <div class="main-top">
        <img src="<?php bloginfo('template_url') ?>/asset/image/adoption.png" alt="top">
        <h2>採用情報</h2>
    </div>

    <div class="main-menu">
        <div class="main-heading">
            <div class="heading-point heading1">
                <ul>
                    <li class="radius-red"></li>
                </ul>
            </div>
            <h3 class="text-underline">イベント事業</h3>
        </div>
        <div class="recrut">
            <h4><?php echo CFS()->get('r-title1'); ?></h4>
            <div class="recrut-content">
                <table>
                    <tr>
                        <th><?php echo CFS()->get('t-title1'); ?></th>
                        <td><?php echo CFS()->get('t-main1'); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo CFS()->get('t-title2'); ?></th>
                        <td><?php echo CFS()->get('t-main2'); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo CFS()->get('t-title3'); ?></th>
                        <td><?php echo CFS()->get('t-main3'); ?></td>
                    </tr>
                    <tr>
                        <th><?php echo CFS()->get('t-title4'); ?></th>
                        <td><?php echo CFS()->get('t-main4'); ?></td>
                    </tr>
                    
                </table>
                <div class="recrut-entry">
                    <a href="<?php bloginfo('url')?>/apply">応募する</a>
                </div>

            </div>

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
                <h3 class="text-underline">本社所在地</h3>
            </div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.031510952464!2d135.6434149763895!3d34.8051490776004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60011c4849dc264d%3A0x1813d096d59e8e76!2z44CSNTczLTAwMzUg5aSn6Ziq5bqc5p6a5pa55biC6auY5aGa55S677yR77yQ4oiS77yV!5e0!3m2!1sja!2sjp!4v1695958800986!5m2!1sja!2sjp" width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
</div>
<?php get_footer(); ?>