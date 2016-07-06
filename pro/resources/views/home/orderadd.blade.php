<!DOCTYPE html >
<html >

	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>商城网上商城</title>
		<link rel="stylesheet" type="text/css" href="/gouwu/css/style.css">
		<link rel="stylesheet" type="text/css" href="/gouwu/css/css.css" />
		<script type="text/javascript" src="/gouwu/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="/gouwu/js/libs/jquery-1.8.3.min.js"></script>
		<style type="text/css">
			.active{
				background-color: red;
			}
			.did1{
				width:220px;
				height:200px;
				position: relative;
				float: left;
				border:1px red solid;
				margin-left: 30px;
			}
			#dadid{
				width:100%;
				height:200px;
				position: relative;
				background-color: #cccccc;
			}
			.zhifu{
				width:200px;
				height:40px;
				font-size:20px;
				position: relative;
				border: 1px red solid;
				background-color: green;
			}

		</style>
		<script type="text/javascript">
			$(function() {
				$('#dadid .did1').click(function(){
				 $(this).siblings().removeClass('active');
				 $(this).addClass('active');
				id=$(this).attr('aid');
				$('input[name="address_id"]').val(id);
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
				$('#jia').click(function() {
					$('input[name=num]').val(parseInt($('input[name=num]').val()) + 1);
					
				})
				$('#jian').click(function() {
					$('input[name=num]').val(parseInt($('input[name=num]').val()) - 1);
					
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

			function onclick_close() {
				var shade_content = $(".shade_content");
				var shade = $(".shade");
				if (confirm("确认关闭么！此操作不可恢复")) {
					shade_content.hide();
					shade.hide();
				}
			}

			function onclick_open() {
				$(".shade_content").show();
				$(".shade").show();
				var input_out = $(".input_style");
				for (var i = 0; i <= input_out.length; i++) {
					if ($(input_out[i]).val() != "") {
						$(input_out[i]).val("");
					}
				}
			}

			function onclick_remove(r) {
				if (confirm("确认删除么！此操作不可恢复")) {
					var out_momey = $(".out_momey");
					var input_val = $(r).parent().prev().children().eq(1).val();
					var span_html = $(r).parent().prev().prev().children().html();
					var out_add = parseFloat(input_val).toFixed(2) * parseFloat(span_html).toFixed(2);
					var reduce = parseFloat(out_momey.html()).toFixed(2)- parseFloat(out_add).toFixed(2);
					console.log(parseFloat(reduce).toFixed(2));
					out_momey.text(parseFloat(reduce).toFixed(2))
					$(r).parent().parent().remove();
				}
			}

			function onclick_btnAdd(a) {
				var out_momey = $(".out_momey");
				var input_ = $(a).prev();
				var input_val = $(a).prev().val();
				var input_add = parseInt(input_val) + 1;
				input_.val(input_add);
				var btn_momey = parseFloat($(a).parent().prev().children().html());
				var out_momey_float = parseFloat(out_momey.html()) + btn_momey;
				out_momey.text(out_momey_float.toFixed(2));
			}

			function onclick_reduce(b) {
				var out_momey = $(".out_momey");
				var input_ = $(b).next();
				var input_val = $(b).next().val();
				if (input_val <= 1) {
					alert("商品个数不能小于1！")
				} else {
					var input_add = parseInt(input_val) - 1;
					input_.val(input_add);
					var btn_momey = parseFloat($(b).parent().prev().children().html());
					var out_momey_float = parseFloat(out_momey.html()) - btn_momey;
					out_momey.text(out_momey_float.toFixed(2));
				}
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
					<span>您好，欢迎来到商城！
			<a href="/gouwu/login.html">[登陆]</a><a href="/gouwu/login.html">[免费注册]</a>
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
									<a href="/gouwu/#">商城E卡　</a>
									<a href="/gouwu/#">家装城</a>
									<a href="/gouwu/#">搭配购　</a>
									<a href="/gouwu/#">我喜欢　</a>
									<a href="/gouwu/#">游戏社区</a>
								</div>
								<div class="tese">
									<span>企业服务</span>
								</div>
								<div class="tesemain1">
									<a href="/gouwu/#">企业采购</a>
									<a href="/gouwu/#">办公直通车</a>
								</div>
								<div class="tese">
									<span>旗下网站</span>
								</div>
								<div class="tesemain2">
									<a href="/gouwu/#">English Site</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- 搜索区域开始 -->
		<div id="serach">
			<div class="logo">
				<a href="/gouwu/index.html">
					<img src="/gouwu/images/logo.png" alt="" /></a>
				<div class="dongtu">
				</div>
			</div>
			<div class="sou">
				<div class="sousuo">
					<input type="text" class="kuang" value="跨界" style="color:#999;font-size:14px" />
					<div class="souzi">
						<a href="/gouwu/#">搜索</a>
					</div>
				</div>
				<div class="reci">
					<span>热门搜索:</span>
					<a href="/gouwu/#" style="color:red">校园之星</a>
					<a href="/gouwu/#">影院到家</a>
					<a href="/gouwu/#">JD制暖节</a>
					<a href="/gouwu/#">腕表领券</a>
					<a href="/gouwu/#">自营满减</a>
					<a href="/gouwu/#">N3抢购</a>
					<a href="/gouwu/#">图书换购</a>
					<a href="/gouwu/#">12.12</a>
				</div>
			</div>
			<div class="myjd">
				<div class="mytu">
				</div>
				<a href="/gouwu/#">我的商城</a>
				<div class="jiantou">
				</div>
				<div class="myjdhide">
					<div class="hello">
						<span>您好，请</span>
						<a href="/gouwu/#">登录</a>
					</div>
					<div class="hey">
						<div class="heyleft">
							<ul>
								<li><a href="/gouwu/#">待处理订单</a></li>
								<li><a href="/gouwu/#">咨询回复</a></li>
								<li><a href="/gouwu/#">降价商品</a></li>
								<li><a href="/gouwu/#">返修退换货</a></li>
								<li><a href="/gouwu/#">优惠券</a></li>
							</ul>
						</div>
						<div class="heyright">
							<ul>
								<li><a href="/gouwu/#">我的关注></a></li>
								<li><a href="/gouwu/#">我的京豆></a></li>
								<li><a href="/gouwu/#">我的理财></a></li>
								<li><a href="/gouwu/#">我的白条></a></li>
							</ul>
						</div>
					</div>
					<div class="hidebot">
						<div class="bottop">
							<span>最近浏览的商品:</span>
							<a href="/gouwu/#">查看浏览历史></a>
						</div>
						<div class="botdown">
							<span>「暂无数据」</span>
						</div>
					</div>
				</div>
			</div>
			
			<div class="jubao">
			</div>
		</div>
		
			<div class="open_new">
				<button class="open_btn" onclick="javascript:onclick_open();">使用新地址</button>
			</div>
			<p>已有地址</p>
		<div id="dadid">
			@foreach($address as $row)
			<div class="did1" aid="{{$row->id}}">
				<p style="border-bottom:1px dashed #ccc;line-height:28px;">{{$row->name}}</p>
				<p>{{$row->adds}}.{{$row->tel}}</p>
			</div>
			@endforeach
		</div>
	<form action="addcreate"method="post">
		<input type="hidden"value=""name="address_id">
		<input type="hidden"value="{{session('id')}}"name="user_id">
		<div class="zhifu">
			<lable></h3>支付方式</h3></lable>
			<lable><input type="radio"name="pay"value="支付宝">支付宝</lable>
			<lable><input type="radio"name="pay"value="银联支付">银联支付</lable>
		</div>
			{{csrf_field()}}
		<input class=""type="submit"value="立即支付">
	</form>
		<div class="shopping_content">
			<p>已选商品</p>
			<div class="shopping_table">
				<table border="1" bordercolor="#cccccc" cellspacing="0" cellpadding="0" style="width: 100%; text-align: center;">
					<tr>
						<th>商品id</th>
						<th>商品图片</th>
						<th>商品名称</th>
						<th>商品价格</th>
						<th>商品数量</th>
					</tr>
				
				@foreach($h as $k=>$v)
					<tr>
						<td>
							{{$v['id']}}
						</td>
						<td>

							<a><img src="/uploads/{{$v['photo']}}" width="100px"height="100px"/></a>
						</td>
						<td><span>{{$v['goodsname']}}</span></td>
						
						<td>
							<span class="span_momey">{{$v['price']}}</span>
						</td>
						<td>
						{{$v['num']}}
							
						</td>
					</tr>
				@endforeach
				
				</table>
					
				<a href="/index">继续购物</a>

				<div class="" style="width: 100%; text-align: right; margin-top: 10px;">
					<div class="div_outMumey" style="float: left;">
						总价：<span name="span"class="out_momey"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="shade">
		</div>
		<div class="shade_content">
			<div class="col-xs-12 shade_colse">
				<button onclick="javascript:onclick_close();">x</button>
			</div>
			<div class="nav shade_content_div">
				<div class="col-xs-12 shade_title">
					新增收货地址
				</div>
				<div class="col-xs-12 shade_from">
						<div class="col-xs-12">
							<!doctype html>
								<html>
								<head>
									<meta charset="utf-8">
									<title>index</title>
									<script type="text/javascript" src="/moban/js/jquery-1.8.3.min.js"></script>
								</head>
								<body>
									<select id="cid">
										<option value="">--请选择--</option>
									</select>
									<button>获取</button>
								</body>
								<script type="text/javascript">
									//第一级
									str='';
									$.ajax({
										type:"get",//请求的方式
										url:"/jilian",//地址
										data:{upid:0},//参数
										dataType:"json",//返回数据类型格式
										success:
										function(data){
											// alert(data);

											//遍历
											for(var i=0;i<data.length;i++){
												var info='<option  value="'+ data[i].id+'">'+data[i].name+'</option>';
												// alert(info);
												//把遍历出来的数据放在option 再去放在id值为cid 的select
												$("#cid").append(info);
											}
												

										},
										error:
										function(){
											alert("Ajax响应失败");
										}
									})

									//子级
									$("select").live("change",function(){
										// alert("sss");
										ob=$(this);
										//清除
										
										ob.nextAll("select").remove();
										//Ajax
										$.ajax({
										type:"get",//请求的方式
										url:"/jilian",//地址
										data:{upid:ob.val()},//参数
										dataType:"json",//返回数据类型格式
										success:
										function(data){
											// alert(data);
											select=$("<select></select>");
											if(data.length>0){
												//遍历
												for(var i=0;i<data.length;i++){
													var info='<option  value="'+ data[i].id+'">'+data[i].name+'</option>';
													// alert(info);
													//把遍历出来的数据放在option 再去放在的自己定义select
													select.append(info);
													// alert(select);
												}
												//追加select
												ob.after(select);
												}
										},
										error:
										function(){
											alert("Ajax响应失败");
										}
									})

									})

									//获取button
									var b='[]';
									//address=document.getElementById('address');
									$("button").live("click",function(){
										con='';
										$("select option:selected").each(function(){
											con+=$(this).html();
											
											
										})
										$('#address').val(con);
									})

								</script>
								<br/>
						<form action="/address"method="post">
							<span class="span_style" id="">详细地址</span>
							<input class="input_style" type="" name="adds" id="address" value="" placeholder="&nbsp;&nbsp;请输入您的详细地址" />
						</div>
						<div class="col-xs-12">
							<span class="span_style" id="">邮政编号</span>
							<input class="input_style" type="" name="code" id="number_this" value="" placeholder="&nbsp;&nbsp;请输入您的邮政编号" />
						</div>
						<div class="col-xs-12">
							<span class="span_style" class="span_sty" id="">收件人姓名</span>
							<input class="input_style" type="" name="name" id="name_" value="" placeholder="&nbsp;&nbsp;请输入您的姓名" />
						</div>
						<div class="col-xs-12">
							<span class="span_style" id="">手机号码</span>
							<input class="input_style" type="" name="tel" id="phone" value="" placeholder="&nbsp;&nbsp;请输入您的手机号码" />
						</div>
						<div class="col-xs-12">
							<input class="btn_remove" type="button" id="" onclick="javascript:onclick_close();" value="取消" />
							{{csrf_field()}}
							<input type="hidden"value="{{session('id')}}"name="user_id">
							<input type="submit" value="提交" />
						</div>
					</form>
				</div>
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