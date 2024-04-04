<?php get_header(); ?>
<main>
  <?php get_template_part("/template-parts/reserve") ?>
  <div class="l-under -main">
    <div class="l-under__sideMenu">
      <div class="p-under__sideMenu">
        <div class="p-under__sideInner">
          <ul class="p-under__sideList">
            <li class="p-under__sideItem"><a class="sec01" href="#sec01">下肢静脈瘤の症状</a></li>
            <li class="p-under__sideItem"><a class="sec02" href="#sec02">下肢静脈瘤の原因</a></li>
            <li class="p-under__sideItem">
              <a class="sec03" href="#sec03">当クリニックでの下肢静脈瘤治療について</a>
            </li>
            <li class="p-under__sideItem"><a class="sec04" href="#sec04">治療方法</a></li>
            <li class="p-under__sideItem"><a class="sec05" href="#sec05">使用機器</a></li>
            <li class="p-under__sideItem"><a class="sec06" href="#sec06">累計下肢静脈瘤手術件数</a></li>
            <li class="p-under__sideItem"><a class="sec07" href="#sec07">よくあるご質問</a></li>
          </ul>
        </div>
      </div>
      <!-- /.l-under__sideMenu -->
    </div>

    <div class="l-spacer -under l-under__main p-under__main">
      <div class="p-under__container -secondary">
        <?php get_template_part("/template-parts/pankuzu") ?>

        <div class="p-under__topContent">
          <div class="p-under__mainTitle">
            <h2 class="c-heading -underPrimary">
                  <span class="en">cardiology</span>
                  <em>下肢静脈瘤治療</em>
                </h2>
          </div>
        </div>
        <!-- /.p-under__topContent -->
      </div>

      <section class="p-under__bg -bg06">
        <div class="l-spacer">
          <div class="p-under__container -secondary">
            <em class="p-under__lead">ご希望や状態に合わせて、<br class="pc-hide">最適な治療法をご提案いたします。</em>
            <p class="p-under__messageParagraph">
                  下肢静脈瘤とは、足の血管（静脈が）
                  拡張したり、こぶがきて膨らんだ状態のことをいいます。静脈についてる弁が壊れ、血液が逆流&middot;停滞することで起こります。当クリニックでは、患者様のご希望や状態に合わせて最適な治療法を提案し、体への負担、痛みを最小限に抑えた治療を行なっております。
                </p>
          </div>
          <!-- /.p-under__container -->
        </div>
      </section>


      <section class="l-spacer -borderTop -sizeLbottom js-trigger-section01" id="sec01">
        <div class="p-under__container -secondary">
          <h3 class="c-heading -underSecondary">
                  <span class="en">symptoms</span>
                  <em>下肢静脈瘤の症状</em>
                </h3>

          <div class="p-under__innerContent">
            <div class="p-under__radiationContainer">
              <div class="p-under__cardiologyTypeContainer">
                <div class="p-under__radiationBlock">
                  <h4>下肢静脈瘤がおこると、次のような症状が現れます。</h4>
                  <ul class="p-under__cardiologyTypeList">
                    <li class="p-under__cardiologyTypeItem -secondary">
                      血管がこぶ状に<br class="pc-hide">浮き出る
                    </li>
                    <li class="p-under__cardiologyTypeItem -secondary">だるさ&middot;むくみ</li>
                    <li class="p-under__cardiologyTypeItem -secondary">こむらがえり</li>
                    <li class="p-under__cardiologyTypeItem -secondary">かゆみ</li>
                  </ul>
                </div>

                <div class="p-under__radiationBlock">
                  <h4>さらに長期間放置した場合は次のような症状が現れます。</h4>
                  <ul class="p-under__cardiologyTypeList">
                    <li class="p-under__cardiologyTypeItem -secondary">血栓や炎症による<br>持続する痛み</li>
                    <li class="p-under__cardiologyTypeItem -secondary">潰瘍ができる</li>
                    <li class="p-under__cardiologyTypeItem -secondary">皮膚炎&middot;湿疹&middot;<br>色素沈着</li>
                    <li class="p-under__cardiologyTypeItem -secondary">
                      肺塞栓症を発症すると<br>呼吸困難&middot;突然死
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /.p-under__featureContainer -->
          </div>
        </div>
      </section>


      <section class="js-trigger-section02" id="sec02">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <span class="en">cause</span>
                  <em>下肢静脈瘤の原因</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="p-under__caseContainer">
                <ul class="p-under__caseList p-under__equipmentList -secondary">
                  <li class="p-under__equipmentItem p-under__caseItem round-border">
                    <figure class="p-under__caseImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/cause-icon01.svg" alt="立ち仕事をしているアイコン" decoding="async">
                    </figure>

                    <div class="p-under__caseBody">
                      <h4 class="p-under__equipmentTitle p-under__caseTitle">01.長時間の立ち仕事</h4>
                      <p class="p-under__equipmentParagraph">
                            美容師&middot;理容師&middot;調理師&middot;販売員&middot;教師&middot;看護師など、同じ姿勢で立っている時間が長い仕事に従事している方。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem p-under__caseItem round-border">
                    <figure class="p-under__caseImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/cause-icon02.svg" alt="妊娠している女性のアイコン" decoding="async">
                    </figure>

                    <div class="p-under__caseBody">
                      <h4 class="p-under__equipmentTitle p-under__caseTitle">02. 妊娠&middot;出産</h4>
                      <p class="p-under__equipmentParagraph">
                            妊娠中や出産後に下肢静脈瘤ができることは少なくありません。特に、1人目よりも2人目以降妊娠&middot;出産の回数が増えるほど割合が高くなっていきます。
                          </p>
                    </div>
                  </li>

                  <li class="p-under__equipmentItem p-under__caseItem round-border">
                    <figure class="p-under__caseImage">
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/cause-icon03.svg" alt="遺伝子のアイコン" decoding="async">
                    </figure>

                    <div class="p-under__caseBody">
                      <h4 class="p-under__equipmentTitle p-under__caseTitle">03. 体質</h4>
                      <p class="p-under__equipmentParagraph">
                            遺伝的体質により、下肢静脈瘤になりやすい方もいます。親族に下肢静脈瘤の方は発生頻度が高くなります。
                          </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="js-trigger-section03" id="sec03">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <span class="en">about treatment</span>
                  <em>当クリニックでの下肢静脈瘤治療について</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="p-under__radiationContainer">
                <div class="p-under__cardiologyTypeContainer">
                  <p>
                        当クリニックでは、患者様のご希望や状態に合わせて最適な治療法を提案し、体への負担、痛みを最小限に抑えた治療を行なっております。<br>手術は毎週月曜日、水曜日、金曜日の午前中に施行しています。治療後の外来通院は原則として、術後3日以内、１か月後、3か月後の3回になります。
                      </p>
                  <ul class="p-under__cardiologyTypeList">
                    <li class="p-under__cardiologyTypeItem -tertiary">待ち時間のない完全予約制</li>
                    <li class="p-under__cardiologyTypeItem -tertiary">負担の少ない日帰り手術</li>
                    <li class="p-under__cardiologyTypeItem -tertiary">治療時間20分</li>
                  </ul>
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
                  <span class="en">method of treatment</span>
                  <em>治療方法</em>
                </h3>
            <div class="p-under__innerContent">
              <p>
                  当クリニックでは、下肢静脈瘤に対する全術式を選択可能です。患者様に合わせて、最適な治療方法をご提供いたします。
              </p>
              <div class="p-under__aboutTreatmentContainer">
                <dl>
                  <dt class="c-heading -sizeS">
                    <div class="p-under__headingWrap -primary">血管内塞栓術（グルー治療）</div>
                  </dt>
                  <dd class="p-under__cardiologyTextSub -border -iamgeCenter">
                    <p>新しい治療法です。血管内焼灼術のように静脈を焼かないので、静脈のまわりの広範囲の局所麻酔が必要ありません。<br>その為、麻酔の痛みがほぼ無く、治療後の回復も早くなります。また、熱による神経障害(しびれ）や深部静脈血栓症も少なくなります。<br>グルーに対するアレルギー反応や静脈炎が生じる可能性があります。当クリニックは西三河で最初に導入し、現在では愛知県内で最多の症例数を誇ります。</p>
                    <a class="video-links js-video-venobox" data-autoplay="true" data-vbtype="video" data-ratio="16x9" data-maxwidth="800px" href="<?php echo esc_url(get_theme_file_uri()); ?>/assets/video/video01.mp4">
                      <figure>
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/method-image-01.jpg" srcset="
                              <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/method-image-01.jpg,
                              <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/method-image-01@2x.jpg 2x
                            " alt="血管内塞栓術（グルー治療）" decoding="async">
                      </figure>
                      <figcaption>血管内塞栓術（グルー治療）の動画</figcaption>
                    </a>
                  </dd>
                </dl>

                <dl>
                  <dt class="c-heading -sizeS">
                    <div class="p-under__headingWrap -primary">血管内焼灼術(ラジオ波、レーザー）</div>
                  </dt>
                  <dd class="p-under__cardiologyTextSub -border  -iamgeCenter">
                    <p>
                      細いファイバーを静脈の中に通し、高周波で血管の内側から焼く治療法です。静脈は取り出さず、ストリッピング手術と同じ効果が得られます。<br>出血もほとんど起こりません。日帰り施術が可能であり、患者様への負担も軽い非常に有効な治療法です。
                    </p>
                    <a class="video-links js-video-venobox" data-autoplay="true" data-vbtype="video" data-ratio="16x9" data-maxwidth="800px" href="<?php echo esc_url(get_theme_file_uri()); ?>/assets/video/video02.mp4">
                      <figure>
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/method-image-02.jpg" srcset="
                              <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/method-image-02.jpg,
                              <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/method-image-02@2x.jpg 2x
                            " alt="血管内焼灼術(ラジオ波、レーザー）" decoding="async">
                      </figure>
                      <figcaption>血管内焼灼術（ラジオ波、レーザー）の動画</figcaption>
                    </a>
                  </dd>
                </dl>

                <dl>
                  <dt class="c-heading -sizeS">
                    <div class="p-under__headingWrap -primary">硬化療法</div>
                  </dt>
                  <dd class="p-under__cardiologyTextSub -border  -iamgeCenter">
                    <p>
                      静脈を切らずに、静脈に血管を固める薬剤を注射した後に、弾性包帯で圧迫することにより次第に目立たなくさせる治療法です。<br class="pc-hide">小さな下肢静脈瘤には効果的な方法ですが、進行した静脈瘤には効果がありません。<br>また、静脈瘤の再発も比較的多く見られます。
                    </p>
                    <a class="video-links js-video-venobox" data-autoplay="true" data-vbtype="video" data-ratio="16x9" data-maxwidth="800px" href="<?php echo esc_url(get_theme_file_uri()); ?>/assets/video/video03.mp4">
                      <figure>
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/method-image-04.jpg" srcset="
                              <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/method-image-04.jpg,
                              <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/method-image-04@2x.jpg 2x
                            " alt="硬化療法" decoding="async">
                      </figure>
                      <figcaption>硬化療法の動画</figcaption>
                    </a>
                  </dd>
                </dl>

                <dl>
                  <dt class="c-heading -sizeS">
                    <div class="p-under__headingWrap -primary">静脈切離手術（高位結紮術）</div>
                  </dt>
                  <dd class="p-under__cardiologyTextSub -border  -iamgeCenter">
                    <p>
                      逆流している血管をしばり、血流を止める手術です。足の付け根や足の裏側を小さく切開して行ないます。<br>ストリッピング手術よりは再発率が高いとされています。当科では局所麻酔を使用して手術を行っています。
                    </p>
                  </dd>
                </dl>

                <dl>
                  <dt class="c-heading -sizeS">
                    <div class="p-under__headingWrap -primary">表在静脈瘤切除</div>
                  </dt>
                  <dd class="p-under__cardiologyTextSub -border  -iamgeCenter">
                    <p>
                      表面から目立つ静脈瘤を、1～2mmほどの切開にて切除する方法です。<br>局所麻酔下で、主に高周波治療との併用で行います。
                    </p>
                    <a class="video-links js-video-venobox" data-autoplay="true" data-vbtype="video" data-ratio="16x9" data-maxwidth="800px" href="<?php echo esc_url(get_theme_file_uri()); ?>/assets/video/video05.mp4">
                      <figure>
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/method-image-06.jpg" srcset="
                              <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/method-image-06.jpg,
                              <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/method-image-06@2x.jpg 2x
                            " alt="表在静脈瘤切除" decoding="async">
                      </figure>
                      <figcaption>表在静脈瘤切除の動画</figcaption>
                    </a>
                  </dd>
                </dl>

                <dl>
                  <dt class="c-heading -sizeS">
                    <div class="p-under__headingWrap -primary">圧迫療法</div>
                  </dt>
                  <dd class="p-under__cardiologyTextSub -border  -iamgeCenter">
                    <p>
                      弾性（圧着）ストッキングや、弾性包帯などで足を圧迫し、静脈の逆流を防ぐ方法です。<br class="pc-hide">この方法は、根本的な治療法では、ありませんが、症状を緩和する場合や 予防するには最適な方法です。
                    </p>
                  </dd>
                </dl>
              </div>

              <div class="p-under__aboutTreatmentContent">
                <div class="p-under__headingWrap -primary">
                  <p class="c-heading -sizeS">血管内焼灼術を施行した患者様</p>
                </div>
                <ul class="p-under__aboutTreatmentList">
                  <li class="p-under__aboutTreatmentItem">
                    <figure>
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-01.jpg" srcset="
                              <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-01.jpg,
                              <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-01@2x.jpg 2x
                            " alt="血管内焼灼術前の画像" decoding="async">
                    </figure>
                    <p>血管内焼灼術 前</p>
                  </li>

                  <li class="p-under__aboutTreatmentItem">
                    <figure>
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-02.jpg" srcset="
                              <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-02.jpg,
                              <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-02@2x.jpg 2x
                            " alt="血管内焼灼術一ヶ月後の画像" decoding="async">
                    </figure>
                    <p>血管内焼灼術 1ヶ月後</p>
                  </li>

                  <li class="p-under__aboutTreatmentItem">
                    <figure>
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-03.jpg" srcset="
                              <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-03.jpg,
                              <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-03@2x.jpg 2x
                            " alt="血管内焼灼術三ヶ月後の画像" decoding="async">
                    </figure>
                    <p>血管内焼灼術 3ヶ月後</p>
                  </li>
                </ul>
              </div>
              <!-- /.p-under__aboutTreatmentContent -->
            </div>
          </div>
        </div>
      </section>


      <section class="js-trigger-section05" id="sec05">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
              <span class="en">used equipment</span>
              <em>使用機器</em>
            </h3>

            <div class="p-under__innerContent">
              <ul class="p-under__equipmentList -thirdly">
                <li class="p-under__equipmentItem">
                  <figure class="p-under__equipmentImage">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-equipment01.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-equipment01.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-equipment01@2x.jpg 2x" alt="血管内焼灼用高周波治療機器（Medtronic社）" decoding="async">
                  </figure>

                  <div class="p-under__equipmentBody">
                    <h3 class="p-under__equipmentTitle">血管内焼灼用高周波治療機器 （Medtronic社）</h3>
                    <p class="p-under__equipmentParagraph">
                          下肢静脈瘤の治療に用います。膝周囲にカテーテルを挿入するための小さな創のみで治療を行う事が出来るため傷跡が目立ちません。<br>当クリニックでは下肢静脈瘤に対する血管内焼灼術の実施基準による実施施設に認定されております。<br>（登録番号：H00744）
                        </p>
                  </div>
                </li>

                <li class="p-under__equipmentItem">
                  <figure class="p-under__equipmentImage">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-equipment02.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-equipment02.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-equipment02@2x.jpg 2x" alt="VenaSeal クロージャー" decoding="async">
                  </figure>

                  <div class="p-under__equipmentBody">
                    <h3 class="p-under__equipmentTitle">VenaSeal クロージャー</h3>
                    <p class="p-under__equipmentParagraph">
                          最大のメリットは、高周波治療のように静脈を焼かないので、静脈のまわりの広範囲の局所麻酔が必要ありません。そのため、麻酔の痛みがほぼ無く、治療後の回復も早くなります。<br>また、熱による神経障害（しびれ）や深部静脈血栓症も少なくなります。デメリットはグルーに対するアレルギー反応や静脈炎が生じる可能性がある事です。
                        </p>
                  </div>
                </li>

                <li class="p-under__equipmentItem">
                  <figure class="p-under__equipmentImage">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-equipment03.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-equipment03.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-equipment03@2x.jpg 2x" alt="ENDOTHERMELASER 1470 " decoding="async">
                  </figure>

                  <div class="p-under__equipmentBody">
                    <h3 class="p-under__equipmentTitle">ENDOTHERMELASER 1470</h3>
                    <p class="p-under__equipmentParagraph">
                          レーザー治療は、正確には“血管内レーザー治療（EndoVenous Laser Ablation:EVLA）と言います。<br>下肢の内側に局所麻酔を注射し、静脈の中に細いレーザーファイバー（1470nm）を通して、レーザーの熱によって静脈を塞いでしまう“低侵襲治療”です。
                        </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="js-trigger-section06" id="sec06">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <span class="en">Number of operations</span>
                  <em>累計下肢静脈瘤手術件数</em>
                </h3>

            <div class="p-under__innerContent">
              <p>
                当クリニックでは豊富な治療実績があります。
              </p>
              <div class="graph-wrap -border -primary">
                <picture>
                  <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-graph01@2x.jpg" media="(min-width: 768px)">
                  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/casi-graph02@2x.jpg" alt="累計下肢静脈瘤手術件数のグラフ">
                </picture>
                <p class="inner-text note -secondary">
                開院から2021年12月までの手術累計件数です
                  </p>
              </div>
            </div>


            <div class="graph-wrap  -primary">
              <picture>
                <source srcset="http://localhost/wp-content/themes/HeartClinic/assets/images/smoking/smoking-graph02@2x.jpg" media="(min-width: 1024px)">
                <img src="http://localhost/wp-content/themes/HeartClinic/assets/images/smoking/smoking-graph02-sp@2x.jpg" alt=" 禁煙のメリットが分かるデータ">
              </picture>
              <p class="inner-text">
                      初回診察の際に、問診票の記載および禁煙開始日の決定と禁煙宣言書にサインをしていただき、8日目から禁煙をスタートします。<br>また、開始から2週間後と8週間後に、禁煙補助薬の処方と、息に含まれる一酸化濃度の測定をします。<br class="sp-hide">禁煙状況に応じて医師のアドバイスを受けます。
                    </p>
            </div>
          </div>


        </div>
      </section>

      <section class="js-trigger-section07" id="sec07">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <span class="en">faq</span>
                  <em>よくあるご質問</em>
                </h3>

            <div class="p-under__innerContent">
              <h4 class="c-heading -sizeS">下肢静脈瘤手術についての<br class="pc-hide">よくあるご質問</h4>
            </div>
            <div class="p-under__innerContent">
              <div class="p-under__faq">
                <dl class="js-accordion">
                  <dt><span>手術による合併症はありますか？</span></dt>
                  <dd>
                    当クリニックで行われている高周波治療は確立された手法であり、安全性も非常に高いですが、場合によっては下記のような合併症が生じることがあります。<br>
                    疼痛 / 出血、皮下出血 / 皮膚知覚障害 / 痺れ / 血管損傷 / 創部感染 / 深部静脈血栓症、肺塞栓症 /
                    リンパ漏 / 下肢浮腫 / 熱傷 / その他の予期せぬ合併症<br>
                    これらの合併症は、時間経過に伴って軽快していくことがほとんどです。
                  </dd>
                </dl>

                <dl class="js-accordion">
                  <dt><span>手術後の注意点は？</span></dt>
                  <dd>静脈瘤を発症&middot;進行させないために、次のような注意を守ることが大切です。<br>

                    <dl>
                      <dt>長時間の立位をさける</dt>
                      <dd>
                        長時間立ち仕事をする人は、1時間したら5分～10分は、足を心臓より高くして休憩することがよいです。<br>しかし、普通は休憩がとりにくい人が多いので、足ふみをしたり、歩き回ったり、屈伸運動をするなどして、足の筋肉を使いましょう。<br>筋肉を使うことで、血行がよくなります。
                      </dd>
                    </dl>

                    <dl>
                      <dt>弾性ストッキングを着用する</dt>
                      <dd>
                        静脈瘤がなくても、長時間の立ち仕事などをする方は、弾性ストッキングを装着することをお奨めします。<br>この場合は、予防的なので、医療用弾性ストッキングより効果は劣りますがドラッグストア等で市販されている弾性ストッキングを使用しても良いと考えます。<br>
                        静脈瘤がすでにある方や静脈瘤の手術を行った方は、医療用弾性ストッキングを使うことお奨めします。
                      </dd>
                    </dl>

                    <dl>
                      <dt>就寝時の下肢の挙上</dt>
                      <dd>
                        お家で休むときや就寝時には、クッションなどを使って足を心臓より高くして休みましょう。<br>ただし、心臓の病気がある方は、心臓に負担がかかることがありますので注意が必要です。
                      </dd>
                    </dl>

                    <dl>
                      <dt>患肢の清潔、保護</dt>
                      <dd>
                        静脈瘤があると、足に湿疹や痒みなどが現れやすくなります。<br>足を常に清潔にし、掻きキズや外傷を避け、色素沈着や潰瘍をつくらないようにしましょう。
                      </dd>
                    </dl>

                    <dl>
                      <dt>妊娠と静脈瘤</dt>
                      <dd>
                        静脈瘤は妊娠時によく発生します。妊娠中に少しでも足の血管が浮くようなら弾性ストッキングの使用をお奨めします。<br>静脈瘤には遺伝的な要素も関係しますので、<br>静脈瘤のあるお母さんは、娘さんの妊娠中、とくに足に気をつけてあげるとよいでしょう。
                      </dd>
                    </dl>
                  </dd>
                </dl>

                <dl class="js-accordion">
                  <dt><span>閉塞した静脈はどうなるのですか？</span></dt>
                  <dd>徐々に細くなっていき、4～6か月で体に吸収されます。</dd>
                </dl>

                <dl class="js-accordion">
                  <dt><span>静脈を閉塞させても問題ないのですか？</span></dt>
                  <dd>問題ありません。体の深い部分にも静脈が存在しているので、血液はそちらを流れて心臓に戻ります。</dd>
                </dl>

                <dl class="js-accordion">
                  <dt><span>再発の可能性はありますか？</span></dt>
                  <dd>長期間（数年以上）たつと、まれに再発することがあります。仮に再発した場合も、自覚症状に乏しいことが多く、また、再治療も可能です。</dd>
                </dl>

                <dl class="js-accordion">
                  <dt><span>日常生活は問題なく過ごせるでしょうか？</span></dt>
                  <dd>家事や家庭内のことは手術当日から可能です。事務系の仕事は翌日から再開できますが、激しい肉体労働や長時間の立ち仕事は、2～3日後から開始することをお勧めします。</dd>
                </dl>
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