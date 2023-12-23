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

        <div class="p-under__topContent -secondary">
          <div class="p-under__mainTitle">
            <h2 class="c-heading -underPrimary">
                  <span class="en">thanks</span>
                  <em>お問い合わせ完了</em>
                </h2>
          </div>
        </div>
        <!-- /.p-under__topContent -->
      </div>


      <div class="l-spacer -bottom">
        <div class="p-under__container -secondary">
          <ul class="p-under__contactFlow">
            <li>入力</li>
            <li>確認</li>
            <li class="is-active">完了</li>
          </ul>

          <p class="fix">お問い合わせが完了いたしました。</p>
          <p class="text">
          この度はお問い合わせいただき誠にありがとうございます。<br>
					お問い合わせ内容を確認後、<br class="pc-hide">お返事をさしあげますので少々お待ちくださいませ。<br>
					なお、自動返信メールを送信しております。<br>
					自動返信メールをご確認いただけない場合は、<br>お問い合わせができていない可能性がございますので<br>お手数ですが、再度お問い合わせください。<br>
					今後ともハートクリニックを<br class="pc-hide">よろしくお願いいたします。
          </p>

          <div class="button-wrap -thanks">
            <a href="<?php echo esc_url( home_url() ); ?>" class="c-button -colorGray -shadow -center p-under__contactButton"><span class="inner">トップページに戻る</span></a>
          </div>


    </section>
    <!-- /.l-under__main -->
  </div>
  <!-- /.l-sub -->
  <?php get_footer(); ?>