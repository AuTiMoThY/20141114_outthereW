<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>商品介紹 ｜ 好野</title>

<?php
// -------------------------------
// SEO
// CSS
// Script in the HEAD
// -------------------------------
  include_once 'inc/HEAD.php';
 ?>


<?php
//app
  include_once 'inc/Social.php';
 ?>

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body class="product_page">

<div id="ip-container" class="ip-container">

    <!-- main content -->
    <div class="ip-main">
<?php
// -------------------------------
// Header module
// -------------------------------
  include_once 'inc/Header.php';
 ?>
		<div id="pageBanner" class="page_banner"><h1 class="hide_txt">商品介紹 Produts</h1></div>



		<article id="main">
			<section class="intro-wrap wrapper">
				<div class="intro-container">
					<div class="intro-block ib">
						<div class="intro-txt">
							<h2 id="IntroHeader" class="intro1 hide_txt"><span>帳篷 / Tents</span></h2>
							<!-- <h2 id="Intro1" class="intro2 hide_txt">配件 / accessories</h2> -->
							<!-- <h2 id="Intro1" class="intro3 hide_txt">配件 / accessories</h2> -->
							<p id="IntroTxt">
								<span>露營的第一件事情就是把帳篷搞定。除了考慮露營人數外，還要依據不同的季節、氣候、溫度、環境、戶外活動類型…等條件，來選擇一頂合適的帳篷，露營才能盡興。</span>
							</p>
						</div>
						<div id="IntroPicS" class="pic" style="background-image: url('images/temp/tem06.jpg')"></div>
					</div>
					<div class="intro-pic ib">
						<div id="IntroPic" class="pic" style="background-image: url('images/temp/tem06.jpg')"></div>
					</div>
				</div>
			</section>
			<section class="prod_class wrapper">
				<header><h1 class="hide_txt">商品類別 / PRODUCT CATEGORY</h1></header>
				<ul class="cf">
					<li class="active">
						<a href="productList.php" id="ClassBtn1" class="prod_classbtn prod_class1 btn btn-default">帳篷 / <span class="txt1">Tents</span></a>
					</li>
					<li>
						<a href="productList.php" id="ClassBtn2" class="prod_classbtn prod_class2 btn btn-default">睡袋 / <span class="txt1">Sleeping bags</span></a>
					</li>
					<li>
						<a href="productList.php" id="ClassBtn3" class="prod_classbtn prod_class3 btn btn-default">配件 / <span class="txt1">Accessories</span></a>
					</li>
				</ul>
			</section>
		</article>

<?php
// -------------------------------
// Footer module
// -------------------------------
  include_once 'inc/Footer.php';
 ?>

    </div><!-- /.ip-main  END  !! -->
</div><!-- /container -->


<?php
// -------------------------------
// Script in the FOOT
// -------------------------------
  include_once 'inc/ScriptFOOT.php';
 ?>
<script>
$(function(){
	var json;
	function removeIntro() {
		$("#IntroHeader span").remove();
		$("#IntroTxt span").remove();
		$(".intro-container .pic").attr('style', '');
		$(".prod_classbtn").parent().removeClass('active');
	}
	function show(data){
		$("#ClassBtn1").stop().hover(function() {
			removeIntro();
			$(this).parent().addClass('active');
			$("#IntroHeader").removeClass().addClass('intro1 hide_txt').append("<span>" + data[0].introHeader + "</span>");
			$("#IntroTxt").append("<span>" + data[0].introTxt + "</span>");
			$(".intro-container .pic").attr('style', 'background-image: url(\"images/temp/' + data[0].introPic + '\")');
		}, function() {
			/* Stuff to do when the mouse leaves the element */
		});
		$("#ClassBtn2").stop().hover(function() {
			removeIntro();
			$(this).parent().addClass('active');
			$("#IntroHeader").removeClass().addClass('intro2 hide_txt').append("<span>" + data[1].introHeader + "</span>");
			$("#IntroTxt").append("<span>" + data[1].introTxt + "</span>");
			$(".intro-container .pic").attr('style', 'background-image: url(\"images/temp/' + data[1].introPic + '\")');
		}, function() {
			/* Stuff to do when the mouse leaves the element */
		});
		$("#ClassBtn3").stop().hover(function() {
			removeIntro();
			$(this).parent().addClass('active');
			$("#IntroHeader").removeClass().addClass('intro3 hide_txt').append("<span>" + data[2].introHeader + "</span>");
			$("#IntroTxt").append("<span>" + data[2].introTxt + "</span>");
			$(".intro-container .pic").attr('style', 'background-image: url(\"images/temp/' + data[2].introPic + '\")');
		}, function() {
			/* Stuff to do when the mouse leaves the element */
		});
	}
	$.getJSON('ajax/prodClass.json', function(data) {
		json = data;
		show(json);
	});
})
</script>

<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once 'inc/GA.php';
 ?>

</body>
</html>
