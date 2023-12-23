// 遅延用 引数の分だけ処理を遅らせる
function delay (n) {
  n = n || 2000;
  return new Promise((done) => {
    setTimeout(() => {
      done();
    }, n);
  });
}

// 目隠しの帯のアニメーション
// function pageTransition () {
//   const transitionItem = document.querySelectorAll('.js_anim_pjax .item');
//   const transitionContainer = document.querySelector('.js_anim_pjax');
//   const tl = gsap.timeline();
//   tl.to(transitionItem, {
//     duration: 0.4,
//     scaleY: 1,
//     transformOrigin: 'bottom left',
//     stagger: 0.1,
//     ease: 'Expo.easeInOut'
//   });
//   tl.to(transitionContainer, {
//     duration: 1,
//     y: '-100%',
//     ease: 'Expo.easeInOut'
//   });
//   tl.to(transitionContainer, {
//     duration: 0,
//     y: 0
//   });
//   tl.to(transitionItem, {
//     duration: 0,
//     scaleY: 0,
//     scaleX: 1
//   });
// }

// ページを離れる時の上に消える動作
function leaveAnimation () {
  const tl = gsap.timeline();
  tl.to('.js_anim_pjax_container', {
    duration: 1,
    x: 60,
    opacity: 0,
    ease: 'Quart.easeOut'
  });
}

// ページに入った時の下から出てくる動作
function enterAnimation () {
  const tl = gsap.timeline();
  tl.from('.js_anim_pjax_container', {
    duration: 1,
    x: -60,
    opacity: 0,
    ease: 'Quart.easeOut'
  });
}
