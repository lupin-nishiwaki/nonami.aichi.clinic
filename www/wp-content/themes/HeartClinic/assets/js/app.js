gsap.config({
  nullTargetWarn: false,
});

gsap.set([".p-hero", ".p-hero__copy", ".p-hero__reserve"], {
  autoAlpha: 0,
});
gsap.set([".p-hero__reserve", ".p-under__mainTitle"], {
  autoAlpha: 0,
  y: 10,
});

const openTimeLine = gsap.timeline({
  default: {
    ease: "Power2.easeOut",
  },
});
openTimeLine
  .to(".p-hero", {
    autoAlpha: 1,
    duration: 1.25,
  })
  .to(
    ".p-hero__copy",
    {
      autoAlpha: 1,
      duration: 2.5,
    },
    "-=0.25"
  )
  .to(
    ".p-hero__reserve",
    {
      autoAlpha: 1,
      y: 0,
      duration: 0.5,
    },
    "-=1.75"
  );

const openTimeLineUnder = gsap.timeline({
  default: {
    ease: "Power2.easeOut",
  },
});

openTimeLineUnder
  .to(".l-under", {
    autoAlpha: 1,
    duration: 1.25,
  })
  .to(
    ".p-under__mainTitle",
    {
      autoAlpha: 1,
      y: 0,
      duration: 0.5,
    },
    "-=0.75"
  );

jQuery(function ($) {
  /* ==============================
    Transition
  ============================== */
  $(window).on("load", function () {
    $("body").removeClass("is-fadeout");
  });

  $('a:not([href^="#"]):not([target]):not([href^="tel:"]):not([data-autoplay])').on("click", function (e) {
    e.preventDefault();
    url = $(this).attr("href");
    if (url !== "") {
      $("body").addClass("is-fadeout");
      setTimeout(function () {
        window.location = url;
      }, 120);
    }
    return false;
  });

  // safariの戻る強制リロードする
  window.addEventListener("pageshow", function (event) {
    if (event.persisted) {
      // bfcache発動時の処理
      window.location.reload();
    }
  });

  /* ==============================
    Drawer
  ============================== */
  $(".js-drawer").click(function () {
    const targetText = document.querySelector(".js-hamburger-text > div");
    targetText.classList.toggle("active");
    $("body").toggleClass("is-drawerActive");
    if ($(this).attr("aria-expanded") == "false") {
      gsap.to(".p-globalNav ", {
        autoAlpha: 1,
        duration: 0.1,
      });
      $(this).attr("aria-expanded", true);
    } else {
      $(this).attr("aria-expanded", false);
      gsap.to(".p-globalNav ", {
        autoAlpha: 0,
        ease: "Power2.easeOut",
      });
    }

    gsap.set(".p-globalNav ", {
      y: 0,
      autoAlpha: 0,
    });

    gsap.fromTo(
      ".is-drawerActive .p-globalNav > *",
      {
        y: 50,
        autoAlpha: 0,
      },
      {
        y: 0,
        autoAlpha: 1,
        duration: 0.75,
        delay: 0.25,
        ease: "Power2.easeOut",
        stagger: {
          each: 0.04,
          from: "start",
        },
      }
    );
  });

  /* ==============================
    ページ内リンク
  ============================== */
  $('a[href^="#"]').click(function () {
    let speed = 900;
    let headerHeight = 90;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    let position = target.offset().top - headerHeight;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  /* ==============================
    ページトップ
  ============================== */
  let topBtn = $("#footer-page-top");
  topBtn.hide();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 800) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });

  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });

  /* ==============================
    アコーディオン
  ============================== */
  $(".js-accordion dt").click(function () {
    $(this).next().slideToggle();
    $(this).toggleClass("is-active");
  });
  $(function () {
    if (window.matchMedia("(max-width: 1200px)").matches) {
      $(".js-accordion p").click(function () {
        $(this).next().slideToggle();
        $(this).children().toggleClass("is-active");
      });
    } else if (window.matchMedia("(min-width:1200px)").matches) {
    }
  });

  /* ==============================
    タブ切り替え
  ============================== */

  $(".js_tab_btn > *").on("click", function () {
    //セレクタ設定
    let thisElm = $(this);
    let thisTabWrap = thisElm.parents(".js_tab");
    let thisTabBtn = thisTabWrap.find(".js_tab_btn > *");
    let thisTabContents = thisTabWrap.find(".js_tab_content > *");

    //current class
    let currentClass = "is-tab";

    //js-tab_btn current 切り替え
    thisTabBtn.removeClass(currentClass);
    thisElm.addClass(currentClass);

    //クリックされた tabが何番目か取得
    let thisElmIndex = thisTabBtn.index(this);

    //js-tab_contents 切り替え
    thisTabContents.removeClass(currentClass);
    thisTabContents.eq(thisElmIndex).addClass(currentClass);

    return false;
  });

  /* ==============================
    ヘッダーhover
  ============================== */

  const headerFunc = function () {
    if (window.matchMedia("(max-width: 1023px)").matches) {
      /* ウィンドウサイズ1023以下の処理を記述 */
    } else if (window.matchMedia("(min-width:1024px)").matches) {
      /* ウィンドウサイズ1024以上の処理を記述 */
      $(".p-globalNav__item.-megaMenu").hover(
        function () {
          $(".p-header").addClass("is-active");
          $("body").addClass("is-overlayActive");
        },
        function () {
          $(".p-header").removeClass("is-active");
          $("body").removeClass("is-overlayActive");
        }
      );
    }
  };
  headerFunc();
});

