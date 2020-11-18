<!DOCTYPE html>
<html lang="ja">
  <head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>Webサイトのタイトル</title>
    <meta name="description" content="ページの紹介文">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="<?php echo get_template_directory_uri() ?>test.js" type="text/javaScript" charset="utf-8"></script>
       
      
<!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
      <?php wp_head(); ?>
  </head>
 
  
  <body>
 
    <div class="wrapper">
 
  <header>
<!-- ハンバーガーメニュー -->
          <div class="header-logo-menu">
  <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
          <div class="nav-content2">
          <?php wp_nav_menu(
      array (
        //カスタムメニュー名
        'theme_location' => 'header-navi',
        //コンテナを表示しない
        'container' => false,
        //カスタムメニューを設定しない際に固定ページでメニューを作成しない
        'fallback_cb' => false,
        //出力されるulに対してidやclassを表示しない
        'items_wrap' => '<ul>%3$s</ul>',
      )
    ); ?>
          </div></div>
           </div>
  <div class="top">header</div>
  </div>
<!-- グローバルメニュー -->
      <div class="nav">
            <?php wp_nav_menu(
      array (
        //カスタムメニュー名
        'theme_location' => 'header-navi',
        //コンテナを表示しない
        'container' => false,
        //カスタムメニューを設定しない際に固定ページでメニューを作成しない
        'fallback_cb' => false,
        //出力されるulに対してidやclassを表示しない
        'items_wrap' => '<ul>%3$s</ul>',
      )
    ); ?>    
      </div>
        
 </header>