<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>登录</title>
		<link rel="stylesheet" href="/Dazzle/Public/css/reset.css" />
		<link rel="stylesheet" href="/Dazzle/Public/css/login.css" />
	</head>
	<body>
		<div class="wrap login_wrap">
			<div class="content">

				<div class="logo"></div>

				<div class="login_box">

					<div class="login_form">
						<div class="login_title">
							登录
						</div>
						<form action="" method="post">

							<div class="form_text_ipt">
								<input name="username" type="text" placeholder="手机号/邮箱">
							</div>
							<div class="ececk_warning"><span>数据不能为空</span></div>
							<div class="form_text_ipt">
								<input name="password" type="password" placeholder="密码">
							</div>
							<div class="ececk_warning"><span>数据不能为空</span></div>
							<div class="form_check_ipt">
								<div class="left check_left">
									<label><input name="" type="checkbox"> 下次自动登录</label>
								</div>
								<div class="right check_right">
									<a href="#">忘记密码</a>
								</div>
							</div>
							<div class="form_btn">
								<button type="button">登录</button>
							</div>
							<div class="form_reg_btn">
								<span>还没有帐号？</span><a href="register.html">马上注册</a>
							</div>
						</form>
						<div class="other_login">
							<div class="left other_left">
								<span>其它登录方式</span>
							</div>
							<div class="right other_right">
								<a href="#">QQ登录</a>
								<a href="#">微信登录</a>
								<a href="#">微博登录</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="/Dazzle/Public/js/jquery.min.js" ></script>
		<script type="text/javascript" src="/Dazzle/Public/js/login.js" ></script>
	</body>
</html>