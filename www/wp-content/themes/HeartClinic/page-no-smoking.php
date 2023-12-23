<?php get_header(); ?>
<main>
  <?php get_template_part("/template-parts/reserve") ?>
  <div class="l-under -main">
    <div class="l-under__sideMenu">
      <div class="p-under__sideMenu">
        <div class="p-under__sideInner">
          <ul class="p-under__sideList">
            <li class="p-under__sideItem"><a class="sec01" href="#sec01">喫煙と病気</a></li>
            <li class="p-under__sideItem">
              <a class="sec02" href="#sec02">禁煙のメリット<br></a>
            </li>
            <li class="p-under__sideItem">
              <a class="sec03" href="#sec03">禁煙治療の対象者&middot;費用 <br></a>
            </li>
            <li class="p-under__sideItem">
              <a class="sec04" href="#sec04">治療方法<br></a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /.l-under__sideMenu -->
    </div>
    <!-- /.p-under__sideMenu -->

    <div class="l-spacer -under l-under__main p-under__main">
      <div class="p-under__container -secondary">
        <?php get_template_part("/template-parts/pankuzu") ?>

        <div class="p-under__topContent">
          <div class="p-under__mainTitle">
            <h2 class="c-heading -underPrimary">
                  <span class="en">no smoking</span>
                  <em>禁煙外来</em>
                </h2>
          </div>
        </div>
        <!-- /.p-under__topContent -->
      </div>

      <section class="p-under__bg -bg08">
        <div class="l-spacer">
          <div class="p-under__container -secondary">
            <div class="p-under__messageContent -message">
              <div class="p-under__messageText">
                <em class="p-under__lead">喫煙による病気のリスクを減らしましょう。</em>
                <p class="p-under__messageParagraph">
                      様々な病気の原因となる喫煙を少しでも減らせるように、当クリニックでは禁煙治療を積極的に行います。<br>
                      ご希望の方はお気軽にスタッフにお声をかけ下さい。貴方の禁煙をサポートいたします。
                    </p>
              </div>
            </div>
          </div>
          <!-- /.p-under__container -->
        </div>
      </section>

      <section class="js-trigger-section01" id="sec01">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>喫煙と病気</em>
                </h3>

            <div class="p-under__innerContent">
              <p>
                    タバコの煙には200種類以上の有害物質が含まれており、下記のような様々な病気や症状にかかりやすくなります。<br>
                    毎年タバコにより全世界で600万人、日本では12万人が命を落しています。
                  </p>

              <div class="p-under__radiationBlock">
                <ul class="p-under__cardiologyTypeList">
                  <li class="p-under__cardiologyTypeItem -secondary">虚血性心疾患</li>
                  <li class="p-under__cardiologyTypeItem -secondary">脳卒中</li>
                  <li class="p-under__cardiologyTypeItem -secondary">肺&middot;咽頭&middot;膀胱などのがん</li>
                  <li class="p-under__cardiologyTypeItem -secondary">糖尿病</li>
                  <li class="p-under__cardiologyTypeItem -secondary">メタボリックシンドローム</li>
                  <li class="p-under__cardiologyTypeItem -secondary">胃潰瘍</li>
                  <li class="p-under__cardiologyTypeItem -secondary">皮膚の老化</li>
                </ul>
              </div>

              <p class="p-under__smokingText">
                    今までタバコを吸っていた方が禁煙すると、これらの病気で死亡するリスクは年々少なくなります。<br>ご家族や周りの方も間接的なタバコの煙を吸わなくてもよくなり、病気や不快な思いから遠ざかることができます。今までタバコに使っていたお金を貯金に回せば家計は大いに助かるでしょう。
                  </p>
            </div>
          </div>
        </div>
      </section>

      <section class="js-trigger-section02" id="sec02">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>禁煙のメリット</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="p-under__radiationBlock">
                <p>禁煙をすると、10年後の肺がん死亡率が喫煙者の半分になるというデータがあります。</p>

                <div class="graph-wrap -primary -border">
                  <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/smoking/smoking-graph01@2x.jpg" media="(min-width: 1024px)">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/smoking/smoking-graph01-sp@2x.jpg" alt=" 禁煙のメリットが分かるデータ" />
                  </picture>


                </div>

                <p class="p-under__smokingText">
                      タバコを止めると、まず血圧が正常になり肺の働きなどが回復し始めます。数カ月後には、心臓や運動機能も改善してきます。<br>さらに継続すると様々な疾患のリスクが吸わない人に近づいていきます。禁煙に遅すぎることはありません。
                    </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="js-trigger-section03" id="sec03">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>禁煙治療の対象者&middot;費用</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="p-under__radiationBlock">
                <p>健康保険等で禁煙治療を行った場合の自己負担額（3割負担の場合）は8～12週間で13,000～20,000円程度です。<br>禁煙治療に支払う費用は、その間のタバコ代と同等かそれより安くなっております。禁煙治療に成功すれば、それ以降のタバコ代が不要になるため、経済面からもおすすめできる治療です。<br>以下の４項目をすべて満たしている方が保険適応となります。</p>

                <div class="graph-wrap -primary -border">
                  <div class="box">
                    <ul>
                      <li>直ちに禁煙を始めたいと考えていること。</li>
                      <li>ニコチン依存症<a href="#test">スクリーニングテスト（TDS）</a>で5点以上であること。</li>
                      <li>
                        ブリンクマン指数（1日喫煙本数×喫煙年数）が200以上であること。（35歳未満の方はこの要件は不要です）
                      </li>
                      <li>禁煙治療を受けることに文書で同意していること。</li>
                    </ul>
                    <p class="note">※ブリンクマン指数：1日の喫煙本数 × 喫煙年数 ≧ 200</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="js-trigger-section04" id="sec04">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>治療方法</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="p-under__radiationBlock">
                <p>
                      禁煙治療は3ヶ月のプログラムで行います。プログラム終了後、約80%の方は少なくとも1ヶ月以上禁煙を続けられていました。<br>タバコをやめようという強い意志は必要ですが、医師や薬を上手に使って、確実に禁煙を進めていきませんか？
                    </p>

                <div class="p-under__smokingInnerBlock -primary">
                  <h4 class="c-heading -sizeS">健康保険等を使った<br class="pc-hide">禁煙治療のスケジュール</h4>

                  <div class="graph-wrap -border -primary">
                    <picture>
                      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/smoking/smoking-graph02@2x.jpg" media="(min-width: 1024px)">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/smoking/smoking-graph02-sp@2x.jpg" alt=" 禁煙のメリットが分かるデータ" />
                    </picture>
                    <p class="inner-text">
                      初回診察の際に、問診票の記載および禁煙開始日の決定と禁煙宣言書にサインをしていただき、8日目から禁煙をスタートします。<br>また、開始から2週間後と8週間後に、禁煙補助薬の処方と、息に含まれる一酸化濃度の測定をします。<br class="sp-hide">禁煙状況に応じて医師のアドバイスを受けます。
                    </p>
                  </div>
                </div>

                <div class="p-under__smokingInnerBlock -secondary">
                  <h4 class="c-heading -sizeS">禁煙治療を受けた回数と<br class="pc-hide">禁煙継続率との関係</h4>

                  <div class="graph-wrap -border -primary">
                    <picture>
                      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/smoking/smoking-graph03@2x.jpg" media="(min-width: 1024px)">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/smoking/smoking-graph03-sp.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/smoking/smoking-graph03-sp@2x.jpg 2x" alt="禁煙のメリットが分かるデータ" />
                    </picture>

                  </div>

                  <p class="p-under__smokingText">
                        健康保険による標準的な禁煙治療プログラムは12週間に渡り計5回の禁煙治療を行います。禁煙治療を受けた回数と禁煙継続率の関係を調べたところ、5回の通院治療を完了した人では、47.2%が9ヵ月後も禁煙を継続していました。<br>一方、初回の診察で中断してしまった人で、禁煙が続いていたのは4.7%でした。禁煙完了まで至った患者様では禁煙継続率が高い傾向がみられます。
                        <span class="br-spacer">
                          <dl class="somoking-Method">
                            <dt>
                              <span class="left">対象：</span><span class="right">ニコチン依存症患者1,308例（1,149施設の医療機関）</span>
                            </dt>
                            <dd>
                              <span class="left">方法：</span><span class="right">調査対象施設に自記式調査票を郵送配布し、郵送回収した。<br>（調查施時期:平成29年7月12日〜平成29年9月27日）<br>調査対象施設が、調査対象患者の治療終了から10〜11ヵ月目となる平成29年7月〜8月に、その時点での禁煙/喫煙状況を電話により調査し、その結果を調査票に記載する形式とした。</span>
                            </dd>
                          </dl>
                        </span>
                      </p>
                  <div class="br-spacer">
                    <p class="right-text">
                          平成28年度診療報酬改定の結果検証に係る特別調査（平成29年度調查）<br>
                          ニコチン依存症管理料による禁煙治療の効果等に関する調査報告書
                        </p>
                  </div>
                </div>

                <!-- <div class="p-under__smokingInnerBlock -secondary">
                  <h4 class="c-heading -sizeS">禁煙外来の費用について</h4>
                  <p class="p-under__smokingInnerText">
                        3割負担の場合、禁煙外来での費用は12週間の治療で、約2万円になります。<br>
                        ※船橋市にあるつばさ在宅クリニックの場合、禁煙補助薬を用いた禁煙治療で約1万8千円。
                      </p>

                  <div class="graph-wrap -border -primary">
                    <div class="box">
                      <h5>タバコの費用と禁煙治療の費用比較</h5>
                      1日タバコ1箱を12週間吸う場合の費用は、約4万5千円になります。禁煙外来での費用は、禁煙補助薬を用いた禁煙治療で約1万8千円ですし、禁煙成功後は、それ以降タバコの費用はかかりませんので、経済面から考えても禁煙外来の利用をおすすめします。
                    </div>
                  </div>
                </div> -->

                <div class="p-under__smokingInnerBlock -secondary">
                  <h4 class="c-heading -sizeS" id="test">ニコチン依存症スクリーニングテスト（TDS）</h4>
                  <p class="p-under__smokingInnerText">
                        以下の質問項目に当てはまる数が5点以上ある場合は保険適用となります。
                      </p>

                  <div class="graph-wrap -border -primary">
                    <div class="box">
                      <ul>
                        <li>自分が吸うつもりよりも、ずっと多くタバコを吸ってしまうことがありましたか</li>
                        <li>禁煙や本数を減らそうと試みて、できなかったことがありましたか</li>
                        <li>
                          禁煙したり本数を減らそうとしたときに、タバコがほしくてほしくてたまらなくなることがありましたか
                        </li>
                        <li>
                          禁煙したり本数を減らしたときに、次のどれかがありましたか。（イライラ、神経質、落ちつかない、集中しにくい、ゆううつ、頭痛、眠気、胃のむかつき、脈が遅い、手のふるえ、食欲または体重増加）
                        </li>
                        <li>④でうかがった症状を消すために、またタバコを吸い始めることがありましたか</li>
                        <li>重い病気にかかったときに、タバコはよくないとわかっているのに吸うことがありましたか</li>
                        <li>タバコのために自分に健康問題が起きているとわかっていても、吸うことがありましたか</li>
                        <li>タバコのために自分に精神問題が起きているとわかっていても、吸うことがありましたか</li>
                        <li>自分はタバコに依存していると感じることがありましたか</li>
                        <li>タバコが吸えないような仕事やつきあいを避けることが何度かありましたか</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.l-under__main -->
  </div>
  <!-- /.l-sub -->
  <?php get_footer(); ?>