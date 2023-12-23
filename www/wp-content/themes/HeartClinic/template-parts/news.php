<?php
// 投稿スラッグ取得
global $post;
$post->post_name;
?>


<a href="<?php the_permalink(); ?>" class="p-main__newsLink <?php if(is_page('beauty')) {echo '-purple' ;} ?>">
  <dl <?php if(is_page('beauty')) {echo 'class="purple"' ;} ?>>
    <dt>
      <time <?php if(is_page('beauty')) {echo 'class="purple"' ;} ?> datetime="<?php the_time( DATE_W3C ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
    </dt>
    <dd><?php the_title(); ?></dd>
  </dl>
  <i>
    <svg class="arrow <?php if(strstr($_SERVER['REQUEST_URI'], 'beauty')) { echo "-purple" ; } else { echo "-whiteBrown" ; } ?>" viewBox="0 0 23 7.206">
      <g transform="translate(-125.801 -6.294)">
        <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
      </g>
    </svg>
  </i>
</a>