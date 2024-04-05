<?php get_header(); ?>

<div id="page_news">
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
              <span class="en">news</span>
              お知らせ
            </h1>
          </div>
        </div>
      </section>
      <!-- /#pageTtl -->

      <!-- #archive -->
      <section id="archive">
        <div class="m_box_fixed -under">
          <div class="tabBtn">
            <div class="is-tab"><span>一般診療のお知らせ</span></div>
            <!-- <div><a href="/beautynews/">美容のお知らせ</a></div> -->
          </div>

          <ul class="m_list_news">

            <?php if( have_posts() ): ?>
              <?php while( have_posts() ): ?>
                <?php the_post(); ?>

                <li>
                  <a href="<?php the_permalink(); ?>">
                    <div class="day"><?php the_time( 'Y.m.d' ); ?></div>
                    <div class="ttl"><?php the_title(); ?></div>
                    <i></i>
                  </a>
                </li>

              <?php endwhile; ?>
            <?php endif; ?>

          </ul>

          <!--
          <div class="m_btn_pager">
            <div>
              <a href="/" class="previouspostslink"></a>
              <span class="current">1</span>
              <a href="/" class="page">2</a>
              <a href="/" class="page">3</a>
              <a href="/" class="page">4</a>
              <a href="/" class="page">5</a>
              <a href="/" class="nextpostslink"></a>
            </div>
          </div>
          -->
        </div>
      </section>
      <!-- /#archive -->
    </div>
    <!-- /.mainContents -->
  </div>
</div>

<?php get_footer(); ?>
