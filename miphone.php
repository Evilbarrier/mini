<?php 
	session_start();
	//var_dump($_SESSION);
?> 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="font_wwe3o1psjivk7qfr/iconfont.css"/>
		<link rel="stylesheet" type="text/css" href="icon/font_w1k4m67ck2pm0a4i/iconfont.css"/>
		<link rel="stylesheet" type="text/css" href="css/top.css"/>
		<link rel="stylesheet" type="text/css" href="css/head.css"/>
		<link rel="stylesheet" type="text/css" href="css/foot.css"/>
		<link rel="stylesheet" type="text/css" href="css/compare.css"/>
		
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
			                <div class="site-category" id="site-category" style="top: 73px;"> 
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
		
		<div class="compare-main">
			<div class="breadcrumbs">
				<div class="container">
					<a href="index.html">首页</a><span class="sep">/</span>
					<a href="#">购买小米手机</a><span class="sep">/</span><span>对比手机</span>
				</div>
			</div>
			<div class="compare-head J_head active" style="background: url(//c1.mifile.cn/f/i/17/compare/cp-1-new.jpg) no-repeat center center;">
				<h1 class="title">找到适合你的小米手机</h1>
				<p class="content">比较小米手机 / 红米手机的主要功能</p>
			</div>
			<div class="compare-head J_head " style="background: url(//c1.mifile.cn/f/i/17/compare/cp-3-new.jpg) no-repeat center center;">
				<h1 class="title">找到适合你的小米手机</h1>
				<p class="content">比较小米手机 / 红米手机的主要功能</p>
			</div>
			<div class="compare-space J_space"></div>
			<div class="compare-body J_body">
				<div class="container">
					<div class="list-phone">
						<div class="body-nav J_pageNav">
							<a href="#xiaomi" class="active" id="xiaomi">小米手机</a>
							<span class="sep">|</span>
							<a href="#hongmi" id="hongmi">红米手机</a>

						</div>
						<table id="xiaomi-table"  class="body-table column-5  J_table active">
							<tr>
								<th class="column-title"></th>
								<th>
									<div class="phone-main">
										<h2 class="title">小米5X</h2>
										<p class="content">变焦双摄，拍人更美</p>
										<p class="price">
											1499元
										</p>
										<p class="img">
											<img src="img/5x-duibishouji.jpg">
										</p>
										<p class="btns">
											<a href="#" target="_blank" class='btn btn-line-primary'>立即购买</a>
										</p>
									</div>
								</th>
								<th>
									<div class="phone-main">
										<h2 class="title">小米Max 2</h2>
										<p class="content">大屏大电量</p>
										<p class="price">
											1399元起
										</p>
										<p class="img">
											<img src="img/max2-duibishouji.jpg">
										</p>
										<p class="btns">
											<a href="#" target="_blank" class='btn btn-line-primary'>立即购买</a>
										</p>
									</div>
								</th>
								<th>
									<div class="phone-main">
										<h2 class="title">小米Note 3</h2>
										<p class="content">自拍美，拍人更美</p>
										<p class="price">
											1999元起
										</p>
										<p class="img">
											<img src="img/note3-duibishouji.jpg">
										</p>
										<p class="btns">
											<a href="#" target="_blank" class='btn btn-line-primary'>立即购买</a>
										</p>
									</div>
								</th>
								<th>
									<div class="phone-main">
										<h2 class="title">小米MIX 2</h2>
										<p class="content">全面屏，全陶瓷</p>
										<p class="price">
											3299元起
										</p>
										<p class="img">
											<img src="img/mix2-duibishouji.jpg" alt="小米MIX 2">
										</p>
										<p class="btns">
											<a href="#" target="_blank" class='btn btn-line-primary'>立即购买</a>
										</p>
									</div>
								</th>
								<th>
									<div class="phone-main">
										<h2 class="title">小米6</h2>
										<p class="content">变焦双摄，拍人更美</p>
										<p class="price">
											2499元起
										</p>
										<p class="img">
											<img src="img/xiaomi6-duibishouji.jpg" alt="小米6">
										</p>
										<p class="btns">
											<a href="#" target="_blank" class='btn btn-line-primary'>立即购买</a>
										</p>
									</div>
								</th>

							</tr>
							<tr>
								<td class="column-title">机身尺寸</td>
								<td>155.4 mm * 75.8mm * 7.3mm</td>
								<td>174.1 mm * 88.7mm * 7.6mm</td>
								<td></td>
								<td>151.8 mm * 75.5mm * 7.7mm</td>
								<td>145.17 mm * 70.49mm * 7.45mm</td>
							</tr>
							<tr>
								<td class="column-title">可选颜色</td>
								<td>
									<span class="icon-color icon-color-1"></span>
									<span class="icon-color icon-color-5"></span>
									<span class="icon-color icon-color-8"></span>
								</td>
								<td>
									<span class="icon-color icon-color-1"></span>
									<span class="icon-color icon-color-8"></span>
								</td>
								<td>
									<span class="icon-color icon-color-1"></span>
									<span class="icon-color icon-color-9"></span>
								</td>
								<td>
									<span class="icon-color icon-color-1"></span>
									<span class="icon-color icon-color-0"></span>
								</td>
								<td>
									<span class="icon-color icon-color-1"></span>
									<span class="icon-color icon-color-0"></span>
									<span class="icon-color icon-color-9"></span>
								</td>

							</tr>
							<tr>
								<td class="column-title">处理器</td>
								<td>
									骁龙 625 八核处理器，最高主频 2.0GHz
									<br/>14nm 工艺制程，高性能低功耗
									<br/>Adreno 506 650MHz
								</td>
								<td>
									骁龙 625 八核处理器，最高主频 2.0GHz
									<br/>14nm 工艺制程，高性能低功耗
									<br/>Adreno 506 650MHz
								</td>
								<td>
									骁龙660 最高主频 2.2 GHz
									<br/>Adreno 512 图形处理器
									<br/>最高主频 650MHz
								</td>
								<td>
									骁龙835 最高主频 2.45GHz
									<br/>Adreno 540 图形处理器
								</td>
								<td>
									骁龙835 最高主频 2.45GHz
									<br/>Adreno 540 图形处理器
									<br/>最高主频 710MHz
								</td>

							</tr>
							<tr>
								<td class="column-title">存储单元</td>
								<td>
									<b>4GB + 64GB</b>
									<br/>骁龙 625 八核处理器，最高主频 2.0GHz
									<br/>14nm 工艺制程，高性能低功耗
									<br/>Adreno 506 650MHz
									<br/>
									<br/><b>4GB+32GB</b>
									<br/>骁龙 625 八核处理器，最高主频 2.0GHz
									<br/>14nm 工艺制程，高性能低功耗
									<br/>Adreno 506 650MHz
								</td>
								<td>
									<b>4GB+32GB</b>
									<br/>
									<br/>
									<br/><b>4GB+64GB</b>
									<br/>
									<br/>
									<br/><b>4GB+128GB</b>
								</td>
								<td>
									<b>6GB / 4GB LPDDR4x 1866MHz 双通道</b>
									<br/>可选 128GB / 64GB eMMC 5.1 高速闪存
								</td>
								<td>
									<b>6GB LPDDR4x 双通道大内存</b>
									<br/>64GB/128GB/256GB 机身存储
									<br/>
									<br/><b>8GB LPDDR4x 双通道大内存</b>
									<br/>128GB 机身存储
								</td>
								<td>
									<b>6GB+64GB</b>
									<br/>6GB LPDDR4x 1866MHz 双通道 64位
									<br/>64GB 机身存储 UFS
									<br/>
									<br/><b>6GB+128GB</b>
									<br/>6GB LPDDR4x 1866MHz 双通道 64位
									<br/>128GB 机身存储 UFS
									<br/>
									<br/><b>陶瓷尊享版 6GB+128GB</b>
									<br/>6GB LPDDR4x 1866MHz 双通道 64位
									<br/>128GB 机身存储 UFS
								</td>
							</tr>
							<tr>
								<td class="column-title">显示屏</td>
								<td>
									<b>5.5 英寸（对角线）LTPS FHD显示屏</b>
									<br/>450nit 亮度
									<br/>1920 x 1080 分辨率，403 PPI，1000:1 对比度
									<br/>
									<br/>支持夜光屏
									<br/>支持阳光屏
									<br/>支持护眼模式
									<br/>支持色温调节
									<br/>支持标准模式
								</td>
								<td>
									<b>6.44 英寸（对角线）</b>
									<br/>450nit 亮度*
									<br/>1920 x 1080 分辨率，342 PPI，1000:1 对比度
									<br/>72% NTSC色域
									<br/>
									<br/>支持阳光屏，强烈阳光下清晰可见屏幕内容
									<br/>支持夜光屏
									<br/>支持护眼模式
									<br/>支持色温调节
								</td>
								<td>
									<b>5.5 英寸（对角线）</b>
									<br/>550nit 高亮度
									<br/>1920 x 1080 分辨率，403 PPI，1500:1 对比度
									<br/>94.4% NTSC色域，高色彩饱和度
									<br/>支持阳光屏，强烈阳光下清晰可见屏幕内容
									<br/>支持夜光屏
									<br/>支持护眼模式
									<br/>支持色温调节
									<br/>支持标准模式，颜色更准确
								</td>
								<td>
									<b>5.99 英寸（对角线）</b>
									<br/>18:9 定制屏幕比例
									<br/>2160×1080 FHD+
									<br/>403 PPI，1500:1 对比度
									<br/>DCI-P3色域，高色彩饱和度
									<br/>支持阳光屏
									<br/>支持夜光屏
									<br/>支持护眼模式
									<br/>支持色温调节
									<br/>支持标准模式
								</td>
								<td>
									<b>5.15 英寸（对角线）</b>
									<br/>600nit 高亮度
									<br/>1920 x 1080 分辨率，428 PPI，1500:1 对比度
									<br/>94.4% NTSC色域，高色彩饱和度
									<br/>支持阳光屏，强烈阳光下清晰可见屏幕内容
									<br/>支持夜光屏
									<br/>支持护眼模式
									<br/>支持色温调节
									<br/>支持标准模式，颜色更准确
								</td>

							</tr>
							<tr>
								<td class="column-title">后置相机</td>
								<td>
									<b>变焦双摄相机</b>
									<br/>广角摄像头
									<br/>12MP 1.25μm
									<br/>等效焦距 26mm
									<br/>5片式镜头，f 2.2光圈
									<br/>双色温闪光灯
									<br/>长焦摄像头
									<br/>12MP 1.0 μm
									<br/>等效焦距 50mm​，人像镜头
									<br/>5片式镜头，f 2.6光圈
									<br/>支持 PDAF 相位对焦
									<br/>暗光增强技术
									<br/>高动态范围调节技术
									<br/>全景模式
									<br/>连拍模式
									<br/>面部识别功能
								</td>
								<td>
									<b>1200 万大像素相机</b>
									<br/>ƒ/2.2 光圈
									<br/>1.25μm 的大像素
									<br/>双色温闪光灯
									<br/>支持 PDAF 相位对焦
									<br/>暗光画质增强技术
									<br/>HDR 高动态范围调节技术
									<br/>全景模式
									<br/>连拍模式
									<br/>面部识别功能
									<br/>实时滤镜拍照
								</td>
								<td>
									<b>变焦双摄</b>
									<br/>12MP 广角镜头，等效焦距 27mm，4轴光学防抖，f/1.8
									<br/>12MP 长焦镜头，等效焦距 52mm，人像镜头，f/2.6
									<br/>
									<br/>人像模式，背景虚化
									<br/>2倍光学变焦
									<br/>四轴光学防抖，出色暗光表现
									<br/>支持 PDAF 相位对焦
									<br/>暗光增强技术
									<br/>高动态范围调节技术
									<br/>全景模式
									<br/>连拍模式
									<br/>面部识别功能
								</td>
								<td>
									<b>1200 万像素后置相机</b>
									<br/>1.25μm，4 轴光学防抖
									<br/>5片式镜头，ƒ/2.0 光圈
									<br/>双色温闪光灯
									<br/>支持 PDAF 相位对焦
									<br/>暗光增强技术
									<br/>高动态范围调节技术
									<br/>全景模式
									<br/>连拍模式
									<br/>面部识别功能
								</td>
								<td>
									<b>变焦双摄相机</b>
									<br/>广角摄像头
									<br/>12MP 1.25μm
									<br/>等效焦距 27mm ，4 轴光学防抖
									<br/>6片式镜头，f 1.8光圈
									<br/>双色温闪光灯
									<br/>长焦摄像头
									<br/>12MP 1.0 μm
									<br/>等效焦距 52mm​，人像镜头
									<br/>5片式镜头，f 2.6光圈
									<br/>支持 PDAF 相位对焦
									<br/>暗光增强技术
									<br/>高动态范围调节技术
									<br/>全景模式
									<br/>连拍模式
									<br/>面部识别功能
								</td>

							</tr>
							<tr>
								<td class="column-title">前置相机</td>
								<td>
									<b>500万像素前置相机</b>
									<br/>第三代36级智能美颜，自拍实时美颜
									<br/>1080p 视频通话实时美颜
									<br/>倒计时自拍
									<br/>面部识别功能
									<br/>魔镜功能
								</td>
								<td>
									<b>500 万前置相机</b>
									<br/>第二代36级智能美颜，自拍实时美颜
									<br/>ƒ/2.0 大光圈，85°大广角
									<br/>视频通话实时美颜 （由“视频电话”提供）
									<br/>倒计时自拍
									<br/>面部识别功能
									<br/>支持魔镜功能，实时评测颜值
								</td>
								<td>
									<b>1600万像素 前置相机</b>
									<br/>暗光下合成 2μm 大像素
									<br/>美颜4.0
									<br/>226个骨骼打点，3D 瘦脸
									<br/>人工智能美颜，水嫩美白
									<br/>上百个场景优化
									<br/>自拍功能
									<br/>倒计时自拍
									<br/>魔镜功能
									<br/>合影优选
								</td>
								<td>
									<b>500万像素前置相机</b>
									<br/>第三代 36 级智能美颜，自拍实时美颜
									<br/>1080p 视频通话实时美颜
									<br/>倒计时自拍
									<br/>面部识别功能
									<br/>魔镜功能
								</td>
								<td>
									<b>800万像素前置相机</b>
									<br/>第三代36级智能美颜，自拍实时美颜
									<br/>1080p 视频通话实时美颜
									<br/>倒计时自拍
									<br/>面部识别功能
									<br/>魔镜功能
								</td>

							</tr>
							<tr>
								<td class="column-title">网络支持</td>
								<td>
									<b>4G 网络</b>
									<br/>支持移动、联通、电信4G / 3G / 2G
									<br/>支持移动、联通、电信载波聚合
									<br/>支持Volte 高质量宽带通话
								</td>
								<td>
									<b>4G 网络</b>
									<br/>支持移动、联通、电信4G / 3G / 2G，
									<br/>支持移动、联通带内载波聚合4G+网络
								</td>
								<td>
									<b>全网通4.0</b>
									<br/>2xCA，并支持高阶调制
								</td>
								<td>
									<b>全网通4.0</b>
									<br/>支持移动、联通、电信 4G / 3G / 2G
									<br/>支持移动、联通、电信载波聚合4G+网络
									<br/>支持 VoLTE 高质量宽带通话
									<br/>双 Nano-SIM 卡槽，任意卡槽均可设置为主卡
								</td>
								<td>
									<b>全网通 双卡和移动网络</b>
									<br/>3xCA，并支持高阶调制
									<br/>
									<br/>全网通4.0:
									<br/>双 Nano-SIM 卡槽，任意卡槽均可设置为主卡
									<br/>支持移动、联通、电信4G+ / 4G / 3G / 2G
								</td>

							</tr>
							<tr>
								<td class="column-title">SIM卡尺寸</td>
								<td>
									双 Nano，三选二卡槽
									<br/>支持 Micro-SD 扩展存储卡
								</td>
								<td>
									三选二卡槽，
									<br/>支持 Nano-SIM 卡 / Micro-SIM卡 /
									<br/>Micro-SD 扩展存储卡
								</td>
								<td>
									双 Nano-SIM 卡槽，任意卡槽均可设置为主卡
								</td>
								<td>
									2G:GSM 2 / 3 / 5 / 8
									<br/>2G:CDMA BC0,BC1,BC6,BC10
									<br/>3G:CDMA EVDO,BC0,BC1,BC6,BC10
									<br/>3G:WCDMA 1 / 2 / 3 / 4 / 5 / 6 / 8 / 9 / 19
									<br/>3G:TD-SCDMA 34 / 39
									<br/>4G:TD-LTE 34 / 38 / 39 / 40 / 41
									<br/>4G:FDD-LTE 1 / 2 / 3 / 4 / 5 / 7 / 8 / 12 / 13 / 17
									<br/>18 / 19 / 20 / 25 / 26 / 27 / 28 / 29 / 30
									<br/>B41支持 2496-2690 全带宽
									<br/>LTE B41 4天线技术，可支持 4×4 MIMO
								</td>
								<td>
									主卡可支持任意运营商 4G 网络，
									<br/>联通作为副卡均可支持 3G 网络。
									<br/>2 张电信卡无法同时使用：同时使用时一张卡可使用 4G 网络，
									<br/>另一张卡将不能注册网络。
								</td>

							</tr>
							<tr>
								<td class="column-title">无线连接</td>
								<td>
									支持协议 802.11a/b/g/n/ac
									<br/>支持 2.4G WIFI / 支持 5G WIFI / 支持 WIFI Direct / 支持 WIFI Display
									<br/>支持 蓝牙4.2
								</td>
								<td>
									无线网络
									<br/>支持协议 802.11a/b/g/n/ac
									<br/>支持 2.4G WIFI / 支持 5G WIFI / 支持 WIFI Direct / 支持 WiFi Display
									<br/>支持 蓝牙4.2 / 支持 蓝牙HID / 支持 MU – MIMO
								</td>
								<td>
									802.11a/b/g/n/ac 双频无线网络
									<br/>具备 2x2 MIMO 技术，支持 MU-MIMO
									<br/>WiFi Display，WiFi Direct
									<br/>蓝牙5.0 无线技术
								</td>
								<td>
									支持协议 802.11a/b/g/n/ac
									<br/>支持 2.4G WiFi / 支持 5G WiFi / 支持 WiFi Direct
									<br/>支持 WiFi Display
									<br/>支持 蓝牙5.0
									<br/>具备 2×2 MIMO 技术，支持 MU-MIMO
								</td>
								<td>
									802.11a/b/g/n/ac 双频无线网络
									<br/>具备 2x2 MIMO 技术，支持 MU-MIMO
									<br/>WiFi Display，WiFi Direct
									<br/>蓝牙5.0 无线技术，蓝牙HID
									<br/>多功能NFC，支持读卡、写卡、卡模拟和P2P模式
								</td>

							</tr>
							<tr>
								<td class="column-title">传感器</td>
								<td>
									红外
									<br/>陀螺仪
									<br/>加速感应器
									<br/>距离传感器
									<br/>环境光传感器
									<br/>霍尔传感器
									<br/>电子罗盘
								</td>
								<td>
									红外
									<br/>陀螺仪
									<br/>加速感应器
									<br/>距离感应器
									<br/>环境光传感器
									<br/>霍尔感应器
									<br/>指纹识别
								</td>
								<td>
									陀螺仪
									<br/>加速感应器
									<br/>距离感应器
									<br/>光线传感器
									<br/>霍尔感应器
									<br/>电子罗盘
									<br/>气压计
									<br/>红外传感器 /td>
									<td>
										超声波距离传感器
										<br/>陀螺仪
										<br/>加速度传感器
										<br/>电子罗盘
										<br/>环境光传感器
										<br/>振动马达
										<br/>气压计
										<br/>霍尔传感器
									</td>
									<td>
										陀螺仪
										<br/>加速度传感器
										<br/>距离传感器
										<br/>光线传感器
										<br/>霍尔感应器
										<br/>电子罗盘
										<br/>气压计
									</td>

							</tr>
							<tr>
								<td class="column-title">GPS</td>
								<td>
									GPS
									<br/>AGPS
									<br/>GLONASS
									<br/>北斗定位
								</td>
								<td>
									GPS
									<br/>AGPS
									<br/>GLONASS
									<br/>北斗定位
								</td>
								<td>
									GPS
									<br/>AGPS
									<br/>GLONASS
									<br/>北斗定位
								</td>
								<td>
									GPS
									<br/>AGPS
									<br/>GLONASS
									<br/>北斗定位
								</td>
								<td>
									GPS
									<br/>AGPS
									<br/>GLONASS
									<br/>北斗定位
								</td>

							</tr>
							<tr>
								<td class="column-title">电池电量</td>
								<td>
									<b>3080mAh（typ） / 3000mAh（min）</b>
								</td>
								<td>
									<b>5300mAh(typ) / 5200mAh(min)*</b>
								</td>
								<td>
									<b>3500mAh(typ) / 3400mAh（min）</b>
								</td>
								<td>
									<b>3400mAh(typ) / 3300mAh(min)</b>
									<br/>内置电池，免更换
									<br/>9V/2A 快充3.0
									<br/>USB Type-C 双面充电接口
								</td>
								<td>
									<b>3350mAh(typ)超长续航</b> /td>

							</tr>
							<tr>
								<td class="column-title">版本与价格</td>
								<td>
									<b>4GB+64GB：1499元</b>
								</td>
								<td>
									<b>全网通版 4GB+32GB：1399元</b>
									<br/>
									<br/><b>全网通版 4GB+64GB：1699元</b>
									<br/>
									<br/><b>全网通版 4GB+128GB：1999元</b>
								</td>
								<td>
									<b>4GB+64GB：1999元</b>
									<br/>
									<br/><b>6GB+64GB：2299元</b>
									<br/>
									<br/><b>6GB+128GB：2599元起</b>
								</td>
								<td>
									<b>6GB+64GB：3299元</b>
									<br/>
									<br/><b>6GB+128GB：3599元</b>
									<br/>
									<br/><b>6GB+256GB：3999元</b>
									<br/>
									<br/><b>全陶瓷尊享版：4699元</b>
									<br/>
									<br/><b>斯塔克限量版：4999元</b>
								</td>
								<td>
									<b>全网通版 6GB+64GB：2499元</b>
									<br/>
									<br/><b>全网通版 6GB+128GB：2899元</b>
									<br/>
									<br/><b>陶瓷尊享版 6GB+128GB：2999元</b>
								</td>

							</tr>

						</table>
						<table id="hongmi-table"   class="body-table column-3  J_table ">
							<tr>
								<th class="column-title"></th>
								<th>
									<div class="phone-main">
										<h2 class="title"> 高配版</h2>
										<p class="content">1600万柔光自拍</p>
										<p class="price">
											699元起 </p>
										<p class="img">
											<img src="img/hongminote5an-duibishouji2.jpg" alt="红米Note 5A">
										</p>
										<p class="btns">
											<a href="http://item.mi.com/product/10000031.html" target="_blank" class='btn btn-line-primary'>立即购买</a>
										</p>
									</div>
								</th>
								<th>
									<div class="phone-main">
										<h2 class="title">红米Note 4X</h2>
										<p class="content">5.5"多彩金属机身 4100mAh超长续航</p>
										<p class="price">
											999元起 </p>
										<p class="img">
											<img src="img/hongminote5a-duibishouji.jpg" alt="红米Note 4X">
										</p>
										<p class="btns">
											<a href="//item.mi.com/buyphone/redminote4x" target="_blank" class='btn btn-line-primary'>立即购买</a>
										</p>
									</div>
								</th>
								<th>
									<div class="phone-main">
										<h2 class="title">红米4</h2>
										<p class="content">长续航金属千元旗舰手机</p>
										<p class="price">
											799元起 </p>
										<p class="img">
											<img src="img/hongmi5a-duibishouji.jpg" alt="红米4">
										</p>
										<p class="btns">
											<a href="//item.mi.com/buyphone/redmi4" target="_blank" class='btn btn-line-primary'>立即购买</a>
										</p>
									</div>
								</th>

							</tr>
							<tr>
								<td class="column-title">机身尺寸</td>
								<td>139.24mm * 69.96mm * 8.65mm</td>
								<td>151mm * 76mm * 8.45mm</td>
								<td>141.3mm * 69.6mm * 8.9mm</td>
							</tr>
							<tr>
								<td class="column-title">可选颜色</td>
								<td>
									<span class="icon-color icon-color-1"></span>
									<span class="icon-color icon-color-5"></span>
									<span class="icon-color icon-color-8"></span>

								</td>
								<td>
									<span class="icon-color icon-color-1"></span>
									<span class="icon-color icon-color-0"></span>
									<span class="icon-color icon-color-5"></span>
									<span class="icon-color icon-color-4"></span>
									<span class="icon-color icon-color-8"></span>

								</td>
								<td>
									<span class="icon-color icon-color-1"></span>
									<span class="icon-color icon-color-0"></span>
									<span class="icon-color icon-color-8"></span>

								</td>

							</tr>
							<tr>
								<td class="column-title">处理器</td>
								<td>
									骁龙435 最高主频 1.4GHz
									<br/>Adreno 505 图形处理器
								</td>
								<td>
									<b>全网通版</b>
									<br/>高通骁龙625处理器 最高主频 2.0GHz
									<br/>Adreno 506 图形处理器 650MHz
								</td>
								<td>
									<b>标准版</b>
									<br/>高通骁龙430 处理器，最高主频 1.4GHz
									<br/>Adreno 505，450MHz
									<br/><b>高配版</b>
									<br/>高通骁龙625 处理器，最高主频 2.0GHz
									<br/>Adreno 506，650MHz
								</td>

							</tr>
							<tr>
								<td class="column-title">存储单元</td>
								<td>
									<b>2GB + 16GB</b>
									<br/><b>3GB + 32GB</b>
									<br/><b>4GB + 64GB</b>
									<br/>
									<br/>支持额外扩容 128GB(Vfat格式)
								</td>
								<td>
									<b>全网通版</b>
									<br/>3GB 内存 + 32GB 闪存
								</td>
								<td>
									<b>标准版</b>
									<br/>2GB 内存 + 16GB 闪存
									<br/><b>高配版</b>
									<br/>3GB 内存 + 32GB 闪存
									<br/>
									<br/>支持扩展存储 最高扩容 128GB（Vfat格式）
								</td>

							</tr>
							<tr>
								<td class="column-title">显示屏</td>
								<td>
									<b>5 英寸（对角线）</b>
									<br/>450nit 高清屏幕
									<br/>1280 x 720 分辨率
									<br/>1000:1 对比度
									<br/>72% NTSC色域
									<br/>支持夜光屏
									<br/>支持护眼模式
									<br/>支持色温调节
								</td>
								<td>
									<b>5.5 英寸</b>
									<br/>450nit 全高清屏幕
									<br/>1920 x 1080 分辨率
									<br/>403PPI
									<br/>1000:1 对比度
									<br/>72% NTSC色域
									<br/>支持夜光屏
									<br/>支持护眼模式
									<br/>支持色温调节
								</td>
								<td>
									<b>标准版</b>
									<br/>5英寸高清屏幕
									<br/>1280 x 720 分辨率，296PPI，1000：1 对比度
									<br/>72% NTSC色域
									<br/>支持护眼模式
									<br/>支持色温调节
									<br/>
									<br/><b>高配版</b>
									<br/>5英寸全高清屏幕
									<br/>1920 x 1080 分辨率， 441PPI，1000：1 对比度
									<br/>72% NTSC色域
									<br/>支持护眼模式
									<br/>支持色温调节
								</td>

							</tr>
							<tr>
								<td class="column-title">后置相机</td>
								<td>
									<b>1300 万像素相机</b>
									<br/>5片式镜头，f 2.0光圈
									<br/>支持 PDAF 相位对焦
									<br/>暗光画质增强技术
									<br/>HDR高动态范围调节技术
									<br/>全景模式
									<br/>连拍模式
									<br/>面部识别功能
									<br/>实时滤镜拍照
								</td>
								<td>
									<b>1300 万像素后置相机</b>
									<br/>5片式镜头，f 2.0光圈
									<br/>双色温闪光灯
									<br/>支持 PDAF 相位对焦
									<br/>暗光画质增强技术
									<br/>HDR高动态范围调节技术
									<br/>全景模式
									<br/>连拍模式
									<br/>面部识别功能
									<br/>实时滤镜拍照
								</td>
								<td>
									<b>1300 万像素后置相机</b>
									<br/>5片式镜头，f / 2.2光圈
									<br/>双色温闪光灯（高配版）
									<br/>单色温闪光灯（标准版）
									<br/>支持 PDAF 相位对焦
									<br/>暗光画质增强技术
									<br/>HDR高动态范围调节技术
									<br/>全景模式
									<br/>连拍模式
									<br/>面部识别功能
									<br/>实时滤镜拍照
								</td>

							</tr>
							<tr>
								<td class="column-title">前置相机</td>
								<td>
									<b>500万像素前置相机</b>
									<br/>第二代36级智能美颜，自拍实时美颜
									<br/>f 2.2 大光圈
									<br/>倒计时自拍
									<br/>面部识别功能
									<br/>实时滤镜拍照
								</td>
								<td>
									<b>500万像素前置相机</b>
									<br/>第二代36级智能美颜，自拍实时美颜
									<br/>f 2.0 大光圈
									<br/>倒计时自拍
									<br/>面部识别功能
									<br/>实时滤镜拍照
								</td>
								<td>
									<b>500万像素前置相机</b>
									<br/>第二代36级智能美颜，自拍实时美颜
									<br/>f / 2.2 光圈
									<br/>倒计时自拍
									<br/>面部识别功能
								</td>

							</tr>
							<tr>
								<td class="column-title">网络支持</td>
								<td>
									<b>4G 网络</b>
									<br/>支持移动、联通、电信4G / 3G / 2G，
									<br/>支持带内载波聚合的4G+网络
								</td>
								<td>
									<b>4G 网络</b>
									<br/>支持移动、联通、电信4G / 3G / 2G，
									<br/>支持带内载波聚合的4G+网络
								</td>
								<td>
									<b>标准版</b>
									<br/>全网通 2.0
									<br/>
									<br/><b>高配版</b>
									<br/>全网通 3.0
								</td>

							</tr>
							<tr>
								<td class="column-title">SIM卡尺寸</td>
								<td>
									<b>三选二卡槽</b>
									<br/>支持 Nano-SIM 卡 / Micro-SIM卡
									<br/>Micro-SD 扩展存储卡
								</td>
								<td>
									<b>三选二卡槽</b>
									<br/>支持 Nano-SIM 卡 / Micro-SIM卡
									<br/>Micro-SD 扩展存储卡
									<br/>
									<br/>双卡使用说明：
									<br/>当主卡为移动、联通4G时，副卡支持联通3G网络语音电话。
								</td>
								<td>
									<b>三选二卡槽</b>
									<br/>支持 Nano-SIM 卡 / Micro-SIM卡 / Micro-SD 扩展存储卡
									<br/>主卡移动联通电信4G / 3G / 2G
								</td>

							</tr>
							<tr>
								<td class="column-title">无线连接</td>
								<td>
									无线网络
									<br/>支持802.11 b/g/n WiFi协议
									<br/>WiFi Display，WiFi Direct
									<br/>蓝牙 4.2 无线技术，蓝牙HID
								</td>
								<td>
									2.4G、5G双频WiFi网络
									<br/>支持802.11 a/b/g/n WiFi协议
									<br/>WiFi Display，WiFi Direct
									<br/>蓝牙 4.2 无线技术，蓝牙HID
								</td>
								<td>
									<b>标准版</b>
									<br/>802.11 a / b / g / n 双频 WiFi 无线网络
									<br/>WiFi Direct
									<br/>蓝牙4.1 无线技术，蓝牙HID
									<br/>
									<br/><b>高配版</b>
									<br/>802.11 a / b / g / n 双频 WiFi 无线网络
									<br/>WiFi Direct
									<br/>蓝牙4.2 无线技术，蓝牙HID
								</td>

							</tr>
							<tr>
								<td class="column-title">传感器</td>
								<td>
									红外
									<br/>陀螺仪
									<br/>加速感应器
									<br/>距离感应器
									<br/>环境光传感器
								</td>
								<td>
									红外
									<br/>陀螺仪
									<br/>加速感应器
									<br/>距离感应器
									<br/>环境光传感器
									<br/>霍尔感应器
								</td>
								<td>
									红外
									<br/>陀螺仪
									<br/>加速感应器
									<br/>距离感应器
									<br/>环境光传感器
								</td>

							</tr>
							<tr>
								<td class="column-title">GPS</td>
								<td>
									GPS
									<br/>AGPS
									<br/>GLONASS
									<br/>北斗定位
								</td>
								<td>
									GPS
									<br/>A-GPS
									<br/>GLONASS
									<br/>北斗定位 /td>
									<td>
										GPS
										<br/>AGPS
										<br/>GLONASS
										<br/>北斗定位
									</td>

							</tr>
							<tr>
								<td class="column-title">电池电量</td>
								<td>
									<b>4100mAh</b>
								</td>
								<td>
									<b>4100mAh</b>
								</td>
								<td>
									<b>4100mAh(typ)</b>
								</td>

							</tr>
							<tr>
								<td class="column-title">版本与价格</td>
								<td>
									<b>2GB 内存 + 16GB 容量：699元</b>
									<br/><b>3GB 内存 + 32GB 容量：899元</b>
									<br/><b>4GB 内存 + 64GB 容量：1099元</b>
								</td>
								<td>
									<b>全网通版 3GB 内存 + 32GB 闪存：999元</b>
								</td>
								<td>
									<b>标准版：799元</b>
									<br/><b>高配版：999元</b> /td>

							</tr>

						</table>

						<script type="text/javascript">
							var xiaoMi=document.getElementById("xiaomi");
							var xiaoMiTable=document.getElementById("xiaomi-table");
							var hongMi=document.getElementById("hongmi");
							var hongMiTable=document.getElementById("hongmi-table");
							
							xiaoMi.onclick=function(){
								xiaoMi.style.color='#FF6700';
								hongMi.style.color='#757575';
								xiaoMiTable.style.display='block';
								hongMiTable.style.display='none';
							};
							hongMi.onclick=function(){
								hongMi.style.color='#FF6700';
								xiaoMi.style.color='#757575';
								xiaoMiTable.style.display='none';
								hongMiTable.style.display='block';
							};
							
						</script>
					</div>
				</div>
			</div>
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
