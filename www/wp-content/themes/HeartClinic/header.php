<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>
    <?php
    global $page, $paged;
    if(is_front_page()):
      bloginfo('name'); echo '｜ カテーテル治療を専門とする有床循環器クリニック';

    elseif(is_home()):
      bloginfo('name'); wp_title('｜ カテーテル治療を専門とする有床循環器クリニック',true,'right');

    elseif(is_page()):
      wp_title('｜',true,'right'); bloginfo('name');

    elseif(is_single()):
      wp_title('｜',true,'right'); bloginfo('name');

    elseif(is_archive()):
      wp_title(''); echo'｜'; bloginfo('name');

    elseif(is_404()):
      echo '404｜'; bloginfo('name');
    endif;

    if($paged >= 2 || $page >= 2):
      echo '｜' . sprintf('%sページ', max($paged,$page));
    endif;
    ?>
  </title>

  <meta property="og:title" content="あいちハートクリニック | カテーテル治療を専門とする有床循環器クリニック">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="あいちハートクリニック | カテーテル治療を専門とする有床循環器クリニック">
  <meta property="og:description" content="あいちハートクリニックは、カテーテル治療を専門とする有床循環器クリニックとして、循環器科をはじめ、心臓血管外科、麻酔科、心臓カテーテル治療、下肢静脈瘤治療、透析シャント治療などの診療を行なっております。また、内科・外科や禁煙治療、美容施術も提供しており、地域のかかりつけ医として日々の診療を行なっております。">
  <meta property="og:url" content="https://aichi.clinic/">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:image" content="/asset/img/ogp.webp">
  <meta name="twitter:card" content="summary_large_image">

  <meta name="thumbnail" content="/asset/img/apple-touch-icon.webp" />
  <link rel="apple-touch-icon" sizes="180x180" href="/asset/img/apple-touch-icon.webp">
  <link rel="icon" type="image/webp" sizes="32x32" href="/asset/img/favicon.webp">
  <link rel="icon" type="image/webp" sizes="16x16" href="/asset/img/favicon.webp">
  <link rel="shortcut icon" href="/asset/img/favicon.ico">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap">
  <link rel="stylesheet" media="all" href="/asset/css/setting.css">
  <link rel="stylesheet" media="all" href="/asset/css/layout.css">
  <link rel="stylesheet" media="all" href="/asset/css/style.css">
  <style>
    .js_load_page{transition:opacity .7s;opacity:0;pointer-events:none}
    .js_load_page.is-load{opacity:1;pointer-events:auto}
  </style>

  <script defer src="/asset/js/vender.js"></script>
  <script defer src="/asset/js/app.js"></script>

  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->

  <?php page_description(); ?>
  <?php wp_head(); ?>
</head>
<body class="js_load_page">
  <!-- Google Tag Manager (noscript) -->
  <!-- End Google Tag Manager (noscript) -->

  <?php
    $url = '';
    $judge = '';
    $url .= $_SERVER['REQUEST_URI'];

    if(strpos($url,'contact') !== false || strpos($url,'recruit') !== false){
      $judge = '/';
    }
  ?>

  <!-- #l_header -->
  <header id="l_header" class="js_header">
    <div class="wrapper">
      <p class="logo">
        <a href="/">
          <img src="/asset/img/logo_bk.svg" alt="あいちハートクリニック野並院" width="218" height="30">
        </a>
      </p>

      <p class="drawerBtn js_drawr_btn">
        <span class="line"><i></i><i></i><i></i></span>
        <span class="txt"><i>menu</i><i>close</i></span>
      </p>

      <nav class="gnav js_drawr">
        <ul class="main">
          <li><a href="<?php echo $judge; ?>#message">院長ごあいさつ</a></li>
          <li><a href="<?php echo $judge; ?>#treatment">診療案内</a></li>
          <li><a href="<?php echo $judge; ?>recruit/">採用情報</a></li>
          <li><a href="<?php echo $judge; ?>contact/">お問い合わせ</a></li>
        </ul>

        <!--
        <ul class="cta">
          <li class="reserve"><a href="https://aichiheart.reserve.ne.jp/sp/index.php?" target="_blank" rel="noopener noreferrer">初診ご予約はこちら</a></li>
          <li class="contact"><a href="/contact/">メールで相談·お問い合わせ</a></li>
        </ul>

        <p class="instagram">
          <a href="https://www.instagram.com/aichi.heart.clinic/" target="_balnk" rel="noonner,noreferrer">
            <img src="/asset/img/i_social_instagram_wh.svg" alt="Instagram" width="16" height="16">
          </a>
        </p>
        -->
      </nav>

      <!--
      <p class="instagramSp">
        <a href="https://www.instagram.com/aichi.heart.clinic/" target="_balnk" rel="noonner,noreferrer">
          <img src="/asset/img/i_social_instagram_wh.svg" alt="Instagram" width="16" height="16">
        </a>
      </p>

      <dl class="tel">
        <dt><a href="tel:0566-91-5810">0566-91-5810</a></dt>
        <dd>診療時間内は受付可能です。</dd>
      </dl>
      -->
    </div>
  </header>
  <!-- /#l_header -->

  <!-- #l_container -->
  <main id="l_container">