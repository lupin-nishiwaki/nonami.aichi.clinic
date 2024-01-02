<?php get_header(); ?>

<div id="page_top">
  <!-- #mv -->
  <section id="mv">
    <div class="wrapper">
      <div class="ttlBox js_anim_load">
        <h1 class="catch">カテーテル治療を<br class="tablet">専門とする<br>有床循環器<br class="pc-hide">クリニック</h1>
        <p class="category">循環器科 / 心臓血管外科 / 内科 / 外科 / 麻酔科 /<br>心臓カテーテル治療 / 下肢静脈瘤治療 / <br class="pc-hide">透析シャント治療 / 美容</p>
      </div>

      <div class="main">
        <div class="visual js_top_swiper_mv">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><picture><source media="(max-width:767px)" srcset="/asset/img/top/mv_visual01@sp.webp"><img src="/asset/img/top/mv_visual01.webp" alt="ビジュアル画像" width="1920" height="1116"></picture></div>
            <div class="swiper-slide"><picture><source media="(max-width:767px)" srcset="/asset/img/top/mv_visual02@sp.webp"><img src="/asset/img/top/mv_visual02.webp" alt="ビジュアル画像" width="1920" height="1116"></picture></div>
            <div class="swiper-slide"><picture><source media="(max-width:767px)" srcset="/asset/img/top/mv_visual03@sp.webp"><img src="/asset/img/top/mv_visual03.webp" alt="ビジュアル画像" width="1920" height="1116"></picture></div>
            <div class="swiper-slide"><picture><source media="(max-width:767px)" srcset="/asset/img/top/mv_visual04@sp.webp"><img src="/asset/img/top/mv_visual04.webp" alt="ビジュアル画像" width="1920" height="1116"></picture></div>
          </div>
        </div>

        <div class="news js_top_swiper_news">
          <div class="swiper-wrapper">

            <?php
            $args = array(
              'post_type' => 'importantnews',
              'posts_per_page' => 5,
            );
            ?>
            <?php $the_query = new WP_Query( $args ); ?>
            <?php if( $the_query->have_posts() ): ?>
              <?php while( $the_query->have_posts() ): ?>
                <?php $the_query->the_post(); ?>

                <div class="swiper-slide">
                  <a href="<?php the_permalink(); ?>">
                    <span class="day"><?php the_time( 'Y.m.d' ); ?></span>
                    <span class="ttl"><?php the_title(); ?></span>
                  </a>
                </div>

              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>

          </div>
          <div class="swiper-button-prev js_top_swiper_news_prev"></div>
          <div class="swiper-button-next js_top_swiper_news_next"></div>
        </div>
      </div>

      <div class="side">
        <p class="name">aichi heart clinic</p>
        <div class="visual-swiper-pagination js_top_swiper_mv_pagination"></div>
      </div>
    </div>

    <div class="calender m_table_calender">
      <table>
        <thead>
          <tr><th class="item01">診療時間</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th><th>日</th></tr>
        </thead>

        <tbody>
          <tr><th class="item01">9:00-<br class="pc-hide">12:00</th><td>●</td><td>●</td><td>●</td><td>●</td><td>●</td><td>●</td><td>－</td></tr>
          <tr><th class="item01">15:00-<br class="pc-hide">18:00</th><td>●</td><td>●</td><td>●</td><td>●</td><td>●</td><td>－</td><td>－</td></tr>
        </tbody>
      </table>

      <p class="time">
        初診受付は午前は11:30まで、午後は17:30までとなります。
      </p>
    </div>
  </section>
  <!-- /#mv -->

  <!-- #guidance -->
  <section id="guidance">
    <div class="m_box_fixed">
      <div class="ttlBox js_anim_scroll">
        <h2 class="m_txt_ttl">
          <span class="en">guidance</span>
          <em class="ja">診療案内</em>
        </h2>

        <p class="lead">
          当クリニックでは、一般内科·外科の診療も行っております。<br class="sp-hide">かかりつけ医（家庭医）としての役割を意識し、明るく落ち着いた癒しの空間で、<br class="sp-hide">ホスピタリティーを重視した医療サービスの提供に努めて参ります。
        </p>
      </div>

      <ul class="link js_anim_scroll_group">
        <li>
          <a href="/cardiology/">
            <picture><img loading="lazy" src="/asset/img/top/guidance_link01.svg" alt="循環器科" width="92" height="92"></picture>
            <h3 class="hd">循環器科</h3>
            <p>カテーテル検査·治療の他、<br>心臓検査や血管外科手術も対応。</p>
          </a>
        </li>

        <li>
          <a href="/varix/">
            <picture><img loading="lazy" src="/asset/img/top/guidance_link02.svg" alt="足の外来" width="92" height="92"></picture>
            <h3 class="hd">足の外来</h3>
            <p>高周波治療（血管内焼灼術）は、<br>出血や術後の痛みが軽度。</p>
          </a>
        </li>

        <li>
          <a href="/shunt/">
            <picture><img loading="lazy" src="/asset/img/top/guidance_link03.svg" alt="透析シャント治療" width="92" height="92"></picture>
            <h3 class="hd">透析シャント治療</h3>
            <p>透析で使用する血管のトラブルに対し、<br>カテーテル治療や血管外科手術で対応。</p>
          </a>
        </li>

        <li>
          <a href="/general/">
            <picture><img loading="lazy" src="/asset/img/top/guidance_link04.svg" alt="一般内科·外科" width="92" height="92"></picture>
            <h3 class="hd">一般内科·外科</h3>
            <p>かかりつけ医（家庭医） として<br>内科·外科全般についても対応。</p>
          </a>
        </li>

        <li>
          <a href="/no-smoking/">
            <picture><img loading="lazy" src="/asset/img/top/guidance_link05.svg" alt="禁煙外来" width="92" height="92"></picture>
              <h3 class="hd">禁煙外来</h3>
              <p>外来日を含め3ヶ月で終了。<br>計5回の通院で病気のリスクを軽減。</p>
          </a>
        </li>

        <li>
          <a href="/fever/">
            <picture><img loading="lazy" src="/asset/img/top/guidance_link06.svg" alt="発熱外来" width="92" height="92"></picture>
            <h3 class="hd">発熱外来</h3>
            <p>発熱や咳倦怠感などがある<br>患者様は予約制で診察。</p>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- /#guidance -->

  <!-- #beauty -->
  <section id="beauty">
    <div class="m_box_fixed">
      <div class="wrap js_anim_scroll">
        <picture class="pc-hide">
          <img loading="lazy" src="/asset/img/top/beauty_bg@sp.webp" alt="美容施術メニュー" width="622" height="360">
        </picture>

        <div class="txtBox">
          <h2>美容施術メニュー</h2>
          <p class="lead">医師·看護師による、美肌のためのスキンケア治療を<br class="sp-hide">低価格でご提供しております。お気軽にご相談ください。</p>
          <p class="btn m_btn_main">
            <a href="/beauty/">
              詳しくはこちら
              <i></i>
            </a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /#beauty -->

  <!-- #about -->
  <section id="about">
    <div class="m_box_fixed">
      <h2 class="m_txt_ttl js_anim_scroll">
        <span class="en">about us</span>
        <em class="ja">クリニックについて</em>
      </h2>

      <p class="lead js_anim_scroll">
        当クリニックは2017年9月1日開院し、循環器疾患を専門に上げつつ、<br class="sp-hide">内科外科の一般疾患の診療行い、日々丁寧な診療を心がけています。<br>
        患者様との対話を通じて意思の疎通、信頼関係を大切にし、地域の皆様に愛されるクリニックであるよう、<br class="sp-hide">スタッフ一同、思いを一つにして日々精進してまいります。
      </p>

      <div class="row js_anim_scroll_group">
        <div>
          <picture><img loading="lazy" src="/asset/img/top/about_01.webp" alt="カテーテル治療を専門とする循環器クリニック" width="680" height="680"></picture>
          <p class="txt">カテーテル治療を専門とする<br class="sp-hide">循環器クリニック</p>
        </div>

        <div>
          <picture><img loading="lazy" src="/asset/img/top/about_02.webp" alt="専門医による高度な医療" width="680" height="680"></picture>
          <p class="txt">専門医による高度な医療</p>
        </div>

        <div>
          <picture><img loading="lazy" src="/asset/img/top/about_03.webp" alt="低侵襲治療" width="680" height="680"></picture>
          <p class="txt">低侵襲治療</p>
        </div>
      </div>

      <p class="m_btn_main js_anim_scroll">
        <a href="/about/">
          詳しくはこちら<i></i>
        </a>
      </p>
    </div>
  </section>
  <!-- /#about -->

  <!-- #link -->
  <section id="link">
    <div class="wrapper">
      <div class="wrap m_box_fixed js_anim_scroll_group">
        <div class="doctor">
          <picture><img loading="lazy" src="/asset/img/top/link_doctor.svg" alt="医師紹介" width="92" height="92"></picture>
          <h3><span class="en">doctor</span>医師紹介</h3>
          <p class="btn m_btn_main">
            <a href="/about/#doctor">
              詳しくはこちら<i></i>
            </a>
          </p>
        </div>

        <div class="cooperation">
          <picture><img loading="lazy" src="/asset/img/top/link_cooperation.svg" alt="関連施設" width="92" height="92"></picture>
          <h3><span class="en">cooperation</span>関連施設</h3>
          <p class="btn m_btn_main">
            <a href="/about/#facility">
              詳しくはこちら<i></i>
            </a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /#link -->

  <!-- #news -->
  <section id="news">
    <div class="wrapper m_box_fixed js_anim_scroll">
      <h2 class="m_txt_ttl">
        <span class="en">news</span>
        <em class="ja">お知らせ</em>
      </h2>

      <div class="newsBox">
        <ul class="m_list_news">

          <?php
          $args = array(
            'post_type' => 'news',
            'posts_per_page' => 3
          );
          ?>
          <?php $the_query = new WP_Query( $args ); ?>
          <?php if( $the_query->have_posts() ): ?>
            <?php while( $the_query->have_posts() ): ?>
              <?php $the_query->the_post(); ?>

              <li>
                <a href="<?php the_permalink(); ?>">
                  <div class="day"><?php the_time( 'Y.m.d' ); ?></div>
                  <div class="ttl"><?php the_title(); ?></div>
                  <i></i>
                </a>
              </li>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>

        </ul>

        <p class="btn">
          <a href="/news/">一覧を見る</a>
        </p>
      </div>
    </div>
  </section>
  <!-- /#news -->
</div>

<?php get_footer() ?>