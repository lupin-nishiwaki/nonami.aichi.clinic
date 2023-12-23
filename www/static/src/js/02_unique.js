function sptitText() {
  $('.js_split_txt').each(function() {
    var text = $.trim(this.textContent),
    html = "";
    text.split("").forEach(function(v) { html += "<span>" + v + "</span>"; });
    this.innerHTML = html;
  });
}
