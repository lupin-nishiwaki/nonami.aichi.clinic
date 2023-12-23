<?php get_header(); ?>
<main>
  <?php get_template_part("/template-parts/reserve") ?>
  <div class="l-under -main">
    <div class="l-under__sideMenu">
      <div class="p-under__sideMenu">
        <div class="p-under__sideInner">
          <ul class="p-under__sideList">
            <li class="p-under__sideItem"><a class="sec01" href="#sec01">医院情報&middot;アクセス</a></li>
            <li class="p-under__sideItem">
              <a class="sec02" href="#sec02">診療時間&middot;担当医<br></a>
            </li>
            <li class="p-under__sideItem">
              <a class="sec03" href="#sec03">医院ギャラリー<br></a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /.l-under__sideMenu -->
    </div>
    <!-- /.p-under__sideMenu -->

    <div class="l-spacer -under l-under__main p-under__main">
      <div class="js-trigger-section01" id="sec01">
        <div class="p-under__container -secondary">
          <?php get_template_part("/template-parts/pankuzu") ?>

          <div class="p-under__topContent -secondary">
            <div class="p-under__mainTitle">
              <h2 class="c-heading -underPrimary">
                    <span class="en">information&middot;access</span>
                    <em>医院情報&middot;アクセス</em>
                  </h2>
            </div>
          </div>
          <!-- /.p-under__topContent -->
        </div>

        <section>
          <div class="l-spacer -top">
            <div class="p-under__container -secondary">

              <div class="p-under__infoAccess">
                <div class="inner">
                  <div class="inner-text">
                    <dl>
                      <dt>医院名</dt>
                      <dd>
                        一般社団法人 生活習慣病予防センター<br>
                        あいちハートクリニック
                      </dd>
                    </dl>

                    <dl>
                      <dt>住所</dt>
                      <dd>〒472-0054 愛知県知立市東上重原6-70</dd>
                    </dl>

                    <dl>
                      <dt>電話</dt>
                      <dd>0566-91-5810（代表）</dd>
                    </dl>

                    <dl>
                      <dt>FAX</dt>
                      <dd>0566-91-5816</dd>
                    </dl>

                    <dl>
                      <dt>診療科目</dt>
                      <dd>循環器科&middot;心臓血管外科&middot;内科&middot;外科&middot;麻酔科</dd>
                    </dl>


                    <dl>
                      <dt>お支払い</dt>
                      <dd>当院では、下記のキャッシュレス決済が可能です
                        <dl class="pay">
                          <dt>クレジットカード</dt>
                          <dd>
                            <ul>
                              <li>
                                <figure><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/visa.jpg" alt="visa"></figure>
                              </li>
                              <li>
                                <figure><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/master.jpg" alt="master card"></figure>
                              </li>
                              <li>
                                <figure><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/jcb.jpg" alt="jcb"></figure>
                              </li>
                              <li>
                                <figure><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/american.jpg" alt="american express"></figure>
                              </li>
                              <li>
                                <figure><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/discover.jpg" alt="discover"></figure>
                              </li>
                              <li>
                                <figure><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/diners.jpg" alt="diners club"></figure>
                              </li>
                            </ul>
                          </dd>
                        </dl>

                        <dl class="pay">
                          <dt>QRコード決済</dt>
                          <dd>
                            <ul>
                              <li>
                                <figure><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/paypay.jpg" alt="paypay"></figure>
                              </li>
                              <li>
                                <figure><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/linepay.jpg" alt="linepay"></figure>
                              </li>
                            </ul>
                          </dd>
                        </dl>

                      </dd>
                    </dl>


                    <dl>
                      <dt>アクセス</dt>
                      <dd>
                        <dl>
                          <dt>電車でお越しの方</dt>
                          <dd>
                            名鉄「知立駅」より徒歩約12分
                          </dd>
                        </dl>

                        <dl>
                          <dt>お車でお越しの方（駐車場完備）</dt>
                          <dd>
                            上重原インターより約5分
                          </dd>
                        </dl>
                      </dd>
                    </dl>
                  </div>

                  <picture class="info-image">
                    <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/access-pc@2x.jpg" media="(min-width: 768px)">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/access-sp@2x.jpg" alt="クリニックの写真" decoding="async">
                  </picture>
                </div>

              </div>
            </div>
            <div class="p-under__infoAccess__mapGoogle -info">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13072.97756700918!2d137.0350931!3d35.0005869!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac85b726f560a034!2z44GC44GE44Gh44OP44O844OI44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1653712379450!5m2!1sja!2sjp" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </section>
      </div>

      <section class="js-trigger-section02" id="sec02">
        <div class="l-spacer">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>診療時間&middot;担当医</em>
                </h3>

            <div class="p-under__innerContent -info">
              <div class="p-main__mapBody-inner">

                <div class="p-main__timeTable -info -map">


                  <table class="table-r02">
                    <tr>
                      <th>診療時間</th>
                      <td class="line-left">月</td>
                      <td class="line-left">火</td>
                      <td class="line-left">水</td>
                      <td class="line-left">木</td>
                      <td class="line-left">金</td>
                      <td class="line-left">土</td>
                      <td class="line-left">日</td>
                    </tr>

                    <tr>
                      <th>9:00-<br class="pc-hide">12:00</th>
                      <td class="line-left circle text"><span>村瀬</span></td>
                      <td class="line-left circle text"><span>深谷</span></td>
                      <td class="line-left circle text"><span>村瀬</span></td>
                      <td class="line-left circle text"><span>深谷</span></td>
                      <td class="line-left circle text"><span>村瀬</span></td>
                      <td class="line-left circle text"><span>交代制</span></td>
                      <td class="none line-left left-last"></td>
                    </tr>

                    <tr class="last">
                      <th>15:00-<br class="pc-hide">18:00</th>
                      <td class="line-left circle text"><span>村瀬</span></td>
                      <td class="line-left circle text"><span>深谷</span></td>
                      <td class="line-left circle text"><span>村瀬</span></td>
                      <td class="line-left circle text"><span>深谷</span></td>
                      <td class="line-left circle text"><span>交代制</span></td>
                      <td class="none line-left left-last"></td>
                      <td class="none line-left left-last"></td>
                    </tr>
                  </table>


                  <!-- <table>
                    <tbody>
                      <tr class="heading">
                        <th>診療時間</th>
                        <th class="line-left">月</th>
                        <th class="line-left">火</th>
                        <th class="line-left">水</th>
                        <th class="line-left">木</th>
                        <th class="line-left">金</th>
                        <th class="line-left">土</th>
                        <th class="line-left">日</th>
                      </tr>
                      <tr>
                        <th class="en time"><span class="info-time">9:00-12:00</span></th>
                        <td class="line-left circle"><span class="name">村瀬</span></td>
                        <td class="line-left circle"><span class="name">深谷</span></td>
                        <td class="line-left circle"><span class="name">村瀬</span></td>
                        <td class="line-left circle"><span class="name">深谷</span></td>
                        <td class="line-left circle"><span class="name">村瀬</span></td>
                        <td class="line-left circle"><span class="name">交代制</span></td>
                        <td class="line-left none"></td>
                      </tr>
                      <tr>
                        <th class="en time"><span class="info-time">15:00-18:00</span></th>
                        <td class="line-left circle"><span class="name">村瀬</span></td>
                        <td class="line-left circle"><span class="name">深谷</span></td>
                        <td class="line-left circle"><span class="name">村瀬</span></td>
                        <td class="line-left circle"><span class="name">深谷</span></td>
                        <td class="line-left circle"><span class="name">交代制</span></td>
                        <td class="line-left none"></td>
                        <td class="line-left none"></td>
                      </tr>
                    </tbody>
                  </table> -->
                </div>
              </div>
              <p class="note">
              ご予約は診療時間内に電話で受け付けております。<br>
            初診予約はWebから24時間受け付けております。<br >
            初診受付は午前は11:30まで、午後は17:30までとなります。<br>
            ※美容の電話予約受付時間は、13時～17時となります。
              </p>


            </div>
            <div class="c-button__wrap -center">
              <a href="<?php echo esc_url( home_url( ) ); ?>/about#sec03" class="c-button -colorAccentWhite -center -primary">
                <span class="inner">医師の紹介はこちら</span>
                <div class="svg-wrap">
                  <svg class="arrow -brown" viewBox="0 0 23 7.206">
                    <g transform="translate(-125.801 -6.294)">
                      <path d="M714.911,14.75l5.5,6h-22" transform="translate(-572.11 -7.75)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                    </g>
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="js-trigger-section03" id="sec03">
        <div class="l-spacer -borderTop">
          <div class="p-under__container -secondary">
            <h3 class="c-heading -underSecondary">
                  <em>医院ギャラリー</em>
                </h3>
          </div>

          <div class="p-under__infoGallery">
            <div class="p-under__container -secondary">
              <div class="p-under__innerContent">
                <div class="swiper-container -gallery swiper-gallery">
                  <ul class="swiper-wrapper -gallery">
                    <li class="swiper-slide -gallery">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery01.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery01.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery01@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -gallery">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery02.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery02.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery02@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -gallery">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery03.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery03.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery03@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -gallery">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery04.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery04.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery04@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -gallery">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery05.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery05.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery05@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -gallery">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery06.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery06.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery06@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -gallery">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery07.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery07.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery07@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -gallery">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery08.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery08.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery08@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -gallery">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery09.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery09.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery09@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -gallery">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery10.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery10.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery10@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -gallery">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery11.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery11.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery11@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>


                    <li class="swiper-slide -gallery">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery12.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery12.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery12@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>


                    <li class="swiper-slide -gallery">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery13.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery13.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery13@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>


                    <li class="swiper-slide -gallery">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery14.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery14.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery14@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>


                  </ul>
                  <div class="swiper-button-next nextGallery -gallery"></div>
                  <div class="swiper-button-prev prevGallery -gallery"></div>
                  <div class="swiper-pagination pagiGallery -gellery"></div>
                </div>

                <div class="swiper-container -thumb slider-thumbnail">
                  <ul class="swiper-wrapper">
                    <li class="swiper-slide -galleryThumb">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery01.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery01.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery01@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -galleryThumb">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery02.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery02.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery02@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -galleryThumb">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery03.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery03.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery03@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -galleryThumb">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery04.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery04.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery04@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -galleryThumb">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery05.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery05.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery05@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -galleryThumb">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery06.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery06.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery06@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -galleryThumb">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery07.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery07.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery07@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -galleryThumb">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery08.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery08.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery08@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -galleryThumb">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery09.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery09.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery09@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -galleryThumb">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery10.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery10.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery10@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -galleryThumb">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery11.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery11.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery11@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -galleryThumb">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery12.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery12.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery12@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -galleryThumb">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery13.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery13.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery13@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>

                    <li class="swiper-slide -galleryThumb">
                      <figure class="p-under__infoGalleryImage">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery14.jpg" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery14.jpg, <?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info/gallery14@2x.jpg" alt="院内の画像" />
                      </figure>
                    </li>
                  </ul>
                  <!-- <div class="swiper-button-next nextGallery -gallery"></div>
                      <div class="swiper-button-prev prevGallery -gallery"></div>
                      <div class="swiper-pagination pagiGallery -gellery"></div> -->
                </div>
              </div>
              <!-- /.p-under__innerContent -->
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.l-under__main -->
  </div>
  <!-- /.l-sub -->
  <?php get_footer(); ?>
