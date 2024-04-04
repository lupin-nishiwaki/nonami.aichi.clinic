<?php
// 投稿スラッグ取得
global $post;
$post->post_name;
?>


<a href="<?php the_permalink();?>" class="c-card <?php if(strstr($_SERVER['REQUEST_URI'],'beauty')) {echo '-purple';} ?>">
  <figure class="c-card__thumbnail">
    <?php if ( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail() ?>
    <?php else : ?>
    <img class="c-card__image" src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/common/no-picture@2x.jpg" alt="画像がありません">
    <?php endif; ?>
  </figure>
  <div class="c-card__body">
    <p class="c-card__cat">
        <time <?php if(strstr($_SERVER['REQUEST_URI'], 'beauty')) {echo 'class="purple"' ;} ?> datetime="<?php the_time( DATE_W3C ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
    </p>
    <h3 class="c-card__title"><?php the_title(); ?></h3>
  </div>
</a>