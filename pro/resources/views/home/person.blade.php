<!DOCTYPE html >
<html >

	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>我的个人中心</title>
		<link rel="stylesheet" type="text/css" href="/gouwu/css/style.css">
		<link rel="stylesheet" type="text/css" href="/gouwu/css/css.css" />
		<script type="text/javascript" src="/gouwu/js/jquery-1.7.2.min.js"></script>

		<style type="text/css">
			#serach {
				    height: 90px;
				    margin: 0 auto;
				    background-color:#e45050;
				    position: relative;
				    width: 1260px;
				    z-index: 98;
				}
			#wodejd{
					width:100px;
					height:40px;
					color:white;
					position: relative;
					font-size: 20px;
					left:200px;
					top:18px;
			}
			#fanhui{
				width:100px;
				height:30px;
				color:white;
				font-size: 14px;
				position:relative;
				left:185px;
				top:10px;
				line-height: 30px;
				text-align: center;
				border:1px white solid;
				border-radius:10px; 
			}
		#qita{
			width:600px;
			height: 70px;
			position:relative;
			margin-left: 40px;
			font-size: 18px;
			float: left;
			border: 1px yellow solid;
			left:500px;
			top:-50px;
			line-height: 70px;
			text-align: center;
		}
		.a{
			width:150px;
			height: 50px;
			position: relative;
			float: left;
			font-size: 18px;
		}
		.b{
			width:150px;
			height: 50px;
			position: relative;
			float: left;
			font-size: 18px;
		}
		#shezhi{
			display:none;
			width:200px;
			height:200px;
			background-color: red;
			color:white;
			z-index: 33;
		}
		#shezhi li{
			width:200px;
			height: 30px;
			position: relative;
			float: left;
			padding-top: 20px
		}
		#ce{
			width:150px;
			height:450px;
			position: relative;
			border: 1px red solid;
			background-color: pink;
		}
		#ce li{
			width:130px;
			height: 30px;
			font-size:14px;
			margin-top:0px;
			line-height: 30px;
			text-align: center;

		}
		.wodedd{
			width:900px;
			height: 60px;
			position: relative;
			font-size: 15px;
			float:right;
			left:-100px;
			top:-430px;
			line-height: 60px;
			text-align: left;
			background-color: pink;
		}
		.order{
			width:900px;
			height:380px;
			left: 270px;
			position: relative;
			border:1px red solid;
			top:-350px;
			background-color: #cccccc;
		}
		.order tr:hover{
			background-color: red;
		}
		#down {
			    height: 150px;
			    top:-200px;
			    position: relative;
			    margin: 20px auto 30px;
			    width: 1210px;
			}
		</style>
		<script type="text/javascript">
			$(function() {
				$('#fanhui').mouseover(function(){
					$(this).css('background-color','white');
					$(this).css('color','red');
				}).mouseout(function(){
					$(this).css('background-color','#e45050')
					$(this).css('color','white');
				});
				$('.b a').mouseover(function(){
					$('.b div').css('display','block');
					$('.b div').css('color','red');
				}).mouseout(function(){
					$('.b div').css('display','none')
					$('.b div').css('color','white');
				});
				var region = $("#region");
				var address = $("#address");
				var number_this = $("#number_this");
				var name = $("#name_");
				var phone = $("#phone");
				$("#sub_setID").click(function() {
					var input_out = $(".input_style");
					for (var i = 0; i <= input_out.length; i++) {
						if ($(input_out[i]).val() == "") {
							$(input_out[i]).css("border", "1px solid red");
							
							return false;
						} else {
							$(input_out[i]).css("border", "1px solid #cccccc");
						}
					}
				});
				var span_momey = $(".span_momey");
				var total=$('#total');
				var b = 0;
				for (var i = 0; i < span_momey.length; i++) {
					b += parseFloat($(span_momey[i]).html());
				}
				var out_momey = $(".out_momey");
				out_momey.html(b);
				
				
				$(".shade_content").hide();
				$(".shade").hide();
				$('.nav_mini ul li').hover(function() {
					$(this).find('.two_nav').show(100);
				}, function() {
					$(this).find('.two_nav').hide(100);
				})
				$('.left_nav').hover(function() {
					$(this).find('.nav_mini').show(100);
				}, function() {
					$(this).find('.nav_mini').hide(100);
				})
				$('.Caddress .add_mi').click(function() {
					$(this).css('background', 'url("images/mail_1.jpg") no-repeat').siblings('.add_mi').css('background', 'url("images/mail.jpg") no-repeat')
				})
			})
			var x = Array();

			function func(a, b) {
				x[b] = a.html();
				alert(x)
				a.css('border', '2px solid #f00').siblings('.min_mx').css('border', '2px solid #ccc');
			}

			

		</script>
	</head>

	<body>
		<div id="top">
			<div id="top_main">
				<ul class="topu">
					<li>
						<div class="xing">
						</div>
						<a href="/gouwu/#">收藏商城</a>
					</li>
				</ul>
				<div id="hello">
					<img src="/imgs/{{$user_info->pic or ''}}"width="20px"height="20px"><span>{{$user->username}}您好，欢迎来到商城！
			</span>
				</div>
				<div class="topright">
					<ul>
						<li>
							<div class="cun">
								<a href="/gouwu/#">我的订单</a>
							</div>
						</li>
						<li class="kefu">
							<div class="cun">
								<div class="a1">
									<div class="kefuhide">
										<span>客户服务</span>
										<div class="downjian1">
										</div>
										<ul>
											<li><a href="/gouwu/#">帮助中心</a></li>
											<li><a href="/gouwu/#">售后服务</a></li>
											<li><a href="/gouwu/#">在线客服</a></li>
											<li><a href="/gouwu/#">投诉中心</a></li>
											<li><a href="/gouwu/#">客服邮箱</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="wangzhan">
							<div class="cun">
								<span>网站导航</span>
								<div class="downjian1">
								</div>
							</div>
							<div class="wangzhanhide">
								<div class="tese">
									<span>特色栏目</span>
								</div>
								<div class="tesemain">
									<a href="/gouwu/#">商城通信</a>
									<a href="/gouwu/#">校园之星</a>
									<a href="/gouwu/#">视频购物</a>
									<a href="/gouwu/#">商城社区</a>
									<a href="/gouwu/#">在线读书</a>
									<a href="/gouwu/#">装机大师</a>
								</div>
								
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- 搜索区域开始 -->
		<div id="serach"style="border:1px red solid">
			<div id="wodejd">我的京东</div>
			<div id="fanhui"><a href="/index">返回京东首页</a></div>
			<div id="qita">
				<div class="a"><a href="">首页</a></div><div class="b"><a href="">账户设置
					<div id="shezhi">
						<li><a href="">个人信息</a></li>
						<li><a href="">我的级别</a></li>
						<li><a href="">收货地址</a></li>
					</div>
			</a>
		</div><div class="a"><a href="">社区</a></div>
			</div>
			
		</div>
