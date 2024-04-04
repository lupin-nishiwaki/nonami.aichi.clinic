<?php get_header(); ?>
<main>
  <?php get_template_part("/template-parts/reserve") ?>
  <div class="l-under -main">
    <div class="l-under__sideMenu">
      <div class="p-under__sideMenu">
        <div class="p-under__sideInner"></div>
      </div>
      <!-- /.l-under__sideMenu -->
    </div>

    <div class="l-spacer -under l-under__main p-under__main">
      <div class="p-under__container -secondary">
        <?php get_template_part("/template-parts/pankuzu") ?>

        <div class="p-under__topContent -secondary">
          <div class="p-under__mainTitle">
            <h2 class="c-heading -underPrimary">
                  <span class="en -purple">campaign</span>
                  <em>キャンペーン</em>
                </h2>
          </div>
        </div>
        <!-- /.p-under__topContent -->
      </div>


      <section class="l-spacer -borderTop">
        <div class="p-under__container -secondary">

          <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = [
          'post_type' => 'beautycampaign', // 投稿タイプを指定
          'posts_per_page' => 9, // １ページあたりの投稿数を指定
          'paged' => $paged,
          ];
           $the_query = new WP_Query( $args );
          ?>


          <?php  if ( $the_query->have_posts() ) : ?>
          <div class="p-under__blogContent">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php get_template_part("/template-parts/blog") ?>
            <?php endwhile; ?>
            <?php else : ?>
            <p>まだ投稿がありません。</p>
          </div>
          <?php endif;  wp_reset_postdata(); ?>


        </div>
        <!-- /.p-under__container -->

        <div class="l-container">
          <div class="beauty">
            <?php
          // ページネーション
          $args = [
            'prev_text' => '<span class="screen-reader-text">前へ</span>',
          'next_text' => '<span class="screen-reader-text">次へ</span>',
          'mid_size' =>  '2'
          ];
          the_posts_pagination( $args );
          ?>
          </div>
        </div>
        <!-- /.l-container -->

      </section>
    </div>
    <!-- /.l-under__main -->
  </div>
  <!-- /.l-sub -->
  <?php get_footer(); ?>