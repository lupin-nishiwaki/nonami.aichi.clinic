<?php get_header(); ?>
<main>
  <div class="l-under -main">
    <div class="l-under__sideMenu">
      <div class="p-under__sideMenu">
        <div class="p-under__sideInner"></div>
        <!-- /.p-under__sideInner -->
      </div>
    </div>
    <!-- /.p-under__sideMenu -->

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
        <!-- /.p-under__topContent -->
      </div>


      <div class="l-spacer -bottom">
        <div class="p-under__container -secondary">
          ご来院前にご相談したいことやお悩みがありましたら、お気軽に本お問い合わせフォームよりご連絡くださいませ。<br>
          予約 / 予約変更 / 予約キャンセル / 営業活動に関するお問い合わせについてはお受けできません。

          <ul class="p-under__contactFlow">
            <li class="is-active">入力</li>
            <li>確認</li>
            <li>完了</li>
          </ul>

          <p>フォームに必要項目を入力の上、｢確認画面へ進む｣ボタンを押してください。</p>


          <?php if( have_posts() ):
      while( have_posts() ):
      the_post(); ?>

          <?php remove_filter( 'the_content', 'wpautop' );
       the_content(); ?>

          <?php endwhile;
      endif; ?>


    </section>
    <!-- /.l-under__main -->
  </div>
  <!-- /.l-sub -->
  <?php get_footer(); ?>