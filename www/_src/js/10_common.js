// ------------------------------------------
// fixedHeader
const headerElm = document.querySelector('.js_header');

fixedHeader();
window.addEventListener('scroll', fixedHeader);
// window.addEventListener('resize', fixedHeader);

function fixedHeader() {
  const scroll = window.scrollY;
  headerElm.classList.toggle('is-fixed', scroll > 30);
}


// ------------------------------------------
// modal
new VenoBox({
  selector: '.js_modal',
});


// ------------------------------------------
// accordion
const accordionBtnElm = document.querySelectorAll('.js_accordion dt');
accordionBtnElm.forEach(function (elm) {
  elm.addEventListener('click', function () {
    accordion(elm);
  });
});

const accordionSpBtnElm = document.querySelectorAll('.js_accordion_sp dt');
accordionSpBtnElm.forEach(function (elm) {
  elm.addEventListener('click', function () {
    if (window.innerWidth < 768) {
      accordion(elm);
    }
  });
});

function accordion(e) {
  const accordionContentsElm = e.nextElementSibling;
  slideToggle(accordionContentsElm, 300);
  e.classList.toggle('is-active');
}

window.addEventListener('resize', function () {
  if (window.innerWidth >= 768) {
    accordionSpBtnElm.forEach(function (elm) {
      elm.nextElementSibling.removeAttribute('style');
      elm.classList.remove('is-active');
    });
  }
});


// ------------------------------------------
// tab
const tabBtnElm = document.querySelectorAll('.js_tab_btn > *');

tabBtnElm.forEach(function (elm) {
  elm.addEventListener('click', function () {
    let thisTabWrapElm = elm.closest('.js_tab');
    let thisTabBtnElm = thisTabWrapElm.querySelectorAll('.js_tab_btn > *');
    let thisTabContentsElm = thisTabWrapElm.querySelectorAll('.js_tab_content > *');
    let currentClass = 'is-tab';
    let thisElmIndex = Array.from(thisTabBtnElm).indexOf(elm);
    thisTabBtnElm.forEach(function (btn) { btn.classList.remove(currentClass); });
    elm.classList.add(currentClass);
    thisTabContentsElm.forEach(function (content) { content.classList.remove(currentClass); });
    thisTabContentsElm[thisElmIndex].classList.add(currentClass);
  });
});


// ------------------------------------------
// smooth-scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const headerHeight = document.querySelector('#l_header').offsetHeight;
    const href = anchor.getAttribute('href');
    const target = document.getElementById(href.replace('#', ''));
    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
    window.scrollTo({
      top: targetPosition,
      behavior: 'smooth'
    });
  });
});


// ------------------------------------------
// load-page
const pageElm = document.querySelector('.js_load_page');

// 読み込み時
setTimeout(function () {
  pageElm.classList.add('is-load');
}, 800);

// リンククリック時
document.querySelectorAll('a:not([href^="#"]):not([target]):not(.js_modal):not([href^="tel:"])').forEach(function (linkElement) {
  linkElement.addEventListener('click', function (e) {
    e.preventDefault();
    const link = linkElement.getAttribute('href');
    if (link !== '') {
      pageElm.classList.remove('is-load');
      setTimeout(function () {
        window.location = link;
      }, 800);
    }
  });
});


// ------------------------------------------
// load-animation
const loadAnimElm = document.querySelectorAll('.js_anim_load');

setTimeout(function () {
  loadAnimElm.forEach(function (elm) {
    elm.classList.add('is-load');
  });
}, 1300);


// ------------------------------------------
// scroll-animation
const scrollAnimElm = document.querySelectorAll('.js_anim_scroll,.js_anim_scroll_group');

window.addEventListener('scroll', function () {
  let scroll = window.scrollY;
  let windowHeight = window.innerHeight;
  for (let elm of scrollAnimElm) {
    let targetPos = elm.getBoundingClientRect().top + scroll;
    if (scroll > targetPos - windowHeight) {
      elm.classList.add('is-anim');
    }
  }
});


// ------------------------------------------
// ドロワー
const drawerElm = document.querySelector('.js_drawr');
const drawerBtnElm = document.querySelector('.js_drawr_btn');
const drawerLinkElm = document.querySelectorAll('.js_drawr a');

function drawerOpen() {
  drawerElm.classList.toggle('is-open');
  drawerBtnElm.classList.toggle('is-open');
}

drawerBtnElm.addEventListener('click', (e) => {
  drawerOpen();
});

drawerLinkElm.forEach(function (elm) {
  elm.addEventListener('click', (e) => {
    drawerOpen();
  });
});

// document.addEventListener('click', (e) => {
//   if (!event.target.closest('#l_header')) {
//     drawerOpen();
//   }
// });


// ------------------------------------------
// lonavCurrent
window.addEventListener('scroll', function () {
  const headerHeight = document.querySelector('#l_header').offsetHeight;
  const lonavBtnElm = document.querySelectorAll('.js_lonav_current');
  const lonavTargetElm = document.querySelectorAll('.js_lonav_current_target');
  const scroll = window.scrollY + headerHeight + 1;

  lonavTargetElm.forEach(function (elm, index) {
    const lonavTargetPos = elm.getBoundingClientRect();
    const lonavTargetTop = window.pageYOffset + lonavTargetPos.top;
    const lonavTargetBottom = window.pageYOffset + lonavTargetPos.bottom;

    elm.classList.toggle('is-current', scroll > lonavTargetTop && scroll < lonavTargetBottom);
    lonavBtnElm[index].classList.toggle('is-current', scroll > lonavTargetTop && scroll < lonavTargetBottom);
  });
});