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
<main>
        <div class="main-top">
            <img src="<?php bloginfo('template_url') ?>../image/entrepreneur-593378_1280.png" alt="top">
            <h1 class="font">株式会社reach</h1>

        </div>
        <div class="menu1">
            <div class="radius-red menudot"></div>
            <h2 class="text-underline">企業理念</h2>
            <p>持続可能な社会を目指します</p>
        </div>
        <div class="menu1">
            <div class="radius-red menudot"></div>
            <h2 class="text-underline">会社概要</h2>
            <div class="table">
                <table>
                    <tbody>
                    <tr>
                        <th>会社名</th>
                        <td>株式会社reach</td>
                    </tr>
                    <tr>
                        <th>代表者</th>
                        <td>池田　凌大</td>
                    </tr>
                    <tr>
                        <th>本社所在地</th>
                        <td>レンタルオフィス</td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td>2023年10月1日</td>
                    </tr>
                    <tr>
                        <th>従業員数</th>
                        <td>1人</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="menu1">
            <div class="radius-red menudot"></div>
            <h2 class="text-underline">事業内容</h2>
            <div class="business">
                <img src="<?php bloginfo('template_url') ?>../image/business.jpg" alt="business">
                <h2>イベント事業</h2>
                <a href="#">
                    <button>詳細はこちら</button>
                </a>
                <img src="<?php bloginfo('template_url') ?>../image/business.jpg" alt="business">
                <h2>イベント事業</h2>
                <a href="#">
                    <button>詳細はこちら</button>
                </a>
            </div>
        </div>

        <div class="menu1 ">
            <div class="radius-red menudot"></div>
            <h2 class="text-underline">お知らせ</h2>
            <div class="news">
            <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
            <div>
                    <p><?php echo get_the_date('Y.M.d') ?></p>
                    <p><?php the_title(); ?></p>
                </div>

            <?php endwhile; endif; ?>
        </div>
            </div>
    </main>
 <?php
 get_footer();
 ?>