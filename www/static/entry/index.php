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
            <li class="is-cur">入力</li>
            <li>確認</li>
            <li>完了</li>
          </ul>

          <p class="guid m_form_guide">
            フォームに必要項目を入力の上、｢確認画面へ進む｣ボタンを押してください。
            <span class="req">※のついている項目は必須項目となります。</span>
          </p>

          <div class="m_form_format">
            <form action="">
              <dl>
                <dt><span class="req">※</span>応募職種</dt>
                <dd>
                  <div class="m_form_select">
                    <select name="f_xxx">
                      <option value="事務員">事務員</option>
                      <option value="看護師">看護師</option>
                      <option value="臨床検査技師">臨床検査技師</option>
                      <option value="放射線技師">放射線技師</option>
                    </select>
                  </div>
                  <span class="error">※「テキスト」は必ず入力してください。</span>
                </dd>
              </dl>

              <dl>
                <dt><span class="req">※</span>お名前</dt>
                <dd>
                  <input type="text" name="f_xxx" placeholder="テキストが入ります。" class="m_form_txt">
                  <span class="error">※「テキスト」は必ず入力してください。</span>
                </dd>
              </dl>

              <dl>
                <dt>お電話番号</dt>
                <dd>
                  <input type="text" name="f_xxx" placeholder="テキストが入ります。" class="m_form_txt">
                  <span class="error">※「テキスト」は必ず入力してください。</span>
                </dd>
              </dl>

              <dl>
                <dt><span class="req">※</span>メールアドレス</dt>
                <dd>
                  <input type="text" name="f_xxx" placeholder="テキストが入ります。" class="m_form_txt">
                  <span class="error">※「テキスト」は必ず入力してください。</span>
                </dd>
              </dl>

              <dl>
                <dt><span class="req">※</span>メールアドレス（確認）</dt>
                <dd>
                  <input type="text" name="f_xxx" placeholder="テキストが入ります。" class="m_form_txt">
                  <span class="error">※「テキスト」は必ず入力してください。</span>
                </dd>
              </dl>

              <dl>
                <dt><span class="req">※</span>備考欄</dt>
                <dd>
                  <textarea name="f_xxx" placeholder="テキストが入ります。" class="m_form_textarea"></textarea>
                  <span class="error">※「テキスト」は必ず入力してください。</span>
                </dd>
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
                <button type="submit" name="f_xxx" class="next">確認画面進む</button>
              </div>

              <div class="m_form_btn">
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
