// ------------------------------------------
// mv
const topSwiperMv = new Swiper('.js_top_swiper_mv', {
  slidesPerView: 1,
  initialSlide: 0,
  loop: true,
  effect: 'fade',
  speed: 1500,
  crossFade: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.js_top_swiper_mv_pagination',
    type: 'bullets',
    clickable: true,
  },
});

const topSwiperNews = new Swiper('.js_top_swiper_news', {
  slidesPerView: 1,
  initialSlide: 0,
  // spaceBetween: 20,
  direction: 'vertical',
  loop: true,
  loopedSlides: 3,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.js_top_swiper_news_prev',
    prevEl: '.js_top_swiper_news_next',
  },
});