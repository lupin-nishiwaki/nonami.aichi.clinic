// ----------------------------------------
// DOM生成後
$(function () {
  drawr();
  // ankerReplace();
  smoothScroll();
  modalPhoto();
  accordion();
  sptitText();
  tab();
  imgSize();
});


// ----------------------------------------
// ページの全データを読み込み後
$(window).on('load', function () {
  loadAnim();
  loadScroll()
});
setTimeout('loadAnim()', 10000);


// ----------------------------------------
// スクロール後
$(window).on('scroll', function(){
  fixedScrollW();
});
