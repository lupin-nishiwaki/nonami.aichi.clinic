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
                  <span>野並院</span>
                </h2>
                <address>〒468-0046 愛知県名古屋市天白区古川町158<br>B&D野並メディカルステーション1F</address>
                <!-- <p class="tel <?php if(strstr($_SERVER['REQUEST_URI'], 'beauty')) {echo "-purple";}?>">0566-91-5810</p> -->
                <!-- <p class="fax">FAX 0566-91-5816</p> -->
              </div>

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
                      <th class="en time">9:00-13:00</th>
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
                      <td class="line-left none"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left circle"></td>
                      <td class="line-left none"></td>
                      <td class="line-left none"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <p class="note">
              ※月曜日午後は19:30まで、土曜日午前は9:30~13:00<br>
              ※木曜日午後は深谷Dr.の足の外来
            </p>
          </div>

          <div class="p-main__mapImage">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.2439696888055!2d137.03251921181243!3d35.000597466948385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60049c4149874f99%3A0xddd6e3de79bf2928!2z44CSNDcyLTAwNTQg5oSb55-l55yM55-l56uL5biC5p2x5LiK6YeN5Y6f77yW5LiB55uu77yX77yQ!5e0!3m2!1sja!2sjp!4v1703607487914!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>

      <!--
      <div class="p-main__mapGoogle">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13072.97756700918!2d137.0350931!3d35.0005869!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac85b726f560a034!2z44GC44GE44Gh44OP44O844OI44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1653712379450!5m2!1sja!2sjp" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
        -->
    </div>
  </section>
  <?php endif; ?>

  <section class="l-spacer -colorSub">
    <div class="l-container">
      <div class="p-main__contact">
        <h2 class="c-heading -center">
          <span class="en">contact</span>
          お問い合わせはこちら
        </h2>

        <p class="p-main__lead -center">
          お体の不調にお悩みの場合は、あいちハートクリニックまで。<br class="sp-hide">
          どこの診療科に行ったら良いかわからない方も、お気軽にご相談ください。
        </p>

        <div class="c-button__wrap -center">
          <a href="<?php echo esc_url( home_url( ) ); ?>/contact/" class="c-button -colorGray -shadow -center -secondary">
            <span class="inner">メールで相談・お問い合わせ</span>
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

<footer class="l-footer">
  <div class="wrapper l-container">
    <p class="logo"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/logo-header.svg" alt="ハートクリニックのロゴ"></p>

    <div class="sub">
      <p class="privacy"><a href="/privacy/">プライバシーポリシー</a></p>
      <p class="copy">&copy;2023 あいちハートクリニック野並院</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
