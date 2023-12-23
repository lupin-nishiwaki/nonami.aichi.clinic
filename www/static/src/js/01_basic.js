// ----------------------------------------
// majorVariable
var $window = $(window);
var $html = $('html');
var windowW = $(window).width();
var windowH = $(window).height();
var windowSm = 767;

if (windowW <= windowSm) {
  var headH = 82;
} else {
  var headH = 100;
}

var _ua = (function(u){
  return {
    Tablet:(u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf("tablet pc") == -1)
    || u.indexOf("ipad") != -1
    || (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
    || (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
    || u.indexOf("kindle") != -1
    || u.indexOf("silk") != -1
    || u.indexOf("playbook") != -1,
    Mobile:(u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
    || u.indexOf("iphone") != -1
    || u.indexOf("ipod") != -1
    || (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
    || (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
    || u.indexOf("blackberry") != -1
  }
})(window.navigator.userAgent.toLowerCase());


// ----------------------------------------
// drawr
function drawr() {
  var drawrTouch = false;

  $('.js_drawr_btn').on('click',function(e){
    switch (e.type) {
      case 'touchstart':
      drawerToggle();
      drawrTouch = true;
      return false;
      break;

      case 'click':
      if(!drawrTouch)
        drawerToggle();
      return false;
      break;
    }

    function drawerToggle(){
      $('.js_drawr_btn, .js_drawr, .js_drawr_cover, body').toggleClass('is-drawr');
      drawrTouch = false;
    }
  });

  $('.js_drawr_cover, .js_drawr a').on('click', function(e) {
    $('.js_drawr_btn, .js_drawr, .js_drawr_cover, body').removeClass('is-drawr');
  });
}


// ----------------------------------------
// smoothScroll
function smoothScroll() {
  $('a[href^="#"]').on('click', function(event){
    var anchor = event.currentTarget;
    var position = $(anchor.hash).offset().top - headH;
    $('html, body').animate({scrollTop:position}, 1000, 'easeInOutExpo');
    event.preventDefault();
    return false;
  });

  $(window).on( 'scroll', function () {
    if ( $(this).scrollTop() < 500 ) {
      $('.js_totop').removeClass('is-totop');
    } else {
      $('.js_totop').addClass('is-totop');
    }
  });
}


// ----------------------------------------
// loadScroll
function loadScroll() {
  var url = $(location).attr('href');
  if(url.indexOf("#") != -1){
    var id = url.split("#");
    var $target = $('#' + id[id.length - 1]);
    if($target.length){
      var pos = $target.offset().top-headH;
      $('html, body').animate({scrollTop:pos}, 400);
    }
  } else {
    $('html, body').animate({scrollTop:0}, 0);
  }
}


// ----------------------------------------
// fixedScrollW
function fixedScrollW() {
  if(!_ua.Mobile&&!_ua.Tablet){
    $('.js_scroll_fixed').css('left', -$(window).scrollLeft());
    $('.js_scroll_fixed').css('width', 'calc( 100% + ' + window.scrollX + 'px)');
  }
}


// ----------------------------------------
// scrollAnim
// function scrollAnim() {
//   setTimeout(function(){
//     $('.js_anim_scroll, .js_anim_scroll_group').waypoint(function(direction){
//       var activePoint = $(this.element);
//       if (direction === 'down') {
//         activePoint.addClass('is-anim');
//       }
//     },{ offset : '70%' });
//   }, 500);
// }


// ----------------------------------------
// loadAnim
function loadAnim(){
  setTimeout(function(){
    $('.js_load, body').addClass('is-load');
  }, 500);

  setTimeout(function(){
    setLoadAnim();
  }, 930);
}

function setLoadAnim(){
  $('.js_load_item').addClass('is-load');

  $('.js_anim_scroll, .js_anim_scroll_group').waypoint(function(direction){
    var activePoint = $(this.element);
    if (direction === 'down') {
      activePoint.addClass('is-anim');
    }
  },{ offset : '70%' });
}


// ----------------------------------------
// modal
function modalPhoto() {
  $('.js_modal_photo').venobox({
    framewidth: '750px',
    frameheight: 'auto',
    bgcolor: '#fff',
    overlayColor: 'rgba(255, 255, 255, 0.85)',
    // overlayClose: false,
    closeBackground: 'rgba(255, 255, 255, 0)',
    closeColor: '#000',
    titleBackground: '#bfcbc9',
    titleColor: '#fff',
    titlePosition: 'bottom'
  });
}


// ----------------------------------------
// accordion
function accordion() {
  $('.js_accordion dt').on('click', function() {
    $(this).toggleClass('is-accordion');
    $(this).next('dd').stop().slideToggle();
  });

  if (windowW <= windowSm) {
    $('.js_accordion_sp dt').on('click', function() {
      $(this).toggleClass('is-accordion');
      $(this).next('dd').stop().slideToggle();
    });
  }
}


// ----------------------------------------
// tab
function tab() {
  $('.js_tab_btn > *').on('click', function() {
    //セレクタ設定
    var thisElm = $(this);
    var thisTabWrap = thisElm.parents('.js_tab');
    var thisTabBtn = thisTabWrap.find('.js_tab_btn > *');
    var thisTabContents = thisTabWrap.find('.js_tab_content > *');

    //current class
    var currentClass = 'is-tab';

    //js-tab_btn current 切り替え
    thisTabBtn.removeClass(currentClass);
    thisElm.addClass(currentClass);

    //クリックされた tabが何番目か取得
    var thisElmIndex =  thisTabBtn.index(this);

    //js-tab_contents 切り替え
    thisTabContents.removeClass(currentClass);
    thisTabContents.eq(thisElmIndex).addClass(currentClass);
  });
}


// ----------------------------------------
// imgSize
function imgSize() {
  const myFunc = function(src){
      return new Promise(function(resolve, reject){
          const image = new Image();
          image.src = src;
          image.onload = function(){
              resolve(image);
          }
          image.onerror = function(error){
              reject(error);
          }
      });
  }

  //ページ内のimg要素を取得
  const imgs = document.getElementsByTagName('img');

  //img要素の数だけ繰り返し処理
  for (const img of imgs) {
      const src = img.getAttribute('src');

      myFunc(src)
      .then(function(res){
          if(!img.hasAttribute('width')){
              img.setAttribute('width', res.width);
          }

          if(!img.hasAttribute('height')){
              img.setAttribute('height', res.height);
          }
      })
      .catch(function(error){
          console.log(error);
      });
  }
}
