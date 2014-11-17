<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>促銷活動 ｜ 好野</title>

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

<body class="news_page cnt_page promotions_page">

<div id="ip-container" class="ip-container">

    <!-- main content -->
    <div class="ip-main">
<?php
// -------------------------------
// Header module
// -------------------------------
  include_once 'inc/Header.php';
 ?>

		<article id="main">
			<section class=" wrapper">
				<span class="path">
					<a href="index.php">首頁</a>&gt;
					<a href="news.php">最新消息</a>&gt;
					<a href="news.php#tab2">促銷活動</a>&gt;
					<span class="txt4">周末也餐派對 取活動名稱前10字</span>
				</span>
				<ul class="tabs">
<!-- 新品上市 -->
<li>
    <!-- <input type="radio" name="tabs" id="tab1" checked /> -->
    <label for="tab1" onclick="javascript: location.href = 'news.php#tab1';">新品上市</label>
    <div id="tab-content1" class="tab-content">
		<article class="new_prod_list container">

		</article><!-- /.new_prod_list  END  !! -->
    </div><!-- /.tab-content  END  !! -->
</li><!-- /新品上市  END  !! -->
				
<!-- 促銷活動 -->
<li ng-app>
    <input type="radio" name="tabs" id="tab2" checked />
    <label for="tab2">促銷活動</label>
    <div id="tab-content2" class="tab-content">
		<article class="promotions container">
			<div class="promotions_cnt_block">
				<header>
					<h1>
						周末野餐派對 配件3件85折周末野餐派對 配件3件85折周末野餐派對 配件3件85折周末野餐派對 配件3件85折周末野餐派對 配件3件85折周末野餐派對 配件3件85折周末野餐派對 配件3件85折周末野餐派對 配件3件85折周末野餐派對 配件3件85折周末野餐派對 配件3件85折周末野餐派對 配件3件85折周末野餐派對 配件3件85折周末野餐派對 配件3件85折
					</h1>
					<div class="promotions_time">
						活動期間：<span>2014-9-20~2014-9-30</span>
					</div>
				</header>
				<section>
					<!-- 圖文編輯器 -->
					<img src="images/temp/tem10.jpg" alt="" class="temp">
				</section>
				<div class="btns">
					<a href="news.php#tab2" class="go_list_btn btn">返回列表</a>
				</div>
			</div>
		</article><!-- /.promotions  END  !! -->
    </div><!-- /.tab-content  END  !! -->
</li><!-- /促銷活動  END  !! -->

<!-- 資訊分享 -->
<li>
    <!-- <input type="radio" name="tabs" id="tab3" /> -->
    <label for="tab3" onclick="javascript: location.href = 'news.php#tab3';">資訊分享</label>
    <div id="tab-content3" class="tab-content">
		<article class="sharing container">

		</article><!-- /.sharing  END  !! -->
    </div><!-- /.tab-content  END  !! -->
</li><!-- /資訊分享  END  !! -->
				</ul>
				<div class="cf"></div>
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

	if( userAgent.match(/(msie|MSIE)/) || userAgent.match(/(T|t)rident/)  ) {
		// console.log(' ie')
	}else {
		// console.log('not ie');
		$.material.init();
	}
	
	var json;
	function show(data) {
		var html = "";
		for (var i = 0; i < data.length; i++) {
			html += "<li class=\"promotions-item\"><a href=\"newsPromotion.php\">";
			html += "	<section class=\"promotions-item-pic ib\">";
			html +=	"		<div class=\"pic\"><img src=\"images/temp/" + data[i].promotionsPic + "\" alt=\"\"></div>";
			html += "	</section>";
			html += "	<section class=\"promotions-item-cnt ib\">";
			html += "		<h3>" + data[i].promotionsCntH3 + "</h3>";
			html += "		<p class=\"promotions_txt\">" + data[i].promotionsCntTxt + "</p>";
			html += "		<div class=\"promotions_time\">活動期間：" + data[i].promotionsCntTime + "</span></div>";
			html += "	</section>";
			html += "</a></li>";
		};
		$("#UsingJson").html(html);
	}
	$.getJSON('ajax/promotions.json', function(data) {
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
