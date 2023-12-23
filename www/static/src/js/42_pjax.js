// barba設定
barba.init({
  // リンク方法
  prevent: ({ el }) => {
    // 該当クラスに属していればBarbaを無効に
    let ignoreClasses = ['ab-item'];
    ignoreClasses.forEach((cls) => {
      if (el.classList.contains(cls)) {
        return true;
      }
    })

    // wpのヘッダーでは通常リンク
    if( el.className == 'ab-item' ){
      return true;
    }
  },

  // アニメーション
  transitions: [
    {
      // 次のページを表示する直前
      async beforeEnter (data) {
        replaceHeadTags(data.next);
        gaPush();
      },

      // 現在のページの離脱
      async leave (data) {
        const done = this.async();
        leaveAnimation();
        // pageTransition();
        await delay(1000);
        done();
      },

      // 次ページに入った時
      async enter (data) {
        await delay(600);
        enterAnimation();
        // ankerReplace();
        smoothScroll();
      },

      // すべて完了
      async after (data) {
        modalPhoto();
        sptitText();
        loadScroll();
        imgSize();

        // loadAnim();
        setTimeout(function(){
          setLoadAnim()
        }, 500);
      }
    }
  ],
  // namespaceを使ったページごとに固有の設定
  // views: [
  //   {
  //     namespace: 'about',
  //     beforeEnter (data) { // 次ページに入った時
  //       document.querySelector('#common-wrapper').classList.add('-about');
  //     },
  //     afterLeave (data) { // 現在のページの離脱
  //       document.querySelector('#common-wrapper').classList.remove('-about');
  //     }
  //   }
  // ]
});
