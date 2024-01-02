<?php
/**
 * Template Name: 発熱外来
 */

get_header();
?>

<div id="page_fever">
  <div class="columnSeparate">
    <!-- .sideContents -->
    <div class="sideContents">
      <ul class="lonav">
        <li class="js_lonav_current"><a href="#fever">発熱について</a></li>
        <li class="js_lonav_current"><a href="#visit">ご来院される方へ</a></li>
      </ul>
    </div>
    <!-- /.sideContents -->

    <!-- .mainContents -->
    <div class="mainContents">
      <!-- #pageTtl -->
      <section id="pageTtl">
        <div class="top">
          <div class="m_box_fixed -under">
            <h1>
              <span class="en">fever</span>
              発熱外来
            </h1>

            <ul class="lonav">
              <li><a href="#fever">発熱について</a></li>
              <li><a href="#visit">ご来院される方へ</a></li>
            </ul>
          </div>
        </div>

        <picture class="img">
          <img src="/asset/img/fever/pageTtl.webp" alt="発熱外来" width="1920" height="610">
        </picture>
      </section>
      <!-- /#pageTtl -->

      <!-- #overview -->
      <section id="overview">
        <div class="m_box_fixed -under">
          <h2 class="m_txt_catch">
          新型コロナウイルス感染症に<br class="pc-hide">備えましょう。
          </h2>

          <p class="message">
            新型コロナウイルス感染症の影響拡大を受け、発熱外来を開設しております。<br>
            医師が必要と判断した場合、PCR検査、抗原検査を実施致します。
          </p>
        </div>
      </section>
      <!-- /#overview -->

      <!-- #fever -->
      <section id="fever" class="js_lonav_current_target">
        <div class="m_box_fixed -under">
          <h2 class="m_txt_ttl">
            <em class="ja">発熱について</em>
          </h2>

          <p>
            他の患者様と隔離するため、完全予約制となります。以下の症状がある方は必ず事前にお電話ください。
          </p>

          <ul class="point m_list_item -col4">
            <li>発熱</li>
            <li>咳</li>
            <li>鼻水</li>
            <li>咽頭痛</li>
            <li>風邪症状</li>
            <li>倦怠感</li>
            <li>下痢</li>
            <li>味覚障害</li>
          </ul>

          <div class="contact m_box_tel">
            <h3>発熱のご予約·ご相談はこちらから</h3>

            <dl>
              <dd><a href="tel:0566-91-5810">0566-91-5810</a></dd>
            </dl>

            <p class="welcome">
              直接来院された場合、屋外でお待ちいただくか、あるいは受診ができない場合がございます。 また、ご予約いただいた場合も待ち時間が発生する場合がございますので、予めご了承ください。<br>
              ※インターネット予約は利用できません。
            </p>
          </div>
        </div>
      </section>
      <!-- /#fever -->

      <!-- #visit -->
      <section id="visit" class="js_lonav_current_target">
        <div class="m_box_fixed -under">
          <h2 class="m_txt_ttl">
            <em class="ja">ご来院される方へ</em>
          </h2>

          <ul class="belongings m_list_dot">
            <li>必ず保険証をご持参ください。</li>
            <li>必ず不織布マスクを着用してのご来院をお願い致します。</li>
            <li>トイレはご自宅でお済ませになってご来院ください。</li>
            <li>公共交通機関を利用せず、徒歩、自転車、自家用車にてご来院ください。</li>
            <li>可能であれば<a class="download" href="/asset/doc/interviewSheet.pdf" target="_blank">問診票をダウンロード</a>の上、事前に記入してお持ちください。</li>
          </ul>

          <div class="flow">
            <h3 class="m_txt_hd_group">
              発熱外来受診の流れ
            </h3>

            <ol class="m_list_flow">
              <li>
                <picture class="icon"><img loading="lazy" src="/asset/img/fever/visit_flow01.svg" alt="電話予約" width="92" height="92"></picture>
                <h4 class="name">電話予約</h4>
                <p class="txt">まず当クリニックにお電話いただき、症状をお聞かせください。（<a href="tel:0566-91-5810">0566-91-5810</a>）当クリニックにて対応可能であれば、ご来院いただく時間や発熱外来専用の電話番号をお伝え致します。</p>
              </li>

              <li>
                <picture class="icon"><img loading="lazy" src="/asset/img/fever/visit_flow02.svg" alt="ご来院" width="92" height="92"></picture>
                <h4 class="name">ご来院</h4>
                <p class="txt">ご到着されましたら、院内に入る前にお伝えした発熱外来専用の電話番号にお電話ください。その後はスタッフの指示に従ってください。</p>
              </li>
            </ol>
          </div>
        </div>
      </section>
      <!-- /#visit -->
    </div>
    <!-- /.mainContents -->
  </div>
</div>

<?php get_footer(); ?>
