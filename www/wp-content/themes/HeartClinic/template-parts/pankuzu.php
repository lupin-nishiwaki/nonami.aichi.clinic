<nav class="pan">
  <h2 class="screen-reader-text">サイト内の現在地</h2>
  <?php
  if (function_exists('bcn_display') && !is_front_page()) {
    echo '<ol class="breadcrumbs">';
      bcn_display_list();
    echo '</ol>';
  }
  ?>
</nav>