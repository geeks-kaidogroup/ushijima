$(function() {

	/**
	 * ページ内スクロール
	 * #の付いたリンクを自動的にスクロール化する
	 */
	$('a[href^=#]').click(function(){
		var speed = 500;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").not(':animated').animate({scrollTop:position}, speed, "swing");
		return false;
	});

});
