<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>サイトタイトル</title>
        <meta name="description" content="ディスクリプションを入力">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&family=Shippori+Mincho&display=swap" rel="stylesheet">
        <link rel="stylesheet "href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/dist/js/scripts.min.js"></script>
        <?php wp_head(); ?>
    </head>  
    <body>
        <header class="header">
            <div class="header__wrap">
                <div class="header__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header-logo.svg" alt="">
                    <p>Mika Terada</p>
                </div>
                <nav class="header__gnav-pc">
                    <ul>
                    <li><a href="about">ABOUT</a></li>
                    <li><a href="">WORKS</a></li>
                    <li><a href="">CONTACT</a></li>
                </nav>
                <!-- スマホのみ表示のハンバーガーメニュー -->
                <button class="sp__hamburger-menu">
                    <span class="bar bar__top"></span>
                    <span class="bar bar__mid"></span>
                    <span class="bar bar__bottom"></span>
                </button>
            </div>   
        </header>
