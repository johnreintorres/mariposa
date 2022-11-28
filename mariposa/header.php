<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
  <title>KTV</title>
  <?php wp_head(); ?>
  </head>
<body>
  <p id="topbutton" style="display: none;">
    <a href="#pagetop" onclick="$('html,body').animate({ scrollTop: 0 }); return false;">▲<span>TOP</span></a>
    </p>
  <div id="pagetop"></div>
  <nav>
    <div class="nav-area">
      <ul class="nav-area-ul"> 
        <a href="<?php echo site_url(''); ?>/index"><img class="nav-logo" src="<?php echo get_template_directory_uri();?>/assets/images/MARI.png" alt=""></a>
        <a href="<?php echo site_url(''); ?>/wordpress/online-caba"><li>Online Caba</li></a>
        <a href="<?php echo site_url(''); ?>/wordpress/cast-list"><li>Cast List</li></a>
        <a href="<?php echo site_url(''); ?>/wordpress/cast-recruit"><li>Cast Recruit</li></a>
        <a href="<?php echo site_url(''); ?>/wordpress/staff-recruit"><li>Staff Recruit</li></a>
        <a href="<?php echo site_url(''); ?>/wordpress/rooms"><li>Rooms</li></a>
        <a href="<?php echo site_url(''); ?>/wordpress/system"><li>System</li></a>
        <a href="<?php echo site_url(''); ?>/wordpress/diary-list"><li>Diary</li></a>


      </ul>
      <div id="navbar" class="menu-area-btn">
                  <div id="menu-icon">
                    <div class="icon-set">
                      <div class="nav-icon-layout">
                    </div>
                      <a class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                      </a>
                    </div>
                  </div>
                  <div id="slideout-menu">
                <ul>
                <a href="<?php echo site_url(''); ?>/index"><img class="nav-logo" src="<?php echo get_template_directory_uri();?>/assets/images/MARI.png" alt=""></a>
                <a href="<?php echo site_url(''); ?>/wordpress/online-caba"><li>Online Caba</li></a>
                <a href="<?php echo site_url(''); ?>/wordpress/cast-list"><li>Cast List</li></a>
                <a href="<?php echo site_url(''); ?>/wordpress/cast-recruit"><li>Cast Recruit</li></a>
                <a href="<?php echo site_url(''); ?>/wordpress/staff-recruit"><li>Staff Recruit</li></a>
                <a href="<?php echo site_url(''); ?>/wordpress/rooms"><li>Rooms</li></a>
                <a href="<?php echo site_url(''); ?>/wordpress/system"><li>System</li></a>
                <a href="<?php echo site_url(''); ?>/wordpress/diary-list"><li>Diary</li></a>

                </ul>
                </div>
                </div>
    </div>
    </nav>