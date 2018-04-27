<?php 
	session_start();
	//var_dump($_SESSION);
?> 
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="font_wwe3o1psjivk7qfr/iconfont.css"/>
		<link rel="stylesheet" type="text/css" href="icon/font_w1k4m67ck2pm0a4i/iconfont.css"/>
		<link rel="stylesheet" type="text/css" href="font_xsdr5kbxmoswcdi/iconfont.css"/>
		<link rel="stylesheet" type="text/css" href="font_uexozbd06nk4kj4i/iconfont.css"/>
		<link rel="stylesheet" type="text/css" href="css/top.css"/>
		<link rel="stylesheet" type="text/css" href="css/head.css"/>
		<link rel="stylesheet" type="text/css" href="css/foot.css"/>
		<link rel="stylesheet" type="text/css" href="css/lifeperiphey.css"/>
		
		<script src="js/twoNav.js" type="text/javascript" charset="utf-8"></script>
	</head>

	<body>
		<div class="top"><!--one-->
			<div class="conter">
				<div class="top-nav">
					<a href="#">小米商城</a><span>|</span>
					<a href="#" target="_blank">MIUI</a><span>|</span>
					<a href="#" target="_blank">loT</a><span>|</span>
					<a href="#" target="_blank">云服务</a><span>|</span>
					<a href="#" target="_blank">水滴</a><span>|</span>
					<a href="#" target="_blank">金融</a><span>|</span>
					<a href="#" target="_blank">有品</a><span>|</span>
					<a href="#">Select Region</a>
				</div>
				<div class="top-cart">
					<a href="#"><i class="iconfont icon-gouwuche"></i> 购物车（0）</a>
					<div class="cart-menu">
						<div class="loading">购物车中还没有商品，赶紧选购吧！</div>
					</div>
				</div>
				<div class="top-info">
					<a href="#"><?php  echo empty($_SESSION['name'])? '请登录' : '你好'.$_SESSION['name'] ." | "."<a href='php/del.php'>退出</a>"  ?></a><span>|</span>
					<a href="#">注册</a><span>|</span>
					<span class="message"><a href="#">消息通知</a></span>
				</div>
			</div>
		</div>
		
		<div class="head"><!--two-->
			<div class="conter">
				<div class="head-logo">
					<a href="#"><img src="img/milogo.png"/></a>
				</div>
				<div class="head-nav">
	            	<ul class="nav-list J_navMainList clearfix">
	                	<li id="J_navCategory" class="nav-category">
	                    	<a class="link-category" href="#"><span class="text">全部商品分类</span></a>
			                <div class="site-category" id="site-category" style="top: 77px;"> 
			                	<ul id="J_categoryList" class="site-category-list clearfix">
				                	<li class="category-item">
				                		<a class="title" href="#">手机 电话卡<i class="iconfont icon-xiangyou"></i></a>
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
				                		<a class="title" href="#">笔记本<i class="iconfont icon-xiangyou"></i></a>
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
				                		<a class="title" href="#">电视 盒子<i class="iconfont icon-xiangyou"></i></a> 
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
					                	<a class="title" href="#">路由器 智能硬件<i class="iconfont icon-xiangyou"></i></a> 
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
					                	<a class="title" href="#">移动电源 电池 插线板<i class="iconfont icon-xiangyou"></i></a> 
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
					                	<a class="title" href="#">耳机 音箱<i class="iconfont icon-xiangyou"></i></a> 
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
					                	<a class="title" href="#">保护套 贴膜<i class="iconfont icon-xiangyou"></i></a> 
										<div class="children clearfix children-col-1"> 
											<ul class="children-list clearfix">  
												<li> <a class="link" href="#"><img class="thumb" src="images2/tiemo.jpg" /><span class="text">贴膜</span></a> </li>  
												<li> <a class="link" href="#"><img class="thumb" src="images2/baohu.jpg" /><span class="text">保护套/保护壳</span></a> </li>  
											</ul> 
										</div> 
					                </li>  
					                <li class="category-item">
					                	<a class="title" href="#">线材 支架 存储卡<i class="iconfont icon-xiangyou"></i></a> 
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
					                	<a class="title" href="#">箱包 服饰 鞋 眼镜<i class="iconfont icon-xiangyou"></i></a> 
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
					                	<a class="title" href="#">米兔 生活周边<i class="iconfont icon-xiangyou"></i></a> 
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
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">红米5</a></div>
                            <p class="price">799元起</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">新品</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">红米5 Plus</a></div>
                            <p class="price">999元起</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">新品</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">红米5A</a></div>
                            <p class="price">599元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">红米Note 5A 标准版</a></div>
                            <p class="price">699元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">红米Note 5A 高配版</a></div>
                            <p class="price">899元起</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">红米Note 4X</a></div>
                            <p class="price">999元起</p>
                        </li>
                    </ul>
					<ul class="children-list ">
	                    <li class="first">
	                    	<div class="flags"></div>
	                        <div class="figure figure-thumb">
	                            <a href="#"><img src="img/note2320x220.png"></a>
	                        </div>
	                        <div class="title"><a href="#">小米笔记本Air 12.5"</a></div>
	                        <p class="price">3599元</p>
	                    </li>
	                     <li class="first">
	                     	<div class="flags"></div>
	                        <div class="figure figure-thumb">
	                            <a href="#"><img src="img/note2320x220.png"></a>
	                        </div>
	                        <div class="title"><a href="#">小米笔记本Air 13.3" 独显</a></div>
	                        <p class="price">5199元</p>
	                    </li>
	                     <li class="first">
	                     	<div class="flags"></div>
	                        <div class="figure figure-thumb">
	                            <a href="#"><img src="img/note2320x220.png"></a>
	                        </div>
	                        <div class="title"><a href="#">小米笔记本Air 13.3" 集显</a></div>
	                        <p class="price">4599元起</p>
	                    </li>
	                     <li class="first">
	                        <div class="flags"><div class="flag">新品</div></div>
	                        <div class="figure figure-thumb">
	                            <a href="#"><img src="img/note2320x220.png"></a>
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
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米电视4 55英寸</a></div>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">热卖</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米电视4A 65英寸</a></div>
                            <p class="price">4999元</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">热卖</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米电视4A 32英寸</a></div>
                            <p class="price">999元</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">热卖</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
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
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米盒子3s</a></div>
                            <p class="price">349元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米盒子3c</a></div>
                            <p class="price">249元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米盒子3 增强版</a></div>
                            <p class="price">449元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米家庭影院</a></div>
                            <p class="price">2099元</p>
                        </li>
                    </ul>
					<ul class="children-list ">
                        <li class="first">
                            <div class="flags"><div class="flag">新品</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米路由器 3A</a></div>
                            <p class="price">139元</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">大容量</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米路由器 HD/Pro</a></div>
                            <p class="price">499元起</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">双千兆</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米路由器 3G</a></div>
                            <p class="price">249元</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">双频</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米路由器 3</a></div>
                            <p class="price">149元</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">包邮</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米路由器 3C</a></div>
                            <p class="price">99元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米WiFi放大器 2</a></div>
                            <p class="price">49元</p>
                        </li>
                    </ul>
					<ul class="children-list ">
                        <li class="first">
                            <div class="flags"><div class="flag">航拍利器</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米无人机</a></div>
                            <p class="price">2999元</p>
                        </li>
                         <li class="first">
                            <div class="flags"><div class="flag">包邮</div></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米手环2</a></div>
                            <p class="price">149元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">小米净水器</a></div>
                            <p class="price">1499元起</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
                            </div>
                            <div class="title"><a href="#">米家扫地机器人</a></div>
                            <p class="price">1699元</p>
                        </li>
                         <li class="first">
                         	<div class="flags"></div>
                            <div class="figure figure-thumb">
                                <a href="#"><img src="img/note2320x220.png"></a>
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
		
		
		<div class="breadcrumbs">
			<div class="container">
				<a href='index.html'>首页</a><span class="sep">&gt;</span>
				<a href="#">所有商品</a><span class="sep">&gt;</span>
				<a href="#">米兔 / 生活周边</a><span class="sep">&gt;</span><span>生活周边</span> </div>
		</div>
		<div class="container">
			<div class="filter-box">
				<div class="filter-list-wrap">
					<dl class="filter-list clearfix">
						<dt>分类：</dt>
						<dd>
							<a class="" href="#">全部</a>
						</dd>
						<dd>
							<a href="#">米兔</a>
						</dd>
						<dd>
							<a href="#">小米鼠标垫</a>
						</dd>
						<dd class="active">生活周边</dd>
						<dd>
							<a href="#">小米电视/盒子配件</a>
						</dd>
						<dd>
							<a href="#">插线板</a>
						</dd>
						<dd>
							<a href="#">蓝牙手柄</a>
						</dd>
						<dd>
							<a href="#">小米杂志</a>
						</dd>
					</dl>
				</div>
				<div class="filter-list-wrap">
					<dl class="filter-list clearfix">
						<dt>品牌：</dt>
						<dd class="active">全部</dd>
						<dd>
							<a href="#">米家</a>
						</dd>
						<dd>
							<a href="#">90分</a>
						</dd>
						<dd>
							<a href="#">第三方品牌</a>
						</dd>
						<dd>
							<a href="#">小米</a>
						</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="container">
				<div class="order-list-box clearfix">
					<ul class="order-list">
						<li class="active first">
							<a href="#">推荐</a>
						</li>
						<li>
							<a href="#">新品</a>
						</li>
						<li class="up">
							<a href="#">价格 <i class="iconfont">&#xe62f;</i></a>
						</li>
						<li>
							<a href="#">评论最多</a>
						</li>
					</ul>
					<ul class="type-list">
						<li>
							<a href="#"><span class="checkbox"><i class="iconfont">&#x221a;</i></span>查看评价</a>
						</li>
						<li>
							<a href="#"><span class="checkbox"><i class="iconfont">&#x221a;</i></span>仅显示特惠商品</a>
						</li>
						<li>
							<a href="#"><span class="checkbox"><i class="iconfont">&#x221a;</i></span>仅显示有货商品</a>
						</li>
					</ul>
				</div>
				<div class="goods-list-box">
					<div class="goods-list clearfix">
						<div class="goods-item" data-pid="7237">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1509588275.4067688!200x200.jpg" width="200" height="200"  /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">8H独立袋装弹簧布艺沙发</a></h2>
							<p class="price">1199~2299元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li><img src="//i1.mifile.cn/a1/pms_1509588275.4067688!34x34.jpg" width="34" height="34"/></li>
									<li><img src="//i1.mifile.cn/a1/pms_1509588289.42575322!34x34.jpg" width="34" height="34"/></li>
									<li><img src="//i1.mifile.cn/a1/pms_1509588300.45878522!34x34.jpg" width="34" height="34"/></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy btn-buy-detail" href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
								<div class="flag flag-new">新品上架</div>
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="4230">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1508136069.96177734!200x200.jpg" width="200" height="200"  /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">AirPOP 防雾霾口罩 米家定制</a></h2>
							<p class="price">69元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li><img src="//i1.mifile.cn/a1/pms_1508136069.96177734!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1508136074.95212891!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1508136078.5673527!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods" href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
								<div class="flag flag-new">新品上架</div>
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="7248">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1509960340.87169530!200x200.jpg" width="200" height="200" /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">90分旅行箱</a></h2>
							<p class="price">299~499元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1509960340.87169530!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1509960351.6389667!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy btn-buy-detail" href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
								<div class="flag flag-new">新品上架</div>
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="6312">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1502092431.91411696!200x200.jpg" width="200" height="200"  /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">TS防蓝光眼镜  米家定制</a></h2>
							<p class="price">99元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1502092431.91411696!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1511313287.60011195!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods" href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="7210">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1509434704.74911589!200x200.jpg" width="200" height="200"  /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">AirPOP Light 360°贴合防雾霾口罩 （1片装）米家定制</a></h2>
							<p class="price">14.9元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1509434704.74911589!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1509434707.85964482!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href=" #"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods" href="#1"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
								<div class="flag flag-new">新品上架</div>
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="4231">
							<div class="figure figure-img">
								<a href=" "><img src="//i1.mifile.cn/a1/pms_1508136911.27518030!200x200.jpg" width="200" height="200"  /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">AirPOP 防雾霾滤芯（5片装 ）米家定制</a></h2>
							<p class="price">39元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1508136911.27518030!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods" href="#1"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
								<div class="flag flag-new">新品上架</div>
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="7163">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1508744596.89248966!200x200.jpg" width="200" height="200" /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">TS儿童防蓝光护目镜</a></h2>
							<p class="price">199元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1508744596.89248966!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1508744600.02281018!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods"  href=" #"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods" href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
								<div class="flag flag-new">新品上架</div>
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="7157">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1508483196.21912684!200x200.jpg" width="200" height="200"  /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">TS眼镜架 米家定制</a></h2>
							<p class="price">249元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1508483196.21912684!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1508483211.092222!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods"href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
								<div class="flag flag-new">新品上架</div>
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="7464">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1512981880.04528681!200x200.jpg" width="200" height="200" /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">8H凉感眼罩</a></h2>
							<p class="price">23.9元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1512981880.04528681!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1512981882.0352514!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods"  href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods" href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
								<div class="flag flag-new">新品上架</div>
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="7242">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1510125643.73757483!200x200.jpg" width="200" height="200"  /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">8H三曲线护颈记忆绵枕</a></h2>
							<p class="price">99元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li  ><img src="//i1.mifile.cn/a1/pms_1510125643.73757483!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods" href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
								<div class="flag flag-new">新品上架</div>
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="7403">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1512702607.05524534!200x200.jpg" width="200" height="200" /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">保温杯</a></h2>
							<p class="price">99元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1512702607.05524534!34x34.jpg" width="34" height="34"  /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods" href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="7243">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1510124061.78733980!200x200.jpg" width="200" height="200"  /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">8H蝶形护颈记忆绵枕</a></h2>
							<p class="price">129元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1510124061.78733980!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods"  href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods"  href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
								<div class="flag flag-new">新品上架</div>
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="7457">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1512979573.15876769!200x200.jpg" width="200" height="200" /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">AirPOP 便携防雾霾口罩（2片装）米家定制</a></h2>
							<p class="price">14.9元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1512979573.15876769!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods"  href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="2997">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/T1eKdgB4xv1RXrhCrK!200x200.jpg" width="200" height="200" /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">小米电源线收纳盒</a></h2>
							<p class="price">39元 <del>49元</del></p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li  ><img src="//i1.mifile.cn/a1/T1eKdgB4xv1RXrhCrK!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods"  href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
								<div class="flag flag-saleoff">8折促销</div>
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="5729">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1493030483.17561318!200x200.jpg" width="200" height="200" /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">8H乳胶床垫</a></h2>
							<p class="price">599~999元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li><img src="//i1.mifile.cn/a1/pms_1493030484.68163070!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1493030483.17561318!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy btn-buy-detail" href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="4374">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1472710764.55986027!200x200.jpg" width="200" height="200" /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">8H标准乳胶枕</a></h2>
							<p class="price">159元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1472710764.55986027!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods"  href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods" href=" "><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="4917">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1479972875.00224492!200x200.jpg" width="200" height="200" /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">最生活毛巾·青春系列</a></h2>
							<p class="price">19.9元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li  ><img src="//i1.mifile.cn/a1/pms_1479972875.00224492!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1479972881.39395516!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1479972884.59144232!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1479972888.53292802!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1479972891.3246061!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods"  href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods"  href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="6358">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1502089022.29474722!200x200.jpg" width="200" height="200" /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="//item.mi.com/1172900050.html?cfrom=list">最生活方巾·青春系列</a></h2>
							<p class="price">14.9元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1502089022.29474722!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1502089026.40432084!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1502089030.33978412!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1503051889.85963916!34x34.jpg" width="34" height="34"  /></li>
									<li  ><img src="//i1.mifile.cn/a1/pms_1503051892.94593687!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods"  href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="4918">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1479972924.07568234!200x200.jpg" width="200" height="200"  /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">最生活浴巾·青春系列</a></h2>
							<p class="price">99元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1479972924.07568234!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1479972928.16946623!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1479972937.94616197!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1479972949.70133637!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1479972953.37285652!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods" href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
								<div class="flag flag-postfree">包邮</div>
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="7118">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1508820001.68866329!200x200.jpg" width="200" height="200"  /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">8H鹅绒被</a></h2>
							<p class="price">1699~1899元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1508820001.68866329!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1508820003.66914488!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy btn-buy-detail" href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="7115">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1509330056.27762473!200x200.jpg" width="200" height="200"  /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">8H学生床垫</a></h2>
							<p class="price">399~699元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1509330056.27762473!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy btn-buy-detail" href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="5673">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1492999959.43955760!200x200.jpg" width="200" height="200"  /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">TS尼龙偏光太阳镜</a></h2>
							<p class="price">199元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1492999952.57968799!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1492999955.97078231!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1492999959.43955760!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods" href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="6376">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1502195257.33325849!200x200.jpg" width="200" height="200"  /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">8H懒人舒适沙发</a></h2>
							<p class="price">649元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li ><img src="//i1.mifile.cn/a1/pms_1502195257.33325849!34x34.jpg" width="34" height="34" /></li>
									<li ><img src="//i1.mifile.cn/a1/pms_1502195259.92552579!34x34.jpg" width="34" height="34" /></li>
									<li  ><img src="//i1.mifile.cn/a1/pms_1502195263.48375547!34x34.jpg" width="34" height="34" /></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods" href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy J_buyGoods" href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
							</div>
							<div class="notice"></div>
						</div>
						<div class="goods-item" data-pid="6512">
							<div class="figure figure-img">
								<a href="#"><img src="//i1.mifile.cn/a1/pms_1502097740.52392774!200x200.jpg" width="200" height="200"  /></a>
							</div>
							<p class="desc"></p>
							<h2 class="title"><a href="#">8H乳胶弹簧静音床垫</a></h2>
							<p class="price">1599~1899元</p>
							<div class="thumbs">
								<ul class="thumb-list clearfix">
									<li><img src="//i1.mifile.cn/a1/pms_1502097740.52392774!34x34.jpg" width="34" height="34"/></li>
								</ul>
							</div>
							<div class="actions clearfix">
								<a class="btn-like J_likeGoods"  href="#"><i class="iconfont icon-aixin"></i> <span>喜欢</span></a>
								<a class="btn-buy btn-buy-detail"  href="#"><span>加入购物车</span> <i class="iconfont icon-tianjiadaogouwuche"></i></a>
							</div>
							<div class="flags">
							</div>
							<div class="notice"></div>
						</div>
					</div>
		
		<script type="text/javascript">
			var J_likeGoods=document.getElementsByClassName("J_likeGoods");
			var J_likeGoods_i=document.querySelectorAll(".J_likeGoods i");
			var lik=true;
			
			for(i=0;i<J_likeGoods.length;i++){
				J_likeGoods[i].index=i;
				J_likeGoods[i].onmouseenter=function(){
					J_likeGoods_i[this.index].id='active';
				};
				J_likeGoods[i].onmouseleave=function(){
					J_likeGoods_i[this.index].id='';
				};
				J_likeGoods[i].onclick=function(){
					if(lik){
						J_likeGoods_i[this.index].style.color='#F2021E';
						lik=false;
						return;
					}
					J_likeGoods_i[this.index].style.color='#333';
					lik=true;
				};
			}
		</script>
		
					<div class="xm-pagenavi">
						<span class="numbers first iconfont icon-icon"></span><span class="numbers current">1</span>
						<a class="numbers" href="#">2</a>
						<a class="numbers last iconfont icon-right" href="#"></a>
					</div>
				</div>
			</div>
			<div id="J_renovateWrap" class="xm-recommend-container"></div>
		</div>
	
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
						<a class="btn btn-line-primary btn-small" href="#"><i class="iconfont icon-xiaoxi">&#xe600;</i> 24小时在线客服</a>            
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