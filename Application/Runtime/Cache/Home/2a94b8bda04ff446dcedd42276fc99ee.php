<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dazzle_homepage</title>
<!-- Load CSS -->
<link rel="stylesheet" type="text/css" href="/Dazzle/Public/css/style.css" />
<!-- Load Icon Font -->
<link rel="stylesheet" type="text/css" href="/Dazzle/Public/css/iconfont.css" />
<!-- Load jCarousel js -->
<load type="text/javascript" src="/Dazzle/Public/js/jquery.min.js">

<load type="text/javascript" src="/Dazzle/Public/js/jquery.jcarousel.js">
<!-- Load MixItUup js -->
<load type="text/javascript" src="/Dazzle/Public/js/jquery.mixitup.js">
<!-- Load js -->
<load type="text/javascript" src="/Dazzle/Public/js/custom.js">
</head>
<!-- Start Body -->
	<style type="text/css">
 		.ultype{
 			text-align: center;
 			padding-top: 15px;
 			font-family: "Microsoft YaHei";
 			font-size: 45px;
 		}
 		.ulnumber{
 			text-align: center;
 			font-family: "Microsoft YaHei";
 			/*font-size: 30px;*/
 		}
 		.hoverEff{
 			/*font-size: 30px;*/
 			color: #FFF;
 		}
 		.icon{
 			font-size: 80px;
			color: #FFF;
			line-height: 210px;
			text-align: center;
 		}
 		.iconfont{
 			font-family:"iconfont" !important;
  			font-size:80px;font-style:normal;
  			color: #FFF;
  			line-height: 210px;
			text-align: center;
 		}

	</style>

<body>
	<!-- Start Menu -->
	<div class="menubar" data-scroll="true">
		<a href="#" class="logo"></a>
		<ul class="mainmenu">
			<li class="active"><a href="#exercise">我的运动</a></li>
			<li><a href="socialization.html">社交圈</a></li>
			<li><a href="activity.html">活动</a></li>
		</ul>
	</div>
	<!-- End Menu -->

	<!-- Start Home -->
	<a class="scroll" id="home"></a>
	<div class="home hero">
		<div class="overlay"></div>
		<div class="herowrapper">
			<h1>More exercise，More health <b class="rotate color">user,administrator</b>.</h1>
		</div>
		<a href="javascript:void(0);" class="scrolldown">
			<h3>More about me</h3>
			<div data-icon="&#xe017;" class="icon"></div>
		</a>
	</div>
	<!-- End Home -->

	<!-- Start BlockQuote -->
	<div class="blockquote main">
		<blockquote> <b>运动</b>，是一切生命的源泉。</blockquote>
	</div>
	<!-- End BlockQuote -->



	<!-- Start Section Divider -->
	<div class="section divider">
		<h2 id="servicestitle">身体状况</h2>
		<a class="scroll" id="exercise"></a>
	</div>
	<!-- End Section Divider -->

	<!-- Start Content -->
	<div class="content">

		<!-- Start Main Paragraph -->
		<p class="main commom-gray" id="services">Hover over any of your conditions to find out more.</p>
		<!-- Start Main Paragraph -->
		<div class="servicesitem">
			<div class="front">
				<div class="iconfont">&#xe601;</div>
				<p>你的身高</p>
			</div>
			<div class="back">
				<h3>178cm</h3>
			</div>
		</div>

		<div class="servicesitem">
			<div class="front">
				<div class="iconfont">&#xe602;</div>
				<p>你的当前体重</p>
			</div>
			<div class="back">
				<h3>65kg</h3>
			</div>
		</div>

		<div class="servicesitem">
			<div class="front">
				<div class="iconfont">&#xe600;</div>
				<p>你的目标体重</p>
			</div>
			<div class="back">
				<h3>62kg</h3>
			</div>
		</div>

		<!-- Clear :) -->
		<div class="clear"></div>
	</div>
	<!-- End Content -->

	<!-- End Content -->

	<!-- Start Section Divider -->
	<div class="section divider">
		<h2 id="servicestitle">数据中心</h2>
		<a class="scroll" id="socialization"></a>
	</div>
	<!-- End Section Divider -->

	<!-- Start Content -->
	<div class="clear"></div>

	<ul class="portfolio">
		<li class="item design">
			<div class="portfolioitem">
			<p class="ultype">运动目标达成</p>
				<div class="portfoliohover">
					<div class="info">
						<h5 class="ulnumber">72%</h5>
					</div>
				</div>
			</div>
		</li>

		<li class="item design">
			<div class="portfolioitem">
				<!-- <img src="img/portfolio2.jpg"> -->
				<p class="ultype">“零夜”安眠共计</p>
				<div class="portfoliohover">
					<div class="info">
						<h5 class="ulnumber">20天</h5>
					</div>
				</div>
			</div>
		</li>

		<li class="item design">
			<div class="portfolioitem">
				<p class="ultype">BMI偏轻</p>
				<div class="portfoliohover">
					<div class="info">
						<h5>17.6</h5>
					</div>
				</div>
			</div>
		</li>

		<li class="item branding">
			<div class="portfolioitem">
				<p class="ultype">累计运动距离</p>
				<div class="portfoliohover">
					<div class="info">
						<h5 class="ulnumber">30千米</h5>
					</div>
				</div>
			</div>
		</li>

		<li class="item branding">
			<div class="portfolioitem">
				<p class="ultype">累计运动时间</p>
				<div class="portfoliohover">
					<div class="info">
						<h5 class="ulnumber">40小时</h5>
					</div>
				</div>
			</div>
		</li>

		<li class="item illustration">
			<div class="portfolioitem">
				<p class="ultype">累计燃烧热量</p>
				<div class="portfoliohover">
					<div class="info">
						<h5 class="ulnumber">500卡</h5>
					</div>
				</div>
			</div>
		</li>
	</ul>

	<!-- Clear :) -->
	<div class="clear"></div>
	<!-- End Content -->




	<footer class="footer" style="margin-top: 40px;">
		<a href="#"><h6>Contruct me with 1921762406@qq.com</h6></a>
	</footer>

</body>
<!-- End Body -->
</html>