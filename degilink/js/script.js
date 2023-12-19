// JavaScript Document
$(".openbtn").click(function () {//ボタンがクリックされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $(".gnav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});


$(function () {
$('.slick').slick({
  dots: false,
  infinite: true,
  autoplay: true,
  autoplaySpeed:4000,
  arrows:false,
  speed: 500,
  fade: true,
});
})
