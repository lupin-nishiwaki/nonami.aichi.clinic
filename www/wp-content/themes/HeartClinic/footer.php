</main>
  <!-- /#l_container -->

  <!-- #l_footer -->
  <footer id="l_footer">
    <!-- #fixedCta -->
    <section id="fixedCta" class="js_anim_load -delay">
      <?php if(is_page('beauty')): ?>
        <p class="line">
          <a href="https://page.line.me/954bntwp?openQrModal=true" target="_blank" rel="noopener noreferrer">
            <span>LINEでご予約</span>
          </a>
        </p>
      <?php else: ?>
        <p class="contact">
          <a href="https://aichiheart.reserve.ne.jp/sp/index.php?" target="_blank" rel="noopener noreferrer">
            <span>初診のご予約</span>
          </a>
        </p>
      <?php endif; ?>
    </section>
    <!-- /#fixedCta -->

    <!-- #clinic -->
    <?php if(!is_page('information')): ?>
      <section id="clinic">
        <div class="m_box_fixed">
          <div class="overview js_anim_scroll">
            <picture class="imgBox">
              <img loading="lazy" src="/asset/img/footer_clinic.webp" alt="あいちハートクリニック" width="1080" height="854">
            </picture>

            <div class="txtBox">
              <p class="logo"><img loading="lazy" src="/asset/img/logo_bk.svg" alt="あいちハートクリニック" width="218" height="34"></p>
              <p class="address">〒472-0054 愛知県知立市東上重原6-70</p>
              <p class="tel"><a href="tel:0566-91-5810">0566-91-5810</a></p>
              <p class="fax">FAX 0566-91-5816</p>

              <?php if(is_page('beauty')): ?>
                <div class="calender m_table_calender">
                  <table>
                    <thead>
                      <tr>
                        <th class="item01">診療時間</th>
                        <th>月</th>
                        <th>火</th>
                        <th>水</th>
                        <th>木</th>
                        <th>金</th>
                        <th>土</th>
                        <th>日</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <th class="item01">9:00-<br class="pc-hide">12:00</th>
                        <td>●</td>
                        <td>●</td>
                        <td>●</td>
                        <td>●</td>
                        <td>●</td>
                        <td>▲</td>
                        <td>－</td>
                      </tr>

                      <tr>
                        <th class="item01">14:00-<br class="pc-hide">18:00</th>
                        <td>●</td>
                        <td>●</td>
                        <td>●</td>
                        <td>●</td>
                        <td>●</td>
                        <td>▲</td>
                        <td>－</td>
                      </tr>
                    </tbody>
                  </table>

                  <p class="iconDesc">
                    ▲ 不定期 9:00 - 16:00
                  </p>

                  <p class="time">
                    電話のご予約は13:00-17:00に受け付けております。<br>
                    土曜日は9:00-13:00、14:00-18:00の受付となっております。
                  </p>

                  <p class="notes">
                    ※一般診療の受付時間は異なります。<a href="/information/#doctor">詳しくはこちら</a>をご覧ください。
                  </p>
                </div>

              <?php else: ?>
                <div class="calender m_table_calender">
                  <table>
                    <thead>
                      <tr>
                        <th class="item01">診療時間</th>
                        <th>月</th>
                        <th>火</th>
                        <th>水</th>
                        <th>木</th>
                        <th>金</th>
                        <th>土</th>
                        <th>日</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <th class="item01">9:00-<br class="pc-hide">12:00</th>
                        <td>●</td>
                        <td>●</td>
                        <td>●</td>
                        <td>●</td>
                        <td>●</td>
                        <td>●</td>
                        <td>－</td>
                      </tr>

                      <tr>
                        <th class="item01">15:00-<br class="pc-hide">18:00</th>
                        <td>●</td>
                        <td>●</td>
                        <td>●</td>
                        <td>●</td>
                        <td>●</td>
                        <td>－</td>
                        <td>－</td>
                      </tr>
                    </tbody>
                  </table>

                  <p class="time">
                    ご予約は診療時間内に電話で受け付けております。<br>
                    初診予約はWebから24時間受け付けております。<br>
                    初診受付は午前は11:30まで、午後は17:30までとなります。
                  </p>

                  <p class="notes">
                    ※美容の受付時間は異なります。<a href="/beauty/#clinic">詳しくはこちら</a>をご覧ください。
                  </p>
                </div>
              <?php endif; ?>
            </div>
          </div>

          <div class="map js_anim_scroll">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.24414519866!2d137.0325245757576!3d35.00059307281462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60049c4149874f99%3A0xddd6e3de79bf2928!2z44CSNDcyLTAwNTQg5oSb55-l55yM55-l56uL5biC5p2x5LiK6YeN5Y6f77yW5LiB55uu77yX77yQ!5e0!3m2!1sja!2sjp!4v1703834566009!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </section>
    <?php endif; ?>
    <!-- /#clinic -->

    <!-- #contact -->
    <section id="contact">
      <div class="m_box_fixed">
        <h2 class="m_txt_ttl js_anim_scroll">
          <span class="en">contact</span>
          <em class="ja">初診ご予約·<br class="pc-hide">お問い合わせ</em>
        </h2>

        <p class="lead js_anim_scroll">
          お体の不調にお悩みの場合は、<br class="pc-hide">あいちハートクリニックまで。<br>
          どこの診療科に行ったら良いかわからない方も、<br class="pc-hide">お気軽にご相談ください。
        </p>

        <div class="row js_anim_scroll_group">
          <div>
            <p class="btn m_btn_cta">
              <a href="https://aichiheart.reserve.ne.jp/sp/index.php?" target="_blank" rel="noopener noreferrer">
                初診ご予約はこちら<i></i>
              </a>
            </p>
          </div>

          <div>
            <p class="btn m_btn_cta -gray">
              <a href="/contact/">
                メールで相談·お問い合わせ<i></i>
              </a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /#contact -->

    <!-- #sitemap -->
    <section id="sitemap">
      <div class="m_box_fixed">
        <div class="top js_anim_scroll">
          <p class="logo"><img loading="lazy" src="/asset/img/logo_wh.svg" alt="あいちハートクリニック" width="218" height="34"></p>

          <div class="sitemap">
            <div>
              <h4>医院紹介</h4>
              <dl>
                <dt><a href="/about">クリニックについて</a></dt>
                <dd>
                  <a href="/about#greeting">ごあいさつ</a>
                  <a href="/about#feature">当クリニックの特徴</a>
                  <a href="/about#doctor">医師紹介</a>
                  <a href="/about#officeWork">事務長紹介</a>
                  <a href="/about#facility">各施設紹介</a>
                </dd>

                <dt><a href="/equipment/">医療設備</a></dt>
              </dl>
            </div>

            <div>
              <h4>診療案内</h4>
              <dl>
                <dt><a href="/cardiology/">循環器科</a></dt>
                <dd>
                  <a href="/cardiology#about">心臓疾患について</a>
                  <a href="/cardiology#heartCheck">心臓検査</a>
                  <a href="/cardiology#catheter">カテーテル検査·治療</a>
                  <a href="/cardiology#heartSurgery">血管外科手術</a>
                </dd>

                <dt><a href="/varix/">足の外来</a></dt>
                <dd>
                  <a href="/varix#varicoseVeins">下肢静脈瘤</a>
                  <a href="/varix#pad">下肢動脈疾患(PAD)</a>
                  <a href="/varix#cvi">慢性静脈不全(CVI)</a>
                  <a href="/varix#dvt">深部静脈血栓(DVT)</a>
                  <a href="/varix#other">その他</a>
                </dd>

                <dt><a href="/shunt/">透析シャント治療</a></dt>
                <dt><a href="/general/">一般内科·外科</a></dt>
                <dt><a href="/no-smoking/">禁煙外来</a></dt>
                <dt><a href="/fever/">発熱外来</a></dt>
              </dl>
            </div>

            <div>
              <ul>
                <li><a href="/beauty/">美容案内</a></li>
                <li><a href="/news/">お知らせ</a></li>
                <li><a href="/information/">医院情報·アクセス</a></li>
              </ul>
            </div>

            <div>
              <ul>
                <li><a href="/contact/">お問い合わせ</a></li>
                <li><a href="https://aichiheart.reserve.ne.jp/sp/index.php?" target="_blank" rel="noopener noreferrer">初診ご予約</a></li>
              </ul>

              <p class="instagram">
                <a href="https://www.instagram.com/aichi.heart.clinic/" target="_balnk" rel="noonner,noreferrer">
                  <img loading="lazy" src="/asset/img/i_social_instagram_bk.svg" alt="Instagram" width="16" height="16">
                </a>
              </p>
            </div>
          </div>
        </div>

        <div class="bottom">
          <p class="privacy"><a href="/privacy/">プライバシーポリシー</a></p>
          <p class="copy">&copy;2022 あいちハートクリニック</p>
        </div>
      </div>
    </section>
    <!-- #sitemap -->
  </footer>
  <!-- /#l_footer -->

  <?php wp_footer(); ?>
</body>
</html>
