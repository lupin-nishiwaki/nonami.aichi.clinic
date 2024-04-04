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
        <div class="l-spacer -bottom">
          <div class="p-under__notFound">
            <h3>
              <em>404</em>
              <span>Not Found</span>
            </h3>

            <p class="text">
              お探しのページは見つかりません。<br>
              一時的にアクセスできない状況にあるか、<br class="pc-hide">
              移動もしくは削除された可能性があります。
            </p>

            <div class="c-button__wrap -center">
              <a href="<?php echo esc_url( home_url( ) ); ?>" class="c-button -colorAccentWhite -center -primary">
                <span class="inner">TOPへ戻る</span>
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
        </div>
      </div>
      <!-- /.l-spacer -->


    </section>
    <!-- /.l-under__main -->
  </div>
  <!-- /.l-sub -->
  <?php get_footer(); ?>