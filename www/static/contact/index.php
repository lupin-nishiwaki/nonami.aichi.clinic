<?php include($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<div id="page_contact">
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
              <span class="en">contact</span>
              ご相談·お問い合わせ
            </h1>
          </div>
        </div>
      </section>
      <!-- /#pageTtl -->

      <!-- #contact -->
      <section id="contact">
        <div class="m_box_fixed -under">
          <p class="lead">
            ご相談したいことやお悩みがありましたら、お気軽に本お問い合わせフォームよりご連絡くださいませ。<br>
            予約 / 予約変更 / 予約キャンセル / 営業活動に関するお問い合わせについてはお受けできません。
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
                <dt><span class="req">※</span>お問い合わせ種別</dt>
                <dd>
                  <div class="m_form_select">
                    <select name="f_xxx">
                      <option value="循環器科">循環器科</option>
                      <option value="足の外来">足の外来</option>
                      <option value="一般内科">一般内科</option>
                      <option value="禁煙外来">禁煙外来</option>
                      <option value="睡眠時無呼吸症候群治療">睡眠時無呼吸症候群治療</option>
                      <option value="発熱外来">発熱外来</option>
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
                <dt><span class="req">※</span>内容</dt>
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
      <!-- /#contact -->
    </div>
    <!-- /.mainContents -->
  </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
