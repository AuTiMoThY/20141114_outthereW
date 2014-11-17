<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="zh"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="zh"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="zh"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="zh"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="zh"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Outthere ｜ 好野</title>

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

<body class="index_page">

<div id="ip-container" class="ip-container">

    <!-- initial header -->
    <header class="ip-header">

        <h1 class="ip-logo">
            <!-- <svg class="ip-inner" width="100%" height="100%" viewBox="0 0 300 160" preserveAspectRatio="xMidYMin meet" aria-labelledby="logo_title">
                <title id="logo_title">Delightful Demonstrations by Codrops</title>
                <path d="...our super-long path..." />
            </svg> -->
            <!-- <img src="images/outthere-logo.png" alt=""> -->
            <?php include("images/outthere-logo.svg"); ?>
        </h1>

        <div class="ip-loader">
            <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            </svg>
        </div>

    </header>

    <!-- main content -->
    <div class="ip-main">
		<!-- banner -->
		<!-- #hcarousel  START  !! -->
		<div id="hcarousel" class="clearfix">
			<div class="flexslider carousel">
				<ul class="slides">
			
					<li style="background-image: url('images/banner1.jpg');" class="">
				  		<!--[if IE 8]><div class="homeslide"><img src="images/banner1.jpg" alt="" /></div><![endif]-->
						<a href="javascript:void 0;" class="slidelink"></a> 
					</li>
			
					<li style="background-image: url('images/banner2.jpg');" class="">
						<!--[if IE 8]><div class="homeslide"><img src="images/banner2.jpg" alt="" /></div><![endif]-->
						<a href="javascript:void 0;" class="slidelink"></a> 
					</li>
			
					<li style="background-image: url('images/banner3.jpg');" class="">
						<!--[if IE 8]><div class="homeslide"><img src="images/banner3.jpg" alt="" /></div><![endif]-->
						<a href="javascript:void 0;" class="slidelink"></a> 
					</li>
			
					<li style="background-image: url('images/banner4.jpg');" class="">
						<!--[if IE 8]><div class="homeslide"><img src="images/banner4.jpg" alt="" /></div><![endif]-->
						<a href="javascript:void 0;" class="slidelink"></a> 
					</li>
			
					<li style="background-image: url('images/banner5.jpg');" class="">
						<!--[if IE 8]><div class="homeslide"><img src="images/banner5.jpg" alt="" /></div><![endif]-->
						<a href="javascript:void 0;" class="slidelink"></a> 
					</li>
			
				</ul>
			<div id="hcarouselcontrols">
				<div class="well">
					<!--  實際由JS產生
					<ol class="flex-control-nav flex-control-paging"></ol> 
					<ul class="flex-direction-nav">
						<li><a class="flex-prev" href="#">Previous</a></li>
						<li><a class="flex-next" href="#">Next</a></li>
					</ul>
					-->
				</div>
			</div>
			</div><!-- /.flexslider carousel  END  !! -->
		</div><!-- /#hcarousel  END  !! -->


<?php
// -------------------------------
// Header module
// -------------------------------
  include_once 'inc/Header.php';
 ?>

		<article id="main">
			<section class="index-newsBlock wrapper">
				<ul class="cf">
					<li class="news_block-1 btn"><a href="news.php">
						<div class="pic">
							<img src="images/temp/tem01.jpg" alt="">
						</div>
					</a></li>
					<li class="news_block-2 btn"><a href="news.php">
						<div class="pic">
							<img src="images/temp/tem02.jpg" alt="">
						</div>
					</a></li>
					<li class="news_block-3 btn"><a href="news.php">
						<div class="pic">
							<img src="images/temp/tem03.jpg" alt="">
						</div>
					</a></li>
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

<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once 'inc/GA.php';
 ?>

</body>
</html>
