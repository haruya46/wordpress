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

        <div class="main-menu">
            <div class="main-heading">
                <div class="heading-point heading1">
                    <ul>
                        <li class="radius-red"></li>
                    </ul>
                </div>
                <h3 class="text-underline">企業理念</h3>
            </div>
            <div class="content1">
                <p>持続可能な社会を目指します</p>
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
                <h3 class="text-underline">会社概要</h3>
            </div>
            <div class="content2">
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

        <div class="main-menu">
            <div class="main-heading">
                <div class="heading-point heading3">
                    <ul>
                        <li class="radius-red"></li>
                        <li class="radius-red"></li>
                        <li class="radius-red"></li>
                    </ul>
                </div>
                <h3 class="text-underline">事業内容</h3>
            </div>
            <div class="content3">
                <div class="content3-item">
                    <img class="content3-img" src="<?php bloginfo('template_url') ?>/asset/image/business.jpg" alt="business">
                    <h3>イベント事業</h3>
                    <a href="#">
                        詳細はこちら
                    </a>
                </div>

                <div class="content3-item">
                    <img class="content3-img" src="<?php bloginfo('template_url') ?>/asset/image/business.jpg" alt="business">
                    <h3>ゴルフボールダイバー</h3>
                    <a href="#">
                        詳細はこちら
                    </a>
                </div>
            </div>
        </div>

        <div class="main-menu">
            <div class="main-heading">
                <div class="heading-point heading4">
                    <ul>
                        <li class="radius-red"></li>
                        <li class="radius-red"></li>
                        <li class="radius-red"></li>
                        <li class="radius-red"></li>
                    </ul>
                </div>
                <h3 class="text-underline">お知らせ</h3>
            </div>
            <div class="content4">
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="content4-content">
                        <p class="content4-ymd"><?php echo get_the_date('Y.M.d') ?></p>
                        <p class="content4-title"><?php the_title(); ?></p>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
</div>
 <?php
 get_footer();
 ?>