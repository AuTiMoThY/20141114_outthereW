<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>最新消息 ｜ 好野</title>

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

<body class="news_page">

<div id="ip-container" class="ip-container">

    <!-- main content -->
    <div class="ip-main">
<?php
// -------------------------------
// Header module
// -------------------------------
  include_once 'inc/Header.php';
 ?>
		<div id="pageBanner" class="page_banner"><h1 class="hide_txt">最新消息 news</h1></div>



		<article id="main">
			<section class=" wrapper">
				<ul class="tabs">
<!-- 新品上市 -->
<li>
    <input type="radio" name="tabs" id="tab1" checked />
    <label for="tab1">新品上市</label>
    <div id="tab-content1" class="tab-content">
		<article class="new_prod_list container">
			<ul>
				<li>
					<a href="news1List.php" class="new_prod_item pic btn btn-default" title="天幕帳棚系列">
						<img src="images/temp/newsProdClass1.jpg" alt="天幕帳棚系列">
						<div class="ripple-wrapper"></div>
					</a>
				</li>
				<li>
					<a href="news1List.php" class="new_prod_item pic btn btn-default" title="square廣場系列">
						<img src="images/temp/newsProdClass2.jpg" alt="square廣場系列">
						<div class="ripple-wrapper"></div>
					</a>
				</li>
				<li>
					<a href="news1List.php" class="new_prod_item pic btn btn-default" title="輕便野炊系列">
						<img src="images/temp/newsProdClass3.jpg" alt="輕便野炊系列">
						<div class="ripple-wrapper"></div>
					</a>
				</li>
				<li>
					<a href="news1List.php" class="new_prod_item pic btn btn-default" title="照明必備特輯">
						<img src="images/temp/newsProdClass4.jpg" alt="照明必備特輯">
						<div class="ripple-wrapper"></div>
					</a>
				</li>
				<li>
					<a href="news1List.php" class="new_prod_item pic btn btn-default" title="樂活背包精選">
						<img src="images/temp/newsProdClass5.jpg" alt="樂活背包精選">
						<div class="ripple-wrapper"></div>
					</a>
				</li>
			</ul>
			<div class="pages_btn">
				<ul>
					<li class="prev"><a href=""></a></li>
					<li class="number"><a href="">1</a></li>
					<li class="number"><a href="">2</a></li>
					<li class="number"><a href="">3</a></li>
					<li class="number"><a href="">4</a></li>
					<li class="number"><a href="">5</a></li>
					<li class="next"><a href=""></a></li>
				</ul>
			</div>
		</article><!-- /.new_prod_list  END  !! -->
    </div><!-- /.tab-content  END  !! -->
</li><!-- /新品上市  END  !! -->
				
<!-- 促銷活動 -->
<li ng-app>
    <input type="radio" name="tabs" id="tab2" />
    <label for="tab2">促銷活動</label>
    <div id="tab-content2" class="tab-content">
		<article class="promotions container">
			<ul id="promotionsList">
				<li class="promotions-item"><a href="newsPromotion.php">
					<section class="promotions-item-pic ib">
						<div class="pic"><img src="images/temp/promotion1.jpg" alt=""></div>
					</section>
					<section class="promotions-item-cnt ib">
						<h3>
							10/1-10/19開幕慶期間全館9折，單筆消費滿1000元還可獲得一張商品抽獎券，有機會抽到品牌風格後背包喔！
						</h3>
						<p class="promotions_txt">
							全台灣首間全系列商品店櫃在中壢大江購物中心隆重開幕！(尖叫~)是的，全台灣目前唯一一家販售配件系列商品的門市，粉絲怎能錯過，大家不要再說買不到了囉！10/1-10/19開幕慶期間全館9折，單筆消費滿1000元還可獲得一張CHUMS商品抽獎券，有機會抽到品牌風格後背包喔！
						</p>
						<div class="promotions_time">
							活動期間：<span>2014-9-20~2014-9-30</span>
						</div>
					</section>
				</a></li>
				<!-- TO 工程師： 依個人習慣看是要用上面區塊套程式還是用json 套程式 -->
				<!-- json 的JS在頁尾的<script>裡。若用json，json格式依個人習慣，只要能將資料正確帶入、畫面顯示正常即可。 -->
				<div id="UsingJson"></div>
			</ul>
			<div class="pages_btn">
				<ul>
					<li class="prev"><a href=""></a></li>
					<li class="number"><a href="">1</a></li>
					<li class="number"><a href="">2</a></li>
					<li class="number"><a href="">3</a></li>
					<li class="number"><a href="">4</a></li>
					<li class="number"><a href="">5</a></li>
					<li class="next"><a href=""></a></li>
				</ul>
			</div>
		</article><!-- /.promotions  END  !! -->
    </div><!-- /.tab-content  END  !! -->
