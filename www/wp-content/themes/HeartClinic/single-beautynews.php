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
            <h1 class="-purple">
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
          <?php if( have_posts() ): ?>
            <?php while( have_posts() ): ?>
              <?php the_post(); ?>

                <p class="m_cms_day"><?php the_time( 'Y.m.d' ); ?></p>
                <h2 class="m_cms_ttl"><?php the_title(); ?></h2>

                <div class="m_cms_wysiwyg">
                  <?php the_content(); ?>
                </div>

                <?php $slug =  get_query_var('post_type'); ?>
                <?php $prev_post = get_next_post(); ?>
                <?php $next_post = get_previous_post(); ?>
                <ul class="m_btn_page-around">
                  <?php if( !empty( $prev_post ) ): ?>
                    <li class="prev">
                      <a href="<?php echo get_permalink( $prev_post->ID ); ?>">前の記事へ</a>
                    </li>
                  <?php endif; ?>

                  <li class="list"><a href="/beautynews/">一覧へ戻る</a></li>

                  <?php if( !empty( $next_post ) ): ?>
                    <li class="next">
                      <a href="<?php echo get_permalink( $next_post->ID ); ?>">次の記事へ</a>
                    </li>
                  <?php endif; ?>
                </ul>

            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </section>
      <!-- /#archive -->
    </div>
    <!-- /.mainContents -->
  </div>
</div>

<?php get_footer(); ?>