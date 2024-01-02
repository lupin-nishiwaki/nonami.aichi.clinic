// ------------------------------------------
// ギャラリー
const informationGallerySwiperThumb = new Swiper('.js_information_swiper_gallery_thumb', {
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

const informationGallerySwiper = new Swiper('.js_information_swiper_gallery', {
  slidesPerView: 'auto',
  centeredSlides: true,
  crossFade: true,
  spaceBetween: 10,
  effect: 'fade',
  pagination: {
    el: '.js_information_swiper_gallery_pagenation',
    type: 'fraction',
  },
  navigation: {
    nextEl: '.js_information_swiper_gallery_next',
    prevEl: '.js_information_swiper_gallery_prev',
  },
  breakpoints: {
    768: {
      spaceBetween: 0,
    },
  },
  thumbs: {
    swiper: informationGallerySwiperThumb,
  },
});