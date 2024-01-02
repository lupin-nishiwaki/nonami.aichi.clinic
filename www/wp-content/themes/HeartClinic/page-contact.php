<?php get_header(); ?>
<main>
  <div class="l-under -main">
    <div class="l-under__sideMenu">
      <div class="p-under__sideMenu">
        <div class="p-under__sideInner"></div>
      </div>
    </div>

    <section class="l-spacer -under l-under__main p-under__main">
      <div class="p-under__container -secondary">
        <?php get_template_part("/template-parts/pankuzu") ?>

        <div class="p-under__topContent -secondary">
          <div class="p-under__mainTitle">
            <h2 class="c-heading -underPrimary">
                  <span class="en">contact</span>
                  <em>ご相談&middot;お問い合わせ</em>
                </h2>
          </div>
        </div>
      </div>


      <div class="l-spacer -bottom">
        <div class="p-under__container -secondary">
          ご相談したいことやお悩みがありましたら、お気軽に本お問い合わせフォームよりご連絡くださいませ。<br>
          予約 / 予約変更 / 予約キャンセル / 営業活動に関するお問い合わせについてはお受けできません。

          <ul class="p-under__contactFlow">
            <li class="is-active">入力</li>
            <li>確認</li>
            <li>完了</li>
          </ul>

          <p class="p-under__contactAnnounce">
            フォームに必要項目を入力の上、｢確認画面へ進む｣ボタンを押してください。<br>
            <span class="notes">※のついている項目は必須項目となります。</span>
          </p>

          <?php
          if( have_posts() ):
            while( have_posts() ):
              the_post();
              remove_filter( 'the_content', 'wpautop' );
              the_content();
            endwhile;
          endif;
          ?>
    </section>
  </div>

  <?php get_footer(); ?>