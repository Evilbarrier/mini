<?php 
	session_start();
	//var_dump($_SESSION);
?> 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="icon/font_w1k4m67ck2pm0a4i/iconfont.css"/>
		<link rel="stylesheet" type="text/css" href="css/cart.css"/>
		<link rel="stylesheet" type="text/css" href="css/shopping.css"/>
		<script src="js/cart.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<div class="site-header site-mini-header">
		    <div class="container">
		        <div class="header-logo">
		            <a class="logo ir" href="index.html" title="小米官网" >小米官网</a>
		        </div>
		        <div class="header-title has-more" id="J_miniHeaderTitle"><h2>我的购物车</h2><p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p></div>
		        <div class="topbar-info">
		        	<a class="link" href="login.html" data-needlogin="true" id="J_userInfo"><?php  echo empty($_SESSION['name'])? '请登录' : '你好'.$_SESSION['name'] ." | "."<a href='php/del.php'>退出</a>"  ?></a><span class="sep">|</span><a class="link" href="register.html" >注册</a>        
		        </div>
		    </div>
		</div>
		<section id="shopping">
			<table>
				<thead>
					<tr>
						<th>
							<input type="checkbox" id="selectAll" />
							<label for="selectAll">全选</label>
						</th>
						<th>商品信息</th>
						<th>单价</th>
						<th>数量</th>
						<th>小计</th>
					</tr>
				</thead>
				<tbody>
					<tr colspan="7" class="space"></tr>
				</tbody>
				<tbody class="main">
					<tr>
						<td>
							<input type="checkbox" id="single" />
							<label for="single"><img src="images2/3-80.jpg"/></label>
						</td>
						<td>
							<p>小米运动蓝牙耳机mini</p>
						</td>
						<td>210.00元</td>
						<td>
							<span>-</span>
							<strong>0</strong>
							<span>+</span>
						</td>
						<td>0.00元</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" />
							<label><img src="images2/wlyx80.jpg"/></label>
						</td>
						<td>
							<p>小米网络音响</p>
						</td>
						<td>227.00元</td>
						<td>
							<span>-</span>
							<strong>0</strong>
							<span>+</span>
						</td>
						<td>0.00元</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" />
							<label><img src="images2/phcplus80.jpg"/></label>
						</td>
						<td>
							<p>九号平衡车</p>
						</td>
						<td>780.00元</td>
						<td>
							<span>-</span>
							<strong>0</strong>
							<span>+</span>
						</td>
						<td>0.00元</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" />
							<label><img src="images2/xp80_49.jpg"/></label>
						</td>
						<td>
							<p>小米电视4A 49英寸</p>
						</td>
						<td>3590.00元</td>
						<td>
							<span>-</span>
							<strong>0</strong>
							<span>+</span>
						</td>
						<td>0.00元</td>
					</tr>
				</tbody>
				<tbody>
					<tr colspan="7" class="space"></tr>
				</tbody>
				<tfoot>
					<tr>
						<td id="selected">已选（0）</td>
						<td colspan="4">
							<p>应付总额：<strong>0.00元</strong></p>
							<p>最贵的商品为：0.00元</p>
						</td>
					</tr>
				</tfoot>
			</table>
		</section>
		<div class="site-footer">
		    <div class="container">
		        <div class="footer-service">
		            <ul class="list-service clearfix">
		                            <li><a href="#"><i class="iconfont icon-banshou"></i>预约维修服务</a></li>
		                            <li><a href="#"><i class="iconfont icon-sevenday"></i>7天无理由退货</a></li>
		                            <li><a href="#"><i class="iconfont icon-15tianmianfeihuanhuo24px"></i>15天免费换货</a></li>
		                            <li><a href="#"><i class="iconfont icon-liwuhe01"></i>满150元包邮</a></li>
		                            <li><a href="#"><i class="iconfont icon-weibiaoti-"></i>520余家售后网点</a></li>
		                        </ul>
		        </div>
		        <div class="footer-links clearfix">
		            
		            <dl class="col-links col-links-first">
		                <dt>帮助中心</dt>
		                
		                <dd><a href="#">账户管理</a></dd>
		                
		                <dd><a href="#">购物指南</a></dd>
		                
		                <dd><a href="#">订单操作</a></dd>
		                
		            </dl>
		                
		            <dl class="col-links ">
		                <dt>服务支持</dt>
		                
		                <dd><a href="#">售后政策</a></dd>
		                
		                <dd><a href="#">自助服务</a></dd>
		                
		                <dd><a href="#">相关下载</a></dd>
		                
		            </dl>
		                
		            <dl class="col-links ">
		                <dt>线下门店</dt>
		                
		                <dd><a href="#">小米之家</a></dd>
		                
		                <dd><a href="#">服务网点</a></dd>
		                
		                <dd><a href="#">零售网点</a></dd>
		                
		            </dl>
		                
		            <dl class="col-links ">
		                <dt>关于小米</dt>
		                
		                <dd><a href="#">了解小米</a></dd>
		                
		                <dd><a href="#">加入小米</a></dd>
		                
		                <dd><a href="#">联系我们</a></dd>
		                
		            </dl>
		                
		            <dl class="col-links ">
		                <dt>关注我们</dt>
		                
		                <dd><a href="#">新浪微博</a></dd>
		                
		                <dd><a href="#">小米部落</a></dd>
		                
		                <dd><a href="#">官方微信</a></dd>
		                
		            </dl>
		                
		            <dl class="col-links ">
		                <dt>特色服务</dt>
		                
		                <dd><a href="#">F 码通道</a></dd>
		                
		                <dd><a href="#">礼物码</a></dd>
		                
		                <dd><a href="#">防伪查询</a></dd>
		                
		            </dl>
		                
		            <div class="col-contact">
		                <p class="phone">400-100-5678</p>
						<p>
						 周一至周日 8:00-18:00<br>（仅收市话费）
						</p>
						<a class="btn btn-line-primary btn-small" href="#"><i class="iconfont icon-xiaoxi"></i> 24小时在线客服</a>            
		            </div>
		        </div>
		    </div>
		</div>
		<div class="site-info">
		    <div class="container">
		        <div class="logo ir">小米官网</div>
		        <div class="info-text">
		            <p class="sites">
		            	<a href="index.html">小米商城</a><span class="sep">|</span>
		            	<a href="#">MIUI</a><span class="sep">|</span>
		            	<a href="#">米家</a><span class="sep">|</span>
		            	<a href="#">米聊</a><span class="sep">|</span>
		            	<a href="#">多看</a><span class="sep">|</span>
		            	<a href="#">路由器</a><span class="sep">|</span>
		            	<a href="#">米粉卡</a><span class="sep">|</span>
		            	<a href="#">小米天猫店</a><span class="sep">|</span>
		            	<a href="#">隐私政策</a><span class="sep">|</span>
		            	<a href="#">问题反馈</a><span class="sep">|</span>
		            	<a href="#">Select Region</a>            
		            </p>
		            <p>&copy;
		            	<a href="#">mi.com</a> 京ICP证110507号 
		            	<a href="#">京ICP备10046444号</a> 
		            	<a href="#">京公网安备11010802020134号 </a>
		            	<a href="#">京网文[2014]0059-0009号</a>
		
						<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试
		            </p>
		        </div>
		        <div class="info-links">
		                   <a href="#"><img src="img/truste.png"/></a>
		                    <a href="#"><img src="img/v-logo-2.png"/></a>
		                    <a href="#"><img src="img/v-logo-1.png"/></a>
		                    <a href="#"><img src="img/v-logo-3.png"/></a>
		                    <a href="#"><img src="img/ba10428a4f9495ac310fd0b5e0cf8370.png"/></a>
		                </div>
		    </div>
		    <div class="slogan ir">探索黑科技，小米为发烧而生</div>
		</div>
	</body>
</html>
