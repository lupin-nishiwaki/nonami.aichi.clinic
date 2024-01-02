<?php
/**
 * Template Name: 美容案内
 */

get_header();
?>

<div id="page_beauty">
  <div class="columnSeparate">
    <!-- .sideContents -->
    <div class="sideContents">
      <ul class="lonav">
        <li class="js_lonav_current"><a href="#news">お知らせ</a></li>
        <li class="js_lonav_current"><a href="#menu">メニュー</a></li>
        <li class="under js_lonav_current"><a href="#menu_lazer">レーザートリートメント</a></li>
        <li class="under js_lonav_current"><a href="#menu_hydra">ハイドラブースター</a></li>
        <li class="under js_lonav_current"><a href="#menu_removal">脱毛</a></li>
        <li class="under js_lonav_current"><a href="#menu_hifu">HIFU</a></li>
        <li class="under js_lonav_current"><a href="#menu_handbane">ハンドベイン</a></li>
        <li class="under js_lonav_current"><a href="#menu_drip">美容点滴</a></li>
        <li class="js_lonav_current"><a href="#flow">ご予約・ご来院時の流れ</a></li>
        <li class="js_lonav_current"><a href="#line">LINEでご予約</a></li>
      </ul>
    </div>
    <!-- /.sideContents -->

    <!-- .mainContents -->
    <div class="mainContents">
      <!-- #pageTtl -->
      <section id="pageTtl">
        <div class="top">
          <div class="m_box_fixed -under">
            <h1 class="-purple">
              <span class="en">beauty</span>
              美容案内
            </h1>

            <ul class="lonav">
              <li><a href="#news">お知らせ</a></li>
              <li class="under">
                <a href="#menu">メニュー</a>
                <ul>
                  <li class="js_lonav_current"><a href="#menu_lazer">レーザートリートメント</a></li>
                  <li class="js_lonav_current"><a href="#menu_hydra">ハイドラブースター</a></li>
                  <li class="js_lonav_current"><a href="#menu_removal">脱毛</a></li>
                  <li class="js_lonav_current"><a href="#menu_hifu">HIFU</a></li>
                  <li class="js_lonav_current"><a href="#menu_handbane">ハンドベイン</a></li>
                  <li class="js_lonav_current"><a href="#menu_drip">美容点滴</a></li>
                </ul>
              </li>
              <li><a href="#flow">ご予約・ご来院時の流れ</a></li>
              <li><a href="#line">LINEでご予約</a></li>
            </ul>
          </div>
        </div>

        <picture class="img">
          <img src="/asset/img/beauty/pageTtl.webp" alt="美容案内" width="1920" height="610">
        </picture>
      </section>
      <!-- /#pageTtl -->

      <!-- #overview -->
      <section id="overview">
        <div class="m_box_fixed -under">
          <h2 class="m_txt_catch">
            美容に関するお悩み、<br class="pc-hide">是非お気軽に<br class="pc-hide">ご相談ください。
          </h2>

          <p class="message">
            当クリニックでは、美容メニューのカウンセリング・施術も行っております。一般診療と併せて、ぜひご利用ください。
          </p>
        </div>
      </section>
      <!-- /#overview -->

      <!-- #news -->
      <section id="news" class="js_lonav_current_target">
        <div class="wrapper m_box_fixed -under">
          <h2 class="m_txt_ttl">
            <em class="ja">お知らせ</em>
          </h2>

          <div class="newsBox">
            <ul class="m_list_news -purple">

              <?php
              $args = array(
                'post_type' => 'beautynews',
                'posts_per_page' => 3
              );
              ?>
              <?php $the_query = new WP_Query( $args ); ?>
              <?php if( $the_query->have_posts() ): ?>
                <?php while( $the_query->have_posts() ): ?>
                  <?php $the_query->the_post(); ?>

                  <li>
                    <a href="<?php the_permalink(); ?>">
                      <div class="day"><?php the_time( 'Y.m.d' ); ?></div>
                      <div class="ttl"><?php the_title(); ?></div>
                      <i></i>
                    </a>
                  </li>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              <?php endif; ?>

            </ul>

            <p class="btn">
              <a href="/beautynews/">一覧を見る</a>
            </p>
          </div>
        </div>
      </section>
      <!-- /#news -->

      <!-- #menu -->
      <section id="menu" class="js_lonav_current_target">
        <div class="m_box_fixed -under">
          <h2 class="m_txt_ttl">
            <em class="ja">メニュー</em>
          </h2>

          <!-- #menu_lazer -->
          <div id="menu_lazer" class="menu js_lonav_current_target lazer">
            <h3 class="m_txt_hd_group">レーザー・トリートメント</h3>

            <div class="box">
              <picture class="imgBox">
                <img loading="lazy" src="/asset/img/beauty/menu_lazer01.webp" alt="レーザーフェイシャル" width="620" height="620">
              </picture>

              <div class="txtBox">
                <div class="item">
                  <h4 class="m_txt_hd_underline">レーザーフェイシャル<span>（顔ジェントルレーズレーザー脱毛）</span></h4>
                  <p class="desc">
                    医療脱毛にも使う機械で顔全体に低出力のレーザーを照射することで、皮膚の若返りをもたらします。<br>
                    シミ、そばかす、くすみの改善、毛穴の開き、エイジングケア、産毛の脱毛、 ニキビの改善・予防に効果があります。<br>
                    冷却ガスを使用するため、痛みを抑えて治療できます。<br>
                    当院は日本医学脱毛学会認定施設です。レーザー安全講習を受けた看護師が施術いたします。
                  </p>

                  <div class="price">
                    <h5>メニュー・料金</h5>
                    <dl><dt>レーザーフェイシャル（30分）</dt><dd>¥9,800</dd></dl>
                  </div>

                  <div class="risk">
                    <h5>リスク・副作用</h5>
                    <p>発赤・火傷・色素沈着・白斑・肝斑増悪・潜在性肝斑惹起等が生じる可能性があります。</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="box">
              <picture class="imgBox">
                <img loading="lazy" src="/asset/img/beauty/menu_lazer02.webp" alt="エンビロントリートメント" width="620" height="620">
              </picture>

              <div class="txtBox">
                <div class="item">
                  <h4 class="m_txt_hd_underline">エンビロントリートメント</h4>
                  <p class="desc">
                    一人ひとりの肌悩みやご希望に合わせたスキンケア製品を使用したトリートメントコースです。カウンセリングの上、メニューをご提供いたします。<br>
                    当クリニックでは、エンビロンのプライマリー資格取得者2名、アドバンスディプロマ取得者1名がカウンセリング及び施術を行っております。カウンセリング予約、メニュー詳細はお気軽にご相談ください。
                  </p>

                  <div class="price">
                    <h5>メニュー・料金</h5>
                    <dl><dt>エッセンシャルトリートメント各種</dt><dd>¥6,000〜¥10,400</dd></dl>
                    <dl><dt>フォーカスオントリートメント各種</dt><dd>¥6,000</dd></dl>
                    <dl><dt>AHAトリートメント各種</dt><dd>¥13,700</dd></dl>
                  </div>
                </div>

                <div class="item">
                  <h4 class="m_txt_hd_underline">トリートメント</h4>
                  <div class="price">
                    <h5>メニュー・料金</h5>
                    <dl><dt>レナトスTa+<br class="pc-hide">レナトスaプラストリートメント（60分）</dt><dd>¥6,000</dd></dl>
                    <dl><dt>プラセンタ追加</dt><dd>¥1,200</dd></dl>
                    <dl><dt>トラネキサム酸追加</dt><dd>¥1,200</dd></dl>
                  </div>
                </div>

                <div class="item">
                  <h4 class="m_txt_hd_underline">レーザーフェイシャル&<br class="pc-hide">エンビロントリートメント</h4>
                  <p class="desc">トリートメントの内容は、カウンセリングの上、ご本人のご希望も踏まえて今の肌状態にあったトリートメントをご提供いたします。</p>
                  <div class="price">
                    <h5>メニュー・料金</h5>
                    <dl><dt>レーザー&エッセンシャルクールビタミン<br class="pc-hide">コース（45分）</dt><dd>¥13,700</dd></dl>
                    <p class="notes">肌が敏感に傾きがちな方に。エンビロン独自のアルジネートマスクを乗せることで肌をクールダウンし、保湿効果でしっとり仕上げます。</p>

                    <dl><dt>レーザー& エッセンシャルエイジングケア<br class="pc-hide">コース（60分）</dt><dd>¥15,900</dd></dl>
                    <p class="notes">肌全体のエイジングケアを行いたい方に。みなぎるようなハリと弾力のある若々しい印象の肌に導きます。</p>

                    <dl><dt>レーザー& エッセンシャルエヴァネッセント<br class="pc-hide">コース（60分）</dt><dd>¥15,900</dd></dl>
                    <p class="notes">肌全体のくすみや色ムラが気になる方に。肌を均一にトーンアップし、かつてないほどの輝きを放つ透明感のある肌へ導きます。</p>

                    <dl><dt>レーザー& エッセンシャルモイスチャーブースト<br class="pc-hide">コース（60分）</dt><dd>¥15,900</dd></dl>
                    <p class="notes">うるおい不足による乾燥やハリの低下が気になる方に。みずみずしいうるおいとハリを生み出します。</p>
                  </div>
                </div>

                <div class="item">
                  <h4 class="m_txt_hd_underline">レーザーフェイシャル&<br class="pc-hide">トリートメント</h4>
                  <div class="price">
                    <h5>メニュー・料金</h5>
                    <dl><dt>レーザー&レナトスTa+<br class="pc-hide">レナトスaプラストリートメント（60分）</dt><dd>¥14,800</dd></dl>
                    <p class="notes">肝斑に効果のあるトラネキサム酸と、ビタミン配合美容液を導入する事で、シミ・しわ・くすみにアプローチします。</p>
                  </div>

                  <div class="risk">
                    <h5>リスク・副作用</h5>
                    <p>赤み・ほてり・腫れ痒み・乾燥・ニキビや吹き出物の一時的な活発化等を生じる可能性があります。</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /#menu_lazer -->

          <!-- #menu_hydra -->
          <div id="menu_hydra" class="menu js_lonav_current_target hydra">
            <h3 class="m_txt_hd_group">ハイドラブースター</h3>

            <div class="box">
              <picture class="imgBox">
                <img loading="lazy" src="/asset/img/beauty/menu_hydra.webp" alt="ハイドラブースター" width="620" height="620">
              </picture>

              <div class="txtBox">
                <div class="item">
                  <p class="desc">
                    水流を利用して美容成分を浸透させながら行う、肌に負担をかけない新しいピーリングです。余分な角質を取り除き、毛穴の吸引洗浄とともに美容成分を導入する事で、毛穴の黒ずみ・開き、ニキビ、ニキビ跡、くすみ、ざらつきなどを改善します。レーザーフェイシャルやトリートメントと組み合わせる事により、更なる美肌効果が期待できます。
                  </p>
                </div>

                <div class="item">
                  <h4 class="m_txt_hd_underline">ピーリング、毛穴吸引</h4>
                  <p class="desc">
                    水流と特殊なダイヤモンドでコーティーングされた器具を使用し、余分な角質を素早く除去。お肌にあった美容成分（乳酸、サリチル酸など）を肌へ効果的に浸透させます。
                  </p>
                </div>

                <div class="item">
                  <h4 class="m_txt_hd_underline">ニードル、美容成分導入</h4>
                  <p class="desc">
                    ニードルのついた器具で肌に小さな穴を開けながら美容成分（ヒアルロン酸や抗酸化成分）を肌の深層まで浸透させ、コラーゲンやエラスチンの再生を促します。
                  </p>

                  <div class="price">
                    <h5>メニュー・料金</h5>
                    <dl><dt>【Tゾーン】毛穴吸引+<br class="pc-hide">ピーリングとニードル+美容液導入（60分）</dt><dd>¥11,000</dd></dl>
                    <dl><dt>【全顔】毛穴吸引+<br class="pc-hide">ピーリングとニードル+美容液導入（60分）</dt><dd>¥14,000</dd></dl>
                    <dl><dt>【背中】毛穴吸引+<br class="pc-hide">ピーリング+クールビタミン（90分）</dt><dd>¥20,000</dd></dl>

                    <h6>レーザーコースに追加</h6>
                    <dl><dt>毛穴吸引+ピーリング - Tゾーン（30分）</dt><dd>¥5,000</dd></dl>
                    <dl><dt>毛穴吸引+ピーリング - 全顔（30分）</dt><dd>¥8,000</dd></dl>

                    <h6>トリートメントに追加</h6>
                    <dl><dt>毛穴吸引+<br class="pc-hide">ピーリング - Tゾーン（30分）</dt><dd>¥5,000</dd></dl>
                    <dl><dt>毛穴吸引+ピーリング+ニードル+<br class="pc-hide">美容液導入 - Tゾーン（60分）</dt><dd>¥11,000</dd></dl>
                    <dl><dt>毛穴吸引+<br class="pc-hide">ピーリング - 全顔（30分）</dt><dd>¥8,000</dd></dl>
                    <dl><dt>毛穴吸引+ピーリングとニードル+<br class="pc-hide">美容液導入 - 全顔 （60分）</dt><dd>¥13,000</dd></dl>
                  </div>

                  <div class="risk">
                    <h5>施術のリスク</h5>
                    <p>
                      治療部位に軽度の赤み、痛み、擦過傷、皮剥け、あざまたは浮腫、点状出血がみられる場合があります。<br>
                      金属アレルギーのある方は、ニードルはできない場合があります。
                    </p>
                  </div>

                  <div class="machine">
                    <h5>使用する医療機器について</h5>
                    <p>
                      医薬品医療機器等法上の承認 : 未承認<br>
                      入手経路 株式会社 CLASSYS JAPAN<br>
                      同一の成分や性能を有する他の国内承認医薬品等の有無 無し<br>
                      諸外国における安全性等に係る情報 欧州CE承認
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /#menu_hydra -->

          <!-- #menu_removal -->
          <div id="menu_removal" class="menu js_lonav_current_target removal">
            <h3 class="m_txt_hd_group">脱毛</h3>

            <div class="box">
              <picture class="imgBox">
                <img loading="lazy" src="/asset/img/beauty/menu_removal01.webp" alt="医療レーザー脱毛" width="620" height="620">
              </picture>

              <div class="txtBox">
                <div class="item">
                  <h4 class="m_txt_hd_underline">医療レーザー脱毛</h4>
                  <p class="desc">
                    当クリニックでは、お客様の肌質・毛質・ご要望、施術部位にあわせて下記の2種類の脱毛器を使用して施術いたします。<br>
                    当クリニックは、日本医学脱毛学会認定施設です。レーザー安全講習を受けた看護師が施術いたします。
                  </p>
                </div>

                <div class="item">
                  <h4 class="m_txt_hd_underline">熱破壊式脱毛<span>（ジェントルレーズプロ）</span></h4>
                  <p class="desc">
                    厚生労働省認可の脱毛医療機器で、より安全・効果的に治療ができます。メラニン色素に反応した熱作用で毛根と毛包を破壊することで毛を細くし、本数を減らしていきます。レーザー照射の直前に肌をガスで冷却することで、「火傷」や「熱傷」のリスクを大幅に軽減できます。
                  </p>
                </div>
              </div>
            </div>

            <div class="box">
              <picture class="imgBox">
                <img loading="lazy" src="/asset/img/beauty/menu_removal02.webp" alt="蓄熱式脱毛（レーザーマック）" width="620" height="620">
              </picture>

              <div class="txtBox">
                <div class="item">
                  <h4 class="m_txt_hd_underline">蓄熱式脱毛<span>（レーザーマック）</span></h4>
                  <p class="desc">
                    バルジ領域という毛根（毛母細胞）への栄養源の元を破壊する為、発毛を抑えます。熱温度が約60度で熱破壊式（通常のレーザー）と比べて約40度低く、更に最新の冷却システムが付いている為、照射時の痛みが少ないです。施術時間も短いことが特徴です。
                  </p>

                  <div class="price">
                    <h5>料金</h5>
                    <dl><dt>ビキニライン</dt><dd>¥6,500〜¥19,500</dd></dl>
                    <dl><dt>体幹</dt><dd>¥4,700〜¥45,000</dd></dl>
                    <dl><dt>腕・足</dt><dd>¥2,700〜¥50,000</dd></dl>
                    <dl><dt>顔面</dt><dd>¥2,500〜¥9,800</dd></dl>
                    <dl><dt>両脇</dt><dd>¥5,000</dd></dl>
                    <dl><dt>ひげ（男性）</dt><dd>¥3,000〜¥14,500</dd></dl>
                  </div>

                  <div class="machine">
                    <h5>使用する医療機器について</h5>
                    <p>
                      医薬品医療機器等法上の承認 : 未承認<br>
                      入手経路 : 株式会社 INFIX<br>
                      同一の成分や性能を有する他の国内承認医薬品等の有無 : 無し<br>
                      諸外国における安全性等に関わる情報 : アメリカFDA認証済み 医療用EC認証（ドイツ、TUV、SUD）<br>
                      ISO1313485、オーストラリア（TGA）
                    </p>
                  </div>

                  <div class="caution">
                    <dl class="js_accordion">
                      <dt>医療脱毛前の注意点</dt>
                      <dd>
                        <ul class="m_list_dot">
                          <li>
                            毛抜きでの処理は照射1ヶ月前からおやめいただき、剃る方法に変えてください。<br>
                            （毛を抜くと、レーザーが毛根に反応しなくなり、脱毛効果が落ちます。）
                          </li>

                          <li>
                            施術前日に照射部位を必ず剃毛してきてください。VIO脱毛の場合は、剃りにくい場所のため、施術前に確認して剃り残し場所を剃毛させてもらいます。<br>
                            当日は、シェーバーをご持参ください。<br>
                            （来院時、剃っていらっしゃらない場合は別途剃毛料金を頂戴する場合があります）
                          </li>

                          <li>
                            日焼けはしないようにしてください。強い日焼けで、皮膚のメラニン色素が増えると脱毛効果が落ち、やけどのリスクが高まります。<br>
                            特に熱破壊式脱毛の場合は、日焼けの程度によってはリスクが高いため、当日施術をお断りすることもあります。<br>
                            蓄熱式脱毛は、濃いスキンタイプの方でも比較的安全に治療を行うことができますが、炎症が強い場合は施術できません。脱毛前に日焼けされた場合は、一度ご相談ください。
                          </li>
                        </ul>
                      </dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>

            <div class="box">
              <picture class="imgBox">
                <img loading="lazy" src="/asset/img/beauty/menu_removal03.webp" alt="針脱毛" width="620" height="620">
              </picture>

              <div class="txtBox">
                <div class="item">
                  <h4 class="m_txt_hd_underline">針脱毛</h4>
                  <p class="desc">
                    毛穴の一つ一つに細い絶縁針を刺し込み、微弱な電流を流すことで毛根を破壊して脱毛していく方法です。<br>
                    周辺の皮膚を傷めることなく、毛根部を確実に壊し、完全な永久脱毛を実現することができます。<br>
                    肌質や毛の色を選ばず、レーザーでは不可能な部位や細かい毛も確実に脱毛可能です。
                  </p>

                  <div class="price">
                    <h5>料金</h5>
                    <dl><dt>カウンセリング・血液検査・絶縁針費</dt><dd>¥11,220</dd></dl>
                    <p class="notes">※毛を伸ばしていただく必要があるため、初回は施術はありません。</p>

                    <dl><dt>施術30分</dt><dd>¥7,500</dd></dl>
                    <dl><dt>施術1時間</dt><dd>¥15,000</dd></dl>
                  </div>

                  <div class="risk">
                    <h5>リスク・副作用</h5>
                    <p>発赤、熱感、痒み、痛み、乾燥が生じます。これらは1～2週間程続くことがあります。稀に、ざ瘡の悪化、コメド、毛嚢炎、埋没毛、膿疱、ほくろ・しみの部分が薄くなる・消える一時的に濃くなる、隆、表皮剥離、水疱形成、色素沈着や色素、内出血、腫脹、硬毛化が生じることがあります。</p>
                  </div>

                  <div class="machine">
                    <h5>使用する機器について</h5>
                    <p>
                      入手経路：国内生産及び販売<br>
                      ニドー工業株式会社（第二種医療機器製造販売業者 許可番号45B2X10001）
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /#menu_removal -->

          <!-- #menu_hifu -->
          <div id="menu_hifu" class="menu js_lonav_current_target hifu">
            <h3 class="m_txt_hd_group">HIFU<span>（ソノクイーン）</span></h3>

            <div class="box">
              <picture class="imgBox">
                <img loading="lazy" src="/asset/img/beauty/menu_hifu.webp" alt="HIFU（ソノクイーン）" width="620" height="620">
              </picture>

              <div class="txtBox">
                <div class="item">
                  <p class="desc">
                    HIFU（ハイフ）とは、強力な超音波エネルギーを照射することで皮膚表面を傷つけずに、しわ・たるみ・ほうれい線を改善させる、今人気の切らないリフトアップです。メスや注射が不要で、手軽にシワやたるみの予防・治療ができます。
                  </p>

                  <div class="price">
                    <h5>料金</h5>
                    <dl><dt>全顔（540shot）</dt><dd>¥78,000</dd></dl>
                    <dl><dt>顔下半分（300shot）</dt><dd>¥46,000</dd></dl>
                    <dl><dt>目尻・目下（240shot）</dt><dd>¥40,000</dd></dl>
                    <dl><dt>頬（240shot）</dt><dd>¥30,000</dd></dl>
                    <dl><dt>顎下（60shot）</dt><dd>¥19,000</dd></dl>
                  </div>

                  <div class="risk">
                    <h5>施術のリスク</h5>
                    <p>
                      持病、既往歴、アレルギー、内服薬、外用薬、妊娠、出産、その他お客様のお肌の状況によっては医師の判断によりお断りすることがございます。<br>
                      痛み、発赤、熱感、腫れ、打撲痛のような圧痛、一時的な感覚の変化、軽い内出血のような症状が生じる場合があります。<br>
                      効果の現れ方には個人差があり、稀に1回の施術では希望する改善が見られない場合があります。
                    </p>
                  </div>

                  <div class="machine">
                    <h5>使用する医療機器について</h5>
                    <p>
                      医薬品医療機器等法上の承認: 未承認<br>
                      入手経路: 合同会社オール<br>
                      同一の成分や性能を有する他の国内承認医薬品等の有無 : 無し<br>
                      諸外国における安全性等に係る情報 : ヨーロッパCEマーク取得。 韓国にて承認済み。
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /#menu_hifu -->

          <!-- #menu_handbane -->
          <div id="menu_handbane" class="menu js_lonav_current_target handbane">
            <h3 class="m_txt_hd_group">ハンドベイン</h3>

            <div class="box">
              <picture class="imgBox">
                <img loading="lazy" src="/asset/img/beauty/menu_handbane.webp" alt="ハンドベイン" width="620" height="620">
              </picture>

              <div class="txtBox">
                <div class="item">
                  <p class="desc">
                    手の甲や腕の浮き出た血管や手の若返りにおすすめの治療です。目的の血管（静脈）にカテーテルを挿入し、周囲を麻酔した後、レーザー照射します。
                  </p>

                  <div class="surgery">
                    <h5>手術について</h5>
                    <dl>
                      <dt>時間：</dt>
                      <dd>日帰り、30分～60分程度</dd>
                    </dl>
                    <dl>
                      <dt>術後：</dt>
                      <dd>
                        防水手袋着用で当日家事、入浴可能。専用のグローブ、または包帯で圧迫して帰宅します。<br>
                        術後1週間程度は内出血、腫れがありますが、徐々に改善します。照射した血管は1〜3ヶ月で目立たなくなります。橈側（拇指側）を照射した場合、軽度の痺れが残ることが稀にあります。
                      </dd>
                    </dl>
                  </div>

                  <div class="price">
                    <h5>料金</h5>
                    <dl><dt>片腕</dt><dd>¥150,000</dd></dl>
                    <dl><dt>両腕</dt><dd>¥250,000</dd></dl>
                    <dl><dt>硬化療法</dt><dd>¥20,000</dd></dl>
                  </div>

                  <div class="beforeAfter">
                    <div>
                      <picture><img loading="lazy" src="/asset/img/beauty/menu_handbane_before.webp" alt="手術前" width="560" height="360"></picture>
                      <p>手術前</p>
                    </div>

                    <div>
                      <picture><img loading="lazy" src="/asset/img/beauty/menu_handbane_after.webp" alt="手術後" width="560" height="360"></picture>
                      <p>手術後</p>
                    </div>
                  </div>

                  <div class="remarks">
                    <p>
                      各術式初回施術施行後3ヶ月であれば、同一術式につき追加治療は無料となります。<br>
                      上記費用以外に術後の圧着着衣費用 ¥4,950〜¥11,000(片腕) が別途必要です。<br>
                      通院期間中は、再診療 ¥2,000 が別途必要となります。
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /#menu_handbane -->

          <!-- #menu_drip -->
          <div id="menu_drip" class="menu js_lonav_current_target drip">
            <h3 class="m_txt_hd_group">美容点滴</h3>

            <div class="box">
              <picture class="imgBox">
                <img loading="lazy" src="/asset/img/beauty/menu_drip.webp" alt="美容点滴" width="620" height="620">
              </picture>

              <div class="txtBox">
                <div class="item">
                  <p class="desc">
                    日頃の疲れや二日酔いからの回復、美肌作りに必要な栄養素を、高濃度のまま直接体内に取り込むことで身体の隅々まで美容成分を行き渡らせることができ、より早くより高い効果が期待できる治療です。<br>
                    予約は必要ありませんので、お気軽にお尋ねください。
                  </p>

                  <div class="price">
                    <h5>メニュー・料金</h5>
                    <dl><dt>プラセンタ注射</dt><dd>¥2,200</dd></dl>
                    <p class="notes">アミノ酸・ビタミン・ミネラルなどを豊富に含んているため、細胞の新陳代謝を高め、肝機能の回復や皮膚の血行を良くし、お肌にハリ・つやを出す効果があります。</p>

                    <dl><dt>にんにく注射</dt><dd>¥2,200</dd></dl>
                    <p class="notes">疲労回復に必要なビタミンB群を豊富に含むため、日頃の疲れやストレス解消におすすめです。</p>

                    <dl><dt>肩こり・疲労回復点滴</dt><dd>¥4,300</dd></dl>
                    <p class="notes">
                      ビタミンB1、B6、B12や総合ビタミン、アミノ酸配合のため、全身の倦怠感や肉体疲労、肩こりなどの改善に効果的です。<br>
                      免疫力アップ・風邪予防にも効果が期待できます。
                    </p>

                    <dl><dt>肝機能回復・二日酔い点滴</dt><dd>¥4,300</dd></dl>
                    <p class="notes">
                      肝機能の保護や強化を行い、アルコール分解を助ける成分をたっぷり配合。肝機能、代謝障害、中毒症状を改善する効果があります。<br>
                      二日酔い症状の改善・疲労・倦怠感の回復を促します。
                    </p>

                    <dl><dt>アンチエイジングスーパービタミン点滴</dt><dd>¥6,500</dd></dl>
                    <p class="notes">
                      4種のビタミンB群、強力な抗酸化作用で肌の新陳代謝を促進する成分、美白成分、アミノ酸等を含んだスペシャルなビタミン配合点滴です。<br>
                      全身の美肌、若々しさを保ちたい方におすすめです。
                    </p>

                    <dl><dt>白玉点滴 レギュラー</dt><dd>¥4,700</dd></dl>

                    <dl><dt>白玉点滴 高濃度</dt><dd>¥8,000</dd></dl>
                    <p class="notes">
                      強力な抗酸化作用やメラニン生成抑制作用があるグルタチオンを主成分とし、美白、シミやそばかすの改善・予防などの美肌・エイジングケア効果があります。<br>
                      肝臓の解毒作用もあり、二日酔いや慢性疲労などにも効果的です。
                    </p>
                  </div>

                  <div class="risk">
                    <h5>リスク・副作用</h5>
                    <p>発赤、腫脹、硬結、動悸、痺れ、悪寒、めまい、悪心、肝機能障害、アレルギー反応の可能性があります。治療効果を実感いただくのに複数回生じる可能性もございます。</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /#menu_drip -->
        </div>
      </section>
      <!-- /#menu -->

      <!-- #flow -->
      <section id="flow" class="js_lonav_current_target">
        <div class="m_box_fixed -under">
          <h2 class="m_txt_ttl">
            <em class="ja">ご予約・ご来院時の流れ</em>
          </h2>

          <div class="tab m_box_tab -purple js_tab">
            <div class="tabBtn js_tab_btn">
              <div class="is-tab">初診の場合</div>
              <div>再診の場合</div>
            </div>

            <div class="tabContent js_tab_content">
              <!-- 初診の場合 -->
              <div class="is-tab">
                <ol class="flow m_list_flow -purple">
                  <li>
                    <picture class="icon"><img loading="lazy" src="/asset/img/beauty/flow_beginner01.svg" alt="ご予約" width="92" height="92"></picture>
                    <h4 class="name">ご予約</h4>
                    <p class="txt">
                      事前にクリニックにお電話もしくはLINEでご予約をお取りください。施術内容にあわせて、当日の注意事項など説明させていただきます。<br>
                      ※当日、お客様都合のキャンセルはキャンセル料を頂いております。<br>
                      キャンセルは前日までに、LINEまたはお電話でお願いします。ご予約変更の場合はお電話、LINE、どちらでも可能です。
                    </p>
                  </li>

                  <li>
                    <picture class="icon"><img loading="lazy" src="/asset/img/beauty/flow_beginner02.svg" alt="ご来院" width="92" height="92"></picture>
                    <h4 class="name">ご来院</h4>
                    <p class="txt">ご予約の日時の30分前にご来院ください。</p>
                  </li>

                  <li>
                    <picture class="icon"><img loading="lazy" src="/asset/img/beauty/flow_beginner03.svg" alt="受付" width="92" height="92"></picture>
                    <h4 class="name">受付</h4>
                    <p class="txt">受付後、施術内容にあわせた問診票などをご記入いただきます。</p>
                  </li>

                  <li>
                    <picture class="icon"><img loading="lazy" src="/asset/img/beauty/flow_beginner04.svg" alt="診察" width="92" height="92"></picture>
                    <h4 class="name">診察</h4>
                    <p class="txt">医師の診察を受けていただいた後、美容のお部屋、もしくはロビーにご案内いたします。</p>
                  </li>

                  <li>
                    <picture class="icon"><img loading="lazy" src="/asset/img/beauty/flow_beginner05.svg" alt="施術内容の説明" width="92" height="92"></picture>
                    <h4 class="name">施術内容の説明</h4>
                    <p class="txt">ご予約のお時間が来ましたら、美容のお部屋にて看護師より施術内容の詳しい説明をさせていただきます。</p>
                  </li>

                  <li>
                    <picture class="icon"><img loading="lazy" src="/asset/img/beauty/flow_beginner06.svg" alt="施術" width="92" height="92"></picture>
                    <h4 class="name">施術</h4>
                    <p class="txt">説明後、ご納得いただいた場合、洗顔など施術の準備をして頂き、施術となります。</p>
                  </li>

                  <li>
                    <picture class="icon"><img loading="lazy" src="/asset/img/beauty/flow_beginner07.svg" alt="会計・次回予約" width="92" height="92"></picture>
                    <h4 class="name">会計・次回予約</h4>
                    <p class="txt">施術後、必要に応じて次回のご予約をとらせていただき、受付で会計となります。</p>
                  </li>
                </ol>
              </div>
              <!-- /初診の場合 -->

              <!-- 再診の場合 -->
              <div>
                <ol class="flow m_list_flow -purple">
                  <li>
                    <picture class="icon"><img loading="lazy" src="/asset/img/beauty/flow_again01.svg" alt="ご来院" width="92" height="92"></picture>
                    <h4 class="name">ご来院</h4>
                    <p class="txt">
                      ご予約15分前までには受付にお越しください。<br>
                      ※予約時間を5分ほど過ぎてしまいますと、当日施術することが困難になる場合がございますのでご了承下さい。その場合、申し訳ございませんが、受付で再度ご予約を取り直していただく事になります。
                    </p>
                  </li>

                  <li>
                    <picture class="icon"><img loading="lazy" src="/asset/img/beauty/flow_again02.svg" alt="受付" width="92" height="92"></picture>
                    <h4 class="name">受付</h4>
                    <p class="txt">前回お渡しした予約カードを受付にお出しください。美容のお部屋もしくはロビーにご案内させていただきます。</p>
                  </li>

                  <li>
                    <picture class="icon"><img loading="lazy" src="/asset/img/beauty/flow_again03.svg" alt="施術" width="92" height="92"></picture>
                    <h4 class="name">施術</h4>
                    <p class="txt">ご予約のお時間が来ましたら、美容のお部屋にて施術させていただきます。</p>
                  </li>

                  <li>
                    <picture class="icon"><img loading="lazy" src="/asset/img/beauty/flow_again04.svg" alt="会計・次回予約" width="92" height="92"></picture>
                    <h4 class="name">会計・次回予約</h4>
                    <p class="txt">施術後、必要に応じて次回のご予約をとらせていただき、受付で会計となります。</p>
                  </li>
                </ol>
              </div>
              <!-- /再診の場合 -->
            </div>
          </div>
        </div>
      </section>
      <!-- /#flow -->

      <!-- #secImg -->
      <section id="secImg" class="js_lonav_current_target">
        <picture>
          <img loading="lazy" src="/asset/img/beauty/secImg.webp" alt="診察の様子" width="1920" height="740">
        </picture>
      </section>
      <!-- /#secImg -->

      <!-- #line -->
      <section id="line" class="js_lonav_current_target">
        <div class="m_box_fixed -under">
          <h2>
            <img loading="lazy" src="/asset/img/beauty/line_hd.svg" alt="LINE" width="92" height="92">
            <span>LINEでご予約</span>
          </h2>

          <p class="m_btn_main -purple">
            <a href="https://page.line.me/954bntwp?openQrModal=true" target="_blank" rel="noopener noreferrer">
              LINEでご予約はこちら<i></i>
            </a>
          </p>
        </div>
      </section>
      <!-- /#line -->
    </div>
    <!-- /.mainContents -->
  </div>
</div>

<?php get_footer(); ?>