</li><!-- /促銷活動  END  !! -->

<!-- 資訊分享 -->
<li>
    <input type="radio" name="tabs" id="tab3" />
    <label for="tab3">資訊分享</label>
    <div id="tab-content3" class="tab-content">
		<article class="sharing container">
			<ul class="cf">
				<li class="sharing-item ib"><a href="newsSharing.php">
					<figure class="btn btn-default">
						<div class="sharing-pic pic btn"><img src="images/temp/sharing1.jpg" alt=""></div>
						<figcaption>
							<hgroup>
								<h3 class="sharing-title">
									藍天、微風、青草地令人憧憬的野餐派對，在台灣就讓「樂遊時尚」...
								</h3>
								<div class="sharing-time">
									活動期間：<span>2014-9-20~2014-9-30</span>
								</div>
							</hgroup>
							<p class="sharing-txt">
								大家對日劇中，帶著一塊野餐墊坐在櫻花樹下、河川邊、草坪上享用著自製的三明治、沙拉、鮮果汁的景象是不是非常嚮往呢？由日本エイ出版集團台灣子公司 樂活文化所主辦的「樂遊時尚秋日野餐會」活動將一次滿足您所有的想像！
							</p>
						</figcaption>
						<div class="ripple-wrapper"></div>
					</figure>
				</a></li>

				<li class="sharing-item ib"><a href="newsSharing.php">
					<figure class="btn btn-default">
						<div class="sharing-pic pic"><img src="images/temp/sharing2.jpg" alt=""></div>
						<figcaption>
							<hgroup>
								<h3 class="sharing-title">
									【戶外活動分享】提起登高露營的行程，最近最夯的地點應該非小溪...
								</h3>
								<div class="sharing-time">
									活動期間：<span>2014-9-20~2014-9-30</span>
								</div>
							</hgroup>
							<p class="sharing-txt">
								沿途合歡山群峰從早到晚的景色變換，是用雙腳一步步往上前進才能發現的感動！各位粉絲最近也去了哪登山露營嗎？歡迎與大家一起分享你們的私房景點喔！
							</p>
						</figcaption>
						<div class="ripple-wrapper"></div>
					</figure>
				</a></li>
				
				<li class="sharing-item ib"><a href="newsSharing.php">
					<figure class="btn btn-default">
						<div class="sharing-pic pic"><img src="images/temp/sharing3.jpg" alt=""></div>
						<figcaption>
							<hgroup>
								<h3 class="sharing-title">
									【 Nabowa 要來台灣囉】這個秋天想要邀請樂遊時尚的讀者...
								</h3>
								<div class="sharing-time">
									活動期間：<span>2014-9-20~2014-9-30</span>
								</div>
							</hgroup>
							<p class="sharing-txt">
								來來來!一起吃搭火車，吃吃福隆便當，奔跑在芒草之中，來自京都的四人演奏團體，NABOWA這個月底想要邀請愛樂遊的你們一
							</p>
						</figcaption>
						<div class="ripple-wrapper"></div>
					</figure>
				</a></li>
				
				<li class="sharing-item ib"><a href="newsSharing.php">
					<figure class="btn btn-default">
						<div class="sharing-pic pic"><img src="images/temp/sharing2.jpg" alt=""></div>
						<figcaption>
							<hgroup>
								<h3 class="sharing-title">
									藍天、微風、青草地令人憧憬的野餐派對，在台灣就讓「樂遊時尚」...
								</h3>
								<div class="sharing-time">
									活動期間：<span>2014-9-20~2014-9-30</span>
								</div>
							</hgroup>
							<p class="sharing-txt">
								大家對日劇中，帶著一塊野餐墊坐在櫻花樹下、河川邊、草坪上享用著自製的三明治、沙拉、鮮果汁的景象是不是非常嚮往呢？由日本エイ出版集團台灣子公司 樂活文化所主辦的「樂遊時尚秋日野餐會」活動將一次滿足您所有的想像！
							</p>
						</figcaption>
						<div class="ripple-wrapper"></div>
					</figure>
				</a></li>

				<li class="sharing-item ib"><a href="newsSharing.php">
					<figure class="btn btn-default">
						<div class="sharing-pic pic"><img src="images/temp/sharing2.jpg" alt=""></div>
						<figcaption>
							<hgroup>
								<h3 class="sharing-title">
									藍天、微風、青草地令人憧憬的野餐派對，在台灣就讓「樂遊時尚」...
								</h3>
								<div class="sharing-time">
									活動期間：<span>2014-9-20~2014-9-30</span>
								</div>
							</hgroup>
							<p class="sharing-txt">
								大家對日劇中，帶著一塊野餐墊坐在櫻花樹下、河川邊、草坪上享用著自製的三明治、沙拉、鮮果汁的景象是不是非常嚮往呢？由日本エイ出版集團台灣子公司 樂活文化所主辦的「樂遊時尚秋日野餐會」活動將一次滿足您所有的想像！
							</p>
						</figcaption>
						<div class="ripple-wrapper"></div>
					</figure>
				</a></li>

				<li class="sharing-item ib"><a href="newsSharing.php">
					<figure class="btn btn-default">
						<div class="sharing-pic pic"><img src="images/temp/sharing1.jpg" alt=""></div>
						<figcaption>
							<hgroup>
								<h3 class="sharing-title">
									藍天、微風、青草地令人憧憬的野餐派對，在台灣就讓「樂遊時尚」...
								</h3>
								<div class="sharing-time">
									活動期間：<span>2014-9-20~2014-9-30</span>
								</div>
							</hgroup>
							<p class="sharing-txt">
								大家對日劇中，帶著一塊野餐墊坐在櫻花樹下、河川邊、草坪上享用著自製的三明治、沙拉、鮮果汁的景象是不是非常嚮往呢？由日本エイ出版集團台灣子公司 樂活文化所主辦的「樂遊時尚秋日野餐會」活動將一次滿足您所有的想像！
							</p>
						</figcaption>
						<div class="ripple-wrapper"></div>
					</figure>
				</a></li>

				<li class="sharing-item ib"><a href="newsSharing.php">
					<figure class="btn btn-default">
						<div class="sharing-pic pic"><img src="images/temp/sharing2.jpg" alt=""></div>
						<figcaption>
							<hgroup>
								<h3 class="sharing-title">
									【戶外活動分享】提起登高露營的行程，最近最夯的地點應該非小溪...
								</h3>
								<div class="sharing-time">
									活動期間：<span>2014-9-20~2014-9-30</span>
								</div>
							</hgroup>
							<p class="sharing-txt">
								沿途合歡山群峰從早到晚的景色變換，是用雙腳一步步往上前進才能發現的感動！各位粉絲最近也去了哪登山露營嗎？歡迎與大家一起分享你們的私房景點喔！
							</p>
						</figcaption>
						<div class="ripple-wrapper"></div>
					</figure>
				</a></li>
				
				<li class="sharing-item ib"><a href="newsSharing.php">
					<figure class="btn btn-default">
						<div class="sharing-pic pic"><img src="images/temp/sharing3.jpg" alt=""></div>
						<figcaption>
							<hgroup>
								<h3 class="sharing-title">
									【 Nabowa 要來台灣囉】這個秋天想要邀請樂遊時尚的讀者...
								</h3>
								<div class="sharing-time">
									活動期間：<span>2014-9-20~2014-9-30</span>
								</div>
							</hgroup>
							<p class="sharing-txt">
								來來來!一起吃搭火車，吃吃福隆便當，奔跑在芒草之中，來自京都的四人演奏團體，NABOWA這個月底想要邀請愛樂遊的你們一
							</p>
						</figcaption>
						<div class="ripple-wrapper"></div>
					</figure>
				</a></li>
				
				<li class="sharing-item ib"><a href="newsSharing.php">
					<figure class="btn btn-default">
						<div class="sharing-pic pic"><img src="images/temp/sharing2.jpg" alt=""></div>
						<figcaption>
							<hgroup>
								<h3 class="sharing-title">
									藍天、微風、青草地令人憧憬的野餐派對，在台灣就讓「樂遊時尚」...
								</h3>
								<div class="sharing-time">
									活動期間：<span>2014-9-20~2014-9-30</span>
								</div>
							</hgroup>
							<p class="sharing-txt">
								大家對日劇中，帶著一塊野餐墊坐在櫻花樹下、河川邊、草坪上享用著自製的三明治、沙拉、鮮果汁的景象是不是非常嚮往呢？由日本エイ出版集團台灣子公司 樂活文化所主辦的「樂遊時尚秋日野餐會」活動將一次滿足您所有的想像！
							</p>
						</figcaption>
						<div class="ripple-wrapper"></div>
					</figure>
				</a></li>

				<li class="sharing-item ib"><a href="newsSharing.php">
					<figure class="btn btn-default">
						<div class="sharing-pic pic"><img src="images/temp/sharing2.jpg" alt=""></div>
						<figcaption>
							<hgroup>
								<h3 class="sharing-title">
									藍天、微風、青草地令人憧憬的野餐派對，在台灣就讓「樂遊時尚」...
								</h3>
								<div class="sharing-time">
									活動期間：<span>2014-9-20~2014-9-30</span>
								</div>
							</hgroup>
							<p class="sharing-txt">
								大家對日劇中，帶著一塊野餐墊坐在櫻花樹下、河川邊、草坪上享用著自製的三明治、沙拉、鮮果汁的景象是不是非常嚮往呢？由日本エイ出版集團台灣子公司 樂活文化所主辦的「樂遊時尚秋日野餐會」活動將一次滿足您所有的想像！
							</p>
						</figcaption>
						<div class="ripple-wrapper"></div>
					</figure>
				</a></li>

			</ul>
			<div class="pages_btn">
				<ul>
					<li class="prev"><a href=""></a></li>
					<li class="number"><a href="">1</a></li>
					<li class="number"><a href="">2</a></li>
					<li class="number"><a href="">3</a></li>
					<li class="number"><a href="">4</a></li>
					<li class="number"><a href="">5</a></li>
					<li class="next"><a href=""></a></li>
				</ul>
			</div>
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
		$.material.init('.new_prod_item');
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
		// 用json套程式時，將上面那行刪除改用下行
		// $("#promotionsList").html(html);
	}
	$.getJSON('ajax/promotions.json', function(data) {
		json = data;
		show(json);
	});

	if (location.hash.indexOf("#tab3") != -1) {
		console.log(location.hash.substr(0));
		$("#tab3").prop('checked', 'true');
	}
	if (location.hash.indexOf("#tab2") != -1) {
		console.log(location.hash.substr(0));
		$("#tab2").prop('checked', 'true');
	}
	if (location.hash.trim() == "") {
		console.log(location.hash.substr(0));
		$("#tab1").prop('checked', 'true');
	};
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
