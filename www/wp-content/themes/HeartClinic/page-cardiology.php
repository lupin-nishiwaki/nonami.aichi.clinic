<?php get_header(); ?>
<main>
  <?php get_template_part("/template-parts/reserve") ?>
  <div class="l-under -main">
    <div class="l-under__sideMenu">
      <div class="p-under__sideMenu">
        <div class="p-under__sideInner">
          <ul class="p-under__sideList">
            <li class="p-under__sideItem"><a class="sec01" href="#sec01">心臓疾患について</a></li>
            <li class="p-under__sideItem"><a class="sec02" href="#sec02">心臓検査</a></li>
            <li class="p-under__sideItem"><a class="sec03" href="#sec03">カテーテル検査&middot;治療</a></li>
            <li class="p-under__sideItem"><a class="sec04" href="#sec04">心臓血管外科手術</a></li>
          </ul>
        </div>
      </div>
      <!-- /.l-under__sideMenu -->
    </div>
    <!-- /.l-under__sideMenu -->

    <div class="l-spacer -under l-under__main p-under__main">
      <div class="p-under__container -secondary">
        <?php get_template_part("/template-parts/pankuzu") ?>

        <div class="p-under__topContent">
          <div class="p-under__mainTitle">
            <h2 class="c-heading -underPrimary">
                  <span class="en">cardiology department</span>
                  <em>循環器科</em>
                </h2>
          </div>
        </div>
        <!-- /.p-under__topContent -->
      </div>

      <section class="p-under__bg -bg04 js-trigger-section01">
        <div class="l-spacer" id="sec01">
          <div class="p-under__container -secondary">
            <div class="p-under__cardiologyContent -primary">
              <div class="p-under__cardiologyContentInner">
                <h3 class="c-heading -underSecondary">
                      <em>心臓疾患について</em>
                    </h3>

                <p class="p-under__cardiologyParagraph">
                      心臓疾患が原因で亡くなる人の数は癌に次いで2番目に多く、そのうちの半分を占めるのが、心臓に栄養や酸素を送る冠動脈が狭くなり十分な血液が届かなくなる狭心症と、完全に詰まって心臓の筋肉の一部が壊死する心筋梗塞という疾患です。脂質異常、高血糖、喫煙、内臓脂肪型肥満といった生活習慣と密接に関わっており、どれか一つでも心当たりのある人は注意が必要です。
                      自覚症状がないまま進行し、症状が現れた時にはすでに重傷で、時には死に至る危険性が高いことも多いため、早期発見、早期治療が大切です。些細なことでもお気軽にご相談ください。
                    </p>
              </div>

              <div class="p-under__cardiologyInnerWrap">
                <div class="p-under__headingWrap -primary">
                  <h4 class="c-heading -sizeS">対象疾患</h4>
                </div>
                <p class="p-under__cardiologyTextSub -border">
                      高血圧、糖尿病、高脂血症、高尿酸血症状、虚血性心疾患（狭心症&middot;心筋梗塞）、閉塞性動脈硬化症、下肢静脈瘤、不整脈、心筋疾患（肥大型心筋症&middot;拡張型心筋症）、弁膜疾患（僧房弁&middot;大動脈弁の狭窄や閉鎖不全症）、心不全
                    </p>
              </div>

              <figure class="p-under__cardiologyImage -primary">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/heart-disease.jpg" srcset="
                        <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/heart-disease.jpg,
                        <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/heart-disease@2x.jpg 2x
                      " alt="説明を受けている写真">
              </figure>
            </div>
          </div>
          <!-- /.p-under__container -->
        </div>
      </section>

      <section class="js-trigger-section02" id="sec02">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>心臓検査</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="p-under__flowHeadWrap">
                <h4 class="p-under__flowTitle">検査の流れ</h4>
              </div>

              <div class="p-under__flowContent">
                <ol class="p-under__flowList">
                  <li class="p-under__flowItem -no01">
                    <dl>
                      <dt>受付&middot;問診</dt>
                      <dd>
                        問診票をご記入いただき、検査の流れ等をご説明します。その後、身長、体重、血圧を測定します。
                      </dd>
                    </dl>
                  </li>

                  <li class="p-under__flowItem -no02">
                    <dl>
                      <dt>採血&middot;検尿</dt>
                      <dd>
                        血液は身体のすみずみまで巡っているので、血液中に含まれている成分を分析すれば全身の組織や臓器の状態が分かり、病気の診断や治療の判定などに利用できます。また、心臓病の原因となる糖尿病や高脂血症など動脈硬化の危険因子を調べます。
                      </dd>
                    </dl>
                  </li>

                  <li class="p-under__flowItem -no03">
                    <dl>
                      <dt>ABI（動脈硬化度検査）</dt>
                      <dd>
                        上腕と足首の血圧を測定することで血管年齢や足の動脈の狭窄&middot;閉塞の有無（末梢動脈疾患）について評価することができます。末梢動脈疾患は、心血管疾患や脳血管疾患など他臓器障害との合併が多く見られることも多く、早期発見が重要です。
                      </dd>
                    </dl>
                  </li>

                  <li class="p-under__flowItem -no04">
                    <dl>
                      <dt>心電図&middot;胸部レントゲン</dt>
                      <dd>
                        両手首&middot;両足首&middot;胸の6ヶ所に電極を取り付け測定します。心臓の働きを調べ、心臓病の発見や診断、病状の把握、治療効果の確認、薬の副作用を発見します。胸部レントゲン画像では肺の病態の他に心臓の形と大きさ、肺や胸部を流れる血管の輪郭が分かるため、心臓病が疑われる場合は必ず撮影します。
                      </dd>
                    </dl>
                  </li>

                  <li class="p-under__flowItem -no05">
                    <dl>
                      <dt>心エコー</dt>
                      <dd>
                        超音波を使って心臓の形、働き、動きに異常がないかを調べます。心臓内の血液の流れも見ることができ、僧房弁や大動脈弁の弁膜疾患も調べられます。<br>
                        また、体の他の部位の血管を侵す疾患の診断にも使われます。超音波はX線を使わないため害がなく、比較的安価で優れた画像が得られるため心臓病の診断に最も広く使われている検査法の一つです。妊婦や小児でも安心して検査を受けることができます。
                      </dd>
                    </dl>
                  </li>

                  <li class="p-under__flowItem -no06">
                    <dl>
                      <dt>運動負荷心電図</dt>
                      <dd>
                        段階的に運動することで心臓に一定の負荷（負担）をかけ、その時の心電図変化により狭心症の有無や脈の乱れの有無を測定します。運動は自転車状の検査装置のペダルをこいでいただきます。
                      </dd>
                    </dl>
                  </li>

                  <li class="p-under__flowItem -no07">
                    <dl>
                      <dt>心臓CT（64列マルチスライス）</dt>
                      <dd>
                        腕の静脈に造影剤を注射し、CTで心臓を撮り、その後画像処理をして冠動脈を描出します。狭心症や心筋梗塞の診断をします。
                        当クリニックでは64列マルチスライスCTを導入しています。
                        この最新のCT装置により画像が非常に鮮明になり、冠動脈病変の診断が可能となりました。検査は短時間で終了します。CT室のベッドに寝ていただき15秒程度の息止めを5～6回していただくだけですので、
                        患者様の精神的、肉体的負担が軽減されています。
                      </dd>
                    </dl>
                  </li>

                  <li class="p-under__flowItem -no08">
                    <dl>
                      <dt>ホルター（24時間心電図）</dt>
                      <dd>
                        小型軽量の装置を身につけて、日常生活下で心電図を24時間連続記録することにより、心拍数の変化、不整脈や狭心症の発作の出現を観察します。
                      </dd>
                    </dl>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="js-trigger-section03" id="sec03">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>カテーテル検査&middot;治療</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="js_tab">
                <div class="p-under__flowHeadWrap">
                  <ul class="p-under__tab js_tab_btn">
                    <li class="p-under__tabItem is-tab"><span>日帰り心臓<br class="pc-hide">カテーテル検査</span></li>
                    <li class="p-under__tabItem"><span>心臓<br class="pc-hide">カテーテル治療</span></li>
                    <li class="p-under__tabItem"><span>末梢動脈<br class="pc-hide">カテーテル治療</span></li>
                  </ul>
                </div>

                <div class="js_tab_content">
                  <div class="is-tab">
                    <div class="p-under__cardiologyContent -secondary">
                      <div class="p-under__cardiologyContentInner -secondary">
                        <h3 class="c-heading -sizeS">
                              痛みをほとんど感じない、<br>
                              日帰りカルーテル検査。
                            </h3>
                        <p class="p-under__cardiologyParagraph">
                              心臓カテーテル検査は、冠動脈疾患（狭心症、心筋梗塞）を診断する最も確実な検査法です。検査では局所麻酔を施した後、主に手首の動脈から「カテーテル」と呼ばれる細長い管を心臓の血管（冠動脈）まで挿入します。<br>カテーテルの先端が冠動脈内に入った後、カテーテルを通して冠動脈に造影剤を注入し、
                              冠動脈の状態（どの血管がどのくらい狭くなっているか）や心臓の動きをX線にて観察します。検査時間は約15～30分です。なお検査中、胸や心臓の痛みはほとんどありません。<br>
                              当クリニックの医師は日本循環器学会及び日本心血管インターベンション治療学会の認定を受け、豊富な経験と実績を有しておりますので、安心して検査を受けていただけます。
                            </p>
                      </div>

                      <figure class="p-under__cardiologyImage -secondary">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel01.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel01.jpg,
                                <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel01@2x.jpg 2x" alt="治療している写真">
                      </figure>
                    </div>

                    <div class="p-under__innerContent">
                      <div class="p-under__flowHeadWrap">
                        <h4 class="p-under__flowTitle">検査&middot;治療の流れ</h4>
                      </div>

                      <div class="p-under__flowContent">
                        <ol class="p-under__flowList">
                          <li class="p-under__flowItem -no09">
                            <dl>
                              <dt>受付&middot;個室のリラクゼーションルームへご案内</dt>
                              <dd>
                                朝の受付後、リラクゼーションルームへご案内します。当クリニックではリラックスして検査を受けていただくために、専用のリクライニングシートとテレビ付きの個室ブースを用意しております。
                              </dd>
                            </dl>
                          </li>

                          <li class="p-under__flowItem -no03">
                            <dl>
                              <dt>着替え&middot;体調確認</dt>
                              <dd>
                                検査に先立ち検査着に着替えて体調確認を行います。また、場合により点滴を行います。検査当日の朝の食事制限はございません。
                              </dd>
                            </dl>
                          </li>

                          <li class="p-under__flowItem -no10">
                            <dl>
                              <dt>消毒&middot;麻酔&middot;検査</dt>
                              <dd>
                                カテーテルを挿入する場所（主に手首）の消毒と麻酔を行います。その後、動脈からカテーテル（直径約1.5mmの管）を挿入して心臓まで進め、そこから造影剤を注入し心臓を栄養している冠動脈を撮影し状態を詳細に評価します。約15～30分の検査です。
                              </dd>
                            </dl>
                          </li>

                          <li class="p-under__flowItem -no11">
                            <dl>
                              <dt>止血&middot;安静</dt>
                              <dd>
                                検査後は出血を防ぐために止血ベルトで傷口を3～4時間圧迫します。トイレ移動は可能ですが止血が確認できるまで安静にお過ごし下さい。昼食は食べやすいものを出させていただきます。
                              </dd>
                            </dl>
                          </li>

                          <li class="p-under__flowItem -no12">
                            <dl>
                              <dt>検査結果説明&middot;治療提案</dt>
                              <dd>
                                説明が終わり、止血が完了したら帰宅できます。帰宅時間の目安は14時前後ですが止血状況に応じて医師が判断します。
                              </dd>
                            </dl>
                          </li>
                        </ol>

                        <div class="p-under__flowBlockEnd">
                          <div class="p-under__headingWrap -primary">
                            <h4 class="c-heading -sizeS">検査費用について</h4>
                          </div>
                          <p class="p-under__cardiologyTextSub -border">
                                検査は日帰り入院で行なっております。医療保険が適用されますので３割負担の方で約30,000円となります。<br>
                                ※検査内容によって変動する事がございます。
                              </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div>
                    <div class="p-under__cardiologyContent -secondary">
                      <div class="p-under__cardiologyContentInner -secondary">
                        <h3 class="c-heading -sizeS">
                              体への負担をやわらげ、<br>
                              経済的にも優しいカテーテル治療。
                            </h3>
                        <p class="p-under__cardiologyParagraph">
                              手や足の血管（動脈）からカテーテルを冠動脈（心臓を栄養する血管）へ進め、最新のステントを用いて狭くなった血管を拡げます。また、冠動脈の病変形態や全身状態を専門医が総合的に判断して、オーダーメイドなカテーテル治療を行っています。<br>
                              手術で大きく胸を開くことなく、わずか2㎜程度の穴（傷）で治療ができ、体への負担をやわらげます。<br>
                              当クリニックでは、心臓カテーテル治療（経皮的冠動脈インターベンション；PCI）も手首の動脈から行うことで、出血に伴う合併症や治療後の絶対安静の時間を軽減し、1泊入院での安全な心臓カテーテル治療を可能にしました。これにより肉体的な影響だけではなく、時間的にも経済的にも優しい治療を実現しております。手術は毎週火曜日と木曜日に行っております。
                            </p>
                      </div>

                      <figure class="p-under__cardiologyImage -secondary">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel02.jpg" srcset="
                                <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel02.jpg,
                                <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel02@2x.jpg 2x
                              " alt="治療している写真">
                      </figure>
                    </div>

                    <div class="p-under__innerContent">
                      <div class="p-under__flowHeadWrap">
                        <h4 class="p-under__flowTitle">検査&middot;治療の流れ</h4>
                      </div>

                      <div class="p-under__flowContent">
                        <ol class="p-under__flowList">
                          <li class="p-under__flowItem -no07">
                            <dl>
                              <dt>検査受付&middot;病室へご案内</dt>
                              <dd>
                                検査当日、受付後に病室へご案内します。当クリニックでは、プライバシーに配慮した快適な入院生活をお過ごしいただけますよう、全室個室（洗面所、トイレ完備）でご用意しております。また、テレビや冷蔵庫等も備えておりますのでご自由にお使い下さい。
                              </dd>
                            </dl>
                          </li>

                          <li class="p-under__flowItem -no13">
                            <dl>
                              <dt>脈拍&middot;体調確認&middot;点滴</dt>
                              <dd>
                                検査着に着替えて脈拍&middot;体調確認を行い、点滴を開始させていただきます。治療開始までリラックスしてお過ごしください。
                              </dd>
                            </dl>
                          </li>

                          <li class="p-under__flowItem -no14">
                            <dl>
                              <dt>治療</dt>
                              <dd>
                                カテーテルを挿入する場所（主に手首）の消毒と麻酔を行います。造影を行い冠動脈の狭窄部位を確認し、カテーテルを通じてステントを狭窄部まで挿入ししっかりと拡張させます。<br>再度造影を行い、狭窄部位が十分に拡張したことを確認後、カテーテルを抜去して治療は終了です。病変形態にもよりますが、心臓カテーテル治療は約1時間で終了します。
                              </dd>
                            </dl>
                          </li>

                          <li class="p-under__flowItem -no12">
                            <dl>
                              <dt>治療結果説明</dt>
                              <dd>
                                治療後は出血を防ぐために専用の止血ベルトで傷口を5時間程度圧迫します。医師より治療結果と術後の注意点を説明します。<br>
                                治療直後を除き絶対安静の必要はなく、食事やトイレ歩行も可能です。
                              </dd>
                            </dl>
                          </li>

                          <li class="p-under__flowItem -no15">
                            <dl>
                              <dt>状態の確認&middot;退院</dt>
                              <dd>
                                翌朝、全身状態および傷口の確認を行い、問題がなければ退院可能です。退院後は普段通りの日常生活が送れます。
                              </dd>
                            </dl>
                          </li>
                        </ol>
                      </div>

                      <div class="p-under__innerContent">
                        <div class="p-under__flowHeadWrap">
                          <h4 class="p-under__flowTitle">使用機器</h4>
                        </div>
                        <ul class="p-under__equipmentList -secondary">
                          <li class="p-under__equipmentItem">
                            <figure class="p-under__equipmentImage">
                              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine01.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine01.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine01@2x.jpg 2x" alt="血管造影装置Trinias F8（島津製作所）" decoding="async">
                            </figure>

                            <div class="p-under__equipmentBody">
                              <h3 class="p-under__equipmentTitle">血管造影装置<br>Trinias F8（島津製作所）</h3>
                              <p class="p-under__equipmentParagraph">
                                    高血圧の原因や動脈硬化との関連で話題になっている睡眠時無呼吸症候群の診断に使用します。
                                  </p>
                            </div>
                          </li>

                          <li class="p-under__equipmentItem">
                            <figure class="p-under__equipmentImage">
                              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine02.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine02.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine02@2x.jpg 2x" alt="心臓カテーテル用検査装置（フクダ電子）" decoding="async">
                            </figure>

                            <div class="p-under__equipmentBody">
                              <h3 class="p-under__equipmentTitle">心臓カテーテル用検査装置<br>（フクダ電子）</h3>
                              <p class="p-under__equipmentParagraph">
                                    心臓カテーテル検査の際に血行動態を記録します。
                                  </p>
                            </div>
                          </li>

                          <li class="p-under__equipmentItem">
                            <figure class="p-under__equipmentImage">
                              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine03.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine03.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine03@2x.jpg 2x" alt="血管内超音波診断装置(IVUS)(Boston Scientific社)" decoding="async">
                            </figure>

                            <div class="p-under__equipmentBody">
                              <h3 class="p-under__equipmentTitle">
                                    血管内超音波診断装置<br>(IVUS)(Boston Scientific社)
                                  </h3>
                              <p class="p-under__equipmentParagraph">
                                    カテーテル治療の際に冠動脈の大きさ、血管の厚さを描出することができます。
                                  </p>
                            </div>
                          </li>

                          <li class="p-under__equipmentItem">
                            <figure class="p-under__equipmentImage">
                              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine04.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine04.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine04@2x.jpg 2x" alt="大動脈内バルーンパンピング(IABP)(MAQUET社)" decoding="async">
                            </figure>

                            <div class="p-under__equipmentBody">
                              <h3 class="p-under__equipmentTitle">
                                    大動脈内バルーンパンピング<br>(IABP)(MAQUET社)
                                  </h3>
                              <p class="p-under__equipmentParagraph">
                                    バルーンを動かすことで心臓の働きを助けることが可能な、補助循環法の一種です。
                                  </p>
                            </div>
                          </li>

                          <li class="p-under__equipmentItem">
                            <figure class="p-under__equipmentImage">
                              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine05.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine05.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel-machine05@2x.jpg 2x" alt="汎用人工呼吸器(MAQUET社)" decoding="async">
                            </figure>

                            <div class="p-under__equipmentBody">
                              <h3 class="p-under__equipmentTitle">汎用人工呼吸器<br>(MAQUET社)</h3>
                              <p class="p-under__equipmentParagraph">人工的に患者様の呼吸を維持します。</p>
                            </div>
                          </li>
                        </ul>
                        <!-- /.p-under__featureContent -->
                      </div>

                      <div class="p-under__flowBlockEnd">
                        <div class="inner">
                          <div class="p-under__headingWrap -primary">
                            <h4 class="c-heading -sizeS">検査費用について</h4>
                          </div>
                          <p class="p-under__cardiologyTextSub -border">
                                使用するステントの種類や数にもよりますが、カテーテル治療は全例高額医療となります。高額療養費制度の対象となりますので、所得で定められた自己負担限度額以上の費用は、後日（2～3ケ月後）医療保険から払い戻されます。
                                また、事前に手続きを済ませておきますと、入院分の費用に関して病院に支払う金額は自己負担分のみとなります（限度額適用認定証の発行）。詳しくは<a
                                  href="/contact"
                                  class="link"
                                  >お問い合わせ&middot;ご相談</a
                                >ください。
                              </p>
                        </div>

                        <div class="inner">
                          <div class="p-under__headingWrap -primary">
                            <h4 class="c-heading -sizeS">病室について</h4>
                          </div>
                          <div class="inner-content">
                            <figure>
                              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/hospital-room.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/hospital-room.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/hospital-room@2x.jpg 2x" alt="病室の写真" decoding="async">
                            </figure>
                            <p class="p-under__cardiologyTextSub">
                                  当クリニックでは、プライバシーに配慮し、快適に入院生活を過ごせる完全個室を無料でご用意しております。<br>
                                  各病室には、最新の睡眠科学を生かしたSIMMONS（シモンズ電動リクライニングベッド）、洗面所とトイレの他、クローゼット、液晶テレビ、ミニ冷蔵庫、金庫を備えており、全て無料でご利用いただけます。また、院内無線LAN（WiFi）もご自由に使用可能です。
                                </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div>
                    <div class="p-under__cardiologyContent -secondary">
                      <div class="p-under__cardiologyContentInner -secondary">
                        <h3 class="c-heading -sizeS">
                              1泊入院で治療が可能。早期発見の、<br>末梢動脈カテーテル治療。
                            </h3>
                        <p class="p-under__cardiologyParagraph">
                              閉塞性動脈硬化症とは、足の血管（動脈）の動脈硬化が進み、血管が細くなったり詰まったりする病気です。足に十分な血液を保つことができず、歩いている途中で足のしびれや痛みが出現しますが、少し休むと回復するので病気と思わない方が多く存在しています。<br>
                              しかし放置すると足の先から紫色や黒色に変化し、腐って壊死に陥ります。残念ながら壊死に陥った場合には下肢の切断が必要になります。心臓カテーテル治療と同様に足の動脈に対しても1泊入院での治療が可能です。<br>
                              手や足の血管（動脈）からカテーテルを病変部へ進め、バルーンやステントを用いて狭くなった血管を拡げます。全ての患者様にカテーテル治療の適応があるというわけではございませんが、早期発見が重要な疾患です。手術は毎週火曜日と木曜日に行っております。両腕と両足の血圧を同時に測定するABI検査で足の動脈の詰まりを非常に高い確率で見つけることができますので、いつでもお気軽にご相談下さい。
                            </p>
                      </div>

                      <figure class="p-under__cardiologyImage -secondary">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel02.jpg" srcset="
                                <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel02.jpg,
                                <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/katetel02@2x.jpg 2x
                              " alt="治療している写真">
                      </figure>
                    </div>
                    <div class="p-under__innerContent">
                      <div class="p-under__flowHeadWrap">
                        <h4 class="p-under__flowTitle">検査&middot;治療の流れ</h4>
                      </div>

                      <div class="p-under__flowContent">
                        <ol class="p-under__flowList">
                          <li class="p-under__flowItem -no07">
                            <dl>
                              <dt>検査受付&middot;病室へご案内</dt>
                              <dd>
                                検査当日、受付後に病室へご案内します。当クリニックでは、プライバシーに配慮した快適な入院生活をお過ごしいただけますよう、全室個室（洗面所、トイレ完備）でご用意しております。また、テレビや冷蔵庫等も備えておりますのでご自由にお使い下さい。
                              </dd>
                            </dl>
                          </li>

                          <li class="p-under__flowItem -no13">
                            <dl>
                              <dt>脈拍&middot;体調確認&middot;点滴</dt>
                              <dd>
                                検査着に着替えて脈拍&middot;体調確認を行い、点滴を開始させていただきます。治療開始までリラックスしてお過ごしください。
                              </dd>
                            </dl>
                          </li>

                          <li class="p-under__flowItem -no14">
                            <dl>
                              <dt>治療</dt>
                              <dd>
                                カテーテルを挿入する場所（主に足の付け根もしくは肘）の消毒と麻酔を行います。造影を行い動脈の狭窄部位を確認し、カテーテルを通じてバルーンを狭窄部まで挿入ししっかりと拡張させます。部位に応じてステントを留置します。<br>再度造影を行い、狭窄部位が十分に拡張したことを確認後、カテーテルを抜去して治療は終了です。治療箇所や進行の状況にもよりますが、治療は約1～2時間で終了します。
                              </dd>
                            </dl>
                          </li>

                          <li class="p-under__flowItem -no12">
                            <dl>
                              <dt>治療結果説明</dt>
                              <dd>
                                治療後は出血を防ぐために専用の止血ベルトで傷口を5時間程度圧迫します。医師より治療結果と術後の注意点を説明します。止血が完了すれば、食事やトイレ歩行は可能です。
                              </dd>
                            </dl>
                          </li>

                          <li class="p-under__flowItem -no15">
                            <dl>
                              <dt>状態の確認&middot;退院</dt>
                              <dd>
                                翌朝、全身状態および傷口の確認を行い、問題がなければ退院可能です。退院後は普段通りの日常生活が送れます。
                              </dd>
                            </dl>
                          </li>
                        </ol>

                        <div class="p-under__flowBlockEnd">
                          <div class="inner">
                            <div class="p-under__headingWrap -primary">
                              <h4 class="c-heading -sizeS">検査費用について</h4>
                            </div>
                            <p class="p-under__cardiologyTextSub -border">
                                  使用するステントの種類や数にもよりますが、カテーテル治療は全例高額医療となります。高額療養費制度の対象となりますので、所得で定められた自己負担限度額以上の費用は、後日（2～3ケ月後）医療保険から払い戻されます。
                                  また、事前に手続きを済ませておきますと、入院分の費用に関して病院に支払う金額は自己負担分のみとなります（限度額適用認定証の発行）。詳しくは<a
                                    href="/contact"
                                    class="link"
                                    >お問い合わせ&middot;ご相談</a
                                  >ください。
                                </p>
                          </div>

                          <div class="inner">
                            <div class="p-under__headingWrap -primary">
                              <h4 class="c-heading -sizeS">病室について</h4>
                            </div>
                            <div class="inner-content">
                              <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/hospital-room.jpg" secset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/hospital-room.jpg , <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/hospital-room@2x.jpg 2x" alt="病室の写真" decoding="async">
                              </figure>
                              <p class="p-under__cardiologyTextSub">
                                    当クリニックでは、プライバシーに配慮し、快適に入院生活を過ごせる完全個室を無料でご用意しております。<br>
                                    各病室には、最新の睡眠科学を生かしたSIMMONS（シモンズ電動リクライニングベッド）、洗面所とトイレの他、クローゼット、液晶テレビ、ミニ冷蔵庫、金庫を備えており、全て無料でご利用いただけます。また、院内無線LAN（WiFi）もご自由に使用可能です。
                                  </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.js_tab_content -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="js-trigger-section04 p-under__bg -bg05">
        <div class="l-spacer" id="sec04">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>心臓血管外科手術</em>
                </h3>

            <div class="p-under__innerContent">
              <h4 class="c-heading -sizeS">心臓血管外科とは</h4>
              <div class="inner">
                <figure>
                  <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/surgery.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/surgery.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/cardiology/surgery@2x.jpg 2x" alt="治療している写真">
                </figure>

                <p class="p-under__cardiologyTextSub">
                      主な治療疾患は「脳以外の全身の血管を扱う外科」です。
                      「心臓」の場合は、狭心症心筋梗塞などの虚血性心疾患、弁膜症、大動脈瘤、急性大動脈解離、先天性心疾患などです。これらの手術は人工心肺など高度医療設備が必要なため、クリニックでは難しくなります。<br>当クリニックでは、これらの疾患がどういう状態なのかを精査し、手術適応を見極め、手術前後の加療、フォローを行っています。手術に関しては、今まで最前線で心臓手術を執刀していた経験を活かし、信頼できる病院、医師をご紹介いたします。<br>
                      「血管」の場合は、動脈瘤などの拡張疾患と、閉塞性動脈硬化症などの閉塞疾患に分かれます。拡張して破裂することや閉塞&middot;狭窄して虚血になること、に対する治療をしています。当クリニックでの末梢血管手術は全身麻酔で施行し1泊入院になります。<br>リスクの高い患者様はその手術が可能な病院をご紹介いたします。 <a href="<?php echo esc_url( home_url( ) ); ?>/shunt/" class="link">透析シャント治療</a>や<a href="<?php echo esc_url( home_url( ) ); ?>/varix/" class="link">下肢静脈瘤</a>（日帰り入院、局所麻酔）も行っております。
                      外科はバイパス手術、血管内治療、そして投薬と多くの方法がありますが、病変の場所、状態によって治療戦略が大きく変わります。昨今は多くの治療法が患者様に提示され、どれが正しいのか非常にわかりにくくなっています。当クリニックでは、なんでこの治療なの？という疑問に、経験とエビデンス（論拠）に基づいてご説明できること、また安全かつ確実な治療を提供できるよう尽力しています。
                    </p>
              </div>
            </div>

            <div class="p-under__cardiologyTypeContainer">
              <div class="p-under__cardiologyTypeBlock">
                <h4>心臓に関する主な治療疾患</h4>
                <ul class="p-under__cardiologyTypeList">
                  <li class="p-under__cardiologyTypeItem -w100">
                    狭心症&middot;心筋梗塞などの<br class="sp-hide">虚血性心疾患
                  </li>
                  <li class="p-under__cardiologyTypeItem">弁膜症</li>
                  <li class="p-under__cardiologyTypeItem">大動脈瘤</li>
                  <li class="p-under__cardiologyTypeItem">急性大動脈解離</li>
                  <li class="p-under__cardiologyTypeItem">先天性心疾患</li>
                </ul>
              </div>

              <div class="p-under__cardiologyTypeBlock">
                <h4>血管に関する主な治療疾患</h4>
                <ul class="p-under__cardiologyTypeList">
                  <li class="p-under__cardiologyTypeItem">動脈瘤などの<br>拡張疾患</li>
                  <li class="p-under__cardiologyTypeItem">閉塞性動脈硬化症などの<br>閉塞疾患</li>
                </ul>
              </div>
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
