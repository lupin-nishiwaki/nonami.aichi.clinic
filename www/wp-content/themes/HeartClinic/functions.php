<?php
/*======================================
  初期設定
======================================*/
function my_theme_setup() {
  // Titleタグ
  add_theme_support( 'title-tag' );

  // 画像サイズ
  // add_image_size('dummy-thumbnail', 564, 564, true); // 投稿一覧用
}
add_action( 'after_setup_theme', 'my_theme_setup' );
add_theme_support( 'post-thumbnails' );


/*======================================
  mw wp formの設定
======================================*/
// contact mw wp form validation
function plugin_validation_rule( $Validation ){
  $Validation->set_rule( 'your-type', 'noEmpty', array( 'message' => '※お問い合わせ種別を選択ください。' ) );
  $Validation->set_rule( 'your-name', 'noEmpty', array( 'message' => '※「お名前」は必ず入力してください。' ) );
  $Validation->set_rule( 'your-email', 'noEmpty', array( 'message' => '※「メールアドレス」は必ず入力してください。' ) );
  $Validation->set_rule( 'your-email-confirm', 'noEmpty', array( 'message' => '※「メールアドレス(確認)」は必ず入力してください。' ) );
  $Validation->set_rule( 'remarks', 'noEmpty', array( 'message' => '※「内容」は必ず入力してください。' ) );
  $Validation->set_rule( 'check', 'required', array( 'message' => '※プライバシーポリシーに同意の上、チェックをしてください。' ) );
  return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-59', 'plugin_validation_rule');

function plugin_validation_rule02( $Validation, $data, $Data ){
  $Validation->set_rule( 'your-type', 'noEmpty', array( 'message' => '※お問い合わせ種別を選択ください。' ) );
  $Validation->set_rule( 'your-name', 'noEmpty', array( 'message' => '※「お名前」は必ず入力してください。' ) );
  $Validation->set_rule( 'your-email', 'noEmpty', array( 'message' => '※「メールアドレス」は必ず入力してください。' ) );
  $Validation->set_rule( 'your-email-confirm', 'noEmpty', array( 'message' => '※「メールアドレス(確認)」は必ず入力してください。' ) );
  $Validation->set_rule( 'remarks', 'noEmpty', array( 'message' => '※「内容」は必ず入力してください。' ) );
  $Validation->set_rule( 'check', 'required', array( 'message' => '※プライバシーポリシーに同意の上、チェックをしてください。' ) );
  return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-91', 'plugin_validation_rule02', 10, 3 );


/*======================================
  アップデートの非表示
======================================*/
// 本体の更新通知を非表示
add_filter( 'pre_site_transient_update_core', '__return_null' );
// プラグインの更新通知を非表示
add_filter( 'pre_site_transient_update_plugins', '__return_null' );
// テーマの更新通知を非表示
add_filter( 'pre_site_transient_update_themes', '__return_null' );
//自動更新を無効にする
add_filter( 'automatic_updater_disabled', '__return_true' );


/*======================================
 descriptionの設定
======================================*/
// functions.phpに追加
add_action('admin_menu', 'add_custom_fields');
add_action('save_post', 'save_custom_fields');

// 記事ページと固定ページでカスタムフィールドを表示
function add_custom_fields() {
  add_meta_box( 'my_sectionid', 'メタ設定', 'my_custom_fields', 'post');
  add_meta_box( 'my_sectionid', 'メタ設定', 'my_custom_fields', 'page');
}

function my_custom_fields() {
  global $post;
  $keywords = get_post_meta($post->ID,'keywords',true);
  $description = get_post_meta($post->ID,'description',true);

  echo '<p>キーワード（半角カンマ区切り）<br>';
  echo '<input type="text" name="keywords" value="'.esc_html($keywords).'" size="60"></p>';

  echo '<p>ページの説明（description）160文字以内<br>';
  echo '<input type="text" style="width: 600px;height: 40px;" name="description" value="'.esc_html($description).'" maxlength="160"></p>';
}

// カスタムフィールドの値を保存
function save_custom_fields( $post_id ) {
  if(!empty($_POST['keywords']))
    update_post_meta($post_id, 'keywords', $_POST['keywords'] );
  else delete_post_meta($post_id, 'keywords');

  if(!empty($_POST['description']))
    update_post_meta($post_id, 'description', $_POST['description'] );
  else delete_post_meta($post_id, 'description');
}

function page_description() {
  // カスタムフィールドの値を読み込む
  $custom = get_post_custom();
  if(!empty( $custom['keywords'][0])) {
    $keywords = $custom['keywords'][0];
  }
  if(!empty( $custom['description'][0])) {
    $description = $custom['description'][0];
  }
  ?>
  <?php if(is_home()): // トップページ ?>
  <meta name="robots" content="index, follow">
  <meta name="description" content="">
  <?php elseif(is_single()): // 記事ページ ?>
  <meta name="robots" content="index, follow" />
  <meta name="description" content="<?php echo $description ?>">
  <?php elseif(is_page()): // 固定ページ ?>
  <meta name="robots" content="index, follow" />
  <meta name="description" content="<?php echo $description ?>">
  <?php elseif (is_category()): // カテゴリーページ ?>
  <meta name="robots" content="index, follow" />
  <meta name="description" content="<?php single_cat_title(); ?>の記事一覧">
  <?php elseif (is_tag()): // タグページ ?>
  <meta name="robots" content="noindex, follow" />
  <meta name="description" content="<?php single_tag_title("", true); ?>の記事一覧">
  <?php elseif(is_404()): // 404ページ ?>
  <meta name="robots" content="noindex, follow">
  <title><?php echo 'お探しのページが見つかりませんでした'; ?></title>
  <?php else: // その他ページ ?>
  <meta name="robots" content="noindex, follow">
  <?php endif; ?>

<?php
}
?>
