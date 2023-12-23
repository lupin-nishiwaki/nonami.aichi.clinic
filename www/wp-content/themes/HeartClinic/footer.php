  <?php if(!is_page("information")): ?>
  <section class="l-spacer -map -borderTop">

    <div class="p-main__map" id="map">
      <div class="l-container">
        <div class="p-main__mapContents">
          <div class="p-main__mapBody">
            <div class="p-main__mapBody-inner">
              <div class="p-main__mapHead">
                <h2>
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/logo-header.svg" alt="ハートクリニックのロゴ">
              </h2>
                <address>〒472-0054 愛知県知立市東上重原6-70</address>
                <p class="tel <?php if(strstr($_SERVER['REQUEST_URI'], 'beauty')) {echo "-purple";}?>">0566-91-5810</p>
                <p class="fax">FAX 0566-91-5816</p>
              </div>

              <?php if(strstr($_SERVER['REQUEST_URI'], 'beauty')):?>
              <div class="p-main__timeTable -map">
                <table>
                  <tbody>
                    <tr class="heading">
                      <th>診療時間</th>
                      <th class="line-left">月</th>
                      <th class="line-left">火</th>
                      <th class="line-left">水</th>
                      <th class="line-left">木</th>
                      <th class="line-left">金</th>
                      <th class="line-left">土</th>
                      <th class="line-left">日</th>
                    </tr>
                    <tr>
                      <th class="en time">9:00-12:00</th>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left triangle"></td>
                      <td class="line-left none"></td>
                    </tr>
                    <tr>
                      <th class="en time">14:00-18:00</th>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left triangle"></td>
                      <td class="line-left none"></td>
                    </tr>
                  </tbody>
                </table>
                <p class="table-note"><span>不定期 9:00 - 16:00</span></p>
              </div>
              <?php else: ?>

              <div class="p-main__timeTable -map">
                <table>
                  <tbody>
                    <tr class="heading">
                      <th>診療時間</th>
                      <th class="line-left">月</th>
                      <th class="line-left">火</th>
                      <th class="line-left">水</th>
                      <th class="line-left">木</th>
                      <th class="line-left">金</th>
                      <th class="line-left">土</th>
                      <th class="line-left">日</th>
                    </tr>
                    <tr>
                      <th class="en time">9:00-12:00</th>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left none"></td>
                    </tr>
                    <tr>
                      <th class="en time">15:00-18:00</th>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left none"></td>
                      <td class="line-left none"></td>
                    </tr>
                  </tbody>
                </table>

              </div>
              <?php endif; ?>

            </div>
            <?php if(strstr($_SERVER['REQUEST_URI'], 'beauty')):?>
            <p class="note">
            電話のご予約は13:00-17:00に受け付けております。<br>
            土曜日は9:00-13:00、14:00-18:00の受付となっております。
            <br>※一般診療の受付時間は異なります。<a  href="<?php echo esc_url( home_url( ) ); ?>/information#sec02">詳しくはこちら</a>をご覧ください。
          </p>
            <?php else: ?>
            <p class="note">
            ご予約は診療時間内に電話で受け付けております。<br>
            初診予約はWebから24時間受け付けております。<br>
            初診受付は午前は11:30まで、午後は17:30までとなります。<br>
            <br>※美容の受付時間は異なります。<a  href="<?php echo esc_url( home_url( ) ); ?>/beauty#map">詳しくはこちら</a>をご覧ください。
          </p>
            <?php endif; ?>
          </div>

          <figute class="p-main__mapImage">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/clinic.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/clinic.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/clinic.jpg@2x" alt="ハートクリニックの外観">
          </figute>
        </div>
      </div>
      <div class="p-main__mapGoogle">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13072.97756700918!2d137.0350931!3d35.0005869!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac85b726f560a034!2z44GC44GE44Gh44OP44O844OI44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1653712379450!5m2!1sja!2sjp" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="l-spacer -colorSub">
    <div class="l-container">
      <div class="p-main__contact">
        <h2 class="c-heading -center">
        <span class="en">contact</span>初診ご予約<span class="sp-hide">&middot;</span><br class="pc-hide">お問い合わせ
      </h2>
        <p class="p-main__lead -center">
              お体の不調にお悩みの場合は、あいちハートクリニックまで。<br
                class="sp-hide"
              >どこの診療科に行ったら良いかわからない方も、お気軽にご相談ください。
            </p>

        <div class="c-button__wrap -secondary">
          <a target="_blank" rel="noopener noreferrer" href="https://aichiheart.reserve.ne.jp/sp/index.php?" class="c-button -colorAccent -shadow -center -secondary"><span class="inner">初診ご予約はこちら</span>
            <i class="svg-wrap">
              <svg class="arrow -whiteBrown" viewBox="0 0 23 7.206">
                <g transform="translate(-125.801 -6.294)">
                  <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                </g>
              </svg>
            </i>
          </a>
          <a href="<?php echo esc_url( home_url( ) ); ?>/contact/" class="c-button -colorGray -shadow -center -secondary"><span class="inner">メールで相談&middot;お問い合わせ</span>
            <i class="svg-wrap">
              <svg class="arrow -whiteGray" viewBox="0 0 23 7.206">
                <g transform="translate(-125.801 -6.294)">
                  <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
                </g>
              </svg>
            </i>
          </a>
        </div>
      </div>
    </div>
  </section>
  </main>
  <footer class="p-footer">
    <div class="l-spacer -footer">
      <div class="l-container">
        <div class="p-footer__inner">
          <div class="p-footer__container">
            <h2 class="p-footer__title">
                <a href="<?php echo esc_url( home_url( ) ); ?>"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/logo-footer.svg" alt="あいちハートクリニック" ></a>
              </h2>

            <div class="p-footer__content">
              <p class="p-footer__contentTitle">
                  医院紹介
                </p>
              <ul class="p-footer__contentList">
                <li class="p-footer__contentItem">
                  <p><a href="<?php echo esc_url( home_url( ) ); ?>/about">クリニックについて</a></p>
                  <ul class="p-footer__contentInner">
                    <li class="p-footer__contentInner-item"><a href="<?php echo esc_url( home_url( ) ); ?>/about#sec01">ごあいさつ</a></li>
                    <li class="p-footer__contentInner-item"><a href="<?php echo esc_url( home_url( ) ); ?>/about#sec02">当クリニックの特徴</a></li>
                    <li class="p-footer__contentInner-item"><a href="<?php echo esc_url( home_url( ) ); ?>/about#sec03">医師紹介</a></li>
                    <li class="p-footer__contentInner-item"><a href="<?php echo esc_url( home_url( ) ); ?>/about#sec04">事務長紹介</a></li>
                    <li class="p-footer__contentInner-item"><a href="<?php echo esc_url( home_url( ) ); ?>/about#sec05">各施設紹介</a></li>
                  </ul>
                  <p><a href="<?php echo esc_url( home_url( ) ); ?>/equipment">医療設備</a></p>
                </li>
              </ul>
            </div>
            <!-- /.p-footer__content -->

            <div class="p-footer__content">
              <p class="p-footer__contentTitle">
                  診療案内
                </p>
              <ul class="p-footer__contentList">
                <li class="p-footer__contentItem">
                  <p><a href="<?php echo esc_url( home_url( ) ); ?>/cardiology/">循環器科</a></p>
                  <ul class="p-footer__contentInner">
                    <li class="p-footer__contentInner-item"><a href="<?php echo esc_url( home_url( ) ); ?>/cardiology#sec01">心臓疾患について</a></li>
                    <li class="p-footer__contentInner-item"><a href="<?php echo esc_url( home_url( ) ); ?>/cardiology#sec02">心臓検査</a></li>
                    <li class="p-footer__contentInner-item"><a href="<?php echo esc_url( home_url( ) ); ?>/cardiology#sec03">カテーテル検査&middot;治療</a></li>
                    <li class="p-footer__contentInner-item"><a href="<?php echo esc_url( home_url( ) ); ?>/cardiology#sec04">心臓血管外科手術</a></li>
                  </ul>
                  <p><a href="<?php echo esc_url( home_url( ) ); ?>/varix/">足の外来</a></p>
                  <ul class="p-footer__contentInner">
                    <li class="p-footer__contentInner-item"><a href="<?php echo esc_url( home_url( ) ); ?>/varix#sec01">下肢静脈瘤</a></li>
                    <li class="p-footer__contentInner-item"><a href="<?php echo esc_url( home_url( ) ); ?>/varix#sec02">下肢動脈疾患(PAD)</a></li>
                    <li class="p-footer__contentInner-item"><a href="<?php echo esc_url( home_url( ) ); ?>/varix#sec03">慢性静脈不全(CVI)</a></li>
                    <li class="p-footer__contentInner-item"><a href="<?php echo esc_url( home_url( ) ); ?>/varix#sec04">深部静脈血栓(DVT)</a></li>
                    <li class="p-footer__contentInner-item"><a href="<?php echo esc_url( home_url( ) ); ?>/varix#sec05">その他</a></li>
                  </ul>
                  <p><a href="<?php echo esc_url( home_url( ) ); ?>/shunt/">透析シャント治療</a></p>
                  <p><a href="<?php echo esc_url( home_url( ) ); ?>/general/">一般内科&middot;外科 </a></p>
                  <p><a href="<?php echo esc_url( home_url( ) ); ?>/no-smoking/">禁煙外来</a></p>
                  <p><a href="<?php echo esc_url( home_url( ) ); ?>/fever/">発熱外来</a></p>
                </li>
              </ul>
            </div>
            <!-- /.p-footer__content -->

            <div class="p-footer__content">
              <p class="p-footer__contentTitle"><a href="<?php echo esc_url( home_url( ) ); ?>/beauty/">美容案内</a></p>
              <p class="p-footer__contentTitle"><a href="<?php echo esc_url( home_url( ) ); ?>/news/">お知らせ</a></p>
              <p class="p-footer__contentTitle"><a href="<?php echo esc_url( home_url( ) ); ?>/information/">医院情報&middot;アクセス</a></p>
              <!-- <p class="p-footer__contentTitle"><a href="<?php echo esc_url( home_url( ) ); ?>/recruit/">採用情報</a></p> -->
            </div>
            <!-- /.p-footer__content -->

            <div class="p-footer__content">
              <p class="p-footer__contentTitle"><a href="<?php echo esc_url( home_url( ) ); ?>/contact/">お問い合わせ</a></p>
              <p class="p-footer__contentTitle"><a target="_blank" rel="noopener noreferrer" href="https://aichiheart.reserve.ne.jp/sp/index.php?">初診ご予約</a></p>
              <p class="p-footer__contentTitle -insta">
                  <a class="insta" href="https://www.instagram.com/aichi.heart.clinic/" target="_balnk" rel="noonner,noreferrer"></a>
                </p>
            </div>
            <!-- /.p-footer__content -->
          </div>
          <!-- /.p-footer__container -->

          <div class="p-footer__bottom">
            <ul class="p-footer__bottomList">
              <li class="p-footer__bottomItem"><a href="<?php echo esc_url( home_url( ) ); ?>/privacy/">プライバシーポリシー</a></li>
            </ul>
            <p class="p-footer__copy"><small>&copy;2022 あいちハートクリニック</small></p>
          </div>
        </div>
        <!-- /.p-footer__inner -->
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  </body>
  </html>
