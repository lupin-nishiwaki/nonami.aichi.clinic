<?php
/**
 * Template Name: お問い合わせ
 */

get_header();
?>

<div id="page_contact">
  <div class="columnSeparate">
    <!-- .sideContents -->
    <div class="sideContents"></div>
    <!-- /.sideContents -->

    <!-- .mainContents -->
    <div class="mainContents">
      <!-- #pageTtl -->
      <section id="pageTtl">
        <div class="top">
          <div class="m_box_fixed -under">
            <h1>
              <span class="en">contact</span>
              ご相談·お問い合わせ
            </h1>
          </div>
        </div>
      </section>
      <!-- /#pageTtl -->

      <!-- #contact -->
      <section id="contact">
        <div class="m_box_fixed -under">
          <p class="lead">
            ご来院前にご相談したいことやお悩みがありましたら、お気軽に本お問い合わせフォームよりご連絡くださいませ。<br>
            予約 / 予約変更 / 予約キャンセル / 営業活動に関するお問い合わせについてはお受けできません。
          </p>

          <ul class="progress m_form_progress">
            <li class="is-cur">入力</li>
            <li>確認</li>
            <li>完了</li>
          </ul>

          <p class="guid m_form_guide">
            フォームに必要項目を入力の上、｢確認画面へ進む｣ボタンを押してください。
          </p>

          <div class="m_form_format">
            <?php if( have_posts() ): ?>
              <?php while( have_posts() ): ?>
                <?php the_post(); ?>

                <?php remove_filter( 'the_content', 'wpautop' ); ?>
                <?php the_content(); ?>

              <?php endwhile; ?>
            <?php endif; ?>
          </div>

        </div>
      </section>
      <!-- /#contact -->
    </div>
    <!-- /.mainContents -->
  </div>
</div>

<?php get_footer(); ?>