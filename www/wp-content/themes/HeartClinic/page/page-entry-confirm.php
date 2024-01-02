<?php
/**
 * Template Name: 採用エントリー（確認）
 */

get_header();
?>

<div id="page_entry">
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
              <span class="en">entry</span>
              採用エントリー
            </h1>
          </div>
        </div>
      </section>
      <!-- /#pageTtl -->

      <!-- #entry -->
      <section id="entry">
        <div class="m_box_fixed -under">
          <p class="lead">
            ご応募は下記フォームよりお願いいたします。<br>
            ご不明点やご相談事項がありましたら、備考欄へご記入ください。
          </p>

          <ul class="progress m_form_progress">
            <li>入力</li>
            <li class="is-cur">確認</li>
            <li>完了</li>
          </ul>

          <p class="guid m_form_guide">
            フォームの入力情報をご確認の上、｢送信する｣ボタンを押してください。
          </p>

          <div class="m_form_format confirm">
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
