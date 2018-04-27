<?php 
	session_start();
	//var_dump($_SESSION);
?> 
<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="font_xsdr5kbxmoswcdi/iconfont.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		
		<script src="js/move.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/index.js" type="text/javascript" charset="utf-8"></script>
	</head>

	<body>
		<div class="top">
			<!--one-->
			<div class="conter">
				<div class="top-nav">
					<a href="#">小米商城</a><span>|</span>
					<a href="#">MIUI</a><span>|</span>
					<a href="#">loT</a><span>|</span>
					<a href="#">云服务</a><span>|</span>
					<a href="#">水滴</a><span>|</span>
					<a href="#">金融</a><span>|</span>
					<a href="#">有品</a><span>|</span>
					<a href="#">Select Region</a>
				</div>
				<div class="top-cart" id="top-cart">
					<a href="cart.php"><i class="iconfont icon-gouwuche"></i> 购物车（0）</a>
					<div class="cart-menu" id="cart-menu">
						<div class="loading">购物车中还没有商品，赶紧选购吧！</div>
					</div>
				</div>
				<div class="top-info">
					<a href="login.html" id="login_J"><?php  echo empty($_SESSION['name'])? '请登录' : '你好'.$_SESSION['name'] ." | "."<a href='php/del.php'>退出</a>"  ?></a><span>|</span>
					<a href="register.html" id="register_J">注册</a><span>|</span>
					<span class="message"><a href="#">消息通知</a></span>
				</div>
			</div>
		</div>

			<div class="conter">
		<div class="head"><!--two-->
				<div class="head-logo">
					<a href="#"><img src="img/milogo.png"/></a>
				</div>
				<div class="head-nav">
	            	<ul class="nav-list J_navMainList clearfix">
	                	<li id="J_navCategory" class="nav-category">
	                    	<a class="link-category" href="#"><span class="text">全部商品分类</span></a>
			                <div class="site-category" id="site-category" style="display: block;"> 
			                	<ul id="J_categoryList" class="site-category-list clearfix">
				                	<li class="category-item">
				                		<a class="title" href="#">手机 电话卡<i class="iconfont icon-right"></i></a>
				                		<div class="children clearfix children-col-3">
				                			<ul class="children-list children-list-col children-list-col-1">
				                				<li> <a class="link" href="#"><img class="thumb" src="images2/note3-80-2.png" /><span class="text">小米Note 3</span></a> </li>
				                				<li> <a class="link" href="#"><img class="thumb" src="images2/805a.png" /><span class="text">小米MIX 2</span></a> </li>
				                				<li> <a class="link" href="#"><img class="thumb" src="images2/compare.jpg" /><span class="text">小米6</span></a> </li>
				                				<li> <a class="link" href="#"><img class="thumb" src="images2/mix2-80.png" /><span class="text">小米5X</span></a> </li>
				                				<li> <a class="link" href="#"><img class="thumb" src="images2/hmn4x80.png" /><span class="text">小米Max 2</span></a> </li>
				                				<li> <a class="link" href="#"><img class="thumb" src="images2/mifenka-1.jpg" /><span class="text">红米5A</span></a> </li>
				                			</ul>
							                <ul class="children-list children-list-col children-list-col-2">
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/xm6_80.png" /><span class="text">红米Note 5A</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/hm4x_80.png" /><span class="text">红米Note 4X</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/mimobile.jpg" /><span class="text">红米4X</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/80pc-5x.png" /><span class="text">红米5</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/redmi5-80-80.png" /><span class="text">红米5 Plus</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/max2_80.jpg" /><span class="text">移动4G+专区</span></a> </li>
							                </ul>
				                			<ul class="children-list children-list-col children-list-col-3">
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/redmi5P-80-80.png" /><span class="text">对比手机</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/80-5a.png" /><span class="text">米粉卡 日租卡</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/80.jpg" /><span class="text">小米移动 电话卡</span></a> </li>
							                </ul>
				                		</div>
				                	</li>
							        <li class="category-item">
				                		<a class="title" href="#">笔记本<i class="iconfont icon-right"></i></a>
				                		<div class="children clearfix children-col-3">
				                			<ul class="children-list children-list-col children-list-col-1">
				                				<li> <a class="link" href="#"><img class="thumb" src="images2/bijiben80.jpg" /><span class="text">笔记本Air 12.5"</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/bijiben80.jpg" /><span class="text">笔记本Air 13.3" 独显</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/bijiben80.jpg" /><span class="text">笔记本Air 13.3" 集显</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/WechatIMG605.png" /><span class="text">笔记本Pro 15.6"</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/bjbcdq80.jpg" /><span class="text">USB-C电源适配器</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/usbzjqggg80.jpg" /><span class="text">USB-C转接器</span></a> </li>
							                </ul>
							                <ul class="children-list children-list-col children-list-col-2">
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/vga.png" /><span class="text">VGA 千兆网口转接器</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/neidanbao80.jpg" /><span class="text">小米笔记本内胆包</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/ymjp80.jpg" /><span class="text">悦米机械键盘</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/shubiao80.jpg" /><span class="text">小米便携鼠标</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/wxsb80.png" /><span class="text">小米无线鼠标</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/xmsbd80.jpg" /><span class="text">鼠标垫</span></a> </li>
							                </ul>
							                <ul class="children-list children-list-col children-list-col-3">
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/USBC80.jpg" /><span class="text">DisplayPort转接器</span></a> </li>
							                </ul>
				                		</div> 
				                	</li>  
				                	<li class="category-item">
				                		<a class="title" href="#">电视 盒子<i class="iconfont icon-right"></i></a> 
				                		<div class="children clearfix children-col-4">
				                			<ul class="children-list children-list-col children-list-col-1">
				                				<li> <a class="link" href="#"><img class="thumb" src="images2/xin55.png" /><span class="text">小米电视4C 43英寸</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/xin43.png" /><span class="text">小米电视4C 55英寸</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/80xmds_49.jpg" /><span class="text">小米电视4 49英寸</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/80xmds_55.jpg" /><span class="text">小米电视4 55英寸</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/80xmds_65.jpg" /><span class="text">小米电视4 65英寸</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/zuodaohang.jpg" /><span class="text">小米电视4A 32英寸</span></a> </li>
							                </ul>
							                <ul class="children-list children-list-col children-list-col-2">
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/4A43.jpg" /><span class="text">小米电视4A 43英寸</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/xp80_49.jpg" /><span class="text">小米电视4A 49英寸</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/xp80_55.jpg" /><span class="text">小米电视4A 55英寸</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/xp80_65.jpg" /><span class="text">小米电视4A 65英寸</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/6580side.jpg" /><span class="text">小米电视3s 65英寸 曲面</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/hezi80-80.jpg" /><span class="text">小米盒子3s</span></a> </li>
							                </ul>
							                <ul class="children-list children-list-col children-list-col-3">
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/hezi80-80.jpg" /><span class="text">小米盒子3c</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/hezizengqiangban80side.jpg" /><span class="text">小米盒子3 增强版</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/80x80.jpg" /><span class="text">家庭音响</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/iconaz80.jpg" /><span class="text">安装服务</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/dianshipeijian.jpg" /><span class="text">电视盒子配件</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/huiyuan.png" /><span class="text">小米影视会员</span></a> </li>
							                </ul>
							                <ul class="children-list children-list-col children-list-col-4">
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/huiyuan.png" /><span class="text">小米儿童会员</span></a> </li>
							                </ul>
				                		</div> 
				                	</li>  
					                <li class="category-item">
					                	<a class="title" href="#">路由器 智能硬件<i class="iconfont icon-right"></i></a> 
					                	<div class="children clearfix children-col-4">
					                		<ul class="children-list children-list-col children-list-col-1">
						                		<li> <a class="link" href="#"><img class="thumb" src="images2/phcplus80.jpg" /><span class="text">九号平衡车</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/jiqiren.jpg" /><span class="text">米家扫地机器人及配件</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/VRPLAY2.png" /><span class="text">小米VR眼镜</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/luyouqi-80.jpg" /><span class="text">小米路由器</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/zxc80-80.jpg" /><span class="text">电助力折叠自行车</span></a> </li>
							                	<li> <a class="link" href="#"><img class="thumb" src="images2/shuihu80.jpg" /><span class="text">电水壶</span></a> </li>
					                		</ul>
						                	<ul class="children-list children-list-col children-list-col-2">
						                		<li> <a class="link" href="#"><img class="thumb" src="images2/czjhq80.jpg" /><span class="text">米家车载空气净化器</span></a> </li>
						                		<li> <a class="link" href="#"><img class="thumb" src="images2/dianhuashoubiao80.jpg" /><span class="text">手表</span></a> </li>
						                		<li> <a class="link" href="#"><img class="thumb" src="images2/dianfanbao-80.jpg" /><span class="text">米家智能电饭煲</span></a> </li>
						                		<li> <a class="link" href="#"><img class="thumb" src="images2/xiaobai80.jpg" /><span class="text">智能摄像机/相机/微单</span></a> </li>
						                		<li> <a class="link" href="#"><img class="thumb" src="images2/jinghuaqilvxin80.jpg" /><span class="text">净化器及滤芯</span></a> </li>
						                		<li> <a class="link" href="#"><img class="thumb" src="images2/jingshuiqiandlvxin-80.jpg" /><span class="text">净水器及滤芯</span></a> </li>
						                	</ul>
						                	<ul class="children-list children-list-col children-list-col-3">
						            			<li> <a class="link" href="#"><img class="thumb" src="images2/shouhuan280.jpg" /><span class="text">手环及配件</span></a> </li>
						            			<li> <a class="link" href="#"><img class="thumb" src="images2/yashua80.jpg" /><span class="text">牙刷</span></a> </li>
						            			<li> <a class="link" href="#"><img class="thumb" src="images2/zhinengdeng-80.jpg" /><span class="text">智能灯</span></a> </li>
						            			<li> <a class="link" href="#"><img class="thumb" src="images2/gushiji80.jpg" /><span class="text">米兔智能故事机</span></a> </li>
						            			<li> <a class="link" href="#"><img class="thumb" src="images2/zhinengjiatingtaozhuang-80.jpg" /><span class="text">智能家庭组合</span></a> </li>
						            			<li> <a class="link" href="#"><img class="thumb" src="images2/xueyaji-80.jpg" /><span class="text">血压计</span></a> </li>
						                	</ul>
						        			<ul class="children-list children-list-col children-list-col-4">
						        				<li> <a class="link" href="#"><img class="thumb" src="images2/scale.jpg" /><span class="text">体重秤 / 体脂秤</span></a> </li>
						        				<li> <a class="link" href="#"><img class="thumb" src="images2/huabanche80.jpg" /><span class="text">电动滑板车</span></a> </li>
						        				<li> <a class="link" href="#"><img class="thumb" src="images2/wurenji80.jpg" /><span class="text">小米无人机</span></a> </li>
						        				<li> <a class="link" href="#"><img class="thumb" src="images2/jly80.jpg" /><span class="text">米家行车记录仪</span></a> </li>
						        				<li> <a class="link" href="#"><img class="thumb" src="images2/djj80.jpg" /><span class="text">小米米家对讲机</span></a> </li>
						        				<li> <a class="link" href="#"><img class="thumb" src="images2/znyjdaohang.jpg" /><span class="text">全部智能硬件</span></a> </li>
						        			</ul>
					                	</div> 
					                </li>  
					                <li class="category-item">
					                	<a class="title" href="#">移动电源 电池 插线板<i class="iconfont icon-right"></i></a> 
					                	<div class="children clearfix children-col-2">
				        					<ul class="children-list children-list-col children-list-col-1">
				        						<li> <a class="link" href="#"><img class="thumb" src="images2/dianyuan280.jpg" /><span class="text">小米移动电源</span></a> </li>
				        						<li> <a class="link" href="#"><img class="thumb" src="images2/c1xb343.jpg" /><span class="text">插线板</span></a> </li>
				        						<li> <a class="link" href="#"><img class="thumb" src="images2/yidongdianyuan.jpg" /><span class="text">品牌移动电源</span></a> </li>
				        						<li> <a class="link" href="#"><img class="thumb" src="images2/dianyuanfujian.jpg" /><span class="text">移动电源附件</span></a> </li>
				        						<li> <a class="link" href="#"><img class="thumb" src="images2/chongdianqi-80.jpg" /><span class="text">充电器</span></a> </li>
				        						<li> <a class="link" href="#"><img class="thumb" src="images2/5Battery1.jpg" /><span class="text">彩虹5号电池</span></a> </li>
				        					</ul>
				    						<ul class="children-list children-list-col children-list-col-2">
				    							<li> <a class="link" href="#"><img class="thumb" src="images2/7Battery1.jpg" /><span class="text">彩虹7号电池</span></a> </li>
				    							<li> <a class="link" href="#"><img class="thumb" src="images2/shoudiantong8080.jpg" /><span class="text">小米手电筒</span></a> </li>
				        					</ul>
					                	</div> 
					                </li>  
					                <li class="category-item">
					                	<a class="title" href="#">耳机 音箱<i class="iconfont icon-right"></i></a> 
					                	<div class="children clearfix children-col-4">
					                		<ul class="children-list children-list-col children-list-col-1">
												<li> <a class="link" href="#"><img class="thumb" src="images2/toudai80.jpg" /><span class="text">小米头戴式耳机</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/tdsqs80.jpg" /><span class="text">头戴式耳机轻松版</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/xmjzej80.jpg" /><span class="text">小米降噪耳机</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/xmjzej80.jpg" /><span class="text">小米降噪耳机Type-C版</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/qtpro80.jpg" /><span class="text">小米圈铁耳机 Pro</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/quantie.jpg" /><span class="text">小米圈铁耳机</span></a> </li>
					                		</ul>
					                		<ul class="children-list children-list-col children-list-col-2">
												<li> <a class="link" href="#"><img class="thumb" src="images2/jiaonang80.jpg" /><span class="text">小米胶囊耳机</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/huosai1.jpg" /><span class="text">小米活塞耳机清新版</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/bluetoothheadset.jpg" /><span class="text">小米蓝牙耳机</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/yundong80.jpg" /><span class="text">小米运动蓝牙耳机</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/3-80.jpg" /><span class="text">小米运动蓝牙耳机mini</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/pinpai80.jpg" /><span class="text">品牌耳机</span></a> </li>
					                		</ul>
					                		<ul class="children-list children-list-col children-list-col-3">
												<li> <a class="link" href="#"><img class="thumb" src="images2/wlyx80.jpg" /><span class="text">小米网络音响</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/pocketaudio.png" /><span class="text">小米蓝牙音箱</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/suishen-80.jpg" /><span class="text">小米随身蓝牙音箱</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/xiaogangpao2-hei-80.jpg" /><span class="text">小钢炮音箱 2</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/fhzlyyx80.jpg" /><span class="text">小米方盒子蓝牙音箱2</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/naozhong80.jpg" /><span class="text">小米音乐闹钟</span></a> </li>
					                		</ul>
					                		<ul class="children-list children-list-col children-list-col-4">
												<li> <a class="link" href="#"><img class="thumb" src="images2/mituyinx80.jpg" /><span class="text">小米米兔音箱</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/chechong1.jpg" /><span class="text">音乐蓝牙车充</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/chechong1.jpg" /><span class="text">小米蓝牙音频接收器</span></a> </li>
												<li> <a class="link" href="#"><img class="thumb" src="images2/chechong1.jpg" /><span class="text">小米AI音箱</span></a> </li>
					                		</ul>
					                	</div> 
					                </li>  
					                <li class="category-item">
					                	<a class="title" href="#">保护套 贴膜<i class="iconfont icon-right"></i></a> 
										<div class="children clearfix children-col-1"> 
											<ul class="children-list clearfix">  
												<li> <a class="link" href="#"><img class="thumb" src="images2/tiemo.jpg" /><span class="text">贴膜</span></a> </li>  
												<li> <a class="link" href="#"><img class="thumb" src="images2/baohu.jpg" /><span class="text">保护套/保护壳</span></a> </li>  
											</ul> 
										</div> 
					                </li>  
					                <li class="category-item">
					                	<a class="title" href="#">线材 支架 存储卡<i class="iconfont icon-right"></i></a> 
					                	<div class="children clearfix children-col-1"> 
					                		<ul class="children-list clearfix">  
												<li> <a class="link" href="#"><img class="thumb" src="images2/xiancai.jpg" /><span class="text">线材</span></a> </li>  
												<li> <a class="link" href="#"><img class="thumb" src="images2/zipaigan.jpg" /><span class="text">自拍杆</span></a> </li>  
												<li> <a class="link" href="#"><img class="thumb" src="images2/zhijia80x80.jpg" /><span class="text">手机支架</span></a> </li>  
												<li> <a class="link" href="#"><img class="thumb" src="images2/cunchu80x80.jpg" /><span class="text">存储卡</span></a> </li>  
					                		</ul> 
					                	</div> 
					                </li>  
					                <li class="category-item">
					                	<a class="title" href="#">箱包 服饰 鞋 眼镜<i class="iconfont icon-right"></i></a> 
					                	<div class="children clearfix children-col-1"> 
					                		<ul class="children-list clearfix">  
												<li> <a class="link" href="#"><img class="thumb" src="images2/xiangbao-80.jpg" /><span class="text">箱包</span></a> </li>  
												<li> <a class="link" href="#"><img class="thumb" src="images2/lvxingxiang.jpg" /><span class="text">90分旅行箱</span></a> </li> 
												<li> <a class="link" href="#"><img class="thumb" src="images2/huise2-80.jpg" /><span class="text">服饰</span></a> </li>  
												<li> <a class="link" href="#"><img class="thumb" src="images2/ydx80.jpg" /><span class="text">运动鞋 板鞋</span></a> </li>  
												<li> <a class="link" href="#"><img class="thumb" src="images2/tyj80.jpg" /><span class="text">眼镜</span></a> </li>  
					                		</ul> 
					                	</div> 
					                </li>  
					                <li class="category-item">
					                	<a class="title" href="lifeperiphey.php">米兔 生活周边<i class="iconfont icon-right"></i></a> 
										<div class="children clearfix children-col-1"> 
											<ul class="children-list clearfix">  
												<li> <a class="link" href="#"><img class="thumb" src="images2/mitu-80.jpg" /><span class="text">米兔玩偶</span></a> </li>  
												<li> <a class="link" href="#"><img class="thumb" src="images2/zhoubian1.jpg" /><span class="text">生活周边</span></a> </li>  
												<li> <a class="link" href="#"><img class="thumb" src="images2/zazhi1021-80.jpg" /><span class="text">《小米》会刊</span></a> </li>  
												<li> <a class="link" href="#"><img class="thumb" src="images2/mj80.jpg" /><span class="text">毛巾/浴巾</span></a> </li>  
												<li> <a class="link" href="#"><img class="thumb" src="images2/rjcd80.jpg" /><span class="text">8H家居产品</span></a> </li>  
											</ul> 
										</div> 
									</li>  
								</ul>
							</div>
				        	
	                	</li>
	                	<!--小米手机-->
	                    <li class="nav-item nav-itm">
	                    	<a class="link" href="#"><span class="text">小米手机</span><span class="arrow"></span></a>
	                    </li>
	                   	<!--红米-->
	                   <li class="nav-item nav-itm">
	                    	<a class="link" href="#"><span class="text">红米</span><span class="arrow"></span></a>
	                	</li>
	                    <!--笔记本-->
	                    <li class="nav-item nav-itm">
	                    	<a class="link" href="#"><span class="text">笔记本</span><span class="arrow"></span></a>
	                	</li>
	                    <!--电视-->
	                    <li class="nav-item nav-itm">
	                    	<a class="link" href="#"><span class="text">电视</span><span class="arrow"></span></a>
	                	</li>
		                <!--盒子-->
		                <li class="nav-item nav-itm">
		                    <a class="link" href="#"><span class="text">盒子</span><span class="arrow"></span></a>
		                </li>
	                    <li class="nav-item">
	                        <a class="link" href="#" target="_blank"><span class="text">新品</span></a>
	                	</li>
	                    <!--路由器-->
	                    <li class="nav-item nav-itm">
	                    	<a class="link" href="#"><span class="text">路由器</span><span class="arrow"></span></a>
	                	</li>
		               	<!--智能硬件-->
		               <li class="nav-item nav-itm">
		                    <a class="link" href="#"><span class="text">智能硬件</span><span class="arrow"></span></a>
		                </li>
	                    <li class="nav-item">
	                        <a class="link" href="#" target="_blank"><span class="text">服务</span></a>
	                	</li>
	                    <li class="nav-item">
	                        <a rel="nofollow" class="link" href="#" target="_blank"><span class="text">社区</span></a>
	                	</li>
	                </ul>
	        	</div>
	        	
	        	<div class="head-search">
		            <form id="J_searchForm" class="search-form clearfix">
		                <input class="search-text" type="search" id="search" >
		                <button class="search-btn"><i class="iconfont icon-fangdajing"></i></button>
		            	<div id="J_keywordList" class="keyword-list hide">
		            	</div>
		            </form>
	        	</div>
	        </div>	
	        	<div id="J_navMenu" class="head-nav-menu">
				<div class="conter">
					<ul class="children-list">
                        <li class="first">
                        <div class="flags"><div class="flag">新品</div></div>
                        <div class="figure figure-thumb">
                            <a href="#"><img src="img/max2_toubu.png"></a>
                        </div>
                        <div class="title"><a href="#">小米MIX 2</a></div>
                        <p class="price">3299起</p>
                        </li>
                        <li class="first">
                        <div class="flags"><div class="flag">新品</div></div>
                        <div class="figure figure-thumb">
                            <a href="#"><img src="img/note2320x220.png"></a>
                        </div>
                        <div class="title"><a href="#">小米Note 3</a></div>
                        <p class="price">1999元起</p>
                        </li>
                        <li class="first">
                        <div class="flags"></div>
                        <div class="figure figure-thumb">
                            <a href="#"><img src="img/mix2320-220.png"></a>
                        </div>
                        <div class="title"><a href="#">小米6</a></div>
                        <p class="price">2299元起</p>
                        </li>
                        <li class="first">
                        <div class="flags"></div>
                        <div class="figure figure-thumb">
                            <a href="#"><img src="img/note2320x220.png"></a>
                        </div>
                        <div class="title"><a href="#">小米Max 2</a></div>
                        <p class="price">1399元起</p>
                        </li>
                        <li class="first">
                        <div class="flags"></div>
                        <div class="figure figure-thumb">
                            <a href="#"><img src="img/5x-2.jpg"></a>
                        </div>
                        <div class="title"><a href="#">小米5X</a></div>
                        <p class="price">1499元</p>
                        </li>
                    </ul>
					<ul class="children-list ">
                        <li class="first">
                            <div class="flags"><div class="flag">新品</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="images2/805a.png"></a>
                            </div>
                            <div class="title"><a href="#">红米5</a></div>
                            <p class="price">799元起</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">新品</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="images2/baohu.jpg"></a>
                            </div>
                            <div class="title"><a href="#">红米5 Plus</a></div>
                            <p class="price">999元起</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">新品</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="images2/cms_14743364445482_tQhbx.jpg"></a>
                            </div>
                            <div class="title"><a href="#">红米5A</a></div>
                            <p class="price">599元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="images2/80xmds_49.jpg"></a>
                            </div>
                            <div class="title"><a href="#">红米Note 5A 标准版</a></div>
                            <p class="price">699元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="images2/805a.png"></a>
                            </div>
                            <div class="title"><a href="#">红米Note 5A 高配版</a></div>
                            <p class="price">899元起</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="images2/wurenji80.jpg"></a>
                            </div>
                            <div class="title"><a href="#">红米Note 4X</a></div>
                            <p class="price">999元起</p>
                        </li>
                    </ul>
					<ul class="children-list ">
	                    <li class="first">
	                    	<div class="flags"></div>
	                        <div class="figure figure-thumb">
	                            <a href="#"><img src="images2/bijiben80.jpg"></a>
	                        </div>
	                        <div class="title"><a href="#">小米笔记本Air 12.5"</a></div>
	                        <p class="price">3599元</p>
	                    </li>
	                     <li class="first">
	                     	<div class="flags"></div>
	                        <div class="figure figure-thumb">
	                            <a href="#"><img src="images2/WechatIMG605.png"></a>
	                        </div>
	                        <div class="title"><a href="#">小米笔记本Air 13.3" 独显</a></div>
	                        <p class="price">5199元</p>
	                    </li>
	                     <li class="first">
	                     	<div class="flags"></div>
	                        <div class="figure figure-thumb">
	                            <a href="#"><img src="images2/zuodaohang.jpg"></a>
	                        </div>
	                        <div class="title"><a href="#">小米笔记本Air 13.3" 集显</a></div>
	                        <p class="price">4599元起</p>
	                    </li>
	                     <li class="first">
	                        <div class="flags"><div class="flag">新品</div></div>
	                        <div class="figure figure-thumb">
	                            <a href="#"><img src="img/pms_1490604807.82792204!220x220.jpg"></a>
	                        </div>
	                        <div class="title"><a href="#">小米笔记本Pro 15.6"</a></div>
	                        <p class="price">5599元起</p>
	                    </li>
	                </ul>
					<ul class="children-list ">
                        <li class="first">
                            <div class="flags"><div class="flag">超薄旗舰</div></div>
                        	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/pms_1493863398.71652587.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米电视4 55英寸</a></div>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">热卖</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/pms_1467962689.97551741!220x220.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米电视4A 65英寸</a></div>
                            <p class="price">4999元</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">热卖</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="images2/huosai1.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米电视4A 32英寸</a></div>
                            <p class="price">999元</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">热卖</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="images2/5Battery1.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米电视4A 43英寸</a></div>
                            <p class="price">1999元</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">热卖</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米电视4A 49英寸</a></div>
                            <p class="price">2399元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">查看全部<br>小米电视</a></div>
                        </li>
                    </ul>
					<ul class="children-list ">
                        <li class="first">
                        	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="images2/c1xb343.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米盒子3s</a></div>
                            <p class="price">349元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/hezizengqiangban80side.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米盒子3c</a></div>
                            <p class="price">249元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/max2_toubu.png"></a>
                            </div>
                            <div class="title"><a href="#">小米盒子3 增强版</a></div>
                            <p class="price">449元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/dianshipeijian.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米家庭影院</a></div>
                            <p class="price">2099元</p>
                        </li>
                    </ul>
					<ul class="children-list ">
                        <li class="first">
                            <div class="flags"><div class="flag">新品</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/xmad_15028039011215_UXSoK.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米路由器 3A</a></div>
                            <p class="price">139元</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">大容量</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/sh2-320-220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米路由器 HD/Pro</a></div>
                            <p class="price">499元起</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">双千兆</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/mifenka-1.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米路由器 3G</a></div>
                            <p class="price">249元</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">双频</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/bluetoothheadset.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米路由器 3</a></div>
                            <p class="price">149元</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">包邮</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/luyouqi-80.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米路由器 3C</a></div>
                            <p class="price">99元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/chongdianqi-80.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米WiFi放大器 2</a></div>
                            <p class="price">49元</p>
                        </li>
                    </ul>
					<ul class="children-list ">
                        <li class="first">
                            <div class="flags"><div class="flag">航拍利器</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/bjbcdq80.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米无人机</a></div>
                            <p class="price">2999元</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">包邮</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/mituyinx80.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米手环2</a></div>
                            <p class="price">149元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/jingshuiqiandlvxin-80.jpg"></a>
                            </div>
                            <div class="title"><a href="#">小米净水器</a></div>
                            <p class="price">1499元起</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/jinghuaqilvxin80.jpg"></a>
                            </div>
                            <div class="title"><a href="#">米家扫地机器人</a></div>
                            <p class="price">1699元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/dfb.jpg"></a>
                            </div>
                            <div class="title"><a href="#">米家压力IH电饭煲</a></div>
                            <p class="price">999元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">查看全部<br>智能硬件</a></div>
                        </li>
                    </ul>
					
				</div>
			</div>
	        	
	        	
				
			
		</div>
		
		
		<div class="home conter">
			<!--three-->
			<div class="home-hero">
				<div class="home-banner" id="homeBanner">
					<div class="banner-slide" id="bannerSlide">
						<div class="pic imges" name='0'>
							<a href="#"><img src="img/xmad_1513304443358_gzjfM.jpg" /></a>
						</div>
						<div class="pic imges" name='1'>
							<a href="#"><img src="img/xmad_15130880786619_gqrmF.jpg" /></a>
						</div>

						<div class="pic imges" name='2'>
							<a href="#"><img src="img/xmad_15128963940496_dTEbu.jpg" /></a>
						</div>

						<div class="pic imges" name='3'>
							<a href="#"><img src="img/xmad_15131652928627_awzRZ.jpg" /></a>
						</div>

						<div class="pic imges" name='4'>
							<a href="#"><img src="img/xmad_15039951895346_BYpul.jpg" /></a>
						</div>
					</div>
					<div class="banner-controls">
						<div class="ui">
							<a class="ui-prev" href="#" id="uiPrev"><i class="iconfont icon-icon"></i></a>
							<a class="ui-next" href="#" id="uinext"><i class="iconfont icon-right"></i></a>
						</div>
						<div class="round">
							<div class="round-item">
								<a href="#"> 1 </a>
							</div>
							<div class="round-item">
								<a href="#"> 2 </a>
							</div>
							<div class="round-item">
								<a href="#"> 3 </a>
							</div>
							<div class="round-item">
								<a href="#"> 4 </a>
							</div>
							<div class="round-item">
								<a href="#"> 5 </a>
							</div>
						</div>
					</div>
				</div>
		<script src="js/roundSowing.js" type="text/javascript" charset="utf-8"></script>
				<div class="home-sub">
					<div class="sub-left">
						<ul class="sub-left-list clearfix">
							<li>
								<a href="miphone.php"><i class="iconfont icon-xuangoushouji"></i>选购手机</a>
							</li>
							<li>
								<a href="#"><i class="iconfont icon-liwu"></i>企业团购</a>
							</li>
							<li>
								<a href="#"><i class="iconfont icon-f"></i>F码通道</a>
							</li>
							<li>
								<a href="#"><i class="iconfont icon-mifenqia"></i>米粉卡</a>
							</li>
							<li>
								<a href="#"><i class="iconfont icon-yijiuhuanxin"></i>以旧换新</a>
							</li>
							<li>
								<a href="#"><i class="iconfont icon-huafeichongzhi"></i>话费充值</a>
							</li>
						</ul>
					</div>
					<div class="sub-right clearfix">
						<ul>
							<li class="first">
								<a href="#"><img src="img/xmad_15124514536952_mGxUh.jpg" /></a>
							</li>
							<li>
								<a href="#"><img src="img/xmad_15131606919247_KEoPq.jpg" /></a>
							</li>
							<li>
								<a href="#"><img src="img/xmad_1505747670707_fEPRy.jpg" /></a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="home-star">
				<div class="star-box">
					<div class="box-hd">
						<h2>小米明星单品</h2>
						<div>
							<span id="hd-prev"><i class="iconfont icon-icon"></i></span>
							<span id="hd-next"><i class="iconfont icon-right"></i></span>
						</div>
					</div>
					<div class="box-bd">
						<ul class="bd-list clearfix" id="bd-list" style="position: absolute;">
							<li class="bd-list-1" style="margin-left: 0;">
								<a class="thumb" href="#"><img src="img/xmad_1496643954435_EcHtv.png" /></a>
								<h3 class="title"><a href="#">小米Max 2 </a></h3>
								<p class="desc">大屏大电量，轻薄全金属</p>
								<p class="price">1399元起</p>
							</li>
							<li class="bd-list-2">
								<a class="thumb" href="#"><img src="img/xmad_15117763019255_STRfj.png" /></a>
								<h3 class="title"><a href="#">小米MIX 2</a></h3>
								<p class="desc">全面屏2.0，5.99"大屏</p>
								<p class="price">3299元起</p>
							</li>
							<li class="bd-list-3">
								<a class="thumb" href="#"><img src="img/xmad_15058020926003_BfHtZ.png" /></a>
								<h3 class="title"><a href="#">红米Note 5A 高配版</a></h3>
								<p class="desc">5.5" 大屏，指纹识别</p>
								<p class="price">899元起</p>
							</li>
							<li class="bd-list-4">
								<a class="thumb" href="#"><img src="img/pms_1503909150.67293503!220x220.png" /></a>
								<h3 class="title"><a href="#">小米电视4A 43英寸 标准版</a></h3>
								<p class="desc">全高清HDR 四核高性能处理器 </p>
								<p class="price">1999元</p>
							</li>
							<li class="bd-list-5">
								<a class="thumb" href="#"><img src="img/725a37e3-78b7-4298-8098-c40097bf179d.png" /></a>
								<h3 class="title"><a href="#">小米笔记本</a></h3>
								<p class="desc">更轻更薄，像杂志一样随身携带</p>
								<p class="price">3599元起</p>
							</li>
							<li class="bd-list-1" style="margin-left: 0;">
								<a class="thumb" href="#"><img src="img/6ef55907-bbed-49be-a2bb-be0821b5f7b8.png" /></a>
								<h3 class="title"><a href="#">小米手环 2</a></h3>
								<p class="desc">OLED 显示屏幕，升级计步算法</p>
								<p class="price">149元</p>
							</li>
							<li class="bd-list-2">
								<a class="thumb" href="#"><img src="img/T1KvdjBX_v1RXrhCrK.jpg" /></a>
								<h3 class="title"><a href="#">小米净水器 厨下式</a></h3>
								<p class="desc">直出纯净水，隐藏式安装</p>
								<p class="price">1999元</p>
							</li>
							<li class="bd-list-3">
								<a class="thumb" href="#"><img src="img/302f2608-655a-489c-a0c5-a3b9172defd1.png" /></a>
								<h3 class="title"><a href="#">小米圈铁耳机Pro</a></h3>
								<p class="desc">独创双动圈+动铁，三单元发声</p>
								<p class="price">149元</p>
							</li>
							<li class="bd-list-4">
								<a class="thumb" href="#"><img src="img/848def18-47d9-4ca0-8822-c2ac61b83779.png" /></a>
								<h3 class="title"><a href="#">米家扫地机器人</a></h3>
								<p class="desc">爱干净，高效完成清扫任务</p>
								<p class="price">1699元</p>
							</li>
							<li class="bd-list-5">
								<a class="thumb" href="#"><img src="img/de35852a-1be5-4ef5-846f-dcdd2efcfea6.png" /></a>
								<h3 class="title"><a href="#">小米路由器3</a></h3>
								<p class="desc">更快更强，不止四天线</p>
								<p class="price">149元</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div id="main-nav">
			<a href="#"><i class="iconfont icon-jiantou-shang-shixin-yuanxing" style="font-size: 50px;"></i></a>
		</div>
		
		<div class="main"><!--four-->
			<div class="conter">
				<div class="household"><!--家电-->
					<div class="box-hd">
						<h2>家电</h2>
						<ul>
							<li class="first  hd-list_J">热门</li>
							<li class="hd-list_J">电视影音</li>
							<li class="hd-list_J">电脑</li>
							<li class="hd-list_J">家居</li>
						</ul>
					</div>
					<div class="box-bd">
						<div class="bd-left">
							<ul>
								<li>
									<a href="#"><img src="img/xmad_15130067249927_mHhCa.jpg" /></a>
								</li>
							</ul>
						</div>
						<div class="bd-right">
							<ul class="bd-right_J" style="display: block;">
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1510111588.69169839!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米电视4 55英寸</a></h3>
									<p class="desc">4.9mm 极超薄高端旗舰电视</p>
									<p class="price">
										<span>3699</span>元
										<del><span>4499</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">挺好的，实在太薄啦，我爱张凤霞，来吧作诗一首！</span>
											<span class="author"> 来自于 漩涡鸣人 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1503909218.70932288!220x220.png" /></a>
									<h3 class="title"><a href="#">小米电视4A 49英寸 标准版</a></h3>
									<p class="desc">2GB+8GB 大储存 / 全高清HDR</p>
									<p class="price">
										<span>2049</span>元
										<del><span>2399</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">物流速度快，电视色彩好，家人超喜爱了，因为米粉，所以...</span>
											<span class="author"> 来自于 485815368 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1505106710.28498495!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米笔记本Pro 15.6英寸</a></h3>
									<p class="desc">全金属强化机身 / FHD全贴合屏幕</p>
									<p class="price">
										<span>5399</span>元
										<del><span>5599</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-new">新品</div>
									<div class="wrapper">
										<a href="#">
											<span class="review">唉，这个月一下子工资没了，只能吃土了，当笔记本到手里...</span>
											<span class="author"> 来自于 张宏 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1499138177.54329452!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米笔记本Air 13.3" i7处理器</a></h3>
									<p class="desc">Intel酷睿i7处理器，8GB内存+256GB</p>
									<p class="price">
										<span>5599</span>元
										<del><span>5999</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="wrapper">
										<a href="#">
											<span class="review">质感十足，一套设备了，听说能调戏抠脚的客服？来首藏头...</span>
											<span class="author"> 来自于 1330361859  的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/T1OVC_ByY_1RXrhCrK!220x220.jpg" /></a>
									<h3 class="title"><a href="#">米家压力IH电饭煲</a></h3>
									<p class="desc">智能烹饪，灰铸铁粉体涂层内胆</p>
									<p class="price">
										<span>899</span>元
										<del><span>999</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">中国人终于可以不要到国外去买电饭煲了！坐在家里点点手...</span>
											<span class="author"> 来自于 姚士祥  的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1498624482.88089389!220x220.jpg" /></a>
									<h3 class="title"><a href="#">米家激光投影电视</a></h3>
									<p class="desc">150 英寸超大投影尺寸</p>
									<p class="price">
										<span>9499</span>元
										<del><span>9999</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9.5折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">总体感觉不错，中间换货费点时间，流明基本够用，效果可...</span>
											<span class="author"> 来自于 earl 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/T1zBYgBCWv1RXrhCrK!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米空气净化器2</a></h3>
									<p class="desc">10分钟，房间空气焕然一新</p>
									<p class="price">
										<span>599</span>元
										<del><span>699</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">就想知道自己属于哪个级别的米粉？</span>
											<span class="author"> 来自于 你敢给我中个净水器吗？ 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-s">
									<a class="pic" href="#"><img src="img/pms_1468806372.46368911!220x220.jpg" height="80" width="80" /></a>
									<h3 class="title"><a href="#">小白摄像机</a></h3>
									<p class="price"><span>349</span>元</p>
								</li>
								<li class="bd-list-s">
									<a class="icon" href="#"><i class="iconfont icon-jiantouyoukongxinshise"></i></a>
									<a class="more" href="#">浏览更多<small>热门</small></a>
								</li>
							</ul>
							<ul class="bd-right_J">
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1503909300.25797209!220x220.png" /></a>
									<h3 class="title"><a href="#">小米电视4A 55英寸</a></h3>
									<p class="desc">4K高清HDR / 真四核64位高性能处理器</p>
									<p class="price">
										<span>2649</span>元
										<del><span>2999</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">小米让我们每个人都能享受科技的乐趣y( ˙ᴗ. )耶~</span>
											<span class="author"> 来自于 阿狸_a 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1508927539.71959246!220x220.png" /></a>
									<h3 class="title"><a href="#">小米电视4C 55英寸</a></h3>
									<p class="desc">4K HDR / 人工智能电视 / 超窄边</p>
									<p class="price">
										<span>2899</span>元
										<del><span>3099</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9.4折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">非常完美！超大超薄超级棒</span>
											<span class="author"> 来自于 秋 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1500287084.72131750!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米电视4A 32英寸</a></h3>
									<p class="desc">64位四核处理器 / 1GB+4GB大内存 </p>
									<p class="price">
										<span>999</span>元
										<del><span>1199</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折</div>
									<div class="wrapper">
										<a href="#">
											<span class="review">可以连wifi，不用盒子也能行，支持国产。万水千山总...</span>
											<span class="author"> 来自于 表情 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1490077569.08131612!220x220.png" /></a>
									<h3 class="title"><a href="#">小米电视4A 65英寸</a></h3>
									<p class="desc">4K超高清屏 / 真四核64位高性能处理器</p>
									<p class="price">
										<span>4599</span>元
										<del><span>4999</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9.2折</div>
									<div class="wrapper">
										<a href="#">
											<span class="review">很大气，好多东西都是小米的，大爱小米，大爱国货，</span>
											<span class="author"> 来自于 1253744812 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1503909150.67293503!220x220.png" /></a>
									<h3 class="title"><a href="#">小米电视4A 43英寸</a></h3>
									<p class="desc">全高清屏 / 人工智能语音 / 大存储</p>
									<p class="price">
										<span>1799</span>元
										<del><span>1999</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">超窄的黑色边框，靓丽的外型！非常喜欢！永远的米粉！</span>
											<span class="author"> 来自于 晨晨 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1495074053.84174465!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米电视4 65英寸</a></h3>
									<p class="desc">无边框式设计 / 3GB+32GB超大内存</p>
									<p class="price">
										<span>8999</span>元
										<del><span>9999</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="wrapper" style="display: none;"></div>
									<div class="flag flag-saleoff">享9折 </div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/T1zBYgBCWv1RXrhCrK!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米盒子3 增强版</a></h3>
									<p class="desc">高端 4K 网络机顶盒</p>
									<p class="price">
										<span>499</span>元
									</p>
									<p class="rank"></p>
									<div class="wrapper">
										<a href="#">
											<span class="review">外形不重要,重要的是反应快,影库多。以前一直用乐视的...</span>
											<span class="author"> 来自于 105709362 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-s">
									<a class="pic" href="#"><img src="img/pms_1479190789.95594557!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米盒子3s</a></h3>
									<p class="price"><span>299</span>元</p>
								</li>
								<li class="bd-list-s">
									<a class="icon" href="#"><i class="iconfont icon-jiantouyoukongxinshise"></i></a>
									<a class="more" href="#">浏览更多<small>电视影音</small></a>
								</li>
							</ul>
							<ul class="bd-right_J">
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1499138177.54329452!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米笔记本Air 13.3" i7处理器</a></h3>
									<p class="desc">Intel酷睿i7处理器，8GB内存+256GB</p>
									<p class="price">
										<span>5599</span>元
										<del><span>5999</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="wrapper">
										<a href="#">
											<span class="review">全铝合金的机身，机身很薄很有质感，而且音箱效果比我想...</span>
											<span class="author"> 来自于 月光下的狼 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1496997930.13622399!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米笔记本Air13.3英寸</a></h3>
									<p class="desc">第7代CPU 2G独显 指纹解锁</p>
									<p class="price">
										<span>4799</span>元
										<del><span>5199</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9.3折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">看了很多客服妹子的文采，也给我评论下呗，从小米2s,...</span>
											<span class="author"> 来自于 湘飞羽 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1469583247.6157588!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米笔记本Air 13.3英寸</a></h3>
									<p class="desc">Intel 酷睿i5 处理器 独立显卡</p>
									<p class="price">
										<span>4999</span>元
									</p>
									<p class="rank"></p>
									<div class="wrapper">
										<a href="#">
											<span class="review">用了两天还不错，客服妹纸约吗？</span>
											<span class="author"> 来自于 小马 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1490604807.82792204!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米笔记本Air 12.5英寸</a></h3>
									<p class="desc">更轻更薄，像杂志一样随身携带</p>
									<p class="price">
										<span>3999</span>元
									</p>
									<p class="rank"></p>
									<div class="wrapper">
										<a href="#">
											<span class="review">宝贝收到了，使用很不错，就是等了两三天才发货，下次要...</span>
											<span class="author"> 来自于 田王伟 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1490595812.95661863!220x220.png" /></a>
									<h3 class="title"><a href="#">小米无线鼠标</a></h3>
									<p class="desc">耐脏亲肤涂层，人体工学设计</p>
									<p class="price">
										<span>64</span>元
										<del><span>69</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9.3折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">真的好美，白色看着很有质感，所以买了白色，不知黑色是...</span>
											<span class="author"> 来自于 Angel-Habi 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1478248566.62624407!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米便携鼠标</a></h3>
									<p class="desc">轻薄便携，铝合金外壳 +ABS 材质</p>
									<p class="price">
										<span>94</span>元
										<del><span>99</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9.5折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">像客服妹子一样漂亮！（说不定是个抠脚大汉）</span>
											<span class="author"> 来自于 秋风 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1490702347.3628109!220x220.png" /></a>
									<h3 class="title"><a href="#">悦米机械键盘</a></h3>
									<p class="desc">铝合金机身，TTC红轴，87 键</p>
									<p class="price">
										<span>269</span>元
										<del><span>289</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9.4折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">第一次抽奖抽到键盘，太高兴了，键盘也高颜值，就像客服...</span>
											<span class="author"> 来自于 simba 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-s">
									<a class="pic" href="#"><img src="img/pms_1469523170.25518983!220x220.jpg" /></a>
									<h3 class="title"><a href="#">多功能转接器</a></h3>
									<p class="price"><span>149</span>元</p>
								</li>
								<li class="bd-list-s">
									<a class="icon" href="#"><i class="iconfont icon-jiantouyoukongxinshise"></i></a>
									<a class="more" href="#">浏览更多<small>电脑</small></a>
								</li>
							</ul>
							<ul class="bd-right_J">
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1465366178.11466342!220x220.jpg" /></a>
									<h3 class="title"><a href="#">米家恒温电水壶</a></h3>
									<p class="desc">水温智能控制，304 不锈钢内胆</p>
									<p class="price">
										<span>179</span>元
										<del><span>199</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">一直很专注，一直很小米，简洁，精致，米粉至上。[奸笑...</span>
											<span class="author"> 来自于 184698071 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1506417289.23728408!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米随身手电筒</a></h3>
									<p class="desc">11 挡调光，随心而亮</p>
									<p class="price">
										<span>79</span>元
									</p>
									<p class="rank"></p>
									<div class="flag flag-new">新品 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">客服妹子如此多娇，引无数抠脚大汉竞折腰</span>
											<span class="author"> 来自于 李不靠谱 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1472609961.95298675!220x220.jpg" /></a>
									<h3 class="title"><a href="#">米家扫地机器人</a></h3>
									<p class="desc">智能路径规划，扫得干净扫得快</p>
									<p class="price">
										<span>1599</span>元
										<del><span>1699</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9.5折</div>
									<div class="wrapper">
										<a href="#">
											<span class="review">以下这一首郑少秋的《世间始终你好》送给MIKI——...</span>
											<span class="author"> 来自于 不知道 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/T1zBYgBCWv1RXrhCrK!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米空气净化器2</a></h3>
									<p class="desc">10分钟，房间空气焕然一新</p>
									<p class="price">
										<span>599</span>元
										<del><span>699</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折</div>
									<div class="wrapper">
										<a href="#">
											<span class="review">万水千山总是情，给你满分行不行？</span>
											<span class="author"> 来自于 1117599502 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/T1OVC_ByY_1RXrhCrK!220x220.jpg" /></a>
									<h3 class="title"><a href="#">米家压力IH电饭煲</a></h3>
									<p class="desc">智能烹饪，灰铸铁粉体涂层内胆</p>
									<p class="price">
										<span>899</span>元
										<del><span>999</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">真的很好吃，煮出來的飯。超值超值。</span>
											<span class="author"> 来自于 xixi 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1496647119.81414190!220x220.jpg" /></a>
									<h3 class="title"><a href="#">飞利浦智睿球泡灯</a></h3>
									<p class="desc">自由调节亮度，Wi-Fi随时操控</p>
									<p class="price">
										<span>49</span>元
									</p>
									<p class="rank"></p>
									<div class="wrapper">
										<a href="#">
											<span class="review">客服妹纸，来来来，快扶我上墙一次吧</span>
											<span class="author"> 来自于 VINX 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1495520422.36514041!220x220.jpg" /></a>
									<h3 class="title"><a href="#">米家 LED 智能台灯</a></h3>
									<p class="desc">无可视频闪，四种场景优化调光</p>
									<p class="price">
										<span>149</span>元
										<del><span>169</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">自从偶遇小米我发觉我已经深深的迷上了小米产品，性价比...</span>
											<span class="author"> 来自于 四万 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-s">
									<a class="pic" href="#"><img src="img/pms_1490756071.3088664!220x220.png" /></a>
									<h3 class="title"><a href="#">Yeelight LED 吸顶灯</a></h3>
									<p class="price"><span>349</span>元</p>
								</li>
								<li class="bd-list-s">
									<a class="icon" href="#"><i class="iconfont icon-jiantouyoukongxinshise"></i></a>
									<a class="more" href="#">浏览更多<small>家居</small></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="intelligent"><!--智能-->
					<div class="box-hd">
						<h2>智能</h2>
						<ul>
							<li class="first">热门</li>
							<li>出行</li>
							<li>健康</li>
							<li>酷玩</li>
							<li>路由器</li>
						</ul>
					</div>
					<div class="box-bd">
						<div class="bd-left">
							<ul>
								<li class="bd-list-f">
									<a href="#"><img src="img/xmad_15136026064938_jvZrn.jpg" /></a>
								</li>
								<li class="bd-list-f">
									<a href="#"><img src="img/xmad_15059065811601_cCmTA.jpg" /></a>
								</li>
							</ul>
						</div>
						<div class="bd-right">
							<ul style="display: block;">
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1495520422.36514041!220x220.jpg" /></a>
									<h3 class="title"><a href="#">米家 LED 智能台灯</a></h3>
									<p class="desc">无可视频闪，四种场景优化调光</p>
									<p class="price">
										<span>149</span>元
										<del><span>169</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">自从偶遇小米我发觉我已经深深的迷上了小米产品，性价比...</span>
											<span class="author"> 来自于 四万 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1498643144.48446520!220x220.png" /></a>
									<h3 class="title"><a href="#">九号平衡车 Plus</a></h3>
									<p class="desc">35km超长续航，一键自动跟随</p>
									<p class="price">
										<span>3299</span>元
										<del><span>3499</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9.5折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">我也想让客服妹子给坐一首诗</span>
											<span class="author"> 来自于 贾龙 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1464615180.86261317!220x220.jpg" /></a>
									<h3 class="title"><a href="#">米兔智能故事机</a></h3>
									<p class="desc">微信远程互动，智能语音交互</p>
									<p class="price">
										<span>179</span>元
										<del><span>199</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">给宝贝女儿买的早教机，客服妹子快夸夸我闺女</span>
											<span class="author"> 来自于 爱芳一生 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1465366178.11466342!220x220.jpg" /></a>
									<h3 class="title"><a href="#">米家恒温电水壶</a></h3>
									<p class="desc">水温智能控制，304 不锈钢内胆</p>
									<p class="price">
										<span>179</span>元
										<del><span>199</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">一直很专注，一直很小米，简洁，精致，米粉至上。[奸笑...</span>
											<span class="author"> 来自于 184698071 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1487831386.1667404!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米体脂秤</a></h3>
									<p class="desc">简约纤薄，隐藏式 LED 显示屏</p>
									<p class="price">
										<span>179</span>元
										<del><span>199</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">客服妹纸，过来称下今天胖了十斤还是二十斤</span>
											<span class="author"> 来自于 追逐 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1467962689.97551741!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米手环2</a></h3>
									<p class="desc">150 OLED 显示屏幕，升级计步算法</p>
									<p class="price">
										<span>149</span>元
									</p>
									<p class="rank"></p>
									<div class="flag flag-postfree">免邮费</div>
									<div class="wrapper">
										<a href="#">
											<span class="review">客服妹子才华横溢  来首我爱赵畅藏头诗</span>
											<span class="author"> 来自于 南栀 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/T1HQA_BCd_1RXrhCrK!220x220.jpg" /></a>
									<h3 class="title"><a href="#">米家iHealth血压计</a></h3>
									<p class="desc">爸妈上手就会用的智能血压计</p>
									<p class="price">
										<span>349</span>元
										<del><span>399</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">客服妹妹，我这样算米粉吗？</span>
											<span class="author"> 来自于 李洪雁 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-s">
									<a class="pic" href="#"><img src="img/pms_1477985364.89714934!220x220.jpg" /></a>
									<h3 class="title"><a href="#">小米VR眼镜</a></h3>
									<p class="price"><span>199</span>元</p>
								</li>
								<li class="bd-list-s">
									<a class="icon" href="#"><i class="iconfont icon-jiantouyoukongxinshise"></i></a>
									<a class="more" href="#">浏览更多<small>热门</small></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="collocation"><!--搭配-->
					<div class="box-hd">
						<h2>搭配</h2>
						<ul>
							<li class="first">热门</li>
							<li>耳机音箱</li>
							<li>电源</li>
							<li>电池存储卡</li>
						</ul>
					</div>
					<div class="box-bd">
						<div class="bd-left">
							<ul>
								<li class="bd-list-f">
									<a href="#"><img src="img/xmad_15034816547397_TKBOF.jpg" /></a>
								</li>
								<li class="bd-list-f">
									<a href="#"><img src="img/xmad_15094387477095_BAdZH.jpg" /></a>
								</li>
							</ul>
						</div>
						<div class="bd-right">
							<ul style="display: block;">
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1501057018.70015369.jpg" /></a>
									<h3 class="title"><a href="#">小米AI音箱</a></h3>
									<p class="price">
										<span>299</span>元
									</p>
									<p class="rank">1.4万人评价</p>
									<div class="wrapper">
										<a href="#">
											<span class="review">小爱同学 帮我写个评价吧(*｀</span>
											<span class="author"> 来自于 ༄ཎཽཾ། 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1505264799.43246303.jpg" /></a>
									<h3 class="title"><a href="#">小米移动电源2C 20000mAh</a></h3>
									<p class="price">
										<span>109</span>元
										<del><span>129</span>元</del>
									</p>
									<p class="rank">5547人评价</p>
									<div class="flag flag-new">新品 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">忠实米粉</span>
											<span class="author"> 来自于 永远平安 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1512725431.07341927.jpg" /></a>
									<h3 class="title"><a href="#">小米降噪耳机</a></h3>
									<p class="price">
										<span>299</span>元
									</p>
									<p class="rank">168人评价</p>
									<div class="wrapper">
										<a href="#">
											<span class="review">有了type c版的再來買個3.5mm版的。降噪元件...</span>
											<span class="author"> 来自于 YoyoLai 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1481269289.59498154.jpg" /></a>
									<h3 class="title"><a href="#">小米移动电源10000mAh高配版</a></h3>
									<p class="price">
										<span>129</span>元
										<del><span>149</span>元</del>
									</p>
									<p class="rank">1.7万人评价</p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">小米充电真是好，有颜有质性价高！出门在外随身带，再...</span>
											<span class="author"> 来自于 大便君 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1476688193.46995320.jpg" /></a>
									<h3 class="title"><a href="#">10000mAh小米移动电源2</a></h3>
									<p class="price">
										<span>74</span>元
										<del><span>79</span>元</del>
									</p>
									<p class="rank">6.3万人评价</p>
									<div class="flag flag-saleoff">享9.5折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">手感好，刚到手充电中。具米粉说，买一赠妹子，是不是真...</span>
											<span class="author"> 来自于 飘渺林 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1482321199.12589253.jpg" /></a>
									<h3 class="title"><a href="#">小米活塞耳机 清新版</a></h3>
									<p class="desc">150 英寸超大投影尺寸</p>
									<p class="price">
										<span>29</span>元
									</p>
									<p class="rank">7.7万人评价</p>
									<div class="wrapper">
										<a href="#">
											<span class="review">耳机音效很好，立体效果不错，几十元的耳机可以享受几百...</span>
											<span class="author"> 来自于 肖昌雄 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1507877361.06147174.jpg" /></a>
									<h3 class="title"><a href="#">小米USB充电器快充版（18W）</a></h3>
									<p class="desc">10分钟，房间空气焕然一新</p>
									<p class="price">
										<span>29.9</span>元
									</p>
									<p class="rank">761人评价</p>
									<div class="wrapper">
										<a href="#">
											<span class="review">Thank Xiaomi mall for the ...</span>
											<span class="author"> 来自于 Seven 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-s">
									<a class="pic" href="#"><img src="img/pms_1492587658.23552969.jpg" /></a>
									<h3 class="title"><a href="#">小米降噪耳机Type-C版</a></h3>
									<p class="price"><span>259</span>元</p>
								</li>
								<li class="bd-list-s">
									<a class="icon" href="#"><i class="iconfont icon-jiantouyoukongxinshise"></i></a>
									<a class="more" href="#">浏览更多<small>热门</small></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="accessory"><!--配件-->
					<div class="box-hd">
						<h2>配件</h2>
						<ul>
							<li class="first">热门</li>
							<li>保护套</li>
							<li>贴膜</li>
							<li>其他配件</li>
						</ul>
					</div>
					<div class="box-bd">
						<div class="bd-left">
							<ul>
								<li class="bd-list-f">
									<a href="#"><img src="img/xmad_15112623868336_IYQqP.jpg" /></a>
								</li>
								<li class="bd-list-f">
									<a href="#"><img src="img/xmad_15023316085711_wOFUz.jpg" /></a>
								</li>
							</ul>
						</div>
						<div class="bd-right">
							<ul style="display: block;">
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1509852701.75968362.jpg" /></a>
									<h3 class="title"><a href="#">MIX 2全陶瓷版极简保护壳</a></h3>
									<p class="price">
										<span>39</span>元
									</p>
									<p class="rank">153人评价</p>
									<div class="wrapper">
										<a href="#">
											<span class="review">物流满分，手机17天了，还没发货，就等手机了唉～</span>
											<span class="author"> 来自于 许鹏宇 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1510904027.53197904.jpg" /></a>
									<h3 class="title"><a href="#">小米5X 智能显示保护套</a></h3>
									<p class="price">
										<span>49</span>元
									</p>
									<p class="rank">45人评价</p>
									<div class="wrapper">
										<a href="#">
											<span class="review">不错！我爸很喜欢！就是合起来的时候再翻开有点不顺畅，...</span>
											<span class="author"> 来自于 平平淡淡 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1493261828.23444007.jpg" /></a>
									<h3 class="title"><a href="#">小米6 硅胶保护套</a></h3>
									<p class="price">
										<span>39</span>元
										<del><span>49</span>元</del>
									</p>
									<p class="rank">8114人评价</p>
									<div class="flag flag-saleoff">享8折</div>
									<div class="wrapper">
										<a href="#">
											<span class="review">小米产品良心品质，良心价位，民族品牌，感动中国人。选...</span>
											<span class="author"> 来自于 渊浙 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1493863398.71652587.jpg" /></a>
									<h3 class="title"><a href="#">小米6 弧边高透膜</a></h3>
									<p class="price">
										<span>19</span>元
										<del><span>29</span>元</del>
									</p>
									<p class="rank">9581人评价</p>
									<div class="flag flag-saleoff">享7折</div>
									<div class="wrapper">
										<a href="#">
											<span class="review">在车里贴的，一次成功，哈哈哈哈</span>
											<span class="author"> 来自于 刘宁 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1469787914.92484611.jpg" /></a>
									<h3 class="title"><a href="#">红米Pro 超薄肤感软胶保护套</a></h3>
									<p class="price">
										<span>9.9</span>元
										<del><span>19</span>元</del>
									</p>
									<p class="rank">3182人评价</p>
									<div class="flag flag-saleoff">享6折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">不回复我的妹子都不是好妹子</span>
											<span class="author"> 来自于 丛日东 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1498547317.49155359.jpg" /></a>
									<h3 class="title"><a href="#">小米6 超薄皮质保护套</a></h3>
									<p class="desc">150 英寸超大投影尺寸</p>
									<p class="price">
										<span>29</span>元
										<del><span>39</span>元</del>
									</p>
									<p class="rank">1946人评价</p>
									<div class="flag flag-saleoff">享8折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">套套到手了！就是还缺个小米6和一个女朋友！客服聊不聊？</span>
											<span class="author"> 来自于 叫哥刺猬 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1503365520.83784737.jpg" /></a>
									<h3 class="title"><a href="#">小米Note 3  智能立显半透保护套</a></h3>
									<p class="price">
										<span>59</span>元
										<del><span>69</span>元</del>
									</p>
									<p class="rank">188人评价</p>
									<div class="flag flag-saleoff">享9折 </div>
									<div class="wrapper">
										<a href="#">
											<span class="review">质感不错,很满意,希望这个选择是对的</span>
											<span class="author"> 来自于 正浩 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-s">
									<a class="pic" href="#"><img src="img/pms_1493284697.69911065.jpg" /></a>
									<h3 class="title"><a href="#">小米6 标准高透贴膜</a></h3>
									<p class="price"><span>9.9</span>元</p>
								</li>
								<li class="bd-list-s">
									<a class="icon" href="#"><i class="iconfont icon-jiantouyoukongxinshise"></i></a>
									<a class="more" href="#">浏览更多<small>热门</small></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="periphery"><!--周边-->
					<div class="box-hd">
						<h2>周边</h2>
						<ul>
							<li class="first">热门</li>
							<li>服装</li>
							<li>居家</li>
							<li>生活周边</li>
							<li>箱包</li>
						</ul>
					</div>
					<div class="box-bd">
						<div class="bd-left">
							<ul>
								<li class="bd-list-f">
									<a href="#"><img src="img/xmad_15133035897522_fsHxv.jpg" /></a>
								</li>
								<li class="bd-list-f">
									<a href="#"><img src="img/xmad_15133038095279_UZoei.jpg" /></a>
								</li>
							</ul>
						</div>
						<div class="bd-right">
							<ul style="display: block;">
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1508833215.15582511!220x220.jpg" /></a>
									<h3 class="title"><a href="#">90分轻商务登机箱 米家定制</a></h3>
									<p class="price">
										<span>369</span>元
										<del><span>399</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="wrapper">
										<a href="#">
											<span class="review">不错。和想象中一样。麻烦小米再出个白色的就完美了。我...</span>
											<span class="author"> 来自于 Kingston 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1509960351.6389667!220x220.jpg" /></a>
									<h3 class="title"><a href="#">90分旅行箱</a></h3>
									<p class="price">
										<span>259</span>元
										<del><span>299</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="wrapper">
										<a href="#">
											<span class="review">超喜欢这个颜色的行李箱，不知道如果万向轮坏了可以更换...</span>
											<span class="author"> 来自于 APP 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1509588275.4067688!220x220.jpg" /></a>
									<h3 class="title"><a href="#">8H独立袋装弹簧布艺沙发</a></h3>
									<p class="price">
										<span>1099</span>元
										<del><span>1199</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="wrapper">
										<a href="#">
											<span class="review">很喜欢，就是一直想要的。物流还送上楼，不错哦</span>
											<span class="author"> 来自于 ake 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1510125643.73757483!220x220.jpg" /></a>
									<h3 class="title"><a href="#">8H三曲线护颈记忆绵枕</a></h3>
									<p class="price">
										<span>89</span>元
										<del><span>99</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="wrapper">
										<a href="#">
											<span class="review">触感软软，贼爽！是压缩发货的，到了之后一个小小的箱子...</span>
											<span class="author"> 来自于 苦中作乐 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1510124061.78733980!220x220.jpg" /></a>
									<h3 class="title"><a href="#">8H蝶形护颈记忆绵枕</a></h3>
									<p class="price">
										<span>109</span>元
										<del><span>129</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="wrapper">
										<a href="#">
											<span class="review">小米的东西真心不错。挺舒服的。</span>
											<span class="author"> 来自于 我有孤独和烈酒 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1505375150.25573941!220x220.jpg" /></a>
									<h3 class="title"><a href="#">知吾煮抗摔玻璃保鲜盒1100ml</a></h3>
									<p class="price">
										<span>59</span>元
									</p>
									<p class="rank"></p>
									<div class="wrapper">
										<a href="#">
											<span class="review">非常好，很喜欢！包装的很好！五分好评！</span>
											<span class="author"> 来自于 但愿幸福 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-m">
									<a class="thumb" href="#"><img src="img/pms_1502258923.87257653!220x220.jpg" /></a>
									<h3 class="title"><a href="#">贝医生巴氏牙刷(四色装)</a></h3>
									<p class="price">
										<span>34.9</span>元
										<del><span>39.9</span>元</del>
									</p>
									<p class="rank"></p>
									<div class="wrapper">
										<a href="#">
											<span class="review">牙刷也不错，用着挺好的鞋子也很好</span>
											<span class="author"> 来自于 翱翔 的评价 </span>
										</a>
									</div>
								</li>
								<li class="bd-list-s">
									<a class="pic" href="#"><img src="img/pms_1502097740.52392774!220x220.jpg" /></a>
									<h3 class="title"><a href="#">8H乳胶弹簧静音床垫</a></h3>
									<p class="price"><span>1539</span>元</p>
								</li>
								<li class="bd-list-s">
									<a class="icon" href="#"><i class="iconfont icon-jiantouyoukongxinshise"></i></a>
									<a class="more" href="#">浏览更多<small>热门</small></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="recommend"><!--为你推荐-->
					<div class="recommend-box">
						<div class="box-hd">
							<h2>为你推荐</h2>
							<div>
								<span id="bdPrev"><i class="iconfont icon-icon"></i></span>
								<span id="bdNext"><i class="iconfont icon-right"></i></span>
							</div>
						</div>
						<div class="box-bd">
							<ul class="clearfix" style="position: relative;" id="bdList">
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1512614849.04971208!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">红米5 Plus 全网通版 4GB内存</a>
										</dd>
										<dd class="price">1299元</dd>
										<dd class="rank">3865人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1505110828.06928608!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">小米Note 3 全网通版 6GB内存 128GB</a>
										</dd>
										<dd class="price">2699元</dd>
										<dd class="rank">6262人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1491310525.39633055!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">小米平板3</a>
										</dd>
										<dd class="price">1499元</dd>
										<dd class="rank">1.1万人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1490163713.86453564!140x140.png" /></a></dt>
										<dd class="name">
											<a href="#">SanDisk 32GB存储卡</a>
										</dd>
										<dd class="price">89元</dd>
										<dd class="rank">2552人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1490165991.05655005!140x140.png" /></a></dt>
										<dd class="name">
											<a href="#">SanDisk 16GB存储卡</a>
										</dd>
										<dd class="price">44.9元</dd>
										<dd class="rank">2808人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1512979573.15876769!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">AirPOP 便携防雾霾口罩（2片装）米家定制</a>
										</dd>
										<dd class="price">14.9元</dd>
										<dd class="rank">8人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1509612558.56879257!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">米家便携电动剃须刀</a>
										</dd>
										<dd class="price">179元</dd>
										<dd class="rank">702人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1490088823.14341375!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">小米5c 移动版 3GB内存</a>
										</dd>
										<dd class="price">1499元</dd>
										<dd class="rank">1.9万人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1474955794.2914613!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">小米手机5s 高配全网通版 3GB内存</a>
										</dd>
										<dd class="price">1999元</dd>
										<dd class="rank">2.4万人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1506417289.23728408!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">小米随身手电筒</a>
										</dd>
										<dd class="price">79元</dd>
										<dd class="rank">1485人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1505401464.03824312!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">小米MIX2 全网通版 6GB内存 黑色陶瓷 64GB</a>
										</dd>
										<dd class="price">3299元</dd>
										<dd class="rank">8000人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1512702607.05524534!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">保温杯</a>
										</dd>
										<dd class="price">99元</dd>
										<dd class="rank">814人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1501057018.70015369!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">小米AI音箱</a>
										</dd>
										<dd class="price">299元</dd>
										<dd class="rank">1.4万人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1510019402.48089978!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">小米6 全网通版 4GB内存</a>
										</dd>
										<dd class="price">2299元</dd>
										<dd class="rank">3629人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1493088736.50981985!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">金士顿32GB存储卡（U3）</a>
										</dd>
										<dd class="price">149元</dd>
										<dd class="rank">22人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1490088803.33652016!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">小米手机5s Plus 高配全网通版 6GB内存</a>
										</dd>
										<dd class="price">2599元</dd>
										<dd class="rank">3.1万人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1495765733.2641789!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">小米无人机特惠全能套装</a>
										</dd>
										<dd class="price">3835元</dd>
										<dd class="rank"></dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1484274647.02647996!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">红米手机 4 高配全网通版 3GB内存 32GB</a>
										</dd>
										<dd class="price">999元</dd>
										<dd class="rank">6.1万人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1499334729.03947034!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">小米Note2 全网通版 6GB 亮黑色 64GB</a>
										</dd>
										<dd class="price">2899元</dd>
										<dd class="rank">2369人好评</dd>
									</dl>
								</li>
								<li class="bd-list">
									<dl>
										<dt><a href="#"><img src="img/pms_1491583569.83999109!140x140.jpg" /></a></dt>
										<dd class="name">
											<a href="#">红米手机4A 全网通版 16GB</a>
										</dd>
										<dd class="price">599元</dd>
										<dd class="rank">1586人好评</dd>
									</dl>
								</li>
								
								
								
							</ul>
						</div>
					</div>
				</div>
				<div class="product"><!--热评产品-->
					<div class="product-box">
						<div class="box-hd">
							<h2>热评产品</h2>
						</div>
						<div class="box-bd">
							<ul class="clearfix">
								<li class="bd-list-first">
									<div class="figure">
										<a href="#"><img src="img/032d0ff1-f77f-4830-a469-f3564d55e0c5.jpg" /></a>
									</div>
									<p class="review">
										<a href="#">非常可爱，一拿到小宝宝还没享受，一帮大宝宝先high了一把，同事也想买，希望早点大卖</a>
									</p>
									<p class="author"> 来自于 秘密 的评价 </p>
									<div class="name">
										<h3 class="title"><a href="#">米兔智能故事机</a></h3><span class="sep">|</span>
										<p class="price"><span>179</span>元</p>
									</div>
								</li>
								<li>
									<div class="figure">
										<a href="#"><img src="img/a5886d24-b443-4a15-88ca-5dbd43b72de3.jpg" /></a>
									</div>
									<p class="review">
										<a href="#">先五星好评。再来说说小米空气净化器，北方的天气雾霾越来越常态，这就迫切需要一台性价比高的空气净化器，...</a>
									</p>
									<p class="author"> 来自于 sddyboy 的评价 </p>
									<div class="name">
										<h3 class="title"><a href="#">小米空气净化器2</a></h3><span class="sep">|</span>
										<p class="price"><span>599</span>元</p>
									</div>
								</li>
								<li>
									<div class="figure">
										<a href="#"><img src="img/54e35fdd-bc68-4a89-bad7-c9c3bb2fc6fe.jpg" /></a>
									</div>
									<p class="review">
										<a href="#">包装很让人感动，式样也很可爱，做出的饭全家人都爱吃，超爱五星！手机控制还是不太熟练，最主要是没有连接...</a>
									</p>
									<p class="author"> 来自于 HZG 的评价 </p>
									<div class="name">
										<h3 class="title"><a href="#">米家压力IH电饭煲</a></h3><span class="sep">|</span>
										<p class="price"><span>899</span>元</p>
									</div>
								</li>
								<li>
									<div class="figure">
										<a href="#"><img src="img/97d80b35-152e-4934-af34-402251458e16.jpg" /></a>
									</div>
									<p class="review">
										<a href="#">非常好用，孩子使用防止沉迷于电话影响学习。做工很好，定位基本准确，通话清晰。如果加入时间显示就更完美...</a>
									</p>
									<p class="author"> 来自于 178576259 的评价 </p>
									<div class="name">
										<h3 class="title"><a href="#">米兔定位电话</a></h3><span class="sep">|</span>
										<p class="price"><span>149</span>元</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="content"><!--内容-->
					<div class="content-box">
						<div class="box-hd">
							<h2>内容</h2>
						</div>
						<div class="box-bd">
							<ul class="bd-list clearfix">
								<li class="bd-list-item bd-list-book">
									<h2 class="title">图书</h2>
									<div class="wrapper">
										<ul class="wrapper-list-1 wrapperList">
											<li>
												<h4 class="name"><a href="#">哈利·波特与被诅咒的孩子</a></h4>
												<p class="desc">
													<a href="#">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</a>
												</p>
												<p class="price">
													<a href="#">29.37元</a>
												</p>
												<div class="figure">
													<a href="#"><img src="img/5e5da924-84e3-4959-9e25-5891cdf30757.png" /></a>
												</div>
											</li>
											<li>
												<h4 class="name"><a href="#">好吗好的</a></h4>
												<p class="desc">
													<a href="#">畅销作家大冰2016年新书！讲给你听，好吗好的！</a>
												</p>
												<p class="price">
													<a href="#">17.99元</a>
												</p>
												<div class="figure">
													<a href="#"><img src="img/61e1385e-54de-48f3-8717-5e4f4b1cdd14.png" /></a>
												</div>
											</li>
											<li class="more">
												<p class="desc">海量好书，享受精品阅读时光<br />漂亮的中文排版，千万读者选择！</p>
												<a href="#">前往多看阅读</a>
												<img class="thumb" src="img/more-duokan.jpg" />
											</li>
										</ul>
									</div>
									<div class="pagers">
										<ul>
											<li class="pager"><span class="dot">1</span></li>
											<li><span class="dot">2</span></li>
											<li><span class="dot">3</span></li>
										</ul>
									</div>
									<div class="icon">
										<span class="icon-prev wrapPrev"><i class="iconfont icon-icon"></i></span>
										<span class="icon-next wrapNext"><i class="iconfont icon-right"></i></span>
									</div>
								</li>
								<li class="bd-list-item bd-list-theme">
									<h2 class="title">MIUI 主题</h2>
									<div class="wrapper">
										<ul class="wrapper-list-2  wrapperList">
											<li>
												<h4 class="name"><a href="#">米奇-有你有我</a></h4>
												<p class="desc">
													<a href="#">米奇来啦！小米主题和迪士尼首度合作，打造精品迪士尼系列主题</a>
												</p>
												<p class="price">
													<a href="#">12米币</a>
												</p>
												<div class="figure">
													<a href="#"><img src="img/xmad_15106277789889_NVKse.png" /></a>
												</div>
											</li>
											<li>
												<h4 class="name"><a href="#">钢铁侠-科技控</a></h4>
												<p class="desc">
													<a href="#">I'm Iron Man! 小米主题和迪士尼首度合作，打造精品漫威系列主题</a>
												</p>
												<p class="price">
													<a href="#">12米币</a>
												</p>
												<div class="figure">
													<a href="#"><img src="img/xmad_15106285428716_UgNzb.png" /></a>
												</div>
											</li>
											<li>
												<h4 class="name"><a href="#">大白-戳戳我抱抱你</a></h4>
												<p class="desc">
													<a href="#">大白(●—●)吧啦啦啦~小米主题和迪士尼首度合作，打造精品迪士尼系列主题</a>
												</p>
												<p class="price">
													<a href="#">15米币</a>
												</p>
												<div class="figure">
													<a href="#"><img src="img/xmad_151062859387_ECIuV.png" /></a>
												</div>
											</li>
											<li class="more">
												<p class="desc">众多个性主题、百变锁屏与自由桌面<br />让你的手机与众不同！</p>
												<a href="#">前往MIUI主题市场</a>
												<img class="thumb" src="img/more-miui.jpg" />
											</li>
										</ul>
									</div>
									<div class="pagers">
										<ul>
											<li class="pager"><span class="dot">1</span></li>
											<li><span class="dot">2</span></li>
											<li><span class="dot">3</span></li>
											<li><span class="dot">4</span></li>
										</ul>
									</div>
									<div class="icon">
										<span class="icon-prev wrapPrev"><i class="iconfont icon-icon"></i></span>
										<span class="icon-next wrapNext"><i class="iconfont icon-right"></i></span>
									</div>
								</li>
								<li class="bd-list-item bd-list-game">
									<h2 class="title">游戏</h2>
									<div class="wrapper">
										<ul class="wrapper-list-2  wrapperList">
											<li>
												<h4 class="name"><a href="#">小米超神</a></h4>
												<p class="desc">
													<a href="#">实力派，一起团！！</a>
												</p>
												<p class="price">
													<a href="#"></a>
												</p>
												<div class="figure">
													<a href="#"><img src="img/xmad_15120234492499_MNEVo.png" /></a>
												</div>
											</li>
											<li>
												<h4 class="name"><a href="#">小米枪战</a></h4>
												<p class="desc">
													<a href="#">组好队 去跳伞！！</a>
												</p>
												<p class="price">
													<a href="#">免费</a>
												</p>
												<div class="figure">
													<a href="#"><img src="img/xmad_15094191317724_FNyjV.png" /></a>
												</div>
											</li>
											<li>
												<h4 class="name"><a href="#">米柚手游模拟器</a></h4>
												<p class="desc">
													<a href="#">在电脑上玩遍小米所有手游</a>
												</p>
												<p class="price">
													<a href="#">免费</a>
												</p>
												<div class="figure">
													<a href="#"><img src="img/T1czW_BXCv1R4cSCrK.png" /></a>
												</div>
											</li>
											<li class="more">
												<p class="desc">免费下载海量的手机游戏<br />天天都有现金福利赠送</p>
												<a href="#">前往小米游戏商店</a>
												<img class="thumb" src="img/more-game.jpg" />
											</li>
										</ul>
									</div>
									<div class="pagers">
										<ul>
											<li class="pager"><span class="dot">1</span></li>
											<li><span class="dot">2</span></li>
											<li><span class="dot">3</span></li>
											<li><span class="dot">4</span></li>
										</ul>
									</div>
									<div class="icon">
										<span class="icon-prev wrapPrev"><i class="iconfont icon-icon"></i></span>
										<span class="icon-next wrapNext"><i class="iconfont icon-right"></i></span>
									</div>
								</li>
								<li class="bd-list-item bd-list-app">
									<h2 class="title">应用</h2>
									<div class="wrapper">
										<ul class="wrapper-list-2  wrapperList">
											<li>
												<h4 class="name"><a href="#">2017金米奖</a></h4>
												<p class="desc">
													<a href="#">最优秀的应用和游戏</a>
												</p>
												<p class="price">
													<a href="#">12米币</a>
												</p>
												<div class="figure">
													<a href="#"><img src="img/3332da7d-4056-4694-9548-c83b7b3af7d3.png" /></a>
												</div>
											</li>
											<li>
												<h4 class="name"><a href="#">Forest</a></h4>
												<p class="desc">
													<a href="#">帮助您专心于生活中每个重要时刻</a>
												</p>
												<p class="price">
													<a href="#">免费</a>
												</p>
												<div class="figure">
													<a href="#"><img src="img/T1TkKvBCKv1R4cSCrK.png" /></a>
												</div>
											</li>
											<li>
												<h4 class="name"><a href="#">小米应用</a></h4>
												<p class="desc">
													<a href="#">小米出品 必属精品</a>
												</p>
												<p class="price">
													<a href="#">免费</a>
												</p>
												<div class="figure">
													<a href="#"><img src="img/T15VZvB5Kv1R4cSCrK.png" /></a>
												</div>
											</li>
											<li class="more">
												<p class="desc">帮助小米手机和其他安卓手机用户<br />发现好用的安卓应用</p>
												<a href="#">前往小米应用商店</a>
												<img class="thumb" src="img/more-app.jpg" />
											</li>
										</ul>
									</div>
									<div class="pagers">
										<ul>
											<li class="pager"><span class="dot">1</span></li>
											<li><span class="dot">2</span></li>
											<li><span class="dot">3</span></li>
											<li><span class="dot">4</span></li>
										</ul>
									</div>
									<div class="icon">
										<span class="icon-prev wrapPrev"><i class="iconfont icon-icon"></i></span>
										<span class="icon-next wrapNext"><i class="iconfont icon-right"></i></span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="video"><!--视频-->
					<div class="box-hd">
						<h2>视频</h2>
						<div>
							<span>查看全部<i class="iconfont icon-right"></i></span>
						</div>
					</div>
					<div class="box-bd">
						<ul class="clearfix">
							<li class="video-item">
								<div class="figure">
									<a href="#">
										<img src="img/xmad_15053784427187_fmBed.jpg" />
										<span class="play"><i class="iconfont icon-shixinyoujiantou"></i></span>
									</a>
								</div>
								<h3 class="title"> <a href="#">雷军与斯塔克打造全面屏2.0</a> </h3>
								<p class="desc">一场关于小米MIX 2 极致工艺的巅峰对话</p>
							</li>
							<li>
								<div class="figure">
									<a href="#">
										<img src="img/xmad_15053796058409_uQmGq.jpg" />
										<span class="play"><i class="iconfont icon-shixinyoujiantou"></i></span>
									</a>
								</div>
								<h3 class="title"> <a href="#">小米Note 3 与吴亦凡</a> </h3>
								<p class="desc">看看小米Note 3 与吴亦凡谁更帅？</p>
							</li>
							<li>
								<div class="figure">
									<a href="#"> <img src="img/xmad_15028039011215_UXSoK.jpg" />
									<span class="play"><i class="iconfont icon-shixinyoujiantou"></i></span>
									</a>
								</div>
								<h3 class="title"> <a href="#">MIUI 9 理念视频</a> </h3>
								<p class="desc">快如闪电，前所未有的流畅</p>
							</li>
							<li>
								<div class="figure">
									<a href="#">
										<img src="img/xmad_15053796919952_QBfTR.jpg" />
										<span class="play"><i class="iconfont icon-shixinyoujiantou"></i></span>
									</a>
								</div>
								<h3 class="title"> <a href="#">拍人更美的背后故事</a> </h3>
								<p class="desc">小米手机工程师采访视频</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="foot"><!--five-->
			<div class="conter">
				<div class="service">
					<ul class="clearfix">
						<li>
							<a href="#"><i class="iconfont icon-editor2"></i>预约维修服务</a>
						</li>
						<li>
							<a href="#"><i class="iconfont icon-7tian"></i>七天无理由退货</a>
						</li>
						<li>
							<a href="#"><i class="iconfont icon-15tianmianfeihuanhuo24px"></i>15天免费换货</a>
						</li>
						<li>
							<a href="#"><i class="iconfont icon-man150yuanbaoyou24px"></i>满150元包邮</a>
						</li>
						<li>
							<a href="#"><i class="iconfont icon-520jiashouhouwangdian24px"></i>520余家售后网点</a>
						</li>
					</ul>
				</div>
				<div class="list clearfix">
					<dl>
						<dt>帮助中心</dt>
						<dd>
							<a href="#">账户管理</a>
						</dd>
						<dd>
							<a href="#">购物指南</a>
						</dd>
						<dd>
							<a href="#">订单操作</a>
						</dd>
					</dl>
					<dl>
						<dt>服务支持</dt>
						<dd>
							<a href="#">售后政策</a>
						</dd>
						<dd>
							<a href="#">自助服务</a>
						</dd>
						<dd>
							<a href="#">相关下载</a>
						</dd>
					</dl>
					<dl>
						<dt>线下门店</dt>
						<dd>
							<a href="#">小米之家</a>
						</dd>
						<dd>
							<a href="#">服务网点</a>
						</dd>
						<dd>
							<a href="#">零售网点</a>
						</dd>
					</dl>
					<dl>
						<dt>关于小米</dt>
						<dd>
							<a href="#">了解小米</a>
						</dd>
						<dd>
							<a href="#">加入小米</a>
						</dd>
						<dd>
							<a href="#">联系我们</a>
						</dd>
					</dl>
					<dl>
						<dt>关注我们</dt>
						<dd>
							<a href="#">新浪微博</a>
						</dd>
						<dd>
							<a href="#">小米部落</a>
						</dd>
						<dd>
							<a href="#">官方微信</a>
						</dd>
					</dl>
					<dl>
						<dt>特色服务</dt>
						<dd>
							<a href="#">F 码通道</a>
						</dd>
						<dd>
							<a href="#">礼物码</a>
						</dd>
						<dd>
							<a href="#">防伪查询</a>
						</dd>
					</dl>
					<div>
						<p class="phone">400-100-5678</p>
						<p>
							周一至周日 8:00-18:00<br>（仅收市话费）
						</p>
						<a href="#"><i class="iconfont icon-daohangxinxi"></i> 24小时在线客服</a>
					</div>
				</div>
			</div>
		</div>

		<div class="info"><!--six-->
			<div class="conter clearfix">
				<div class="logo"><img src="img/logo-footer.png" /></div>
				<div class="info-left">
					<p class="sites">
						<a href="#">小米商城</a><span>|</span>
						<a href="#">MIUI</a><span>|</span>
						<a href="#">米家</a><span>|</span>
						<a href="#">米聊</a><span>|</span>
						<a href="#">多看</a><span>|</span>
						<a href="#">路由器</a><span>|</span>
						<a href="#">米粉卡</a><span>|</span>
						<a href="#">小米天猫店</a><span>|</span>
						<a href="#">隐私政策</a><span>|</span>
						<a href="#">问题反馈</a><span>|</span>
						<a href="#">Select Region</a>
					</p>
					<p>©
						<a href="#">mi.com</a> 京ICP证110507号
						<a href="#">京ICP备10046444号</a>
						<a href="#">京公网安备11010802020134号 </a>
						<a href="#">京网文[2014]0059-0009号</a>
						<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试
					</p>
				</div>
				<div class="info-right">
					<a href="#"><img src="img/truste.png"></a>
					<a href="#"><img src="img/v-logo-2.png"></a>
					<a href="#"><img src="img/v-logo-1.png"></a>
					<a href="#"><img src="img/v-logo-3.png"></a>
					<a href="#"><img src="img/ba10428a4f9495ac310fd0b5e0cf8370.png"></a>
				</div>
			</div>
			<div class="slogan"><img src="img/slogan2016.png" /></div>
		</div>
	
		<div id="right-nav">
			<p>小米明星单品</p>
			<p>家电</p>
			<p>智能</p>
			<p>搭配</p>
			<p>配件</p>
			<p>周边</p>
			<p>为你推荐</p>
			<p>热评产品</p>
			<p>内容</p>
			<p>视频</p>
		</div>
	</body>

</html>