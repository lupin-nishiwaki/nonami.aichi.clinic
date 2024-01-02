<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">


  <!-- OGP -->
  <meta property="og:url" content="https://aichi.clinic/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="あいちハートクリニック | カテーテル治療を専門とする有床循環器クリニック">
  <meta property="og:site_name" content="あいちハートクリニック | カテーテル治療を専門とする有床循環器クリニック">
  <meta property="og:description" content="あいちハートクリニックは、カテーテル治療を専門とする有床循環器クリニックとして、循環器科をはじめ、心臓血管外科、麻酔科、心臓カテーテル治療、下肢静脈瘤治療、透析シャント治療などの診療を行なっております。また、内科・外科や禁煙治療、美容施術も提供しており、地域のかかりつけ医として日々の診療を行なっております。">
  <meta property="og:image" content="https://aichi.clinic/wp-content/themes/HeartClinic/assets/images/common/ogp.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@500&display=swap" rel="stylesheet">

  <!-- Twiteer -->
  <meta name="twitter:card" content="summary_large_image">

  <!-- ファビコン -->
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/apple-touch-icon.png">

  <title>
    <?php
    global $page, $paged;

    if (is_front_page()) : bloginfo('name'); echo '｜ カテーテル治療を専門とする有床循環器クリニック';
    elseif(is_home()) :
      bloginfo('name'); wp_title('｜ カテーテル治療を専門とする有床循環器クリニック',true,'right');
    elseif(is_page()) : //固定ページ
      wp_title('｜',true,'right'); bloginfo('name');
    elseif(is_single()) : //投稿ページ
      wp_title('｜',true,'right'); bloginfo('name');
      // elseif(is_category()) : //カテゴリーページ
      // single_term_title(); echo'｜省略タイトル';
    elseif(is_archive()) : //アーカイブページ
      wp_title(''); echo'｜';bloginfo('name');
      // elseif(is_search()) : //検索結果ページ
      // wp_title(''); echo'｜省略タイトル';
    elseif(is_404()): //404ページ
      echo '404｜';bloginfo('name');
    endif;

    if($paged >= 2 || $page >= 2) : //２ページ目以降の場合
      echo '｜' . sprintf('%sページ',
      max($paged,$page));
    endif;
    ?>
  </title>
  <?php page_description(); ?>

  <?php wp_head(); ?>
</head>

<body class="js-pageFade is-fadeout">
  <!-- <body> -->
  <header class="l-header p-header">
    <div class="l-container -header">
      <div class="p-header__info">
        <h1 class="p-header__title">
          <a href="/" class="p-logo">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/logo-header.svg" alt="あいちハートクリニック">
            <span>野並院</span>
          </a>
        </h1>
      </div>

      <nav class="p-header__nav">
        <h2 class="screen-reader-text">サイト内メニュー</h2>
        <button class="js-drawer c-button p-hamburger" aria-controls="globalNav" aria-expanded="false">
          <span class="p-hamburger__line">
            <span class="screen-reader-text">メニューを開閉</span>
          </span>
          <span class="p-hamburger__text js-hamburger-text">
            <div>
              <span class="menu">menu</span>
              <span class="close">close</span>
            </div>
          </span>
        </button>

        <ul id="globalNav" class="p-globalNav">
          <li class="p-globalNav__item -underLine"><a href="#message">院長ごあいさつ</a></li>
          <li class="p-globalNav__item -underLine"><a href="#treatment">診療案内</a></li>
          <li class="p-globalNav__item -underLine"><a href="#reqruitment">採用情報</a></li>
          <li class="p-globalNav__item -underLine"><a href="/contact/">お問い合わせ</a></li>
        </ul>
      </nav>

      <?php if(is_page('beauty')): ?>
        <a class="p-header__instaSP" href="https://www.instagram.com/aichi.heart.beauty.specialty/" target="_balnk" rel="noonner,noreferrer"></a>
      <?php endif; ?>

      <!-- <a href="tel:0566-91-5810" class="p-header__telSP <?php if(is_page("beauty")) {echo "-purple";}?>"></a> -->
    </div>
    <!-- /.l-container -->
  </header>
