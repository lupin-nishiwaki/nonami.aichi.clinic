<?php get_header(); ?>
<main>
  <?php get_template_part("/template-parts/reserve") ?>
  <div class="l-under -main">
    <div class="l-under__sideMenu">
      <div class="p-under__sideMenu">
        <div class="p-under__sideInner">
          <ul class="p-under__sideList">
            <li class="p-under__sideItem"><a class="sec01" href="#sec01">放射線検査</a></li>
            <li class="p-under__sideItem"><a class="sec02" href="#sec02">生理検査</a></li>
            <li class="p-under__sideItem"><a class="sec03" href="#sec03">採血&middot;検尿検査</a></li>
            <li class="p-under__sideItem"><a class="sec04" href="#sec04">その他検査&middot;治療機器</a></li>
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
                  <span class="en">equipment</span>
                  <em>医療設備</em>
                </h2>
          </div>
        </div>
        <!-- /.p-under__topContent -->
      </div>

      <section class="p-under__bg -bg03">
        <div class="l-spacer">
          <div class="p-under__container -secondary">
            <div class="p-under__messageContent -message">
              <div class="p-under__messageText">
                <em class="p-under__lead">充実した設備で、<br class="pc-hide" />安心かつ快適な医療を提供。</em>
                <p class="p-under__messageParagraph">
                      当クリニックでは、患者様に安心して受診していただけるよう、最新の医療設備を導入しております。<br>
                      また、電子カルテと連携しており、検査結果の説明の際に、診察室のディスプレイ画面で実際の画像や動画をご覧になれます。
                    </p>
              </div>
            </div>
          </div>
          <!-- /.p-under__container -->
        </div>
      </section>

      <section class="js-trigger-section01" id="sec01">
        <div class="l-spacer -borderTop -sizeLbottom">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>放射線検査</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="p-under__radiationContainer">
                <ul class="p-under__equipmentList -primary">
                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment01.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment01.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment01@2x.jpg 2x" alt="64列マルチスライスCT Revolution EVO（GE社）" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">64列マルチスライスCT Revolution EVO<br class="pc-hide">（GE社）</h3>
                      <p class="p-under__equipmentParagraph">
                            高画質かつ高速な撮影で全身のあらゆる部位の検査に対応します。撮影した画像から3D画像や多断面画像を作り、診断精度の向上に役立てています。<br>
                            また心臓や大動脈など血管のCT検査をする際には、造影剤注入器（インテグラル社製、CTmotion）を使用して検査します。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment02.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment02.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment02@2x.jpg 2x" alt="血管造影装置 Trinias F8（島津製作所）" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">血管造影装置 Trinias F8（島津製作所）</h3>
                      <p class="p-under__equipmentParagraph">
                            血管を写し出し、病変の有無の確認や治療を行います。当クリニックでは65インチ大画面モニターで、血管を観察しやすく、その他検査画像など様々な情報をも複数枚同時に確認しながら治療ができます。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment03.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment03.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment03@2x.jpg 2x" alt="一般撮影装置 X’sy Pro A Pack（島津製作所）" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">一般撮影装置 X’sy Pro A Pack（島津製作所）</h3>
                      <p class="p-under__equipmentParagraph">
                            主に骨や心臓&middot;肺の病気、お腹のガスの状態などを検査します。<br>
                            イメージングプレートはFUJIのDR（コンピューター処理した画像）システムを導入しており迅速に画像を描出することが可能です。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment04.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment04.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment04@2x.jpg 2x" alt="骨密度装置 PRODIGY Fuga（GE社）" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">骨密度装置 PRODIGY Fuga（GE社）</h3>
                      <p class="p-under__equipmentParagraph">
                            当クリニックでは骨粗鬆症の検査として精度の高いDXA法を用いた、GE社製のPRODIGY　Fuga（全身用骨密度装置）を導入しました。<br>
                            被ばく線量も極めて少なく、迅速かつ精度の高い測定ができ、骨密度測定の標準とされています。骨粗鬆症の予防に定期的な測定をお勧めします。
                          </p>
                    </div>
                  </li>
                </ul>
                <!-- /.p-under__featureContent -->
              </div>
              <!-- /.p-under__featureContainer -->
            </div>
          </div>
        </div>
      </section>

      <section class="js-trigger-section02" id="sec02">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>生理検査</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="p-under__radiationContainer">
                <ul class="p-under__equipmentList -quaternary">
                  <li class="p-under__equipmentItem item01">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment05.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment05.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment05@2x.jpg 2x" alt="多機能心電計" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">多機能心電計</h3>
                      <p class="p-under__equipmentParagraph">心臓の電気的な活動を記録する心電図検査を行います。</p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem item02">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment06.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment06.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment06@2x.jpg 2x" alt="測定機能付き自力運動訓練装置（エルゴメータ）" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">測定機能付き自力運動訓練装置（エルゴメータ）</h3>
                      <p class="p-under__equipmentParagraph">運動負荷心電図の際に負荷をかける装置です。</p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem item03">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment07.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment07.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment07@2x.jpg 2x" alt="長時間心電用データレコーダー（ホルター心電図）" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">長時間心電用データレコーダー（ホルター心電図）</h3>
                      <p class="p-under__equipmentParagraph">24時間の長時間心電図を記録します。</p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem item04 -sizeL">
                    <div class="p-under__equipmentImageWrap">
                      <figure class="p-under__equipmentImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment08.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment08.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment08@2x.jpg 2x" alt="超音波診断装置 Vivid S6（GE社）" decoding="async">
                      </figure>

                      <figure class="p-under__equipmentImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment09.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment09.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment09@2x.jpg 2x" alt="超音波診断装置 LOGIQ e（GE社）" decoding="async">
                      </figure>
                    </div>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">超音波診断装置 Vivid S6 / LOGIQ e（GE社）</h3>
                      <p class="p-under__equipmentParagraph">
                            心臓の壁の動きや厚さ、弁の逆流、心臓の内腔の大きさなどを調べ、心筋梗塞、弁膜症などの診断に利用します。<br>心臓以外にも、頸動脈や下肢動脈&middot;静脈といった血管や腹部臓器、甲状腺、乳腺などの診断にも有用です。超音波検査技師の資格をもつ技師が検査を行い、より正確な超音波診断に努めております。
                          </p>
                    </div>
                  </li>
                </ul>
                <!-- /.p-under__featureContent -->
              </div>
              <!-- /.p-under__featureContainer -->
            </div>
          </div>
        </div>
      </section>

      <section class="js-trigger-section03" id="sec03">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>採血&middot;検尿検査</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="p-under__radiationContainer">
                <ul class="p-under__equipmentList -secondary">
                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment10.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment10.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment10@2x.jpg 2x" alt="自動血球計数CRP測定装置" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">自動血球計数CRP測定装置</h3>
                      <p class="p-under__equipmentParagraph">血液中の赤血球&middot;白血球などの成分を測定します。</p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment11.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment11.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment11@2x.jpg 2x" alt="乾式臨床化学分析装置" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">乾式臨床化学分析装置</h3>
                      <p class="p-under__equipmentParagraph">
                            より早く、より正確に、生化学検査21項目の即時検査を行います。<br>
                            内蔵遠心機の搭載により全血測定にも対応しております。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment12.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment12.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment12@2x.jpg 2x" alt="免疫検査装置" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">免疫検査装置</h3>
                      <p class="p-under__equipmentParagraph">
                            胸痛、発熱、息切れなどの症状の場合に心筋梗塞、心不全、肺血栓塞栓症などの重篤な疾患かどうかを迅速に診断します。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment13.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment13.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment13@2x.jpg 2x" alt="糖尿病検査装置" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">糖尿病検査装置</h3>
                      <p class="p-under__equipmentParagraph">
                            胸痛、発熱、息切れなどの症状の場合に心筋梗塞、心不全、肺血栓塞栓症などの重篤な疾患かどうかを迅速に診断します。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment14.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment14.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment14@2x.jpg 2x" alt="自動尿分析装置" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">自動尿分析装置</h3>
                      <p class="p-under__equipmentParagraph">
                            1検体7秒の高速処理が可能です。随時尿も尿定性12項目&plus;色調測定にて高精度測定にて検査します。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment15.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment15.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment15@2x.jpg 2x" alt="血液ガス分析装置" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">血液ガス分析装置</h3>
                      <p class="p-under__equipmentParagraph">
                            血液中の酸素や炭酸ガスなどの濃度を調べ、心不全や肺炎などの診断に役立てます。
                          </p>
                    </div>
                  </li>
                </ul>
                <!-- /.p-under__featureContent -->
              </div>
              <!-- /.p-under__featureContainer -->
            </div>
          </div>
        </div>
      </section>

      <section class="js-trigger-section04" id="sec04">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>その他検査&middot;治療機器</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="p-under__radiationContainer">
                <ul class="p-under__equipmentList -secondary">
                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment16.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment16.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment16@2x.jpg 2x" alt="血圧脈波検査装置" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">血圧脈波検査装置</h3>
                      <p class="p-under__equipmentParagraph">血管の詰まりや硬さを検査します。</p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment17.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment17.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment17@2x.jpg 2x" alt="肺呼吸機能検査" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">肺呼吸機能検査</h3>
                      <p class="p-under__equipmentParagraph">
                            肺活量などの呼吸機能を測定し、喘息、肺気腫などの診断に利用します。肺年齢の測定も可能です。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment18.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment18.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment18@2x.jpg 2x" alt="新型コロナウイルス PCR検査装置 ID NOW(Abbott)" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">新型コロナウイルス PCR検査装置<br>ID NOW（Abbott）</h3>
                      <p class="p-under__equipmentParagraph">
                            厚生労働省が承認済みの、信頼性が高い遺伝子検査です。短時間で結果が出ます。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment19.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment19.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment19@2x.jpg 2x" alt="インフルエンザ発症早期診断（Arkray社）" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">インフルエンザ発症早期診断（Arkray社）</h3>
                      <p class="p-under__equipmentParagraph">
                            A型、B型インフルエンザウイルス抗原の検出用キットです。ウイルス量の少ない感染初期でも迅速に判定可能です。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment20.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment20.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment20@2x.jpg 2x" alt="一酸化炭素ガス分析装置" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">一酸化炭素ガス分析装置</h3>
                      <p class="p-under__equipmentParagraph">
                            禁煙治療の際に使用します。呼気中の一酸化炭素濃度を測定します。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment21.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment21.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment21@2x.jpg 2x" alt="パルスオキシメータ" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">パルスオキシメータ</h3>
                      <p class="p-under__equipmentParagraph">
                            指先に装着して動脈血の酸素飽和度を簡便に計測し、心肺機能が正常かどうかを知ることができます。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment26.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment26.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment26@2x.jpg 2x" alt="睡眠評価装置" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">睡眠評価装置</h3>
                      <p class="p-under__equipmentParagraph">
                            高血圧の原因や動脈硬化との関連で話題になっている睡眠時無呼吸症候群の診断に使用します。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment22.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment22.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment22@2x.jpg 2x" alt="手動式除細動装置（PHILIPS社）" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">手動式除細動装置（PHILIPS社）</h3>
                      <p class="p-under__equipmentParagraph">
                            心室細動や心室頻拍などの不整脈が起こった際に心臓に電気ショックを与え、正常なリズムに戻すために使用します。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment23.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment23.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment23@2x.jpg 2x" alt="自動体外式除細動器（AED）" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">自動体外式除細動器（AED）</h3>
                      <p class="p-under__equipmentParagraph">
                            救命のためであれば、医師や看護師など医療に従事者以外でも使用可能な医療機器です。当クリニックでは受付に設置してあります。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment24.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment24.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment24@2x.jpg 2x" alt="重要パラメータ付き多項目モニタ（フクダ電子）" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">重要パラメータ付き多項目モニタ（フクダ電子）</h3>
                      <p class="p-under__equipmentParagraph">
                            患者様の心電図&middot;SpO2&middot;血圧などの生体情報をモニタリングします。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem">
                    <figure class="p-under__equipmentImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment25.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment25.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/equipment/equipment25@2x.jpg 2x" alt="解析機能付きセントラルモニタ（フクダ電子）" decoding="async">
                    </figure>

                    <div class="p-under__equipmentBody">
                      <h3 class="p-under__equipmentTitle">解析機能付きセントラルモニタ（フクダ電子）</h3>
                      <p class="p-under__equipmentParagraph">
                            ベッドサイドモニタなどから送信される患者様の生体情報をモニタリングします。
                          </p>
                    </div>
                  </li>
                </ul>
                <!-- /.p-under__featureContent -->
              </div>
              <!-- /.p-under__featureContainer -->
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.l-under__main -->
  </div>
  <!-- /.l-sub -->
  <?php get_footer() ?>