// head内のタグを変更
function replaceHeadTags(target) {
  var $newPageHead = $('<head />').html($.parseHTML(target.html.match(/<head[^>]*>([\s\S.]*)<\/head>/i)[0], document, true));
  var headTags = [
    "meta[name='keywords']",
    "meta[name='description']",
    "meta[property^='og']",
    "meta[property^='fb']",
    "meta[name^='twitter']",
    "meta[name='robots']",
    "meta[itemprop]",
    "link[itemprop]",
    "link[rel='prev']",
    "link[rel='next']",
    "link[rel='canonical']",
  ].join(',');
  $('head').find(headTags).remove();
  $newPageHead.find(headTags).appendTo('head');
}

//Googleアナリティクス、gtagに送信
var gaPush = function () {
  if (typeof ga === 'function') {
    ga('send', 'pageview', location.pathname);
  }

  if (typeof gtag === 'function') {
    gtag('config', 'トラッキングID', {'page_path': location.pathname});
  }
}

// リンクをクリックした時
var $links = $('a[href]');
$links.each(function (index, element) {
  // console.log(element);
  $(element).on('click', function (e) {
    noLinkFunc(e);
    ankerLinkFunc(e);
  });
});

// リンク先が現在と同じページの場合、リロードしない
var noLinkFunc = function (e) {
  if (e.currentTarget.href === window.location.href) {
    e.preventDefault();
    e.stopPropagation();
  }
};

// urlに#がある場合、同一ページでなければbarbaを有効に
var ankerLinkFunc = function (e) {
  let url = location.protocol + '//' + location.host + location.pathname;
  let extract_hash = e.currentTarget.href.replace(/#.*$/,"");
  if (e.currentTarget.href.startsWith(location.protocol + '//' + location.host)) {
    if (e.currentTarget.href.indexOf('#') > -1 && extract_hash != url ){
      return false;
    }
  }
};
