<?php get_header(); ?>
<main>
  <?php get_template_part("/template-parts/reserve") ?>
  <div class="p-hero">
    <div class="p-hero__inner">
      <div class="swiper-container -top swiper-top">
        <ul class="swiper-wrapper">
          <li class="swiper-slide -top">
            <picture class="p-hero__swiperImage">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv-pc03@2x.jpg" media="(min-width: 768px)">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv-sp03@2x.jpg" alt="ハートクリニックの外観画像" decoding="async">
            </picture>
          </li>

          <li class="swiper-slide -top">
            <picture class="p-hero__swiperImage">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv-pc01@2x.jpg" media="(min-width: 768px)">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv-sp01@2x.jpg" alt="診療をしている様子" decoding="async">
            </picture>
          </li>

          <li class="swiper-slide -top">
            <picture class="p-hero__swiperImage">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv-pc02@2x.jpg" media="(min-width: 768px)">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv-sp02@2x.jpg" alt="ハートクリニックの院内画像" decoding="async">
            </picture>
          </li>


          <li class="swiper-slide -top">
            <picture class="p-hero__swiperImage">
              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv-pc04@2x.jpg" media="(min-width: 768px)">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv-sp04@2x.jpg" alt="ハートクリニックの院内画像" decoding="async">
            </picture>
          </li>
        </ul>
      </div>


      <?php
        $args = [
          'post_type' => 'importantnews', // 投稿タイプを指定
          'posts_per_page' => 5, // １ページあたりの投稿数を指定
          'paged' => $paged,
          ];
           $the_query = new WP_Query( $args );
          ?>
      <?php  if ( $the_query->have_posts() ) : ?>
      <div class="swiper-container -topNews swiper-topNews">
        <ul class="swiper-wrapper -topNews">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <li class="swiper-slide -topNews">
            <a href="<?php the_permalink(); ?>">
              <div class="inner">
                <time><time datetime="<?php the_time( DATE_W3C ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time></time>
                <h3><?php the_title(); ?></h3>
              </div>
            </a>
          </li>
          <?php endwhile; ?>


        </ul>
        <div class="swiper-button-prev prevTopNews -topnews"></div>
        <div class="swiper-button-next nextTopNews -topnews"></div>
      </div>
      <?php endif;  wp_reset_postdata(); ?>

    </div>
    <!-- /.p-hero__inner -->

    <div class="p-hero__body">
      <div class="p-hero__copy">
        <em class="main"><span class="br">カテーテル治療を専門とする</span><span class="br-sp">有床循環器</span>クリニック</em>
        <span class="item">循環器科 / 心臓血管外科 / 内科 / 外科 / 麻酔科 /<br> 心臓カテーテル治療 / 下肢静脈瘤治療 / 透析シャント治療 / 美容</span>
      </div>

      <div class="p-hero__time p-main__timeTable -hero">
        <table>
          <tbody>
            <tr class="heading">
              <th>診療時間</th>
              <th class="line-left">月</th>
              <th class="line-left">火</th>
              <th class="line-left">水</th>
              <th class="line-left">木</th>
              <th class="line-left">金</th>
              <th class="line-left">土</th>
              <th class="line-left">日</th>
            </tr>
            <tr>
              <th class="en time">9:00-12:00</th>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left none"></td>
            </tr>
            <tr>
              <th class="en time">15:00-18:00</th>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left none"></td>
              <td class="line-left none"></td>
            </tr>
          </tbody>
        </table>
        <p class="p-hero__time__note-text">初診受付は午前は11:30まで、午後は17:30までとなります。</p>
      </div>
    </div>

    <div class="p-hero__pagination">
      <p class="p-hero__swiperText">aichi heart clinic</p>
      <div class="swiper-pagination -top pageTop"></div>
    </div>
  </div>

  <div class="p-main__timeTableWrap">
    <div class="l-container l-spacer -topS">
      <div class="p-main__timeTable -map -top">
        <table>
          <tbody>
            <tr class="heading">
              <th>診療時間</th>
              <th class="line-left">月</th>
              <th class="line-left">火</th>
              <th class="line-left">水</th>
              <th class="line-left">木</th>
              <th class="line-left">金</th>
              <th class="line-left">土</th>
              <th class="line-left">日</th>
            </tr>
            <tr>
              <th class="en time">9:00-12:00</th>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left none"></td>
            </tr>
            <tr>
              <th class="en time">15:00-18:00</th>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left circle"></td>
              <td class="line-left none"></td>
              <td class="line-left none"></td>
            </tr>
          </tbody>
        </table>
        <p class="p-hero__time__note-text">初診受付は午前は11:30まで、午後は17:30までとなります。</p>
      </div>
    </div>
    <!-- /.l-container -->
  </div>

  <section class="l-spacer -sizeLtop">
    <div class="l-container">
      <div class="p-main__treatmentHead js-scrollFade">
        <h2 class="c-heading p-main__treatmentHeading">
              <span class="en">guidance</span>
              診療案内
            </h2>

        <p class="p-main__lead p-main__treatmentHeadText">
              当クリニックでは、一般内科&middot;外科の診療も行っております。<br class="sp-hide" />
              かかりつけ医（家庭医）としての役割を意識し、明るく落ち着いた癒しの空間で、<br class="sp-hide" />
              ホスピタリティーを重視した医療サービスの提供に努めて参ります。
            </p>
      </div>


      <ul class="p-main__treatmentList js-parentFadeMulti">
        <li class="p-main__treatmentItem js-scrollFadeMulti">
          <a href="<?php echo esc_url(get_theme_file_uri()); ?>/cardiology/">
            <figure class="p-main__treatmentIcon">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/icon-heart.svg" alt="心臓のアイコン" />
            </figure>
            <div class="p-main__treatmentBody">
              <h3 class="p-main__treatmentTitle">循環器科</h3>
              <p class="p-main__treatmentText">カテーテル検査&middot;治療の他、<br>心臓検査や血管外科手術も対応。</p>
            </div>

            <svg class="arrow -brown p-main__treatmentArrow" viewBox="0 0 23 7.206">
              <g transform="translate(-125.801 -6.294)">
                <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
              </g>
            </svg>
          </a>
        </li>


        <li class="p-main__treatmentItem js-scrollFadeMulti">
          <a href="<?php echo esc_url(get_theme_file_uri()); ?>/varix/">
            <figure class="p-main__treatmentIcon">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/icon-leg.svg" alt="足の外来のアイコン" />
            </figure>
            <div class="p-main__treatmentBody">
              <h3 class="p-main__treatmentTitle">足の外来</h3>
              <p class="p-main__treatmentText">高周波治療（血管内焼灼術）は、<br>出血や術後の痛みが軽度。</p>
            </div>
            <svg class="arrow -brown p-main__treatmentArrow" viewBox="0 0 23 7.206">
              <g transform="translate(-125.801 -6.294)">
                <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
              </g>
            </svg>
          </a>
        </li>

        <li class="p-main__treatmentItem js-scrollFadeMulti">
          <a href="<?php echo esc_url(get_theme_file_uri()); ?>/shunt/">
            <figure class="p-main__treatmentIcon">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/icon-arm.svg" alt="透析シャントのアイコン" />
            </figure>
            <div class="p-main__treatmentBody">
              <h3 class="p-main__treatmentTitle">透析シャント治療</h3>
              <p class="p-main__treatmentText">透析で使用する血管のトラブルに対し、<br>カテーテル治療や血管外科手術で対応。</p>
            </div>
            <svg class="arrow -brown p-main__treatmentArrow" viewBox="0 0 23 7.206">
              <g transform="translate(-125.801 -6.294)">
                <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
              </g>
            </svg>
          </a>
        </li>

        <li class="p-main__treatmentItem js-scrollFadeMulti">
          <a href="<?php echo esc_url(get_theme_file_uri()); ?>/general/">
            <figure class="p-main__treatmentIcon">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/icon-sinryou.svg" alt="聴診器のアイコン" />
            </figure>

            <div class="p-main__treatmentBody">
              <h3 class="p-main__treatmentTitle">一般内科&middot;外科</h3>
              <p class="p-main__treatmentText">かかりつけ医（家庭医） として<br>内科&middot;外科全般についても対応。</p>
            </div>

            <svg class="arrow -brown p-main__treatmentArrow" viewBox="0 0 23 7.206">
              <g transform="translate(-125.801 -6.294)">
                <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
              </g>
            </svg>
          </a>
        </li>

        <li class="p-main__treatmentItem js-scrollFadeMulti">
          <a href="<?php echo esc_url(get_theme_file_uri()); ?>/no-smoking/">
            <figure class="p-main__treatmentIcon">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/icon-tabako.svg" alt="タバコのアイコン" />
            </figure>

            <div class="p-main__treatmentBody">
              <h3 class="p-main__treatmentTitle">禁煙外来</h3>
              <p class="p-main__treatmentText">外来日を含め3ヶ月で終了。<br>計5回の通院で病気のリスクを軽減。</p>
            </div>

            <svg class="arrow -brown p-main__treatmentArrow" viewBox="0 0 23 7.206">
              <g transform="translate(-125.801 -6.294)">
                <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
              </g>
            </svg>
          </a>
        </li>

        <li class="p-main__treatmentItem js-scrollFadeMulti">
          <a href="<?php echo esc_url(get_theme_file_uri()); ?>/fever/">
            <figure class="p-main__treatmentIcon">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/icon-mask.svg" alt="マスクのアイコン" />
            </figure>
            <div class="p-main__treatmentBody">
              <h3 class="p-main__treatmentTitle">発熱外来</h3>
              <p class="p-main__treatmentText">発熱や咳倦怠感などがある<br>患者様は予約制で診察。</p>
            </div>
            <svg class="arrow -brown p-main__treatmentArrow" viewBox="0 0 23 7.206">
              <g transform="translate(-125.801 -6.294)">
                <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
              </g>
            </svg>
          </a>
        </li>
      </ul>

      <article class="p-main__beauty">
        <div class="p-main__beautyInner">
          <figure class="p-main__beautyImage">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty-sp@2x.jpg" alt="美容施術を行っている様子" />
          </figure>

          <div class="p-main__beautyBody">
            <div class="js-scrollFade">
              <h3 class="p-main__beautyTitle">美容施術メニュー</h3>
              <p class="p-main__beautyText">
                    医師&middot;看護師による、美肌のためのスキンケア治療を<br
                      class="sp-hide"
                    />低価格でご提供しております。<br class="pc-hide" />お気軽にご相談ください。
                  </p>

              <a href="<?php echo esc_url(get_theme_file_uri()); ?>/beauty/" class="c-button -colorAccentWhite -center -primary">
                <span class="inner">詳しくはこちら</span>
                <i class="svg-wrap">
                  <svg class="arrow -brown" viewBox="0 0 23 7.206">
                    <g transform="translate(-125.801 -6.294)">
                      <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                    </g>
                  </svg>
                </i>
              </a>
            </div>
          </div>
        </div>
        <!-- /.p-main__beautyInner -->
      </article>
    </div>
  </section>

  <section class="l-spacer -sizeL">
    <div class="l-container">
      <div class="js-scrollFade">
        <h2 class="c-heading -center">
              <span class="en">about us</span>
              クリニックについて
            </h2>
        <p class="p-main__lead -center">
              当クリニックは2017年9月1日開院し、循環器疾患を専門に上げつつ、<br class="sp-hide">内科外科の一般疾患の診療行い、日々丁寧な診療を心がけています。<br class="pc-hide">患者様との対話を通じて意思の疎通、信頼関係を大切にし、地域の皆様に愛されるクリニックであるよう、<br class="sp-hide">スタッフ一同、思いを一つにして日々精進してまいります。
            </p>
      </div>

      <ul class="p-main__aboutList js-parentFadeMulti">
        <li class="p-main__aboutItem js-scrollFadeMulti">
          <figure class="p-main__aboutThumb">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about01.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about01.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about01@2x.jpg 2x" alt="医療機器">
          </figure>
          <p class="p-main__aboutItemText">カテーテル治療を専門とする循環器クリニック</p>
        </li>

        <li class="p-main__aboutItem js-scrollFadeMulti">
          <figure class="p-main__aboutThumb">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about02.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about02.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about02@2x.jpg 2x" alt="医療機器" />
          </figure>
          <p class="p-main__aboutItemText">専門医による高度な医療</p>
        </li>

        <li class="p-main__aboutItem js-scrollFadeMulti">
          <figure class="p-main__aboutThumb">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about03.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about03.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about03@2x.jpg 2x" alt="医療機器" />
          </figure>
          <p class="p-main__aboutItemText">低侵襲治療</p>
        </li>
      </ul>
      <div class="c-button__wrap -center">
        <a href="<?php echo esc_url( home_url( ) ); ?>/about" class="c-button -colorAccentWhite -center -primary">
          <span class="inner">詳しくはこちら</span>
          <div class="svg-wrap">
            <svg class="arrow -brown" viewBox="0 0 23 7.206">
              <g transform="translate(-125.801 -6.294)">
                <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
              </g>
            </svg>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section>
    <div class="p-main__Intro">
      <div class="p-main__IntroInner l-spacer">
        <a href="<?php echo esc_url( home_url( ) ); ?>/about#sec03" class="p-main__IntroLink">
          <figure class="p-main__IntroIcon">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/icon-doctor.svg" alt="ドクターのアイコン" />
          </figure>
          <h2 class="c-heading -sizeS -center -border">
                <span class="en">doctor</span>
                <em>医師紹介</em>
              </h2>
          <div class="p-main__IntroButton-sp">
            <i>
              <div class="arrow-wrap">
                <svg class="arrow -whiteBrown" viewBox="0 0 23 7.206">
                  <g transform="translate(-125.801 -6.294)">
                    <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                  </g>
                </svg>
              </div>
            </i>
          </div>

          <div class="p-main__IntroButton-pc">
            <p href="<?php echo esc_url( home_url( ) ); ?>/about#sec03" class="c-button -colorAccentWhite -center -primary">
                  <span class="inner">詳しくはこちら</span>
                  <i class="svg-wrap -secondary">
                    <svg class="arrow -brown"  viewBox="0 0 23 7.206">
                      <g transform="translate(-125.801 -6.294)">
                        <path
                          d="M714.911,14.75l5.5,6h-22"
                          transform="translate(-572.11 -7.75)"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="1"
                        />
                      </g>
                    </svg>
                  </i>
                </p>
          </div>
        </a>
      </div>

      <div class="p-main__IntroInner l-spacer">
        <a href="<?php echo esc_url( home_url( ) ); ?>/about#sec05" class="p-main__IntroLink">
          <figure class="p-main__IntroIcon">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/icon-partner.svg" alt="病院のアイコン" />
          </figure>
          <h2 class="c-heading -sizeS -center -border">
                <span class="en">cooperation</span>
                <em>関連施設</em>
              </h2>
          <div class="p-main__IntroButton-sp">
            <i>
              <div class="arrow-wrap">
                <svg class="arrow -whiteBrown" viewBox="0 0 23 7.206">
                  <g transform="translate(-125.801 -6.294)">
                    <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                  </g>
                </svg>
              </div>
            </i>
          </div>

          <div class="p-main__IntroButton-pc">
            <p href="<?php echo esc_url( home_url( ) ); ?>/about#sec05" class="c-button -colorAccentWhite -center -primary">
                  <span class="inner">詳しくはこちら</span>
                  <i class="svg-wrap -secondary">
                    <svg class="arrow -brown"  viewBox="0 0 23 7.206">
                      <g transform="translate(-125.801 -6.294)">
                        <path
                          d="M714.911,14.75l5.5,6h-22"
                          transform="translate(-572.11 -7.75)"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="1"
                        />
                      </g>
                    </svg>
                  </i>
                </p>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section class="l-spacer">
    <div class="l-container">
      <div class="p-main__news">
        <div class="inner">
          <h2 class="c-heading p-main__newsTitle -top">
                <span class="en">news</span>
                お知らせ
              </h2>

          <?php
          $args = [
            'post_type' => 'news', // 投稿タイプを指定
            'posts_per_page' => 3, // １ページあたりの投稿数を指定
            'paged' => $paged,
            ];
             $the_query = new WP_Query( $args );
            ?>


          <div class="p-main__newsContent">
            <?php  if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="p-main__newsLink">
              <dl>
                <dt>
                  <time><time datetime="<?php the_time( DATE_W3C ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time></time>
                </dt>
                <dd><?php the_title(); ?></dd>
              </dl>
              <i>
                <svg class="arrow -whiteBrown" viewBox="0 0 23 7.206">
                  <g transform="translate(-125.801 -6.294)">
                    <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                  </g>
                </svg>
              </i>
            </a>
            <?php endwhile; ?>
            <?php else : ?>
            <p class="p-main__newsContent-postText">まだ投稿がありません。</p>
            <?php endif;  wp_reset_postdata(); ?>
          </div>

          <!-- /.p-main__newsInner -->
        </div>
        <div class="p-main__newsButtonWrap -top">
          <a href="<?php echo esc_url( home_url( ) ); ?>/news/" class="p-main__newsButton">一覧を見る</a>
        </div>
      </div>
    </div>
  </section>


  <?php get_footer() ?>
