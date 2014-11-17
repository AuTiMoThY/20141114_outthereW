<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>聯絡我們 ｜ 好野</title>

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

<body class="contact_page">

<div id="ip-container" class="ip-container">

    <!-- main content -->
    <div class="ip-main">
<?php
// -------------------------------
// Header module
// -------------------------------
  include_once 'inc/Header.php';
 ?>
		<div id="pageBanner" class="page_banner"><h1 class="hide_txt">聯絡我們 news</h1></div>



		<article id="main">
			<section class=" wrapper">
				<ul class="tabs">
<!-- 聯絡表單 -->
<li>
    <input type="radio" name="tabs" id="tab1" checked />
    <label for="tab1">聯絡表單</label>
    <div id="tab-content1" class="tab-content">
		<article class="contact1 container">
			<section>
				<p>感謝您的造訪，和我們一起體驗野趣生活。<br>若有任何意見、問題或合作提議、商品經銷意願，都請您直接填寫下方聯絡表單，<br>點擊「確認送出」，我們收到來函後，會儘速與您聯繫。</p>
			</section>
			<section>
				<form action="" class="contact-from">
					<ul>
						<li class="base">
							<label for="u_name" class="ib">姓　　名</label>
							<input type="text" name="u_name" id="u_name" class="ib inp-name">
							<label for="" class="ib">年　齡</label>
							<input type="text" name="" id="" class="inp-age ib" maxlength="3">
							<label for="" class="ib">性　別</label>
							<input type="radio" name="sex" id="sex_m" class="ib inp-sex"><span>男</span>
							<input type="radio" name="sex" id="sex_f" class="ib inp-sex"><span>女</span>
						</li>
						<li>
							<label for="" class="ib">連絡電話</label>
							<input type="text" name="" id="" class="ib">
							<span class="txt2 ib">※填寫範例：02-2718-2230</span>
						</li>
						<li>
							<label for="" class="ib">手機號碼</label>
							<input type="text" name="" id="" class="ib">
							<span class="txt2 ib">※填寫範例：0911-222-333</span>
						</li>
						<li>
							<label for="u_email" class="ib">電子信箱</label>
							<input type="text" name="u_email" id="u_email" class="inp-2 ib">
						</li>
						<li>
							<label for="" class="ib">標　　題</label>
							<input type="text" name="" id="" class="inp-3 ib">
						</li>
						<li class="msg">
							<label for="" class="ib">聯絡內容</label>
							<textarea name="" id="" class="inp-3 ib"></textarea>
						</li>
					</ul>
					<div class="btns">
						<input type="submit" name="" id="" class="form_btn btn submit_btn ib" value="確認送出">
						<input type="reset" name="" id="" class="form_btn btn reset_btn ib" value="取消重填">
					</div>
				</form>
			</section>
		</article><!-- /.contact1  END  !! -->
    </div><!-- /.tab-content  END  !! -->
</li><!-- /聯絡表單  END  !! -->
				
<!-- 訂閱電子報 -->
<li>
    <input type="radio" name="tabs" id="tab2" />
    <label for="tab2">訂閱電子報</label>
    <div id="tab-content2" class="tab-content">
		<article class="contact2 container">
			<section>
				<p>感謝您的造訪，和我們一起體驗野趣生活。<br>若欲訂閱電子報，即時收到最新的資訊，請填寫以下欄位並點選「確認訂閱」。<br>如欲取消訂閱服務，仍請輸入欄位資訊後，點選「取消訂閱」即可。</p>
			</section>
			<section>
				<form action="" class="contact-from">
					<ul>
						<li class="base">
							<label for="e_name" class="ib">姓　　名</label>
							<input type="text" name="e_name" id="e_name" class="ib inp-name">
						</li>
						<li>
							<label for="e_email" class="ib">電子信箱</label>
							<input type="text" name="e_email" id="e_email" class="inp-2 ib">
						</li>
					</ul>
					<div class="btns">
						<input type="submit" name="" id="" class="form_btn btn submit_btn ib" value="確認訂閱">
						<input type="reset" name="" id="" class="form_btn btn reset_btn ib" value="取消訂閱">
					</div>
				</form>
			</section>

		</article><!-- /.contact2  END  !! -->
    </div><!-- /.tab-content  END  !! -->
</li><!-- /訂閱電子報  END  !! -->

<!-- 服務中心 -->
<li>
    <input type="radio" name="tabs" id="tab3" />
    <label for="tab3">服務中心</label>
    <div id="tab-content3" class="tab-content">
		<article class="service container">
			<section>
				<p>為了提供您美好的露營經驗，我們在意每個交到消費者手上的商品。<br>若您購買後，對Outthere商品及其功能或使用方式有任何問題，我們都很樂意並竭誠為您服務。</p>
			</section>

			<section>
				<h2 class="title2"><span class="hide_txt">顧客服務與維修中心</span></h2>
				<p>
				服務專線：<a href="tel:02-2924-7482">02-2924-7482</a> │  電子郵箱：service@outthere.com.tw │  維修地址：234新北市永和區永亨路118號
				</p>
				<p>
				服務時間：週一至週五 09:00~17:00（若在服務時間以外，請利用電子郵箱聯繫）
				</p>
			</section>

			<section>
				<h2 class="title3"><span class="hide_txt">好野國際有限公司</span></h2>
				<p>
				電話：<a href="tel:02-2924-7482">02-2924-7482</a> │  手機：<a href="tel:0953-533-632">0953-533-632</a> │  Email：sufen.liu@outthere.com.tw
				</p>
				<p>
				地址：104 台北市中山區南京東路三段208號4樓
				</p>
			</section>

		</article><!-- /.service  END  !! -->
    </div><!-- /.tab-content  END  !! -->
</li><!-- /服務中心  END  !! -->
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
		$.material.init('.form_btn');
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
