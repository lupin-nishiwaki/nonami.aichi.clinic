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
                  <span class="en">news</span>
                  <em>お知らせ</em>
                </h2>
          </div>
        </div>
        <!-- /.p-under__topContent -->
      </div>


      <section class="l-spacer -borderTop">
        <div class="p-under__container -secondary">

          <ul class="p-under__tab">
            <li class="p-under__tabItem -secondary is-tab"><a href="<?php echo esc_url( home_url( ) ); ?>/news">一般診療のお知らせ</a></li>
            <li class="p-under__tabItem -secondary"><a href="<?php echo esc_url( home_url( ) ); ?>/beautynews">美容のお知らせ</a></li>
          </ul>

          <div class="p-main__news p-under__news">
            <?php if ( have_posts() ) :  ?>
            <ul class="p-under__newsContent">
              <?php while( have_posts() ) : the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>" class="p-main__newsLink">
                  <dl>
                    <dt>
                      <time datetime="<?php the_time( DATE_W3C ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
                    </dt>
                    <dd><?php the_title(); ?></dd>
                  </dl>
                  <i>
                    <svg class="arrow -whiteBrown" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 7.206">
                      <g transform="translate(-125.801 -6.294)">
                        <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                      </g>
                    </svg>
                  </i>
                </a>
              </li>
              <?php endwhile; ?>
              <?php else : ?>
              <p>まだ投稿がありません。</p>
            </ul>
            <?php endif;  wp_reset_postdata(); ?>
          </div>

          <div class="l-container">

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
          <!-- /.l-container -->

        </div>
        <!-- /.p-under__container -->
      </section>
    </div>
    <!-- /.l-under__main -->
  </div>
  <!-- /.l-sub -->
  <?php get_footer(); ?>