<!--搜索区域结束-->
		<!--侧边栏-->
		<div id="ce">
			<p font-size="16px">订单中心</p>
			<li><a href="">我的订单</a></li>
			<li><a href="">团购订单</a></li>
			<li><a href="">本地生活订单</a></li>
			<li><a href="">评价晒单</a></li>
			<li><a href="">全部订单</a></li>
			<p font-size="16px">关注中心</p>
			<li><a href="">关注的商品</a></li>
			<li><a href="">关注的店铺</a></li>
			<li><a href="">关注的活动</a></li>
			<li><a href="">关注的品牌</a></li>
			<li><a href="">关注的门店</a></li>
			<p font-size="16px">设置</p>
			<li><a href="/mymessage/{{session('id')}}">个人信息</a></li>
			<li><a href="/myaddress/{{session('id')}}">收货地址</a></li>
		</div>
	<!--侧边栏区域结束-->
		<div class="wodedd">
			我的订单
		</div>
		
			<div class="order">
				<table border="1" bordercolor="#cccccc" cellspacing="0" cellpadding="0" style="width:800px; text-align: center;float:right">
					<tr>
						<th>订单id</th>
						<th>用户名称</th>
						<th>支付方式</th>
						<th>总额</th>
						<th>订单状态</th>
						<th>操作</th>
					</tr>
			@foreach($order as $k=>$v)
					<tr height="30px">
						<td>
							{{$v->id}}
						</td>
						<td><span>
							{{$user->username}}
						</span>
						</td>
						<td>
							{{$v->pay}}
						</td>
						<td>
							<span >{{$v->total}}</span>
						</td>
						<td>
							<a href="/homechange/{{$v->id}}">{{$tai[$v->status]}}</a>
						</td>
						<td>
							  <a href="/homeaddress/{{$v->address_id}}" class='btn btn-success'><i class="icon-pencil">查看收货地址</i></a>&nbsp;&nbsp;&nbsp;
                               <a href="/homegoods/{{$v->id}}" class='btn btn-info'><i class="icon-trash"></i>订单商品详情</a>
						</td>
					</tr>
			@endforeach
				</table>
			</div>
		
		<div class="shade">
		</div>
		<div class="shade_content">
			<div class="col-xs-12 shade_colse">
				<button onclick="javascript:onclick_close();">x</button>
			</div>
			<div class="nav shade_content_div">
				
				
			</div>
		</div>

		<!-- 底部开始 -->
		<div id="down">
			<div class="down_top">
				<a href="/gouwu/#">关于我们</a>
				<a href="/gouwu/#">联系我们</a>
				<a href="/gouwu/#">商家入驻</a>
				<a href="/gouwu/#">营销中心</a>
				<a href="/gouwu/#">手机商城</a>
				<a href="/gouwu/#">友情链接</a>
				<a href="/gouwu/#">销售联盟</a>
				<a href="/gouwu/#">商城社区</a>
				<a href="/gouwu/#">商城公益</a>
				<a href="/gouwu/#" style="border-right:none">English Site</a>
			</div>
			<div class="down_center">
				<span>北京市公安局朝阳分局备案编号110105014669  |  京ICP证070359号  |  <a href="/gouwu/#">互联网药品信息服务资格证编号(京)-经营性-2014-0008</a>  |  新出发京零 字第大120007号</span>
				<span><a href="/gouwu/#">音像制品经营许可证苏宿批005号</a>  |  出版物经营许可证编号新出发(苏)批字第N-012号  |  互联网出版许可证编号新出网证(京)字150号</span>
				<span><a href="/gouwu/#">网络文化经营许可证京网文[2011]0168-061号</a>  违法和不良信息举报电话：4006561155  Copyright © 2004-2014  商城JD.com 版权所有</span>
				<span>商城旗下网站：<a href="/gouwu/#">360TOP</a><a href="/gouwu/#">拍拍网</a><a href="/gouwu/#">网银在线</a></span>
			</div>
			<div class="down_bot">
				<img src="/gouwu/images/bot1.gif" alt="" />
				<img src="/gouwu/images/bot2.gif" alt="" />
				<img src="/gouwu/images/bot3.png" alt="" />
				<img src="/gouwu/images/bot4.png" alt="" />
			</div>
		</div>
		<!-- 底部结束 -->
	</body>

</html>