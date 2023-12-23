<?php get_header(); ?>
<main>
  <?php get_template_part("/template-parts/reserve") ?>
  <div class="l-under -main">
    <div class="l-under__sideMenu">
      <div class="p-under__sideMenu">
        <div class="p-under__sideInner">
          <ul class="p-under__sideList">
            <li class="p-under__sideItem"><a class="sec01" href="#sec01">透析シャントとは</a></li>
            <li class="p-under__sideItem"><a class="sec02" href="#sec02">シャントのトラブルについて</a></li>
            <li class="p-under__sideItem"><a class="sec03" href="#sec03">当クリニックでの<br class="sp-hide">シャント治療について</a></li>
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
                  <span class="en">shunt treatment</span>
                  <em>透析シャント治療</em>
                </h2>
          </div>
        </div>
        <!-- /.p-under__topContent -->
      </div>

      <section class="p-under__bg -bg13">
        <div class="l-spacer">
          <div class="p-under__container -secondary">
            <div class="p-under__messageContent -message">
              <div>
                <em class="p-under__lead">当クリニックは、専門性の高い透析シャント治療に対応しています。</em>
                <p class="p-under__messageParagraph">
                      当クリニックでは、シャントトラブル時の手術も行っております。<br>ご紹介も受け付けておりますので、まずはお気軽にお電話にてご相談ください。
                    </p>
              </div>
            </div>
          </div>
          <!-- /.p-under__container -->
        </div>
      </section>


      <section class="l-spacer -borderTop js-trigger-section01" id="sec01">
        <div class="p-under__container -secondary">
          <div class="p-under__cardiologyContent -primary">
            <div class="p-under__cardiologyContentInner">
              <h3 class="c-heading -underSecondary">
                      <em>透析シャントとは</em>
                    </h3>

              <p class="p-under__cardiologyParagraph">
                    透析を行うために、手術で動脈と静脈をつなぎあわせてつくる血管のことです。<br>腎不全が悪化すると血液のろ過ができなくなり、老廃物が溜まってしまう為、透析器にて血液を浄化させる必要があります。（人工透析）<br>人工透析はシャントに2か所穿刺し、1分間に200mlほどの血液を透析器にて浄化し体内へ戻します。週に3～4回行う必要があり、1年(52週)で約300回穿刺されることになります。<br>その為、シャントの血管は荒廃し、徐々に狭くなったり詰まったりします。シャントが狭くなると適切な透析治療が困難になってしまうため、定期的なシャントのメンテナンスが必要となります。
                    </p>
            </div>

            <figure class="p-under__cardiologyImage -primary">
              <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/shunt/shunt-01.jpg" srcset="
                        <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/shunt/shunt-01.jpg,
                        <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/shunt/shunt-01@2x.jpg 2x
                      " alt="説明を受けている写真">
            </figure>
          </div>
        </div>
        <!-- /.p-under__container -->
      </section>


      <section class="js-trigger-section02" id="sec02">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>シャントのトラブルについて</em>
                </h3>

            <div class="p-under__innerContent">
              <div class="p-under__shuntContent">
                <div>
                  <div class="p-under__headingWrap -primary">
                    <h4 class="c-heading -sizeS">シャント狭窄&middot;閉塞</h4>
                  </div>
                  <p class="p-under__cardiologyTextSub -border">
                    シャントの血流不良、静脈圧の上昇、シャント肢の腫脹が起こった場合、狭窄を疑いシャントエコーまたはシャント造影を行います。<br>狭窄&middot;閉塞が認められた場合はシャントPTAもしくは手術が必要となります。
                  </p>
                </div>

                <div>
                  <div class="p-under__headingWrap -primary">
                    <h4 class="c-heading -sizeS">シャント感染</h4>
                  </div>
                  <p class="p-under__cardiologyTextSub -border">
                    シャントが細菌感染を起こし、痛みや腫れが生じます。早期であれば抗生物質の投与で治ることがありますが、放置しておくと敗血症になり生命に危険が及ぶことがあります。
                  </p>
                </div>

                <div>
                  <div class="p-under__headingWrap -primary">
                    <h4 class="c-heading -sizeS">シャント仮性瘤</h4>
                  </div>
                  <p class="p-under__cardiologyTextSub -border">
                    シャントに瘤が形成された状態です。ある程度の大きさなら放っておいても問題ありませんが、大きくなったり、変色や痛みが伴う場合は破裂する可能性がある為、治療が必要です。
                  </p>
                </div>

                <div>
                  <div class="p-under__headingWrap -primary">
                    <h4 class="c-heading -sizeS">静脈高血圧</h4>
                  </div>
                  <p class="p-under__cardiologyTextSub -border">
                    シャントが狭窄&middot;閉塞すると逆流し、うっ血を起こします。
                  </p>
                </div>

                <div>
                  <div class="p-under__headingWrap -primary">
                    <h4 class="c-heading -sizeS">スチール症候群</h4>
                  </div>
                  <p class="p-under__cardiologyTextSub -border">
                    シャントを作った側の手の血圧が低下し、痛みや腫れを伴います。悪化すると指が壊死する恐れがあります。
                  </p>
                </div>
              </div>


              <div class="p-under__innerContent">
                <div class="p-under__flowBlockEnd -secondary -tel -line">
                  <h4>
                  <span class="text">これらのトラブルが起こった場合、まずはお電話にてご相談ください。</span>
                    <span class="text-telWrap">
                      <span class="tel-text">医療機関専用TEL</span> <a class="number -secondary" href="tel:0566-91-0463">0566-91-0463</a>
                    </span>
                  </h4>
                  <p class="text02">
                    紹介状がある場合は、当日必ずお持ちください。<br>
                    当日、エコー検査またはシャント造影検査を行います。検査結果をもとに適切な治療を選択します。
                  </p>
                </div>
              </div>

            </div>

          </div>
        </div>
      </section>

      <section class="js-trigger-section03" id="sec03">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
              <em>当クリニックでのシャント治療について</em>
            </h3>

            <div class="p-under__innerContent">
              <div class="p-under__shuntContent">
                <div>
                  <div class="p-under__headingWrap -primary">
                    <h4 class="c-heading -sizeS">シャントPTA</h4>
                  </div>
                  <p class="p-under__cardiologyTextSub -border">
                   風船のついたカテーテルを用いてシャント血管の狭窄した部分を拡張する治療です。局所麻酔を使って行い、治療は30分ほどです。傷も小さく、日帰りで治療することができます。
                  </p>
                </div>

                <div>
                  <div class="p-under__headingWrap -primary">
                    <h4 class="c-heading -sizeS">手術</h4>
                  </div>
                  <p class="p-under__cardiologyTextSub -border">
                     自己血管または人工血管を用いてシャントを作製する手術です。通常局所麻酔で行います。

                  </p>

                  <dl>
                    <dt>自己血管を用いる場合</dt>
                    <dd>自己血管を使用できる場合は、皮膚の下で静脈と動脈を吻合させ、シャントを作製します。治療時間は1時間から1時間30分ほどです。</dd>
                  </dl>

                  <dl>
                    <dt>人工血管を用いる場合</dt>
                    <dd>自己血管が使用できない場合は人工血管を移植してシャントを作製します。治療時間は2時間ほどです。当日から使用でき、穿刺も容易ですが、自己血管に比べ血栓ができやすく、感染症のリスクも高くなります。</dd>
                  </dl>

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
  <?php get_footer();?>