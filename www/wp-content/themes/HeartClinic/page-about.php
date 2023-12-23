<?php get_header(); ?>
<main>
  <?php get_template_part("/template-parts/reserve") ?>

  <div class="l-under -main">
    <div class="l-under__sideMenu">
      <div class="p-under__sideMenu">
        <div class="p-under__sideInner">
          <ul class="p-under__sideList">
            <li class="p-under__sideItem"><a class="sec01" href="#sec01">ごあいさつ</a></li>
            <li class="p-under__sideItem"><a class="sec02" href="#sec02">当クリニックの特徴</a></li>
            <li class="p-under__sideItem"><a class="sec03" href="#sec03">医師紹介</a></li>
            <li class="p-under__sideItem"><a class="sec04" href="#sec04">事務長紹介</a></li>
            <li class="p-under__sideItem"><a class="sec05" href="#sec05">各施設紹介</a></li>
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
                  <span class="en">about us</span>
                  <em>クリニックについて</em>
                </h2>
          </div>
        </div>
        <!-- /.p-under__topContent -->

      </div>

      <section class="p-under__bg -bg01 js-trigger-section01">
        <div class="l-spacer" id="sec01">
          <div class="p-under__container -secondary">
            <div class="p-under__messageContent -message">
              <h3 class="c-heading -underSecondary">
                    <em>ごあいさつ</em>
                  </h3>

              <div class="p-under__messageText">
                <p class="p-under__messageParagraph">
                      当クリニックは、2017年9月1日、愛知県知立市に循環器科&middot;心臓血管外科専門医による2名体制の有床診療所「あいちハートクリニック」として開院しました。そして、2022年4月1日より「一般社団法人生活習慣病予防センターあいちハートクリニック」として生まれ変わり、専門医かつかかりつけ医として日々の診療を行っています。<br>
                      熟練した専門のスタッフによる一般特殊血液検査、心臓検査、最先端CT検査、心臓カテーテル検査及び治療、下肢静脈瘤治療、透析シャント治療、日帰り外科手術などが可能です。それ以上の専門的技術&middot;設備を要する疾患と判断した場合は、ハートセンター（豊橋&middot;名古屋）や近隣の病院&middot;大学病院などの私共も信頼できる専門医をご紹介いたします。<br>
                      循環器疾患のみならず、内科&middot;外科の診療や有資格専門看護師によるアンチエイジング、フェイシャル、脱毛などの美容的治療も行っております。
                      一人一人の患者様に寄り添いながら意思疎通や信頼関係を大切にし、何でも気軽に相談に来ていただける敷居の低いクリニックであると同時に、より丁寧な診療と高い医療&middot;美容サービスを提供できるよう、スタッフ一同努力してまいります。
                </p>
              </div>
            </div>
          </div>
          <!-- /.p-under__container -->
        </div>
      </section>

      <section class="p-under__bg -bg02 js-trigger-section02" id="sec02">
        <div class="l-spacer -borderTop -sizeLbottom">
          <div class="p-under__container">
            <h3 class="c-heading -underSecondary">
                  <em>当クリニックの特徴</em>
                </h3>
          </div>

          <div class="p-under__featureContainer">
            <article class="p-under__featureContent">
              <figure class="p-under__featureImage -right">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/feature01.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/feature01.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/feature01@2x.jpg 2x" alt="ハートリクニックの先進医療機器" decoding="async">
              </figure>

              <div class="p-under__featureText">
                <h4 class="p-under__lead -line">カテーテル治療を専門とする循環器クリニック</h4>
                <p class="p-under__featureParagraph">
                      先進のCT診断と心臓カテーテル治療&middot;下肢静脈瘤レーザー治療を提供する西三河地区初の有床循環器専門クリニックです。狭心症、心筋梗塞、不整脈などの心臓病に対して、検査から診断、治療に至るまで全て院内で行える一貫した医療体制を整えております。
                    </p>
              </div>
            </article>
            <!-- /.p-under__featureContent -->

            <article class="p-under__featureContent">
              <figure class="p-under__featureImage -left">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/feature02.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/feature02.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/feature02@2x.jpg 2x" alt="ハートリクニックの治療をしている様子" decoding="async">
              </figure>

              <div class="p-under__featureText">
                <h4 class="p-under__lead -line">専門医による高度な医療</h4>
                <p class="p-under__featureParagraph">
                      循環器疾患の最前線治療に携わってきた専門医２名による診療を掲げつつ、内科外科の一般疾患についても日々丁寧な診療を心がけています。当クリニックで安全に治療手術可能な疾患については、可能な限り患者様のニーズに応えます。
                    </p>
              </div>
            </article>
            <!-- /.p-under__featureContent -->

            <article class="p-under__featureContent">
              <figure class="p-under__featureImage -right">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/feature03.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/feature03.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/feature03@2x.jpg 2x" alt="専門的な知識でヒアリングを行っている様子" decoding="async">
              </figure>

              <div class="p-under__featureText">
                <h4 class="p-under__lead -line">可能な限り痛みや体への<br>負担を減らした低侵襲治療</h4>
                <p class="p-under__featureParagraph">
                      できる限り患者様の身体への負担を減らした治療を目指しています。入院も原則１泊２日にできるよう、クリニックで可能な最先端の治療を行っています。
                    </p>
              </div>
            </article>
            <!-- /.p-under__featureContent -->

            <article class="p-under__featureContent">
              <figure class="p-under__featureImage -left">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/feature04.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/feature04.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/feature04@2x.jpg" alt="快適に入院生活を送れる完全個室" />
              </figure>

              <div class="p-under__featureText">
                <h4 class="p-under__lead -line">快適に入院生活を過ごせる<br>完全個室を無料でご用意</h4>
                <p class="p-under__featureParagraph">
                      プライバシーに配慮し全室無料にて個室をご用意しております。病室には、最新の睡眠科学を生かしたSIMMONS（シモンズ電動リクライニングベッド）、洗面所とトイレの他、クローゼット、液晶テレビ、ミニ冷蔵庫、金庫を備えており、全て無料でご利用いただけます。また、院内無線LAN（WiFi）もご自由に使用可能です。
                    </p>
              </div>
            </article>
            <!-- /.p-under__featureContent -->
          </div>
          <!-- /.p-under__featureContainer -->
        </div>
      </section>

      <section class="js-trigger-section03" id="sec03">
        <div class="l-spacer">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>医師紹介</em>
                </h3>

            <div class="p-under__doctorContainer">
              <article class="p-under__doctorContent">
                <div class="p-under__doctorBlock">
                  <div class="p-under__doctorHead">
                    <h4 class="p-under__doctorTitle">
                          <span class="position">院長</span>
                          <span class="main">深谷 俊介</span>
                          <span class="en">Shunsuke Fukaya</span>
                        </h4>

                    <p class="p-under__doctorParagraph">
                          1999年に医師になってから、医療の最終手段である手術により一人でも多くの患者様を治したいと思い最前線に立ち、最も命に直結する心臓血管手術を専門に努めてまいりました。<br>現在まで多くの技術&middot;経験を取得し、患者様からは数えきれないほど多くの貴重な勉強をさせて頂きました。つらい事も多々ありましたが、その都度患者様からの言葉が私を助けてくれました。
                          ここ数年で医療現場は良くも悪くも急激に変化しており、証拠の提示、多数の同意書、数字確率の話もしなければならず、時にはそれが患者様に事務的な冷たい印象を与えてしまうこともあります。<br>自分の思想と相反する事もしなければなりませんが、専門医かつかかりつけ医として、患者様の心も癒し、絆も深める「手当て」のできる、地域の皆様に信頼されるクリニックでありたいと考えています。
                        </p>
                  </div>

                  <figure class="p-under__doctorImage">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctor01.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctor01.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctor01@2x.jpg 2x" alt="深谷 俊介" decoding="async">
                  </figure>
                </div>


                <div class="p-under__doctorInner">
                  <div class="p-under__doctorDlWrap01">
                    <dl class="p-under__doctorDl">
                      <dt>経歴</dt>
                      <dd>
                        <dl>
                          <dt>1993年3月</dt>
                          <dd>東海高等学校 卒業</dd>
                        </dl>
                        <dl>
                          <dt>1999年3月</dt>
                          <dd>名古屋市立大学医学部 卒業</dd>
                        </dl>
                        <dl>
                          <dt>1999年4月</dt>
                          <dd>名古屋市立大学病院 臨床研修医</dd>
                        </dl>
                        <dl>
                          <dt>2000年7月</dt>
                          <dd>刈谷総合病院 外科、心臓血管外科</dd>
                        </dl>
                        <dl>
                          <dt>2002年4月</dt>
                          <dd>緑市民病院 心臓血管外科</dd>
                        </dl>
                        <dl>
                          <dt>2003年11月</dt>
                          <dd>埼玉東部循環器病院 心臓血管外科</dd>
                        </dl>
                        <dl>
                          <dt>2006年4月</dt>
                          <dd>埼玉東部循環器病院 心臓血管外科 部長</dd>
                        </dl>
                        <dl>
                          <dt>2008年10月</dt>
                          <dd>名古屋ハートセンター 心臓血管外科</dd>
                        </dl>
                        <dl>
                          <dt>2012年4月</dt>
                          <dd>名古屋ハートセンター 心臓血管外科 医長</dd>
                        </dl>
                        <dl>
                          <dt>2016年4月</dt>
                          <dd>豊橋ハートセンター 心臓血管外科 部長</dd>
                        </dl>
                        <dl>
                          <dt>2017年9月</dt>
                          <dd>あいちハートクリニック 院長</dd>
                        </dl>
                        <dl>
                          <dt>2022年4月</dt>
                          <dd>
                            一般社団法人生活習慣病予防センター 代表理事
                          </dd>
                        </dl>
                      </dd>
                    </dl>
                  </div>

                  <div class="p-under__doctorDlWrap02">
                    <dl class="p-under__doctorDl">
                      <dt>資格</dt>
                      <dd>
                        日本外科学会 認定医、専門医 / 日本心臓血管外科学会 専門医 / 日本脈管学会 専門医 /
                        腹部大動脈ステント 指導医 / 胸部大動脈ステント 指導医 / 日本医師会 認定産業医 /
                        下肢静脈瘤に対する血管内焼灼術指導医 / 麻酔科標榜医
                      </dd>
                    </dl>

                    <dl class="p-under__doctorDl">
                      <dt>所属</dt>
                      <dd>
                        日本外科学会 / 日本胸部外科学会 / 日本心臓血管外科学会 / 日本血管外科学会 / 日本循環器学会
                      </dd>
                    </dl>
                  </div>
                </div>
              </article>

              <article class="p-under__doctorContent">
                <div class="p-under__doctorBlock">
                  <div class="p-under__doctorHead">
                    <h4 class="p-under__doctorTitle">
                          <span class="position">副院長</span>
                          <span class="main">村瀨 傑</span>
                          <span class="en">Suguru Murase</span>
                        </h4>

                    <p class="p-under__doctorParagraph">
                          私は2002年に岐阜大学医学部を卒業後、急性期疾患を扱う総合病院で内科全般の診療を学び、その後、東海地区を代表する循環器専門病院である名古屋ハートセンターにてカテーテル治療を中心に心臓&middot;血管疾患の専門医として経験&middot;研鑽を重ねてまいりました。<br>
                          日常診療の中で常に感じていたことは、単に病気を治療する技術が高いだけでは満足な医療は提供できないということ。長年の経験に基づいた確かな技術に加えて、患者様を取り巻く様々な背景を考慮し緊密な信頼関係を築き、一人一人に寄り添った医療を提供することが大切だと考え、信念を共にした深谷院長と共に当クリニックを開院いたしました。<br>
                          昨今は新型コロナウイルス感染症蔓延による生活スタイルの変化で生活習慣病の増加や受診控えによる治療開始の遅れが懸念されております。循環器疾患は症状が出ないまま進行し、命に直結する病気のため早期発見&middot;早期治療が非常に大切です。些細な症状であってもどうぞお気軽にご相談下さい。
                        </p>
                  </div>

                  <figure class="p-under__doctorImage">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctor02.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctor02.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctor02@2x.jpg 2x" alt="村瀬 傑" decoding="async">
                  </figure>
                </div>

                <div class="p-under__doctorInner">
                  <div class="p-under__doctorDlWrap01">
                    <dl class="p-under__doctorDl">
                      <dt>経歴</dt>
                      <dd>
                        <dl>
                          <dt>1996年3月</dt>
                          <dd>岐阜県立加納高等学校 卒業</dd>
                        </dl>
                        <dl>
                          <dt>2002年3月</dt>
                          <dd>岐阜大学医学部 卒業</dd>
                        </dl>
                        <dl>
                          <dt>2002年4月</dt>
                          <dd>
                            岐阜大学医学部附属病院第二内科<br class="pc-hide" />
                            臨床研修医
                          </dd>
                        </dl>

                        <dl>
                          <dt>2004年4月</dt>
                          <dd>名古屋セントラル病院　循環器内科</dd>
                        </dl>
                        <dl>
                          <dt>2007年4月</dt>
                          <dd>木沢記念病院　循環器内科</dd>
                        </dl>
                        <dl>
                          <dt>2009年6月</dt>
                          <dd>名古屋ハートセンター 循環器内科</dd>
                        </dl>
                        <dl>
                          <dt>2015年4月</dt>
                          <dd>名古屋ハートセンター 循環器内科 医長</dd>
                        </dl>
                        <dl>
                          <dt>2017年9月</dt>
                          <dd>あいちハートクリニック 副院長</dd>
                        </dl>
                        <dl>
                          <dt>2022年4月</dt>
                          <dd>一般社団法人生活習慣病予防センター 理事</dd>
                        </dl>
                      </dd>
                    </dl>
                  </div>

                  <div class="p-under__doctorDlWrap02">
                    <dl class="p-under__doctorDl">
                      <dt>資格</dt>
                      <dd>
                        日本内科学会 総合内科専門医 / 日本循環器学会 循環器専門医 /
                        日本心血管インターベンション治療学会 認定医 / 日本医師会　認定産業医 / 日本禁煙学会
                        禁煙認定指導医
                      </dd>
                    </dl>

                    <dl class="p-under__doctorDl">
                      <dt>所属</dt>
                      <dd>
                        日本内科学会 / 日本循環器学会 / 日本心血管インターベンション治療学会 / 日本不整脈心電学会 /
                        日本心エコー図学会 / 日本禁煙学会 / 日本心不全学会 / 日本医学脱毛学会
                      </dd>
                    </dl>
                  </div>
                </div>
              </article>

              <article class="p-under__doctorContent">
                <div class="p-under__doctorBlock">
                  <div class="p-under__doctorHead">
                    <h4 class="p-under__doctorTitle">
                          <span class="position">野並院　院長</span>
                          <span class="main">竹谷 昌直</span>
                          <span class="en">Masanao Takeya</span>
                        </h4>

                    <p class="p-under__doctorParagraph">
                            私が医師になってから約18年の月日が経ちました。色々な縁があり循環器内科医を志し、多大な御力添えをいただきながら、循環器内科専門医としてこれまで病院勤務を続けて参りました。医療は日々進歩しており、まだまだ医師として勉強している最中で至らない部分も多いかと思いますが、今回「あいちハートクリニック野並」の開業に携わることになりました。<br>
                            私が医師として働き始めたころよりお世話になり、循環器内科医となるきっかけにもなった、あいちハートクリニック（知立市）の村瀬副院長から開業のお話をいただき、深谷院長とも名古屋ハートセンターで一緒に働いていたこともあり、この縁を大切にしたいと思い、クリニックの開業という新しい舞台での医療を決意しました。「あいちハートクリニック野並」では循環器診療、一般内科診療、下肢静脈瘤治療などで地域医療に貢献し、あいちハートクリニック（知立市）では、循環器内科スペシャリストとして不整脈カテーテル治療を行います。これまで培ってきたキャリアを存分に生かし、地域の皆様の支えになれるよう努力していく所存です。「あいちハートクリニック野並」をどうぞよろしくお願い申し上げます。
                        </p>
                  </div>

                  <figure class="p-under__doctorImage">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctor02.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctor04.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctor04@2x.jpg 2x" alt="村瀬 傑" decoding="async">
                  </figure>
                </div>

                <div class="p-under__doctorInner">
                  <div class="p-under__doctorDlWrap01">

                  </div>

                  <div class="p-under__doctorDlWrap02">
                  <dl class="p-under__doctorDl">
                          <dt>経歴</dt>
                          <dd>
                            <dl>
                              <dt>2005年</dt>
                              <dd>三重大学卒業</dd>
                            </dl>
                            <dl>
                              <dt>2005年</dt>
                              <dd>名古屋セントラル病院　臨床研修医</dd>
                            </dl>
                            <dl>
                              <dt>2007年</dt>
                              <dd>木沢記念病院　循環器内科</dd>
                            </dl>

                            <dl>
                              <dt>2013年</dt>
                              <dd>名古屋ハートセンター　循環器内科</dd>
                            </dl>
                            <dl>
                              <dt>2016年</dt>
                              <dd>同循環器内科医長</dd>
                            </dl>
                          </dd>
                        </dl>
                  </div>
                </div>
              </article>

              <article class="p-under__doctorContent -image">
                <h4 class="screen-reader-text">ドクターズファイルのインタビュー</h4>
                <a href="https://doctorsfile.jp/h/184676/df/1/" target="_blank" rel="noopnner,noreferrer" class="p-under__doctorBanner">
                  <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctorfile-pc@2x.jpg" media="(min-width: 768px)" />
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctorfile-sp@2x.jpg" alt="ドクターズファイルのバナー" decoding="async">
                  </picture>
                </a>
              </article>
            </div>
          </div>
        </div>
        <!-- /.p-under__container -secondary -->
      </section>

      <section class="js-trigger-section04" id="sec04">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                    <em>事務長紹介</em>
                  </h3>
            <div class="p-under__doctorContainer">
              <article class="p-under__doctorContent">
                <div class="p-under__doctorBlock">
                  <div class="p-under__doctorHead">
                    <h4 class="p-under__doctorTitle">
                            <span class="position">事務長</span>
                            <span class="main">山口 敏和</span>
                            <span class="en">Toshikazu Yamaguchi</span>
                          </h4>
                    <p class="p-under__doctorParagraph">
                            今日の医療情勢は患者を主体とする医療のしくみが崩れ、一人の患者様の治療や健康を支えることが一医療機関では完結できない状況となっています。そのため、介護施設や地域医療機関が支え助け合いながら連携を図っていくことが、地域の皆様の生命と健康を守ることだと確信しております。<br>循環器疾患に対する外科内科医療はもとより、生活習慣病に対する予防治療にも力を注ぎ、地域医療に貢献してまいります。<br>
                            また当クリニックは、働きやすい職場作り、共に成長できる人材育成を通じて、理念である最善の医療提供、患者本位の医療、職員の幸せをスタッフ一人ひとりが常に念頭におき医療の提供を目指しています。皆様からのご要望やご意見などありましたら、遠慮なくご指摘ください。これから永きにわたりご指導、ご鞭撻のほどよろしくお願いいたします。
                          </p>
                  </div>
                  <figure class="p-under__doctorImage">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctor03.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctor03.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctor03@2x.jpg 2x" alt="山口 敏和" decoding="async">
                  </figure>
                </div>
                <div class="p-under__doctorInner">
                  <div class="p-under__doctorDlWrap01">
                    <dl class="p-under__doctorDl">
                      <dt>経歴</dt>
                      <dd>
                        <dl>
                          <dt>1985年4月</dt>
                          <dd>京都桂病院 手術室</dd>
                        </dl>
                        <dl>
                          <dt>1989年7月</dt>
                          <dd>
                            武田病院<br class="pc-hide" />
                            心臓カテーテル室&middot;手術室&middot;透析室
                          </dd>
                        </dl>
                        <dl>
                          <dt>1994年3月</dt>
                          <dd>国立南京都看護学校 卒業</dd>
                        </dl>
                        <dl>
                          <dt>1994年4月</dt>
                          <dd>
                            大津赤十字病院 MEセンター<br class="pc-hide" />
                            救急部救急技術科
                          </dd>
                        </dl>
                        <dl>
                          <dt>1998年7月</dt>
                          <dd>
                            京都桂病院 心臓血管センター<br class="pc-hide" />
                            臨床工学科 係長
                          </dd>
                        </dl>
                        <dl>
                          <dt>2006年7月</dt>
                          <dd>島原病院 心臓カテーテル室 室長</dd>
                        </dl>
                        <dl>
                          <dt>2008年8月</dt>
                          <dd>
                            名古屋ハートセンター<br class="pc-hide" />
                            臨床工学技士 技士長
                          </dd>
                        </dl>
                        <dl>
                          <dt>2012年9月</dt>
                          <dd>
                            名古屋ハートセンター<br class="pc-hide" />
                            臨床工学技士 技士長兼 診療技術部長
                          </dd>
                        </dl>
                        <dl>
                          <dt>2017年4月</dt>
                          <dd>あいちハートクリニック 事務長</dd>
                        </dl>
                        <dl>
                          <dt>2022年4月</dt>
                          <dd>
                            一般社団法人<br class="pc-hide" />
                            生活習慣病予防センター 理事
                          </dd>
                        </dl>
                      </dd>
                    </dl>
                  </div>
                  <div class="p-under__doctorDlWrap02">
                    <dl class="p-under__doctorDl">
                      <dt>資格</dt>
                      <dd>
                        病院経営管理士（1491号）/ 臨床工学技士 / 第２種ＭＥ技術者 / 看護師 / 救急救命士 /
                        心血管インターベンション技師
                      </dd>
                    </dl>
                    <dl class="p-under__doctorDl">
                      <dt>所属</dt>
                      <dd>
                        日本臨床工学技士会 / 日本人工臓器学会 / CCT コメディカル代表幹事 /
                        日本心血管インターベンション治療学会
                      </dd>
                    </dl>
                  </div>
                </div>
              </article>
              <article class="p-under__doctorContent -image">
                <h4 class="screen-reader-text">innavi netのインタビュー</h4>
                <a href="https://www.innervision.co.jp/sp/ad/suite/filemaker/usermade/202002" target="_blank" rel="noopnner,noreferrer" class="p-under__doctorBanner">
                  <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctorfile2-pc@2x.jpg" media="(min-width: 767px)">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/doctorfile2-sp@2x.jpg" alt="innavi netのバナー" decoding="async">
                  </picture>
                </a>
              </article>
            </div>
            <!-- /.p-under__doctorContainer -->
          </div>
          <!-- /.p-under__container -secondary -->
        </div>
      </section>


      <section class="l-spacer -borderTop js-trigger-section05" id="sec05">
        <div class="p-under__container -secondary">
          <h3 class="c-heading -underSecondary">
                <em>各施設紹介</em>
              </h3>

          <div class="p-under__innerContent">
            <section class="p-under__partner">
              <h4 class="p-under__partnerTitle">関連施設</h4>

              <div class="p-under__partnerContent">
                <article class="p-under__partnerInner">
                  <a href="http://villatopia.org/" target="_blank" rel="noopener noreferrer" class="p-under__partnerBlock">
                    <figure class="p-under__partnerImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner01.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner01.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner01@2x.jpg 2x" alt="特別養護老人ホーム ヴィラトピア知立の外観" decoding="async">
                    </figure>

                    <div class="p-under__partnerBody">
                      <span class="tag">社会福祉法人富士会</span>

                      <h5 class="p-under__partnerBodyTitle">
                            <span class="sub">特別養護老人ホーム</span>
                            <span class="main">ヴィラトピア知立</span>
                          </h5>

                      <p class="proof">ISO 9001 認証取得</p>
                    </div>
                  </a>
                </article>

                <article class="p-under__partnerInner">
                  <a href="http://onesvilla.org/" target="_blank" rel="noopener noreferrer" class="p-under__partnerBlock">
                    <figure class="p-under__partnerImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner02.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner02.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner02@2x.jpg 2x" alt="介護付有料老人ホーム ワンズヴィラ池鯉鮒の外観" decoding="async">
                    </figure>

                    <div class="p-under__partnerBody">
                      <span class="tag">愛知県指定&middot;特定施設入所者生活介護</span>

                      <h5 class="p-under__partnerBodyTitle">
                            <span class="sub">介護付有料老人ホーム</span>
                            <span class="main">ワンズヴィラ池鯉鮒</span>
                          </h5>

                      <p class="proof">ISO 9001 認証取得</p>
                    </div>
                  </a>
                </article>
              </div>
              <!-- /.p-under__partnerContent -->
            </section>

            <div class="p-under__innerContent">
              <section class="p-under__partner">
                <h4 class="p-under__partnerTitle">提携施設</h4>

                <div class="p-under__partnerContent">
                  <article class="p-under__partnerInner">
                    <a href="https://nagoya.heart-center.or.jp/" target="_blank" rel="noopener noreferrer" class="p-under__partnerBlock">
                      <figure class="p-under__partnerImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner03.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner01.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner01@2x.jpg 2x" alt="名古屋ハートセンターの外観" decoding="async">
                      </figure>

                      <div class="p-under__partnerBody">
                        <span class="tag">医療法人名古屋澄心会</span>
                        <h5 class="p-under__partnerBodyTitle">
                              <span class="main">名古屋ハートセンター</span>
                            </h5>

                        <p class="content">循環器内科 / 心臓血管外科 / 内科 / 麻酔科 / リハビリテーション科</p>
                      </div>
                    </a>
                  </article>

                  <article class="p-under__partnerInner">
                    <a href="https://www.heart-center.or.jp/" target="_blank" rel="noopener noreferrer" class="p-under__partnerBlock">
                      <figure class="p-under__partnerImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner04.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner02.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner02@2x.jpg 2x" alt="豊橋ハートセンターの外観" decoding="async">
                      </figure>

                      <div class="p-under__partnerBody">
                        <span class="tag">医療法人澄心会</span>
                        <h5 class="p-under__partnerBodyTitle">
                              <span class="main">豊橋ハートセンター</span>
                            </h5>

                        <p class="content">
                              循環器内科 / 心臓血管外科 / 脳神経外科 / 内科 / 麻酔科 / リハビリテーション科 / 形成外科
                        </p>
                      </div>
                    </a>
                  </article>

                  <article class="p-under__partnerInner">
                    <a href="https://nakanohp.com/hospital/" target="_blank" rel="noopener noreferrer" class="p-under__partnerBlock">
                      <figure class="p-under__partnerImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner05.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner05.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about/partner05@2x.jpg 2x" alt="中野胃腸病院の外観" decoding="async">
                      </figure>

                      <div class="p-under__partnerBody">
                        <span class="tag">医療法人社団以心会</span>
                        <h5 class="p-under__partnerBodyTitle">
                              <span class="main">中野胃腸病院</span>
                            </h5>
                        <p class="content">
                              消化器科 / 肛門科 / 麻酔科
                        </p>
                      </div>
                    </a>
                  </article>
                </div>
                <!-- /.p-under__partnerContent -->
              </section>
            </div>

            <div class="p-under__innerContent">
              <section class="p-under__partner -tiiki">
                <h4 class="p-under__partnerTitle">地域連携登録施設</h4>
                <p class="description-text">
                  当クリニックでは、熟練した専門のスタッフによる治療が可能です。それ以上の専門的技術&middot;設備を要する疾患と判断した場合は、<br>ハートセンター（豊橋&middot;名古屋）や近隣の病院&middot;大学病院などの私共も信頼できる専門医をご紹介いたします。
                </p>
                <div class="p-under__partnerContent">
                  <article class="p-under__partnerInner">
                    <a href="https://www.toyota-kai.or.jp" target="_blank" rel="noopener noreferrer" class="p-under__partnerBlock">


                      <div class="p-under__partnerBody">
                        <span class="tag">医療法人豊田会</span>
                        <h5 class="p-under__partnerBodyTitle">
                              <span class="main">刈谷豊田総合病院</span>
                            </h5>
                      </div>
                    </a>
                  </article>

                  <article class="p-under__partnerInner">
                    <a href="https://anjokosei.jp" target="_blank" rel="noopener noreferrer" class="p-under__partnerBlock">

                      <div class="p-under__partnerBody">
                        <span class="tag">愛知県厚生農業協同組合連合会</span>
                        <h5 class="p-under__partnerBodyTitle">
                              <span class="main">安城更生病院</span>
                        </h5>
                      </div>
                    </a>
                  </article>
                </div>
                <!-- /.p-under__partnerContent -->
              </section>
            </div>
          </div>
        </div>
      </section>
      <!-- /.l-spacer -->
    </div>
    <!-- /.l-under__main -->
  </div>
  <!-- /.l-sub -->
  <?php get_footer(); ?>