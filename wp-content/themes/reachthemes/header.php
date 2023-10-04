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
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社reach</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css?<?php echo filemtime( get_stylesheet_directory() . '/style.css'); ?>">

    <script>
        // フォント： 
        (function(d) {
          var config = {
            kitId: 'diq2pfe',
            scriptTimeout: 3000,
            async: true
          },
          h=d.documentElement,t=setTimeout(function()
          {
            h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";
        },config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";
        tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;
            if(f||a&&a!="complete"&&a!="loaded")
            return;f=true;clearTimeout(t);
            try{Typekit.load(config)}
            catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
      </script>
      <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header-top">
            <img src="<?php bloginfo('template_url') ?>/asset/image/reach.png" alt="logo">
            <h1 class="font">株式会社reach</h1>

            <ul class="nav-menu font">
                <a href="<?php bloginfo('url') ?>"><li>ホーム</li></a>

                <a href="<?php bloginfo('url') ?>/business"><li>事業内容</li></a>

                <a href="<?php bloginfo('url') ?>/recruitment"><li>採用情報</li></a>
                
                <a href="<?php bloginfo('url') ?>/contact"><li>お問い合わせ</li></a>
            </ul>
            <div class="nav-menu-mo">
                <div class="openbtn"><span></span><span></span><span></span></div>
            </div>
            <div class="msk">
                <ul class="nav-menu2 font">
                    <li id="nav-menu-close">閉じる<span>&gt;</span></li>

                    <a href="<?php bloginfo('url') ?>"><li>ホーム<span>&gt;</span></li></a>

                    <a href="<?php bloginfo('url') ?>/business"><li>事業内容<span>&gt;</span></li></a>

                    <a href="<?php bloginfo('url') ?>/recruitment"><li>採用情報<span>&gt;</span></li></a>
                    
                    <a href="<?php bloginfo('url') ?>/contact"><li>お問い合わせ<span>&gt;</span></li></a>
                </ul>
            </div>
            <div class="msk2">
            </div>
        </div>
        
    </header>