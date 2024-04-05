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
      bloginfo('name'); echo '｜ 循環器診療、一般内科診療、下肢静脈瘤治療などで地域医療に貢献します';

    elseif(is_home()):
      bloginfo('name'); wp_title('｜ 循環器診療、一般内科診療、下肢静脈瘤治療などで地域医療に貢献します',true,'right');

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

  <meta property="og:title" content="あいちハートクリニック野並 | 循環器診療、一般内科診療、下肢静脈瘤治療などで地域医療に貢献します">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="あいちハートクリニック野並 | 循環器診療、一般内科診療、下肢静脈瘤治療などで地域医療に貢献します">
  <meta property="og:description" content="あいちハートクリニック野並は、循環器診療、一般内科診療、下肢静脈瘤治療などで地域医療に貢献し、皆様の支えになれるよう日々診療を行っております。">
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
  <link rel="stylesheet" media="all" href="/asset/css/custom-20240201.css">
  <style>
    .js_load_page{transition:opacity .7s;opacity:0;pointer-events:none}
    .js_load_page.is-load{opacity:1;pointer-events:auto}
  </style>

  <script defer src="/asset/js/vender.js"></script>
  <script defer src="/asset/js/app.js"></script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-8VCMXXFPP2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-8VCMXXFPP2');
  </script>
  <!-- /Google tag (gtag.js) -->

  <?php page_description(); ?>
  <?php wp_head(); ?>
</head>
<body class="js_load_page">
  <!-- Google Tag Manager (noscript) -->
  <!-- End Google Tag Manager (noscript) -->

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
          <li>
            <dl class="js_accordion_sp">
              <dt>医院紹介</dt>
              <dd>
                <picture><img src="/asset/img/header_gnav_main_about.webp" alt="医院紹介" width="396" height="396"></picture>
                <div class="box">
                  <ul class="parent">
                    <li><a href="/about/">クリニックについて</a></li>
                  </ul>

                  <ul class="child">
                    <!-- <li><a href="/about#greeting">ごあいさつ</a></li> -->
                    <!-- <li><a href="/about#feature">当クリニックの特徴</a></li> -->
                    <li><a href="/about#doctor">医師紹介</a></li>
                    <!-- <li><a href="/about#officeWork">事務長紹介</a></li> -->
                    <li><a href="/about#facility">各施設紹介</a></li>
                  </ul>

                  <ul class="parent">
                    <li><a href="/equipment/" class="noLink">医療設備（準備中）</a></li>
                  </ul>
                </div>
              </dd>
            </dl>
          </li>

          <li>
            <dl class="js_accordion_sp">
              <dt>診療案内</dt>
              <dd>
                <picture><img src="/asset/img/header_gnav_main_sinryo.webp" alt="診療案内" width="396" height="396"></picture>
                <div class="box">
                  <ul class="parent">
                    <li><a href="/cardiology/">循環器科</a></li>
                  </ul>

                  <ul class="child">
                    <li><a href="/cardiology#about">心臓疾患について</a></li>
                    <li><a href="/cardiology#heartCheck">心臓検査</a></li>
                  </ul>

                  <ul class="parent">
                    <li><a href="/varix/">足の外来</a></li>
                  </ul>

                  <ul class="child">
                    <li><a href="/varix#varicoseVeins">下肢静脈瘤</a></li>
                    <li><a href="/varix#pad">下肢動脈疾患(PAD)</a></li>
                    <li><a href="/varix#cvi">慢性静脈不全(CVI)</a></li>
                    <li><a href="/varix#dvt">深部静脈血栓(DVT)</a></li>
                    <li><a href="/varix#other">その他</a></li>
                  </ul>

                  <ul class="parent">
                    <li><a href="/general/">一般内科</a></li>
                    <li><a href="/no-smoking/">禁煙外来</a></li>
                    <li><a href="/sleep-apnea-syndrome/">睡眠時無呼吸症候群</a></li>
                    <li><a href="/fever/" class="noLink">発熱外来（準備中）</a></li>
                  </ul>
                </div>
              </dd>
            </dl>
          </li>

          <!-- <li><a href="/beauty/">美容案内</a></li> -->
          <li><a href="/news/">お知らせ</a></li>
          <li><a href="/information/">医院情報·アクセス</a></li>
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

      <p class="instagramSp">
        <a href="https://www.instagram.com/aichi.heart.clinic/" target="_balnk" rel="noonner,noreferrer">
          <img src="/asset/img/i_social_instagram_wh.svg" alt="Instagram" width="16" height="16">
        </a>
      </p>

      <dl class="tel">
        <dt><a href="tel:052-846-3810">052-846-3810</a></dt>
        <dd>診療時間内は受付可能です。</dd>
      </dl>
    </div>
  </header>
  <!-- /#l_header -->

  <!-- #l_container -->
  <main id="l_container">
