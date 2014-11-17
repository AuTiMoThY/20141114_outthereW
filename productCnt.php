<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>商品列表 ｜ 好野</title>

<?php
// -------------------------------
// SEO
// CSS
// Script in the HEAD
// -------------------------------
  include_once 'inc/HEAD.php';
 ?>
<link rel="stylesheet" href="asset/fancybox/jquery.fancybox.css" />
<?php
//app
  include_once 'inc/Social.php';
 ?>

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body class="productList_page cnt_page">

<div id="ip-container" class="ip-container">

    <!-- main content -->
    <div class="ip-main">
		<!-- <div id="pageBanner" class="page_banner"><h1 class="hide_txt">商品列表 about</h1></div> -->


<?php
// -------------------------------
// Header module
// -------------------------------
  include_once 'inc/Header.php';
 ?>

		<article id="main">
			<section class=" wrapper">
				<aside id="LeftAside">
					<header>商品分類</header>
					<nav class="prod_class_nav prod_class">
						<ul>
							<li id="ProdClass1" class="active"><a href="productList.php" class="prod_class1 btn">帳篷</a></li>
							<li id="ProdClass2"><a href="productList.php" class="prod_class2 btn">睡袋</a></li>
							<li id="ProdClass3"><a href="productList.php" class="prod_class3 btn">配件</a></li>
						</ul>
					</nav>
				</aside>

				<!-- .prodList-wrap  START  !! -->
				<div class="prodList-wrap">
					<span class="path">
						<a href="index.php">首頁</a>&gt;
						<a href="product.php">商品介紹</a>&gt;
						<a href="productList.php">帳篷</a>&gt;
						<span class="txt4">商品名稱在這裡我是商品名稱</span>
					</span>
					<section class="prodCnt-container">
<section class="prodCnt-hd cf">
	<div class="pic ib"><img src="images/temp/prod4.jpg" alt=""></div>
	<!-- .prodCnt-inf  START  !! -->
	<article class="prodCnt-inf ib">
		<section>
			<h1 class="prod_name">
				【LOGOS】綠楓NEOS PANEL 300*300<br>6人帳篷.柏拉圖帳.家庭帳
			</h1>
		</section>
		<section>
			<div class="prod_intro">
				<div class="prod_intro-title ib">簡短介紹／</div>
				<div class="prod_intro-cnt ib">
					採用PANEL系統，骨架更穩固<br>
					優異的通風機能<br>
					採用玻璃纖維營柱
				</div>
			</div>
		</section>
		<!-- 細部照片  START -->
		<section>
			<div class="prod_photo">
				<div class="prod_photo-title">細部照片／</div>
				<div class="prod_photo-list">
					<ul class="cf">
						<li>
							<!-- a tag 放原圖的連結，img 放縮圖的連結 -->
							<a class="fancybox" rel="gallery1" href="images/temp/prod5.jpg" title="">
								<img src="images/temp/prod5.jpg" alt="" />
							</a>
						</li>

						<li>
							<!-- a tag 放原圖的連結，img 放縮圖的連結 -->
							<a class="fancybox" rel="gallery1" href="images/temp/prod5.jpg" title="">
								<img src="images/temp/prod5.jpg" alt="" />
							</a>
						</li>

						<li>
							<!-- a tag 放原圖的連結，img 放縮圖的連結 -->
							<a class="fancybox" rel="gallery1" href="images/temp/prod5.jpg" title="">
								<img src="images/temp/prod5.jpg" alt="" />
							</a>
						</li>

						<li>
							<!-- a tag 放原圖的連結，img 放縮圖的連結 -->
							<a class="fancybox" rel="gallery1" href="images/temp/prod5.jpg" title="">
								<img src="images/temp/prod5.jpg" alt="" />
							</a>
						</li>

						<li>
							<!-- a tag 放原圖的連結，img 放縮圖的連結 -->
							<a class="fancybox" rel="gallery1" href="images/temp/prod5.jpg" title="">
								<img src="images/temp/prod5.jpg" alt="" />
							</a>
						</li>

					</ul>
				</div>
			</div>
		</section><!-- 細部照片  END -->
		<section>
			<div class="prod_price">
				<div class="prod_price-title">商品價格／</div>
				<div class="prod_price-cnt">
					<span class="txt5">12,500</span>元
					<a href="" class="buy_btn btn hide_txt">線上購物</a>
				</div>
			</div>
		</section>
	</article><!-- .prodCnt-inf  END  !! -->
</section><!-- /.prodCnt-hd  END  !! -->

<!-- .prodCnt-data  START  !! -->
<section class="prodCnt-data">
	<ul class="tabs">
	<!-- 商品介紹 -->
	<li>
	    <input type="radio" name="tabs" id="tab1" checked />
	    <label for="tab1">商品介紹/Description</label>
	    <div id="tab-content1" class="tab-content">
	    	<!-- 商品介紹分類內容  START  !! -->
			<div class="prodCnt-data-wrap">
				<div class="">
					<!-- 圖文編輯器 -->
					<img src="images/temp/tem07.jpg" alt="" class="temp">
				</div>
			</div><!-- /商品介紹分類內容  END  !! -->
			<!-- 商品特色 -->
			<div class="prod_feature">
				<img src="images/temp/tem08.jpg" alt="" class="temp">
			</div>
			<div class="btns">
				<a href="productList.php" class="go_list_btn btn">返回列表</a>
			</div>
	    </div><!-- /.tab-content  END  !! -->
	</li><!-- /商品介紹  END  !! -->

	<!-- 產品規格 -->
	<li>
	    <input type="radio" name="tabs" id="tab2" />
	    <label for="tab2">產品規格/Specs</label>
	    <div id="tab-content2" class="tab-content">
	    	<!-- 產品規格分類內容  START  !! -->
			<div class="prodCnt-data-wrap">
				
			</div><!-- /產品規格分類內容  END  !! -->
			<!-- 商品特色 -->
			<div class="prod_feature">
				<img src="images/temp/tem08.jpg" alt="" class="temp">
			</div>
			<div class="btns">
				<a href="productList.php" class="go_list_btn btn">返回列表</a>
			</div>
	    </div><!-- /.tab-content  END  !! -->
	</li><!-- /產品規格  END  !! -->

	<!-- 其他 -->
	<li>
	    <input type="radio" name="tabs" id="tab3" />
	    <label for="tab3">其它/Other</label>
	    <div id="tab-content3" class="tab-content">
	    	<!-- 其他分類內容  START  !! -->
			<div class="prodCnt-data-wrap">
				
			</div><!-- /其他分類內容  END  !! -->
			<!-- 商品特色 -->
			<div class="prod_feature">
				<img src="images/temp/tem08.jpg" alt="" class="temp">
			</div>
			<div class="btns">
				<a href="productList.php" class="go_list_btn btn">返回列表</a>
			</div>
	    </div><!-- /.tab-content  END  !! -->
	</li><!-- /其他  END  !! -->
	</ul>
	<div class="cf"></div>
</section><!-- /.prodCnt-data  END  !! -->

					</section><!-- /.prodCnt-container  END  !! -->
				</div><!-- /.prodList-wrap  END  !! -->
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
<script src="asset/fancybox/jquery.fancybox.js"></script>

<script>
$(function () {
	$("#LeftAside a").hover(function() {
		// $('#LeftAside li').removeClass();
		$(this).parent().addClass('class_name');
	});
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none',
		padding : '0'
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