jQuery(window).on("load scroll", function () {
  let $header = $(".p-header");

  // 200以上スクロールしたら処理
  if ($(window).scrollTop() > 200) {
    $header.addClass("is-scroll");
  } else {
    $header.removeClass("is-scroll");
  }
});

/* ==============================
    swiper
  ============================== */
const topSwiper = new Swiper(".swiper-top", {
  slidesPerView: 1,
  initialSlide: 0, //最初に何枚目のスライドを表示させるか
  loop: true,
  effect: "fade",
  autoplay: {
    delay: 4000,
    disableOnInteraction: false, //ユーザー操作の後も自動再生するかどうか
  },
  speed: 1500,

  pagination: {
    el: ".pageTop",
    type: "bullets",
    clickable: true,
  },
});

const newsSwiper = new Swiper(".swiper-topNews", {
  slidesPerView: 1,
  initialSlide: 0, //最初に何枚目のスライドを表示させるか
  spaceBetween: 20,
  direction: "vertical",

  loop: true,
  loopedSlides: 3,

  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },

  navigation: {
    nextEl: ".nextTopNews",
    prevEl: ".prevTopNews",
  },
});

const thumbSwiper = new Swiper(".slider-thumbnail", {
  slidesPerView: 4,
  spaceBetween: 10,
  freeMode: true,

  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  breakpoints: {
    768: {
      slidesPerView: 8.5,
    },
  },
});

const gallerySwiper = new Swiper(".swiper-gallery", {
  slidesPerView: "auto",
  centeredSlides: true,
  crossFade: true,
  spaceBetween: 10,
  effect: "fade",
  pagination: {
    el: ".pagiGallery",
    type: "fraction",
  },

  navigation: {
    nextEl: ".nextGallery",
    prevEl: ".prevGallery",
  },
  breakpoints: {
    768: {
      spaceBetween: 0,
    },
  },

  thumbs: {
    swiper: thumbSwiper,
  },
});

// ----------------------------------------
// GSAP

ScrollTrigger.create({
  trigger: ".js-trigger-section01",
  start: "top top",
  end: "bottom center",

  toggleClass: { targets: ".p-under__sideItem .sec01", className: "is-active" },
});
ScrollTrigger.create({
  trigger: ".js-trigger-section02",
  start: "top center",
  end: "bottom center",
  toggleClass: { targets: ".p-under__sideItem .sec02", className: "is-active" },
});

ScrollTrigger.create({
  trigger: ".js-trigger-section03",
  start: "top center",
  end: "bottom center",
  toggleClass: { targets: ".p-under__sideItem .sec03", className: "is-active" },
});

ScrollTrigger.create({
  trigger: ".js-trigger-section04",
  start: "top center",
  end: "bottom center",
  toggleClass: { targets: ".p-under__sideItem .sec04", className: "is-active" },
});

ScrollTrigger.create({
  trigger: ".js-trigger-section05",
  start: "top center",
  end: "bottom center",
  toggleClass: { targets: ".p-under__sideItem .sec05", className: "is-active" },
});

ScrollTrigger.create({
  trigger: ".js-trigger-section06",
  start: "top center",
  end: "bottom center",
  toggleClass: { targets: ".p-under__sideItem .sec06", className: "is-active" },
});

ScrollTrigger.create({
  trigger: ".js-trigger-section07",
  start: "top center",
  end: "bottom center",
  toggleClass: { targets: ".p-under__sideItem .sec07", className: "is-active" },
});

ScrollTrigger.create({
  trigger: ".js-trigger-section08",
  start: "top center",
  end: "bottom center",
  toggleClass: { targets: ".p-under__sideItem .sec08", className: "is-active" },
});

ScrollTrigger.create({
  trigger: ".js-trigger-section09",
  start: "top center",
  end: "bottom center",
  toggleClass: { targets: ".p-under__sideItem .sec09", className: "is-active" },
});

ScrollTrigger.create({
  trigger: ".js-trigger-section010",
  start: "top center",
  end: "bottom 35%",
  toggleClass: { targets: ".p-under__sideItem .sec010", className: "is-active" },
});

ScrollTrigger.create({
  trigger: ".js-trigger-section011",
  start: "top center",
  end: "bottom center",
  toggleClass: { targets: ".p-under__sideItem .sec011", className: "is-active" },
});

const scrollFades = document.querySelectorAll(".js-scrollFade");
scrollFades.forEach((scrollFade) => {
  gsap.fromTo(
    scrollFade,
    {
      autoAlpha: 0,
      y: 12,
      ease: "Power2.easeOut",
      duration: 0.8,
    },
    {
      autoAlpha: 1,
      y: 0,
      scrollTrigger: {
        trigger: scrollFade,
        start: "top 70%",
        // markers: true,
      },
    }
  );
});

// 連続したスクロールフェードドイン
const inView01 = gsap.utils.toArray(".js-parentFadeMulti").forEach((el) => {
  const q = gsap.utils.selector(el);

  gsap.fromTo(
    q(".js-scrollFadeMulti"),
    {
      autoAlpha: 0,
      y: 12,
      ease: "Power2.easeOut",
    },
    {
      autoAlpha: 1,
      y: 0,
      stagger: 0.2,
      scrollTrigger: {
        trigger: el,
        start: "top 70%",
      },
    }
  );
});

new VenoBox({
  selector: ".js-video-venobox",
});

// const globalNavContent = document.querySelector(".p-globalNav__content");
// const header = document.querySelector("header");
// const headerHeight = header.offsetHeight;
// console.log(globalNavContent, headerHeight);

// globalNavContent.style.top = `${headerHeight}px`;
