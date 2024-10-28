$(function () {
    $('#js-hamburger-menu, .navigation__link').on('click', function () {
      $('.navigation').slideToggle(500)
      $('.hamburger-menu').toggleClass('hamburger-menu--open')
    });
  });

// ページ内のスムーススクロール
jQuery(function () {
  jQuery('a[href*="#"]').click(function (e) {
    const target = jQuery(this.hash === "" ? "html" : this.hash);
    if (target.length) {
      e.preventDefault();
      const headerHeight = jQuery("header").outerHeight();
      const position = target.offset().top - headerHeight - 20;
      jQuery("html, body").animate({ scrollTop: position }, 500, "swing");

      if (!target.is("html")) {
        // URLにハッシュを含める
        history.pushState(null, '', this.hash);
      }
    }
  });
});

// 別ページ遷移後のスムーススクロール
$(function(){
	//現在のページURLのハッシュ部分を取得
	const hash = location.hash;

	//ハッシュ部分がある場合の条件分岐
	if(hash){
		//ページ遷移後のスクロール位置指定
		$("html, body").stop().scrollTop(0);
		//処理を遅らせる
		setTimeout(function(){
			//リンク先を取得
			const target = $(hash),
			//リンク先までの距離を取得
			position = target.offset().top;
			//指定の場所までスムーススクロール
			$("html, body").animate({scrollTop:position}, 500, "swing");
		});
	}
});