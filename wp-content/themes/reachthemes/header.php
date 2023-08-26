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
 <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>

<body>
  <header id="header">
    <div id="header-top">
        <h1><?php echo bloginfo('name'); ?></h1>
        <nav class="navi">
          <ul class="wrapper">
            <li><a href="<?php echo esc_url(home_url('/category/news/')); ?>">ホーム</a></li>
            <li><a href="<?php echo esc_url(home_url('/category/column/')); ?>">会社概要</a></li>
            <li><a href="<?php echo esc_url(home_url('/category/hotel/')); ?>">HOTEL</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a></li>
          </ul>
        </nav>
    </div>

  </header>