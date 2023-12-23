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
              <?php if(strstr($_SERVER['REQUEST_URI'], 'beautycampaign')): ?>
                  <span class="en -purple">campaign</span>
                  <em>キャンペーン</em>
                  <?php else: ?>
                  <span class="en">news</span>
                  <em>お知らせ</em>
                  <?php endif; ?>

                </h2>
          </div>


        </div>
        <!-- /.p-under__topContent -->
      </div>


      <section class="l-spacer -borderTop">
        <div class="p-under__container -secondary">
          <div class="m_cms_wysiwyg">

            <p class="m_cms_time">
              <time <?php if(is_page('beauty')) {echo 'class="purple"' ;} ?> datetime="<?php the_time( DATE_W3C ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
            </p>
            <p class="m_cms_icatch">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail() ?>
                    <?php endif; ?>
            </p>

            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </div>


          <div class="l-container">
            <nav class="navigation p-navigation">
              <h2 class="screen-reader-text">投稿ナビゲーション</h2>
              <ul class="p-navigation__list" role="navigation">
                <li class="p-navigation__item -left"><?php previous_post_link('%link', "<span class='inner'>前の記事へ<i></i>
                <svg width='23' height='7' viewBox='0 0 23 7'>
                    <g transform='translate(0.5 0.5)'>
                      <path d='M720.411,21.25h-22a.5.5,0,0,1-.369-.838l5.5-6a.5.5,0,0,1,.737.676l-4.732,5.162h20.863a.5.5,0,0,1,0,1Z' transform='translate(-698.411 -14.75)' />
                    </g>
                  </svg></span>");
                   ?>
                </li>

                <?php
                $slug =  get_query_var('post_type');
                ?>

                <li class="p-navigation__item -all">
                  <?php if($slug == 'beautynews') : ?>
                  <a href="<?php echo esc_url( home_url() ); ?>/beautynews">一覧へ戻る</a>
                  <?php elseif($slug == 'importantnews') :  ?>
                  <a href="<?php echo esc_url( home_url() ); ?>">Topページへ戻る</a>
                  <?php elseif($slug == 'news') :  ?>
                  <a href="<?php echo esc_url( home_url() ); ?>/news">一覧へ戻る</a>
                  <?php elseif($slug == 'beautycampaign') :  ?>
                  <a href="<?php echo esc_url( home_url() ); ?>/beautycampaign">一覧へ戻る</a>
                  <?php endif; ?>
                </li>
                <li class="p-navigation__item -right"><?php next_post_link('%link', "<span class='inner'>次の記事へ<i></i>
                <svg width='23' height='7' viewBox='0 0 23 7'>
                    <g transform='translate(-125.801 -6.5)'>
                      <path d='M720.411,21.25h-22a.5.5,0,0,1,0-1h20.863l-4.732-5.162a.5.5,0,0,1,.737-.676l5.5,6a.5.5,0,0,1-.369.838Z' transform='translate(-572.11 -7.75)' />
                    </g>
                  </svg>
                </span>"); ?>
                </li>
              </ul>
            </nav>
          </div>

        </div>
        <!-- /.p-under__container -->
      </section>
    </div>
    <!-- /.l-under__main -->
  </div>
  <!-- /.l-sub -->
  <?php get_footer(); ?>