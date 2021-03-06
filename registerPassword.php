<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="font_xsdr5kbxmoswcdi/iconfont.css"/>
		<link rel="stylesheet" type="text/css" href="css/register.css"/>
		<script src="js/jquery.js"></script>
		<script type="text/javascript"></script>
		<script src="js/register.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<div class="all">
			<div class="head">
				<img src="img/milogo.png"/>
				<h4>注册小米账号</h4>
				<form action="php/phone.php" method="post" style="display: none;">
					<div class="countell" id="countell">
						<p>国家/地区</p>
						<div id="CN"><span id="coun">中国</span><i class="iconfont icon-jiantou-xia-kongxin-yuanxing"></i></div>
						
						<div id="box">
						    <input type="text"/>
						    <ul id="list"></ul>
						</div>
						
						<p id="pd">成功注册账号后，国家/地区将不能被修改</p>
						<p id="phone">手机号码</p>
						<div id="tell" class="clearfix">
							<span id="code">+86</span>
							<i class="iconfont icon-shixinxiajiantou"></i>
						</div>
						<input type="text" id="tellTxt" placeholder="请输入手机号" name="phone" />
						
						<p id="tell-phone"></p>
						<div id="box-code">
						    <input type="text"/>
						    <div id="list-code">
						    </div>
						</div>
						<div id="p-c"></div>
					
					</div>
					<input type="button" value="立即注册" class="promptly" id="promptly"></input>
					<div class="regbox countell cipher" id="regbox">
						<p>我们已经发送短信至<span id="cpr-phone"></span></p>
						<p>请输入短信中的验证码</p>
						<div class="inputWrap">
							<input type="text" id="code" value="" placeholder="请输入验证码" class="text" name="code" />
							<input type="button" id="zphone" value="重新发送" />
							
						</div>
					</div>
					<div id="regboxBtn"  style="display: none;">
						<input type="submit" value="下一步" class="promptly" id="regboxBtnNext" ></input>
						<input type="button" value="取消" class="promptly" id="regboxBtnBack"></input>
					</div>
				</form>	
				<form action="php/password.php" method="post">				
					<div class="cipher countell" id="cipher" style="display: block;">
						<p>您注册的手机号为<span id="cpr-phone1">

							<?php
								session_start();
								echo $_SESSION['name'];
							?>
								
							</span></p>
						<p>请设置您的密码：</p>
						<input type="password" id="passWord" value="" placeholder="请输入密码" name="password" />
						<input type="password" id="passWord1" value="" placeholder="请输入确认密码"/>
						<p id="cpr-paswrd">密码长度8~16位，数字、字母必须包含两种</p>
					</div>

					<input type="submit" value="提交" class="promptly" id="promptly1" style="display: block;"></input>
					<div class="once" id="once">注册账号即表示您同意并愿意遵守小米<a> 用户协议</a>和<a> 隐<br />私政策</a></div>
				</form>	
			</div>
			<div class="foot">
				<ul>
					<li id="lis1">简体</li><span>|</span>
					<li>繁体</li><span>|</span>
					<li>English</li><span>|</span>
					<li>常见问题</li>
				</ul>
				<div>小米公司版权所有-京ICP备10046444-<img src="img/ghs.png"/>京公网安备11010802020134号-京ICP证110507号</div>
			</div>
		</div>
	</body>
</html>
