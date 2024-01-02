<?php include($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<div id="page_entry">
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
              <span class="en">entry</span>
              採用エントリー
            </h1>
          </div>
        </div>
      </section>
      <!-- /#pageTtl -->

      <!-- #entry -->
      <section id="entry">
        <div class="m_box_fixed -under">
          <p class="lead">
            ご応募は下記フォームよりお願いいたします。<br>
            ご不明点やご相談事項がありましたら、備考欄へご記入ください。
          </p>

          <ul class="progress m_form_progress">
            <li>入力</li>
            <li class="is-cur">確認</li>
            <li>完了</li>
          </ul>

          <p class="guid m_form_guide">
            フォームの入力情報をご確認の上、｢送信する｣ボタンを押してください。
          </p>

          <div class="m_form_format confirm">
            <form action="">
              <dl>
                <dt><span class="req">※</span>お問い合わせ種別</dt>
                <dd><div class="m_form_select">選択肢</div></dd>
              </dl>

              <dl>
                <dt><span class="req">※</span>お名前</dt>
                <dd>お名前</dd>
              </dl>

              <dl>
                <dt>お電話番号</dt>
                <dd>お電話番号</dd>
              </dl>

              <dl>
                <dt><span class="req">※</span>メールアドレス</dt>
                <dd>メールアドレス</dd>
              </dl>

              <dl>
                <dt><span class="req">※</span>メールアドレス（確認）</dt>
                <dd>メールアドレス（確認）</dd>
              </dl>

              <dl>
                <dt><span class="req">※</span>内容</dt>
                <dd>内容</dd>
              </dl>

              <p class="m_form_agree conf-hide">
                <span class="inner">
                  <span>
                    <label>
                      <input type="checkbox" name="f_xxx" value="プライバシーポリシーに同意する">
                      <span>プライバシーポリシーに同意する</span>
                    </label>
                  </span>
                  <a href="/privacy/" target="_blank">プライバシーポリシー</a>に同意する
                </span>
                <span class="error">※プライバシーポリシーに同意の上、チェックをしてください。</span>
              </p>

              <div class="m_form_btn">
                <button type="submit" name="f_xxx" class="back">入力画面へ戻る</button>
                <button type="submit" name="f_xxx" class="next">送信する</button>
              </div>
            </form>
          </div>

        </div>
      </section>
      <!-- /#entry -->
    </div>
    <!-- /.mainContents -->
  </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
