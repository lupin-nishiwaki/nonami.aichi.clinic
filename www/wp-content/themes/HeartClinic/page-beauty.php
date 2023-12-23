<?php get_header(); ?>
<main>
  <?php get_template_part("/template-parts/reserve") ?>
  <div class="l-under -main">
    <div class="l-under__sideMenu">
      <div class="p-under__sideMenu">
        <div class="p-under__sideInner">
          <ul class="p-under__sideList">
            <!-- <li class="p-under__sideItem"><a class="sec01" href="#sec01">キャンペーン<span class="pc-hide">/</span></a></li> -->
            <li class="p-under__sideItem">
              <!-- <a class="sec010" href="#sec010">お知らせ</a> -->
              <a class="sec010" href="#sec010">お知らせ</a>
            </li>
            <li class="p-under__sideItem -flex">
              <a class="sec02" href="#sec02">メニュー</a>
              <ul>
                <li><a class="sec03" href="#sec03">レーザートリートメント<span class="pc-hide">/</span></a></li>
                <li><a class="sec04" href="#sec04">ハイドラブースター<span class="pc-hide">/</span></a></li>
                <li><a class="sec05" href="#sec05">脱毛<span class="pc-hide">/</span></a></li>
                <li><a class="sec06" href="#sec06">HIFU<span class="pc-hide">/</span></a></li>
                <li><a class="sec07" href="#sec07">ハンドベイン<span class="pc-hide">/</span></a></li>
                <li><a class="sec08" href="#sec08">美容点滴</a></li>
              </ul>
            </li>
            <li class="p-under__sideItem">
              <a class="sec09" href="#sec09">ご予約&middot;ご来院時の流れ</a>
            </li>

            <!-- <li class="p-under__sideItem">
              <a class="sec011" href="#sec011">オンラインショップ</a>
            </li> -->
            <li class="p-under__sideItem">
              <a class="sec011" href="#sec011">LINEでご予約</a>
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

        <div class="p-under__topContent -beauty">
          <div class="p-under__mainTitle">
            <h2 class="c-heading -underPrimary">
                  <span class="en -purple">beauty</span>
                  <em>美容案内</em>
                </h2>
          </div>
        </div>
        <!-- /.p-under__topContent -->
      </div>

      <section class="p-under__bg -bg11">
        <div class="l-spacer">
          <div class="p-under__container -secondary">
            <div class="p-under__messageContent -message">
              <div>
                <em class="p-under__lead">美容に関するお悩み、<br class="pc-hide">是非お気軽にご相談ください。</em>
                <p class="p-under__messageParagraph">
                    当クリニックでは、美容メニューのカウンセリング&middot;施術も行っております。一般診療と併せて、ぜひご利用ください。
                    </p>
              </div>
            </div>
          </div>
          <!-- /.p-under__container -->
        </div>
      </section>

      <section class="js-trigger-section010" id="sec010">
        <!-- <section> -->
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <?php
            $args = [
              'post_type' => 'beautynews', // 投稿タイプを指定
              'posts_per_page' => 3, // １ページあたりの投稿数を指定
              'paged' => $paged,
              ];
               $the_query = new WP_Query( $args );
              ?>
            <div>
              <div class="p-main__news">
                <div class="inner">
                  <h2 class="c-heading -underSecondary p-main__newsTitle">お知らせ</h2>
                  <div class="p-main__newsContent">
                    <?php  if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php get_template_part("/template-parts/news") ?>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <p class="p-main__newsContent-postText">まだ投稿がありません。</p>
                    <?php endif;  wp_reset_postdata(); ?>
                  </div>
                  <!-- /.p-main__newsInner -->
                </div>
                <div class="p-main__newsButtonWrap">
                  <a href="<?php echo esc_url( home_url( ) ); ?>/beautynews/" class="p-main__newsButton -purple">一覧を見る</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- <section class="js-trigger-section01" id="sec01">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary"><em>キャンペーン</em></h3>

            <div class="p-under__innerContent">
              <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = [
          'post_type' => 'beautycampaign', // 投稿タイプを指定
          'posts_per_page' => 3, // １ページあたりの投稿数を指定
          'paged' => $paged,
          ];
           $the_query = new WP_Query( $args );
          ?>


              <div class="p-under__blogContent -secondary">
                <?php  if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php get_template_part("/template-parts/blog") ?>
                <?php endwhile; ?>
                <?php else : ?>
                <p>まだ投稿がありません。</p>
                <?php endif;  wp_reset_postdata(); ?>
              </div>


              <div class="c-button__wrap -center">
                <a href="<?php echo esc_url( home_url( ) ); ?>/beautycampaign/" class="c-button -colorPurple -center -primary">
                  <span class="inner">一覧を見る</span>
                  <div class="svg-wrap">
                    <svg class="arrow -brown" viewBox="0 0 23 7.206">
                      <g transform="translate(-125.801 -6.294)">
                        <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                      </g>
                    </svg>
                  </div>
                </a>
              </div>

            </div>
          </div>
        </div>
      </section> -->


      <section class="js-trigger-section02">
        <div class="l-spacer -borderTop" id="sec02">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>メニュー</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="p-under__beautyMenu">


                <div class="p-under__beautyMenuInner js-trigger-section03" id="sec03">
                  <h4 class="c-heading -sizeM -pn">レーザー&middot;トリートメント</h4>
                  <div class="p-under__beautyMenuBlock">
                    <figure>
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-razor.jpg" srcset="
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-razor.jpg,
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-razor@2x.jpg 2x
                                    " alt="レーザーフェイシャル（顔ジェントルレーズレーザー脱毛）" decoding="async">
                    </figure>

                    <div class="innerWrap">
                      <div class="innerBlock">
                        <h5>レーザーフェイシャル<span class="detail">（顔ジェントルレーズレーザー脱毛）</span></h5>
                        <p>医療脱毛にも使う機械で顔全体に低出力のレーザーを照射することで、皮膚の若返りをもたらします。<br>シミ、そばかす、くすみの改善、毛穴の開き、エイジングケア、産毛の脱毛、 ニキビの改善・予防に効果があります。<br>冷却ガスを使用するため、痛みを抑えて治療できます。<br>当院は日本医学脱毛学会認定施設です。レーザー安全講習を受けた看護師が施術いたします。</p>

                        <dl>
                          <dt>メニュー&middot;料金</dt>
                          <dd>
                            <ul>
                              <li>
                                <div>
                                  <span class="title">レーザーフェイシャル（30分）</span>
                                  <span class="yen"><span class="inner">&yen;9,800</span></span>
                                </div>
                              </li>
                            </ul>
                          </dd>
                        </dl>

                        <div class="note">
                          <dl>
                            <dt>リスク・副作用</dt>
                            <dd>発赤・火傷・色素沈着 白斑 肝斑増悪・ 潜在性肝斑惹起等が生じる可能性があります。</dd>
                          </dl>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.p-under__beautyMenuBlock -->


                  <div class="p-under__beautyMenuBlock">
                    <figure>
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-enbiron.jpg" srcset="
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-enbiron.jpg,
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-enbiron@2x.jpg 2x
                                    " alt="エンビロントリートメント" decoding="async">
                    </figure>

                    <div class="innerWrap">
                      <div class="innerBlock">
                        <h5>エンビロントリートメント</h5>
                        <p>一人ひとりの肌悩みやご希望に合わせたスキンケア製品を使用したトリートメントコースです。カウンセリングの上、メニューをご提供いたします。<br>当クリニックでは、エンビロンのプライマリー資格取得者2名、アドバンスディプロマ取得者1名がカウンセリング及び施術を行っております。カウンセリング予約、メニュー詳細はお気軽にご相談ください。</p>

                        <dl>
                          <dt>メニュー&middot;料金</dt>
                          <dd>
                            <ul>
                              <li>
                                <div>
                                  <span class="title">エッセンシャルトリートメント各種</span>
                                  <span class="yen"><span class="inner">&yen;6,000〜&yen;10,400</span></span>
                                </div>
                              </li>

                              <li>
                                <div>
                                  <span class="title">フォーカスオントリートメント各種</span>
                                  <span class="yen"><span class="inner">&yen;6,000</span></span>
                                </div>
                              </li>

                              <li>
                                <div>
                                  <span class="title">AHAトリートメント各種</span>
                                  <span class="yen"><span class="inner">&yen;13,700</span></span>
                                </div>
                              </li>
                            </ul>
                          </dd>
                        </dl>
                      </div>

                      <div class="innerBlock">
                        <h5>トリートメント</h5>
                        <dl>
                          <dt>メニュー&middot;料金</dt>
                          <dd>
                            <ul>
                              <li>
                                <div>
                                  <span class="title">レナトスTa&plus;レナトスaプラストリートメント（60分）</span>
                                  <span class="yen"><span class="inner">&yen;6,000</span></span>
                                </div>
                              </li>

                              <li>
                                <div>
                                  <span class="title">プラセンタ追加</span>
                                  <span class="yen"><span class="inner">&yen;1,200</span></span>
                                </div>
                              </li>

                              <li>
                                <div>
                                  <span class="title">トラネキサム酸追加</span>
                                  <span class="yen"><span class="inner">&yen;1,200</span></span>
                                </div>
                              </li>

                            </ul>
                          </dd>
                        </dl>
                      </div>

                      <div class="innerBlock">
                        <h5>レーザーフェイシャル&amp;エンビロントリートメント</h5>
                        <p>トリートメントの内容は、カウンセリングの上、ご本人のご希望も踏まえて今の肌状態にあったトリートメントをご提供いたします。</p>

                        <dl>
                          <dt>メニュー&middot;料金</dt>
                          <dd>
                            <ul>
                              <li>
                                <div>
                                  <span class="title">レーザー&amp;エッセンシャルクールビタミンコース（45分）</span>
                                  <span class="yen"><span class="inner">&yen;13,700</span></span>
                                </div>
                                <p class="text">
                                  肌が敏感に傾きがちな方に。エンビロン独自のアルジネートマスクを乗せることで肌をクールダウンし、保湿効果でしっとり仕上げます。
                                </p>
                              </li>


                              <li>
                                <div>
                                  <span class="title">レーザー&amp; エッセンシャルエイジングケアコース（60分）</span>
                                  <span class="yen"><span class="inner">&yen;15,900</span></span>
                                </div>
                                <p class="text">
                                  肌全体のエイジングケアを行いたい方に。みなぎるようなハリと弾力のある若々しい印象の肌に導きます。
                                </p>
                              </li>

                              <li>
                                <div>
                                  <span class="title">レーザー&amp; エッセンシャルエヴァネッセントコース（60分）</span>
                                  <span class="yen"><span class="inner">&yen;15,900</span></span>
                                </div>
                                <p class="text">
                                  肌全体のくすみや色ムラが気になる方に。肌を均一にトーンアップし、かつてないほどの輝きを放つ透明感のある肌へ導きます。
                                </p>
                              </li>

                              <li>
                                <div>
                                  <span class="title">レーザー&amp; エッセンシャルモイスチャーブーストコース（60分）</span>
                                  <span class="yen"><span class="inner">&yen;15,900</span></span>
                                </div>
                                <p class="text">
                                  うるおい不足による乾燥やハリの低下が気になる方に。みずみずしいうるおいとハリを生み出します。
                                </p>
                              </li>
                            </ul>
                          </dd>
                        </dl>
                      </div>

                      <div class="innerBlock">
                        <h5>レーザーフェイシャル&amp;トリートメント</h5>

                        <dl>
                          <dt>メニュー&middot;料金</dt>
                          <dd>
                            <ul>
                              <li>
                                <div>
                                  <span class="title">レーザー&amp;レナトスTa+レナトスaプラストリートメント（60分）</span>
                                  <span class="yen"><span class="inner">&yen;14,800</span></span>
                                </div>
                                <p class="text">
                                  肝斑に効果のあるトラネキサム酸と、ビタミン配合美容液を導入する事で、シミ・しわ・くすみにアプローチします。
                                </p>
                              </li>
                            </ul>
                          </dd>
                        </dl>

                        <div class="note">
                          <dl>
                            <dt>リスク・副作用</dt>
                            <dd>赤み・ほてり・腫れ痒み・乾燥・ニキビや吹き出物の一時的な活発化等を生じる可能性があります。</dd>
                          </dl>
                        </div>
                      </div>
                    </div>

                  </div>
                  <!-- /.p-under__beautyMenuBlock -->
                </div>

                <div class="p-under__beautyMenuInner js-trigger-section04" id="sec04">
                  <h4 class="c-heading -sizeM -pn">ハイドラブースター</h4>
                  <div class="p-under__beautyMenuBlock">
                    <figure>
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-haidora.jpg" srcset="
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-haidora.jpg,
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-haidora@2x.jpg 2x
                                    " alt="ハイドラブースター" decoding="async">
                    </figure>

                    <div class="innerWrap">
                      <div class="innerBlock">
                        <p>水流を利用して美容成分を浸透させながら行う、肌に負担をかけない新しいピーリングです。余分な角質を取り除き、毛穴の吸引洗浄とともに美容成分を導入する事で、毛穴の黒ずみ&middot;開き、ニキビ、ニキビ跡、くすみ、ざらつきなどを改善します。レーザーフェイシャルやトリートメントと組み合わせる事により、更なる美肌効果が期待できます。</p>
                      </div>

                      <div class="innerBlock">
                        <h5>ピーリング、毛穴吸引</h5>
                        <p>水流と特殊なダイヤモンドでコーティーングされた器具を使用し、余分な角質を素早く除去。お肌にあった美容成分（乳酸、サリチル酸など）を肌へ効果的に浸透させます。</p>
                      </div>


                      <div class="innerBlock">
                        <h5>ニードル、美容成分導入</h5>
                        <p>ニードルのついた器具で肌に小さな穴を開けながら美容成分（ヒアルロン酸や抗酸化成分）を肌の深層まで浸透させ、コラーゲンやエラスチンの再生を促します。</p>

                        <dl>
                          <dt>メニュー&middot;料金</dt>
                          <dd>
                            <ul>
                              <li>
                                <div>
                                  <span class="title">【Tゾーン】毛穴吸引&plus;ピーリングとニードル&plus;美容液導入（60分）</span>
                                  <span class="yen"><span class="inner">&yen;11,000</span></span>
                                </div>
                              </li>

                              <li>
                                <div>
                                  <span class="title">【全顔】毛穴吸引&plus;ピーリングとニードル&plus;美容液導入（60分）</span>
                                  <span class="yen"><span class="inner">&yen;14,000</span></span>
                                </div>
                              </li>

                              <li>
                                <div>
                                  <span class="title">【背中】毛穴吸引&plus;ピーリング&plus;クールビタミン（90分）</span>
                                  <span class="yen"><span class="inner">&yen;20,000</span></span>
                                </div>
                              </li>


                              <li class="list02">
                                <p class="title">レーザーコースに追加</p>
                                <div>
                                  <span class="title">毛穴吸引&plus;ピーリング - Tゾーン（30分）</span>
                                  <span class="yen"><span class="inner">&yen;5,000</span></span>
                                </div>


                                <div>
                                  <span class="title">毛穴吸引&plus;ピーリング - 全顔（30分）</span>
                                  <span class="yen"><span class="inner">&yen;8,000</span></span>
                                </div>
                              </li>

                              <li class="list02">
                                <p class="title">トリートメントに追加</p>
                                <div>
                                  <span class="title">毛穴吸引&plus;ピーリング - Tゾーン（30分）</span>
                                  <span class="yen"><span class="inner">&yen;5,000</span></span>
                                </div>

                                <div>
                                  <span class="title">毛穴吸引&plus;ピーリング&plus;ニードル&plus;美容液導入 - Tゾーン（60分）</span>
                                  <span class="yen"><span class="inner">&yen;11,000</span></span>
                                </div>


                                <div>
                                  <span class="title">毛穴吸引&plus;ピーリング - 全顔（30分）</span>
                                  <span class="yen"><span class="inner">&yen;8,000</span></span>
                                </div>

                                <div>
                                  <span class="title">毛穴吸引&plus;ピーリングとニードル&plus;美容液導入 - 全顔 （60分）</span>
                                  <span class="yen"><span class="inner">&yen;13,000</span></span>
                                </div>
                              </li>
                            </ul>
                          </dd>
                        </dl>

                        <div class="note -hifu">
                          <dl>
                            <dt>施術のリスク</dt>
                            <dd>
                              治療部位に軽度の赤み、 痛み、 擦過傷、 皮剥け、 あざまたは浮腫、 点状出血がみられる場合があります。<br>
                              金属アレルギーのある方は、ニードルはできない場合があります。
                            </dd>
                          </dl>

                          <dl>
                            <dt>使用する医療機器について</dt>
                            <dd>
                              医薬品医療機器等法上の承認 : 未承認<br>
                              入手経路 株式会社 CLASSYS JAPAN<br>
                              同一の成分や性能を有する他の国内承認医薬品等の有無 無し<br>
                              諸外国における安全性等に係る情報 欧州CE承認
                            </dd>
                          </dl>
                        </div>

                      </div>

                    </div>
                  </div>
                  <!-- /.p-under__beautyMenuBlock -->


                  <div class="p-under__beautyMenuBlock">
                    <div class="innerWrap">


                    </div>

                  </div>
                  <!-- /.p-under__beautyMenuBlock -->


                </div>


                <div class="p-under__beautyMenuInner  js-trigger-section05" id="sec05">
                  <h4 class="c-heading -sizeM -pn">脱毛</h4>
                  <div class="p-under__beautyMenuBlock">
                    <figure>
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-razor.jpg" srcset="
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-razor.jpg,
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-razor@2x.jpg 2x
                                    " alt="脱毛" decoding="async">
                    </figure>

                    <div class="innerWrap">
                      <div class="innerBlock">
                        <h5>医療レーザー脱毛</h5>
                        <p>当クリニックでは、お客様の肌質&middot;毛質&middot;ご要望、施術部位にあわせて下記の2種類の脱毛器を使用して施術いたします。<br>当クリニックは、日本医学脱毛学会認定施設です。レーザー安全講習を受けた看護師が施術いたします。</p>
                      </div>

                      <div class="innerBlock">
                        <h5>熱破壊式脱毛<span class="detail">（ジェントルレーズプロ）</span></h5>
                        <p>厚生労働省認可の脱毛医療機器で、より安全&middot;効果的に治療ができます。メラニン色素に反応した熱作用で毛根と毛包を破壊することで毛を細くし、本数を減らしていきます。レーザー照射の直前に肌をガスで冷却することで、「火傷」や「熱傷」のリスクを大幅に軽減できます。</p>
                      </div>
                    </div>
                  </div>
                  <!-- /.p-under__beautyMenuBlock -->


                  <div class="p-under__beautyMenuBlock">
                    <figure>
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-razor-mac.jpg" srcset="
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-razor-mac.jpg,
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-razor-mac@2x.jpg 2x
                                    " alt="蓄熱式脱毛（レーザーマック）" decoding="async">
                    </figure>

                    <div class="innerWrap">
                      <div class="innerBlock">
                        <h5>蓄熱式脱毛<span class="detail">（レーザーマック）</span></h5>

                        <p>
                            バルジ領域という毛根（毛母細胞）への栄養源の元を破壊する為、発毛を抑えます。熱温度が約60度で熱破壊式（通常のレーザー）と比べて約40度低く、更に最新の冷却システムが付いている為、照射時の痛みが少ないです。施術時間も短いことが特徴です。
                          </p>

                        <dl>
                          <dt>料金</dt>
                          <dd>
                            <ul>
                              <li>
                                <div>
                                  <span class="yen flex"><span class="title">ビキニライン</span><span class="inner">&yen;6,500〜&yen;19,500</span></span>
                                </div>

                                <div>
                                  <span class="yen flex"><span class="title">体幹</span><span class="inner">&yen;4,700〜&yen;45,000</span></span>
                                </div>


                                <div>
                                  <span class="yen flex"><span class="title">腕&middot;足</span><span class="inner">&yen;2,700〜&yen;50,000</span></span>
                                </div>

                                <div>
                                  <span class="yen flex"><span class="title">顔面</span><span class="inner">&yen;2,500〜&yen;9,800</span></span>
                                </div>


                                <div>
                                  <span class="yen flex"><span class="title">両脇</span><span class="inner">&yen;5,000</span></span>
                                </div>

                                <div>
                                  <span class="yen flex"><span class="title">ひげ（男性）</span><span class="inner">&yen;3,000〜&yen;14,500</span></span>
                                </div>
                              </li>
                            </ul>
                          </dd>
                        </dl>


                        <div class="note -secondary">
                          <dl>
                            <dt>使用する医療機器について</dt>
                            <dd>
                              医薬品医療機器等法上の承認 : 未承認<br>
                              入手経路 : 株式会社 INFIX<br>
                              同一の成分や性能を有する他の国内承認医薬品等の有無 : 無し<br>
                              諸外国における安全性等に関わる情報 : アメリカFDA認証済み 医療用EC認証（ドイツ、TUV、SUD） <br>ISO1313485、オーストラリア（TGA）
                            </dd>
                          </dl>
                        </div>

                        <div class="acc">
                          <dl class="js-accordion">
                            <dt><span class="arrow">医療脱毛前の注意点</span></dt>
                            <dd>
                              <ul>
                                <li>毛抜きでの処理は照射1ヶ月前からおやめいただき、剃る方法に変えてください。<br>（毛を抜くと、レーザーが毛根に反応しなくなり、脱毛効果が落ちます。）</li>
                                <li>施術前日に照射部位を必ず剃毛してきてください。VIO脱毛の場合は、剃りにくい場所のため、施術前に確認して剃り残し場所を剃毛させてもらいます。<br>当日は、シェーバーをご持参ください。<br>（来院時、剃っていらっしゃらない場合は別途剃毛料金を頂戴する場合があります）</li>
                                <li>日焼けはしないようにしてください。強い日焼けで、皮膚のメラニン色素が増えると脱毛効果が落ち、やけどのリスクが高まります。<br>特に熱破壊式脱毛の場合は、日焼けの程度によってはリスクが高いため、当日施術をお断りすることもあります。<br>蓄熱式脱毛は、濃いスキンタイプの方でも比較的安全に治療を行うことができますが、炎症が強い場合は施術できません。脱毛前に日焼けされた場合は、一度ご相談ください。</li>
                              </ul>
                            </dd>
                          </dl>
                        </div>


                      </div>

                    </div>
                  </div>
                  <!-- /.p-under__beautyMenuBlock -->


                  <div class="p-under__beautyMenuBlock">
                    <figure>
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-needle.jpg" srcset="
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-needle.jpg,
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-needle@2x.jpg 2x
                                    " alt="COA-50NX" decoding="async">
                    </figure>

                    <div class="innerWrap">
                      <div class="innerBlock">
                        <h5>針脱毛</h5>
                        <p>毛穴の一つ一つに細い絶縁針を刺し込み、微弱な電流を流すことで毛根を破壊して脱毛していく方法です。<br>周辺の皮膚を傷めることなく、毛根部を確実に壊し、完全な永久脱毛を実現することができます。<br>肌質や毛の色を選ばず、レーザーでは不可能な部位や細かい毛も確実に脱毛可能です。</p>

                        <dl>
                          <dt>料金</dt>
                          <dd>
                            <ul>
                              <li>
                                <div>
                                  <span class="yen flex"><span class="title">カウンセリング&middot;血液検査&middot;絶縁針費</span><span class="inner">&yen;11,220</span></span>
                                </div>

                                <p>
                                  ※毛を伸ばしていただく必要があるため、初回は施術はありません。
                                </p>
                              </li>

                              <li>
                                <div>
                                  <span class="yen flex"><span class="title">施術30分</span><span class="inner">&yen;7,500</span></span>
                                </div>
                              </li>

                              <li>
                                <div>
                                  <span class="yen flex"><span class="title">施術1時間</span><span class="inner">&yen;15,000</span></span>
                                </div>
                              </li>


                            </ul>
                          </dd>
                        </dl>

                        <!-- <div class="note -hifu">
                          <dl>
                            <dt> 入手経路：国内生産及び販売
                            </dt>
                            <dd>
                              ニドー工業株式会社（第二種医療機器製造販売業者 許可番号45B2X10001）
                            </dd>
                          </dl>
                        </div>

                        <div class="note">
                          <dl>
                            <dt>リスク 副作用</dt>
                            <dd>
                              発赤、熱感、 痒み、 痛み、 乾燥が生じます。 これらは1~2週間程続くことがあります。 稀に、 ざ瘡の悪化、 コメド、 毛嚢炎、埋 没毛、膿疱、ほくろ・しみの部分が薄くなる・消える一時的に濃くなる、 隆、 表皮剥離、 水疱形成、 色素沈着や色素、 内 出血、 腫脹、 硬毛化が生じることがあります。
                            </dd>
                          </dl>
                        </div> -->

                        <div class="note -secondary">
                          <dl>
                            <dt>リスク 副作用</dt>
                            <dd>
                              発赤、熱感、 痒み、 痛み、 乾燥が生じます。 これらは1~2週間程続くことがあります。 稀に、 ざ瘡の悪化、 コメド、 毛嚢炎、埋 没毛、膿疱、ほくろ・しみの部分が薄くなる・消える一時的に濃くなる、 隆、 表皮剥離、 水疱形成、 色素沈着や色素、 内 出血、 腫脹、 硬毛化が生じることがあります。
                            </dd>
                          </dl>

                          <dl>
                            <dt>使用する機器について</dt>
                            <dd>
                              入手経路：国内生産及び販売<br>
                              ニドー工業株式会社（第二種医療機器製造販売業者 許可番号45B2X10001）
                            </dd>
                          </dl>
                        </div>

                      </div>

                    </div>
                  </div>
                  <!-- /.p-under__beautyMenuBlock -->
                </div>


                <div class="p-under__beautyMenuInner js-trigger-section06" id="sec06">
                  <h4 class="c-heading -sizeM -pn">HIFU<span class="detail">（ソノクイーン）</span></h4>
                  <div class="p-under__beautyMenuBlock">
                    <figure>
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-hifu.jpg" srcset="
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-hifu.jpg,
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-hifu@2x.jpg 2x
                                    " alt="HIFU（ソノクイーン）" decoding="async">
                    </figure>

                    <div class="innerWrap">
                      <div class="innerBlock">
                        <p>HIFU（ハイフ）とは、強力な超音波エネルギーを照射することで皮膚表面を傷つけずに、しわ&middot;たるみ&middot;ほうれい線を改善させる、今人気の切らないリフトアップです。メスや注射が不要で、手軽にシワやたるみの予防&middot;治療ができます。</p>

                        <dl>
                          <dt>料金</dt>
                          <dd>
                            <ul>
                              <li>
                                <div>
                                  <span class="yen flex"><span class="title">全顔（540shot）</span><span class="inner">&yen;78,000</span></span>
                                </div>
                              </li>

                              <li>
                                <div>
                                  <span class="yen flex"><span class="title">顔下半分（300shot）</span><span class="inner">&yen;46,000</span></span>
                                </div>
                              </li>


                              <li>
                                <div>
                                  <span class="yen flex"><span class="title">目尻&middot;目下（240shot）</span><span class="inner">&yen;40,000</span></span>
                                </div>
                              </li>

                              <li>
                                <div>
                                  <span class="yen flex"><span class="title">頬（240shot）</span><span class="inner">&yen;30,000</span></span>
                                </div>
                              </li>

                              <li>
                                <div>
                                  <span class="yen flex"><span class="title">顎下（60shot）</span><span class="inner">&yen;19,000</span></span>
                                </div>
                              </li>
                            </ul>
                          </dd>
                        </dl>

                        <div class="note -secondary">
                          <dl>
                            <dt>施術のリスク</dt>
                            <dd>
                              持病、既往歴、アレルギー、内服薬、外用薬、 妊娠、出産、その他お客様のお肌の状況によっては医師の判断によりお断りすることがございます。<br>
                              痛み、発赤、熱感、 腫れ、 打撲痛のような圧痛、一時的な感覚の変化、軽い内出血のような症状が生じる場合があります。<br>
                              効果の現れ方には個人差があり、稀に1回の施術では希望する改善が見られない場合があります。
                            </dd>
                          </dl>

                          <dl>
                            <dt>使用する機器について</dt>
                            <dd>
                              医薬品医療機器等法上の承認: 未承認<br>
                              入手経路: 合同会社オール<br>
                              同一の成分や性能を有する他の国内承認医薬品等の有無 : 無し<br>
                              諸外国における安全性等に係る情報 : ヨーロッパCEマーク取得。 韓国にて承認済み。
                            </dd>
                          </dl>
                        </div>


                      </div>
                    </div>
                  </div>
                  <!-- /.p-under__beautyMenuBlock -->


                </div>


                <div class="p-under__beautyMenuInner js-trigger-section07" id="sec07">
                  <h4 class="c-heading -sizeM -pn">ハンドベイン</h4>
                  <div class="p-under__beautyMenuBlock">
                    <figure>
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-hand-ilust.jpg" srcset="
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-hand-ilust.jpg,
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-hand-ilust@2x.jpg 2x
                                    " alt="ハンドベイン" decoding="async">
                    </figure>

                    <div class="innerWrap">
                      <div class="innerBlock">
                        <p>手の甲や腕の浮き出た血管や手の若返りにおすすめの治療です。目的の血管（静脈）にカテーテルを挿入し、周囲を麻酔した後、レーザー照射します。</p>

                        <dl class="about">
                          <dt>手術について</dt>
                          <dd>
                            <dl>
                              <dt>時間：</dt>
                              <dd>日帰り、30 分～60 分程度</dd>
                            </dl>
                            <dl>
                              <dt>術後：</dt>
                              <dd>防水手袋着用で当日家事、入浴可能。専用のグローブ、または包帯で圧迫して帰宅します。<br>術後1週間程度は内出血、腫れがありますが、徐々に改善します。照射した血管は1〜３ヶ月で目立たなくなります。橈側（拇指側）を照射した場合、軽度の痺れが残ることが稀にあります。</dd>
                            </dl>
                          </dd>
                        </dl>


                        <dl>
                          <dt>料金</dt>
                          <dd>
                            <ul>
                              <li>
                                <div>
                                  <span class="yen flex"><span class="title">片腕</span><span class="inner">&yen;150,000</span></span>
                                </div>
                              </li>

                              <li>
                                <div>
                                  <span class="yen flex"><span class="title">両腕</span><span class="inner">&yen;250,000</span></span>
                                </div>
                              </li>


                              <li>
                                <div>
                                  <span class="yen flex"><span class="title">硬化療法</span><span class="inner">&yen;20,000</span></span>
                                </div>
                              </li>

                            </ul>
                          </dd>
                        </dl>

                        <div class="image-wrap">
                          <div>
                            <picture>
                              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-hand-before@2x.jpg" media="(min-width: 1024px)">
                              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-hand-before-sp@2x.jpg" alt="ハンドベイン 手術前の写真">
                            </picture>

                            <p>手術前</p>
                          </div>

                          <div>
                            <picture>
                              <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-hand-after@2x.jpg" media="(min-width: 1024px)">
                              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-hand-after-sp@2x.jpg" alt="ハンドベイン 手術後の写真">
                            </picture>
                            <p>手術後</p>
                          </div>
                        </div>

                        <div class="note -hand">
                          <p>
                          各術式初回施術施行後3ヶ月であれば、同一術式につき追加治療は無料となります。<br>
                          上記費用以外に術後の圧着着衣費用 &yen;4,950〜&yen;11,000(片腕) が別途必要です。<br>
                          通院期間中は、再診療 &yen;2,000 が別途必要となります。
                        </p>
                        </div>


                      </div>


                    </div>
                  </div>
                  <!-- /.p-under__beautyMenuBlock -->


                </div>

                <div class="p-under__beautyMenuInner js-trigger-section08" id="sec08">
                  <h4 class="c-heading -sizeM -pn">美容点滴</h4>
                  <div class="p-under__beautyMenuBlock">
                    <figure>
                      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-infusion.jpg" srcset="
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-infusion.jpg,
                                      <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-infusion@2x.jpg 2x
                                    " alt="美容点滴" decoding="async">
                    </figure>

                    <div class="innerWrap">
                      <div class="innerBlock">
                        <p>日頃の疲れや二日酔いからの回復、美肌作りに必要な栄養素を、高濃度のまま直接体内に取り込むことで身体の隅々まで美容成分を行き渡らせることができ、より早くより高い効果が期待できる治療です。<br>予約は必要ありませんので、お気軽にお尋ねください。</p>

                        <dl>
                          <dt>メニュー&middot;料金</dt>
                          <dd>
                            <ul>
                              <li>
                                <div>
                                  <span class="title">プラセンタ注射</span>
                                  <span class="yen"><span class="inner">&yen;2,200</span></span>
                                </div>
                                <p class="text">アミノ酸&middot;ビタミン&middot;ミネラルなどを豊富に含んているため、細胞の新陳代謝を高め、<br>肝機能の回復や皮膚の血行を良くし、お肌にハリ&middot;つやを出す効果があります。</p>
                              </li>

                              <li>
                                <div>
                                  <span class="title">にんにく注射</span>
                                  <span class="yen"><span class="inner">&yen;2,200</span></span>
                                </div>
                                <p class="text">疲労回復に必要なビタミンB群を豊富に含むため、日頃の疲れやストレス解消におすすめです。</p>
                              </li>


                              <li>
                                <div>
                                  <span class="title">肩こり&middot;疲労回復点滴</span>
                                  <span class="yen"><span class="inner">&yen;4,300</span></span>
                                </div>
                                <p class="text">ビタミンB1、B6、B12や総合ビタミン、アミノ酸配合のため、全身の倦怠感や肉体疲労、肩こりなどの改善に効果的です。<br>免疫力アップ&middot;風邪予防にも効果が期待できます。</p>
                              </li>


                              <li>
                                <div>
                                  <span class="title">肝機能回復&middot;二日酔い点滴</span>
                                  <span class="yen"><span class="inner">&yen;4,300</span></span>
                                </div>
                                <p class="text">肝機能の保護や強化を行い、アルコール分解を助ける成分をたっぷり配合。肝機能、代謝障害、中毒症状を改善する効果があります。<br>二日酔い症状の改善&middot;疲労&middot;倦怠感の回復を促します。</p>
                              </li>

                              <li>
                                <div>
                                  <span class="title">アンチエイジングスーパービタミン点滴</span>
                                  <span class="yen"><span class="inner">&yen;6,500</span></span>
                                </div>
                                <p class="text">4種のビタミンB群、強力な抗酸化作用で肌の新陳代謝を促進する成分、美白成分、アミノ酸等を含んだスペシャルなビタミン配合点滴です。<br>全身の美肌、若々しさを保ちたい方におすすめです。</p>
                              </li>

                              <li>
                                <div>
                                  <span class="title">白玉点滴 レギュラー</span>
                                  <span class="yen"><span class="inner">&yen;4,700</span></span>
                                </div>
                              </li>

                              <li>
                                <div>
                                  <span class="title">白玉点滴 高濃度 </span>
                                  <span class="yen"><span class="inner">&yen;8,000</span></span>
                                </div>
                                <p class="text">強力な抗酸化作用やメラニン生成抑制作用があるグルタチオンを主成分とし、美白、シミやそばかすの改善&middot;予防などの美肌&middot;エイジングケア効果があります。<br>肝臓の解毒作用もあり、二日酔いや慢性疲労などにも効果的です。</p>
                              </li>


                            </ul>
                          </dd>
                        </dl>

                        <div class="note">
                          <dl>
                            <dt>リスク 副作用</dt>
                            <dd>
                              発赤、腫脹、硬結、 動悸、 痺れ、 悪寒、 めまい 、 悪心、 肝機能障害、 アレルギー反応の可能性があります。
                              治療効果を実感いただくのに複数回生じる可能性もございます。
                            </dd>
                          </dl>
                        </div>

                      </div>


                    </div>
                  </div>
                  <!-- /.p-under__beautyMenuBlock -->


                </div>


              </div>


            </div>
          </div>
        </div>
      </section>


      <section class="js-trigger-section09" id="sec09">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>ご予約&middot;ご来院時の流れ</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="js_tab">
                <div class="p-under__flowHeadWrap">
                  <ul class="p-under__tab js_tab_btn">
                    <li class="p-under__tabItem -secondary -purple is-tab"><span>初診の場合</span></li>
                    <li class="p-under__tabItem -secondary -purple"><span>再診の場合</span></li>
                  </ul>
                </div>

                <div class="js_tab_content">
                  <div class="is-tab">

                    <div class="p-under__flowContent">
                      <ol class="p-under__flowList">
                        <li class="p-under__flowItem -black -no17">
                          <dl>
                            <dt>ご予約</dt>
                            <dd>
                              事前にクリニックにお電話もしくはLINEでご予約をお取りください。施術内容にあわせて、当日の注意事項など説明させていただきます。<br>
                              ※当日、お客様都合のキャンセルはキャンセル料を頂いております。<br>
                              キャンセルは前日までに、LINEまたはお電話でお願いします。ご予約変更の場合はお電話、LINE、どちらでも可能です。
                            </dd>
                          </dl>
                        </li>

                        <li class="p-under__flowItem -black -no18">
                          <dl>
                            <dt>ご来院</dt>
                            <dd>
                              ご予約の日時の30分前にご来院ください。
                            </dd>
                          </dl>
                        </li>

                        <li class="p-under__flowItem -black -no19">
                          <dl>
                            <dt>受付</dt>
                            <dd>
                              受付後、施術内容にあわせた問診票などをご記入いただきます。
                            </dd>
                          </dl>
                        </li>

                        <li class="p-under__flowItem -black -no20">
                          <dl>
                            <dt>診察</dt>
                            <dd>
                              医師の診察を受けていただいた後、美容のお部屋、もしくはロビーにご案内いたします。
                            </dd>
                          </dl>
                        </li>

                        <li class="p-under__flowItem -black -no21">
                          <dl>
                            <dt>施術内容の説明</dt>
                            <dd>
                              ご予約のお時間が来ましたら、美容のお部屋にて看護師より施術内容の詳しい説明をさせていただきます。
                            </dd>
                          </dl>
                        </li>

                        <li class="p-under__flowItem -black -no22">
                          <dl>
                            <dt>施術</dt>
                            <dd>
                              説明後、ご納得いただいた場合、洗顔など施術の準備をして頂き、施術となります。
                            </dd>
                          </dl>
                        </li>


                        <li class="p-under__flowItem -black -no23">
                          <dl>
                            <dt>会計&middot;次回予約</dt>
                            <dd>
                              施術後、必要に応じて次回のご予約をとらせていただき、受付で会計となります。
                            </dd>
                          </dl>
                        </li>
                      </ol>

                    </div>

                  </div>

                  <div>
                    <div class="p-under__flowContent">
                      <ol class="p-under__flowList">
                        <li class="p-under__flowItem -black -no18">
                          <dl>
                            <dt>ご来院</dt>
                            <dd>
                              ご予約15分前までには受付にお越しください。<br>
                              ※予約時間を5分ほど過ぎてしまいますと、当日施術することが困難になる場合がございますのでご了承下さい。その場合、申し訳ございませんが、受付で再度ご予約を取り直していただく事になります。
                            </dd>
                          </dl>
                        </li>

                        <li class="p-under__flowItem -black -no19">
                          <dl>
                            <dt>受付</dt>
                            <dd>
                              前回お渡しした予約カードを受付にお出しください。美容のお部屋もしくはロビーにご案内させていただきます。
                            </dd>
                          </dl>
                        </li>

                        <li class="p-under__flowItem -black -no22">
                          <dl>
                            <dt>施術</dt>
                            <dd>
                              ご予約のお時間が来ましたら、美容のお部屋にて施術させていただきます。
                            </dd>
                          </dl>
                        </li>

                        <li class="p-under__flowItem -black -no23">
                          <dl>
                            <dt>会計&middot;次回予約</dt>
                            <dd>
                              施術後、必要に応じて次回のご予約をとらせていただき、受付で会計となります。
                            </dd>
                          </dl>
                        </li>

                      </ol>
                    </div>

                  </div>

                </div>
                <!-- /.js_tab_content -->
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="p-under__bg -bg12">
        <!-- お知らせ元の位置 -->

        <div class="p-main__Intro -secondary -beauty js-trigger-section011" id="sec011" style="border-top:none;">
          <div class="p-main__IntroInner l-spacer ">
            <a href="https://page.line.me/954bntwp?openQrModal=true" target="_blank" rel="noopener noreferrer" class="p-main__IntroLink">
              <figure class="p-main__IntroIcon">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-icon-line.svg" alt="ドクターのアイコン" />
              </figure>
              <h2 class="c-heading -sizeS -center -border">

                  <em>LINEでご予約</em>
                </h2>
              <div class="p-main__IntroButton-sp">
                <i class="purple">
                  <div class="arrow-wrap">
                    <svg class="arrow -whiteBrown" viewBox="0 0 23 7.206">
                      <g transform="translate(-125.801 -6.294)">
                        <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                      </g>
                    </svg>
                  </div>
                </i>
              </div>

              <div class="p-main__IntroButton-pc">
                <p href="https://page.line.me/954bntwp?openQrModal=true" target="_blank" rel="noopener noreferrer" class="c-button -colorPurple -center -primary">
                    <span class="inner">LINEでご予約はこちら</span>
                    <i class="svg-wrap -secondary">
                      <svg class="arrow -brown"  viewBox="0 0 23 7.206">
                        <g transform="translate(-125.801 -6.294)">
                          <path
                            d="M714.911,14.75l5.5,6h-22"
                            transform="translate(-572.11 -7.75)"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1"
                          />
                        </g>
                      </svg>
                    </i>
                  </p>
              </div>
            </a>
          </div>

          <!-- <div class="p-main__IntroInner l-spacer">
            <a href="<?php echo esc_url( home_url( ) ); ?>/about#partner" class="p-main__IntroLink">
              <figure class="p-main__IntroIcon">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/beauty/beauty-icon-cart.svg" alt="病院のアイコン" />
              </figure>
              <h2 class="c-heading -sizeS -center -border">
                  <span class="en -purple">online shop</span>
                  <em>オンラインショップ</em>
                </h2>
              <div class="p-main__IntroButton-sp">
                <i class="purple">
                  <div class="arrow-wrap">
                    <svg class="arrow -whiteBrown" viewBox="0 0 23 7.206">
                      <g transform="translate(-125.801 -6.294)">
                        <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                      </g>
                    </svg>
                  </div>
                </i>
              </div>

              <div class="p-main__IntroButton-pc">
                <p href="<?php echo esc_url( home_url( ) ); ?>/about#partner" class="c-button -colorPurple -center -primary">
                    <span class="inner">詳しくはこちら</span>
                    <i class="svg-wrap -secondary">
                      <svg class="arrow -brown"  viewBox="0 0 23 7.206">
                        <g transform="translate(-125.801 -6.294)">
                          <path
                            d="M714.911,14.75l5.5,6h-22"
                            transform="translate(-572.11 -7.75)"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1"
                          />
                        </g>
                      </svg>
                    </i>
                  </p>
              </div>
            </a>
          </div> -->
          <!-- </div> -->
      </section>


      <!-- <section class="js-trigger-section011" id="sec011">
        line予約元の位置

      </section> -->


    </div>
    <!-- /.l-under__main -->
  </div>
  <!-- /.l-sub -->
  <?php get_footer();?>
