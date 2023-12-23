<?php get_header(); ?>
<main>
  <?php get_template_part("/template-parts/reserve") ?>
  <div class="l-under -main">
    <div class="l-under__sideMenu">
      <div class="p-under__sideMenu">
        <div class="p-under__sideInner">
          <ul class="p-under__sideList">
            <li class="p-under__sideItem"><a class="sec01" href="#sec01">発熱について</a></li>
            <li class="p-under__sideItem">
              <a class="sec02" href="#sec02">ご来院される方へ<br></a>
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

        <div class="p-under__topContent -tertiary">
          <div class="p-under__mainTitle">
            <h2 class="c-heading -underPrimary">
                  <span class="en">fever</span>
                  <em>発熱外来</em>
                </h2>
          </div>
        </div>
        <!-- /.p-under__topContent -->
      </div>

      <section class="p-under__bg -bg09">
        <div class="l-spacer">
          <div class="p-under__container -secondary">
            <div class="p-under__messageContent -message">
              <div>
                <em class="p-under__lead">新型コロナウイルス感染症に備えましょう。</em>
                <p class="p-under__messageParagraph">
                      新型コロナウイルス感染症の影響拡大を受け、発熱外来を開設しております。医師が必要と判断した場合、PCR検査、抗原検査を実施致します。
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
                  <em>発熱について</em>
                </h3>

            <div class="p-under__innerContent">
              <p>他の患者様と隔離するため、完全予約制となります。以下の症状がある方は必ず事前にお電話ください。</p>

              <div class="p-under__radiationBlock">
                <ul class="p-under__cardiologyTypeList">
                  <li class="p-under__cardiologyTypeItem -secondary">発熱</li>
                  <li class="p-under__cardiologyTypeItem -secondary">咳</li>
                  <li class="p-under__cardiologyTypeItem -secondary">鼻水</li>
                  <li class="p-under__cardiologyTypeItem -secondary">咽頭痛</li>
                  <li class="p-under__cardiologyTypeItem -secondary">風邪症状</li>
                  <li class="p-under__cardiologyTypeItem -secondary">倦怠感</li>
                  <li class="p-under__cardiologyTypeItem -secondary">下痢</li>
                  <li class="p-under__cardiologyTypeItem -secondary">味覚障害</li>
                </ul>
              </div>

              <div class="p-under__innerContent">
                <div class="p-under__flowBlockEnd -secondary -tel -line">
                  <h4>
                        <span>発熱のご予約&middot;ご相談はこちらから</span>
                        <a class="number" href="tel:0566-91-5810">0566-91-5810</a>
                      </h4>
                  <p>
                        直接来院された場合、屋外でお待ちいただくか、あるいは受診ができない場合がございます。<br
                          class="pc-hide"
                        />
                        また、ご予約いただいた場合も待ち時間が発生する場合がございますので、予めご了承ください。<br>
                        ※インターネット予約は利用できません。
                      </p>
                </div>
              </div>
              <!--
                  <p class="p-under__smokingText">
                    今までタバコを吸っていた方が禁煙すると、これらの病気で死亡するリスクは年々少なくなります。<br>ご家族や周りの方も間接的なタバコの煙を吸わなくてもよくなり、病気や不快な思いから遠ざかることができます。今までタバコに使っていたお金を貯金に回せば家計は大いに助かるでしょう。
                  </p> -->
            </div>
          </div>
        </div>
      </section>

      <section class="js-trigger-section02" id="sec02">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>ご来院される方へ</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="p-under__radiationBlock">
                <ul>
                  <li>&middot;必ず保険証をご持参ください。</li>
                  <li>&middot;必ず不織布マスクを着用してのご来院をお願い致します。</li>
                  <li>&middot;トイレはご自宅でお済ませになってご来院ください。</li>
                  <li>&middot;公共交通機関を利用せず、徒歩、自転車、自家用車にてご来院ください。</li>
                  <li>
                    &middot;可能であれば<a class="download" href="<?php echo esc_url(get_theme_file_uri()); ?>/assets/pdf/初診問診票.pdf" download>問診票をダウンロード</a>の上、事前に記入してお持ちください。
                  </li>
                </ul>

                <div class="p-under__feverInnerBlock">
                  <h4 class="c-heading -sizeS">発熱外来受診の流れ</h4>
                </div>

                <div class="p-under__flowContent -fever">
                  <ol class="p-under__flowList">
                    <li class="p-under__flowItem -no16">
                      <dl>
                        <dt>電話予約</dt>
                        <dd>
                          まず当クリニックにお電話いただき、症状をお聞かせください。<a class="tel" href="tel:0566-91-5810">（0566-91-5810）</a>当クリニックにて対応可能であれば、ご来院いただく時間や発熱外来専用の電話番号をお伝え致します。
                        </dd>
                      </dl>
                    </li>

                    <li class="p-under__flowItem -no15">
                      <dl>
                        <dt>ご来院</dt>
                        <dd>
                          ご到着されましたら、院内に入る前にお伝えした発熱外来専用の電話番号にお電話ください。その後はスタッフの指示に従ってください。
                        </dd>
                      </dl>
                    </li>
                  </ol>
                </div>

                <!-- <div class="p-under__innerContent">
                  <div class="p-under__flowBlockEnd -secondary">
                    <h4 class="c-heading -sizeS">費用について</h4>
                    <p class="p-under__cardiologyTextSub -border">
                          コロナウイルスPCR検査や抗原検査は公費での負担（自己負担額ゼロ）となります。<br>それ以外の初診料等の費用は保険診療となり、患者様負担となります。
                        </p>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.l-under__main -->
  </div>
  <!-- /.l-sub -->
  <?php get_footer();?>
