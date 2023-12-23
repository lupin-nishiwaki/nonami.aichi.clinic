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

  <title><?php
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
?></title>
  <?php page_description(); ?>

  <?php wp_head(); ?>
</head>

<body class="js-pageFade is-fadeout">
  <!-- <body> -->
  <header class="l-header p-header">
    <div class="l-container -header">
      <div class="p-header__info">
        <h1 class="p-header__title">
            <a href="/" class="p-logo"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/logo-header.svg" alt="あいちハートクリニック"></a>
          </h1>
      </div>
      <!-- /.p-header__info -->
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
          <li class="p-globalNav__item -megaMenu js-accordion">
            <p>医院紹介<i></i></p>
            <section class="p-globalNav__content">
              <div class="p-globalNav__inner">
                <figure class="p-globalNav__image">
                  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/nav-image01.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/nav-image01.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/nav-image01@2x.jpg" alt="院内の画像">
                </figure>
                <div class="p-globalNav__innerBlock">
                  <a href="<?php echo esc_url( home_url( ) ); ?>/about" class="p-globalNav__title -mega-menu">クリニックについて</a>
                  <ul class="p-globalNav__innerBlock-menu">
                    <li class="p-globalNav__innerBlock-item"><a href="<?php echo esc_url( home_url( ) ); ?>/about#sec01">ごあいさつ</a></li>
                    <li class="p-globalNav__innerBlock-item"><a href="<?php echo esc_url( home_url( ) ); ?>/about#sec02">当クリニックの特徴</a></li>
                    <li class="p-globalNav__innerBlock-item"><a href="<?php echo esc_url( home_url( ) ); ?>/about#sec03">医師紹介</a></li>
                    <li class="p-globalNav__innerBlock-item"><a href="<?php echo esc_url( home_url( ) ); ?>/about#sec04">事務長紹介</a></li>
                    <li class="p-globalNav__innerBlock-item"><a href="<?php echo esc_url( home_url( ) ); ?>/about#sec05">各施設紹介</a></li>
                  </ul>
                  <a href="<?php echo esc_url( home_url( ) ); ?>/equipment" class="p-globalNav__title">医療設備</a>

                </div>
                <!-- /.p-globalNav__innerBlock -->
              </div>
            </section>
          </li>
          <li class="p-globalNav__item -megaMenu js-accordion">
            <p>診療案内<i></i></p>
            <section class="p-globalNav__content">
              <div class="p-globalNav__inner">
                <figure class="p-globalNav__image">
                  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/nav-image02.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/nav-image02.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/nav-image02@2x.jpg" alt="院内の画像" />
                </figure>
                <div class="p-globalNav__innerBlock">
                  <a href="<?php echo esc_url( home_url( ) ); ?>/cardiology" class="p-globalNav__title -mega-menu">循環器科</a>
                  <ul class="p-globalNav__innerBlock-menu">
                    <li class="p-globalNav__innerBlock-item"><a href="<?php echo esc_url( home_url( ) ); ?>/cardiology#sec01">心臓疾患について</a></li>
                    <li class="p-globalNav__innerBlock-item"><a href="<?php echo esc_url( home_url( ) ); ?>/cardiology#sec02">心臓検査</a></li>
                    <li class="p-globalNav__innerBlock-item"><a href="<?php echo esc_url( home_url( ) ); ?>/cardiology#sec03">カテーテル検査&middot;治療</a></li>
                    <li class="p-globalNav__innerBlock-item"><a href="<?php echo esc_url( home_url( ) ); ?>/cardiology#sec04">血管外科手術</a></li>
                  </ul>

                  <a href="<?php echo esc_url( home_url( ) ); ?>/varix/" class="p-globalNav__title -mega-menu">足の外来</a>
                  <ul class="p-globalNav__innerBlock-menu">
                    <li class="p-globalNav__innerBlock-item"><a href="<?php echo esc_url( home_url( ) ); ?>/varix#sec01">下肢静脈瘤</a></li>
                    <li class="p-globalNav__innerBlock-item"><a href="<?php echo esc_url( home_url( ) ); ?>/varix#sec02">下肢動脈疾患(PAD)</a></li>
                    <li class="p-globalNav__innerBlock-item"><a href="<?php echo esc_url( home_url( ) ); ?>/varix#sec03">慢性静脈不全(CVI)</a></li>
                    <li class="p-globalNav__innerBlock-item"><a href="<?php echo esc_url( home_url( ) ); ?>/varix#sec04">深部静脈血栓(DVT)</a></li>
                    <li class="p-globalNav__innerBlock-item"><a href="<?php echo esc_url( home_url( ) ); ?>/varix#sec05">その他</a></li>
                  </ul>


                  <div class="p-globalNav__titleWrap">
                    <a href="<?php echo esc_url( home_url( ) ); ?>/shunt/" class="p-globalNav__title">透析シャント治療</a>
                    <a href="<?php echo esc_url( home_url( ) ); ?>/general/" class="p-globalNav__title">一般内科&middot;外科</a>
                    <a href="<?php echo esc_url( home_url( ) ); ?>/no-smoking/" class="p-globalNav__title">禁煙外来</a>
                    <a href="<?php echo esc_url( home_url( ) ); ?>/fever/" class="p-globalNav__title">発熱外来</a>
                  </div>

                </div>
                <!-- /.p-globalNav__innerBlock -->
              </div>
            </section>
          </li>
          <li class="p-globalNav__item -underLine">
            <a href="<?php echo esc_url( home_url( ) ); ?>/beauty">美容案内</a>
          </li>
          <li class="p-globalNav__item -underLine">
            <a href="<?php echo esc_url( home_url( ) ); ?>/news">お知らせ</a>
          </li>
          <li class="p-globalNav__item -underLine">
            <a href="<?php echo esc_url( home_url( ) ); ?>/information">医院情報&middot;アクセス</a>
          </li>
          <!-- <li class="p-globalNav__item -underLine">
            <a href="<?php echo esc_url( home_url( ) ); ?>/recruit">採用情報</a>
          </li> -->

          <li>
            <ul class="p-globalNav__itemButtonWrap">
              <li class="p-globalNav__itemButton -gray">
                <a href="https://aichiheart.reserve.ne.jp/sp/index.php?" target="_blank" rel="noopener noreferrer" class="c-button -colorAccent -shadow -center -secondary"><span class="inner">初診ご予約はこちら</span>
                  <svg class="arrow -whiteBrown" viewBox="0 0 23 7.206">
                    <g transform="translate(-125.801 -6.294)">
                      <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                    </g>
                  </svg>
                </a>
              </li>
              <li class="p-globalNav__itemButton button02 -brown">
                <a href="<?php echo esc_url( home_url( ) ); ?>/contact/" class="c-button -colorGray -shadow -center -secondary"><span class="inner">メールで相談&middot;お問い合わせ</span>
                  <svg class="arrow -whiteGray" viewBox="0 0 23 7.206">
                    <g transform="translate(-125.801 -6.294)">
                      <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                    </g>
                  </svg>
                </a>
              </li>
            </ul>
          </li>
          <li class="p-globalNav__item -insta">
            <a href="https://www.instagram.com/aichi.heart.clinic/" target="_balnk" rel="noonner,noreferrer"></a>
          </li>
          <li class="p-globalNav__item -tel">
            <a href="tel:0566-91-5810"><span class="en">0566-91-5810</span>
              <p class="text">診療時間内は受付可能です。</p>
            </a>
          </li>
        </ul>
      </nav>
      <?php if(is_page('beauty')): ?>
      <a class="p-header__instaSP" href="https://www.instagram.com/aichi.heart.beauty.specialty/" target="_balnk" rel="noonner,noreferrer"></a>
      <?php endif; ?>
      <a href="tel:0566-91-5810" class="p-header__telSP <?php if(is_page("beauty")) {echo "-purple";}?>"></a>
    </div>
    <!-- /.l-container -->
  </header>
