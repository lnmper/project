<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>商品详情页</title>
	<style type="text/css">
		#header{
			width:100%;
			height:40px;
			background-color:#bdc;
			position:absolute;
			font-size: 13px;
			line-height: 40px;
			color:blue;
		}
	#footer{
		width:100%;
	    height:200px;
		background-color:#fff;
		position:absolute;
		color:yellow;
		font-size: 13px;
		top:1000px;
				
	}
	*{
		padding:0px;
		margin:0px;
		list-style-type: none;
	}
	a{
		text-decoration:none;
	}
	li{
		list-style-type: none;
	}
	#small{
		width:400px;
		height:400px;
		position:absolute;
		left:50px;
		top:140px;
		border:1px red solid;
	}
	#xinxi{
		width:400px;
		height:400px;
		position:absolute;
		left:480px;
		top:140px;

		border:1px red solid;
	}
	#simg{
		position:absolute;
	}
	#move{
		width:100px;
		height:100px;
		/*background-color:red;*/
		position:absolute;
		left:100px;
		top:100px;
		background-image:url(/images/bg.png);
		display:none;
	}
	#big{
		width:400px;
		height:400px;
		position:absolute;
		left:470px;
		top:140px;
		overflow:hidden;
		display:none;
		z-index: 3;

	}
	#bimg{
		position:absolute;
	}
	#imgs{
		list-style-type:none;
		position:absolute;
		border: 1px red solid;
		left:50px;
		top:580px;
	}
	li{
		width:100px;
		height:100px;
		border:1px dotted #ccc;
		float:left;
		padding:10px;
	}
	.a{
		width:70px;
		height:40px;
		border:1px pink solid;
		margin-left: 10px;
		background-color:#ccc;

	}
	#b{
		width:160px;
		height:50px;
		border:1px pink solid;

		margin-left: 130px;

	}
	#num{
		width:50px;
		height:30px;
	}
	.add{
		width:240px;
		height:270px;
		top:40px;
		position: absolute;
		z-index: 22;
		border:1px red solid;
		background-color: pink;
		display: none;
		padding:5px;
		opacity:0.8;
	}
	.add a:hover{
		color:red;
	}
	.js{
		width:100%;
		height:80px;
		position: absolute;
		top:40px;
		border:1px red solid;
		background-image: url('/images/js.jpg');
	}
	#daohang{
		width:800px;
		height: 300px;
		border:1px red solid;
		background-color: pink;
		position: absolute;
		left:460px;
		display: none;
		opacity:0.8;
		z-index: 12;
	}
	.neirong{
		width:800px;
		height:100px;
	
		position: absolute;

		z-index: 12;
	
	}
	.neirong1{
		width:800px;
		height:100px;
		
		position: absolute;
		top:100px;
		z-index: 12;
	
	}
	.neirong2{
		width:800px;
		height:100px;
		
		position: absolute;
		top:200px;
		z-index: 12;
	
	}
	#down {
    width: 1210px;
    height: 150px;
    margin: 0 auto;
    margin-bottom: 30px;
    margin-top: 20px;
}

#down .down_top {
    width: 1210px;
    height: 18px;
    float: left;
    text-align: center;
}

#down .down_top a {
    padding-right: 10px;
    padding-left: 10px;
    line-height: 18px;
    border-right: 1px solid #ccc;
    color: #666;
}

#down .down_top a:hover {
    color: #E4393C;
    text-decoration: underline;
}

#down .down_center {
    width: 1210px;
    height: 72px;
    float: left;
    margin: 10px 0px;
}

#down .down_center span {
    width: 1210px;
    height: 14px;
    float: left;
    margin-top: 3px;
    text-align: center;
    color: #666;
}

#down .down_center a {
    padding-right: 5px;
    color: #666;
}

#down .down_center a:hover {
    color: #E4393C;
    text-decoration: underline;
}
.center_right{
	width:240px;
	height:800px;
	border:1px red solid;
	position: absolute;
	left:950px;
	top:120px;

}
#detail{
	width:700px;
	height:300px;
	left:200px;
	border:1px red solid;
	position:absolute;
	top:750px;
}
#detail_top{
	width:700px;
	height:40px;
	border:1px red solid;
	position:absolute;
	background-color: #ccc;
	
}
#detail_one{
	width:700px;
	height:250px;
	border: 1px yellow solid;
	position: absolute;
	top:50px;
	font-size:15px;

}
#detail_two{
	width:700px;
	height:250px;
	border: 1px yellow solid;
	position: absolute;
	top:50px;
	font-size:15px;
	display: none;

}
#shop{
	width:150px;
	height:200px;
	border:1px red solid;
	position: absolute;
	top:750px;
	left:30px;
}
.dianpu{
	width:150px;
	height:40px;
	position:absolute;
	top:150px;
}
	
	</style>
	<script  type="text/javascript"src="/moban/js/libs/jquery-1.8.3.min.js"></script>
</head>
<body>
	<div id="header">
		<li id="dizhi"><a href="">送至北京V
			<div class="add">
				<a href="">北京</a>&nbsp;&nbsp;<a href="">上海</a>&nbsp;&nbsp;
				&nbsp;&nbsp;<a href="">天津</a>&nbsp;&nbsp;<a href="">重庆</a>&nbsp;&nbsp;<a href="">河北</a>
				&nbsp;&nbsp;<a href="">山西</a>&nbsp;&nbsp;<a href="">河南</a>&nbsp;&nbsp;<a href="">辽宁</a>
				&nbsp;&nbsp;<a href="">吉林</a>&nbsp;&nbsp;<a href="">黑龙江</a>&nbsp;&nbsp;<a href="">浙江</a>
				&nbsp;&nbsp;<a href="">江苏</a>&nbsp;&nbsp;<a href="">山东</a>&nbsp;&nbsp;<a href="">安徽</a>
				&nbsp;&nbsp;<a href="">内蒙</a>&nbsp;&nbsp;<a href="">湖北</a>&nbsp;&nbsp;<a href="">湖南</a>
				&nbsp;&nbsp;<a href="">广东</a>&nbsp;&nbsp;<a href="">广西</a>&nbsp;&nbsp;<a href="">江西</a>
				&nbsp;&nbsp;<a href="">四川</a>&nbsp;&nbsp;<a href="">海南</a>&nbsp;&nbsp;<a href="">贵州</a>
				&nbsp;&nbsp;<a href="">云南</a>&nbsp;&nbsp;<a href="">西藏</a>&nbsp;&nbsp;<a href="">陕西</a>
				&nbsp;&nbsp;<a href="">甘肃</a>&nbsp;&nbsp;<a href="">青海</a>&nbsp;&nbsp;<a href="">宁夏</a>
				&nbsp;&nbsp;<a href="">新疆</a>&nbsp;&nbsp;<a href="">台湾</a>&nbsp;&nbsp;<a href="">香港</a>
				&nbsp;&nbsp;<a href="">澳门</a>&nbsp;&nbsp;<a href="">海外</a>&nbsp;&nbsp;<a href="">钓鱼岛</a>
			</div>
			</li>

		</a>　　　　　　　　　　　　　　　　　　　　　　　　　　　　<a href="">您好&nbsp;请登录</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">免费注册</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">我的订单</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">我的京东</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">京东会员</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">企业采购</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">手机京东</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">客户服务</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">关注京东</a>
		&nbsp;&nbsp;|&nbsp;&nbsp;<a href="" id="dao">网站导航
			<div id="daohang">
							<div class="neirong">
                                    <h4 >特色主题</h4>
                                    <ul>   
                                        <li><a href="">品牌街</a></li>
                                        <li><a href="">今日抄底</a></li>
                                        <li><a href="">好东西</a></li>
                                        <li><a href="">京东预售</a></li>
                                    </ul>
                                    <ul>
                                        
                                        <li><a href="">尖er货</a></li>
                                        <li><a href="">京东首发</a></li>
                                       
                                    </ul>
                                    
                                   
                                </div>
                                <div class="neirong1">
                                    
                                        <h4 >行业频道</h4>
                                   
                                    <ul>
                                        
                                        <li><a href="">品牌街</a></li>
                                        <li><a href="">今日抄底</a></li>
                                        <li><a href="">好东西</a></li>
                                        
                                    </ul>
                                    <ul>
                                        
                                        <li><a href="">尖er货</a></li>
                                        <li><a href="">京东首发</a></li>
                                        <li><a href="">今日团购</a></li>
                                        
                                    </ul>
                                    
                                    
                                </div>
                                <div class="neirong2">
                                        <h4 class=>生活服务</h4>
                                    <ul> 
                                        <li><a href="">品牌街</a></li>
                                        <li><a href="">今日抄底</a></li>
                                        <li><a href="">好东西</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="">尖er货</a></li>
                                        <li><a href="">京东首发</a></li>
                                        <li><a href="">今日团购</a></li>
                                    </ul>
                                   
                                </div>
                                
						</div>
					</a>
			</div>
	</li>
		</div>
		<div class="js"></div>
	<div id="small">
		<img src="{{$pic}}" id="simg" width="400px"height="400px">
		<div id="move"></div>
	</div>
	<div id="xinxi">
			<form action="/cart"method="post">
		<div style="width:400px;height:20px;color:blue;text-align:center;"><b>{{$res->goodsname}}</b></div>
				<div style="width:400px;height:40px;color:red;text-align:center;margin-top:20px">原价<del>400元</del> 现价：{{$res->price}}元</div>
				<div style="width:400px;height:60px;color:red;text-align:center;margin-top:40px,border:1px solid red">
					选择颜色&nbsp;&nbsp;<button class="a"id="yan1">蓝色</button><button class="a"id="yan2">白色</button><button class="a" id="yan3">红色</button></div>
				<div style="width:400px;height:60px;color:red;text-align:center;margin-top:40px,border:1px solid red">
					选择尺寸&nbsp;&nbsp;<button class="a"id="chi1">160cm</button><button class="a"id="chi2">170cm</button><button class="a"id="chi3">180cm</button></div>
				<div style="width:400px;height:60px;color:red;text-align:center;margin-top:40px,border:1px solid red">
					购买件数&nbsp;&nbsp;<button id="jian">-</button><input type="text"value="1"name="num"id="num"><button id="jia">+</button>件</div>
				<p text-align="center">
					<input type="hidden"value=""name="miaoshu"id="miaoshu">
					<input type="hidden"value=""name="miaoshu1"id="miaoshu1">
					<input type="hidden"value="{{$res->goodsid}}"name="id">
					<input type="hidden"value="{{$res->goodsname}}"name="name">
					<input type="hidden"value="{{$pic}}"name="photo">
					<input type="hidden"value="{{$res->price}}"name="price">
					{{csrf_field()}}
					<button id="b" type="submit"><h2>加入购物车</h2></button></p>
				</form>
				<p style="width:400px;text-align:center;font-size:12px">温馨提示，本商品支持7天无理由退货</p>
	</div>
	<div id="big">
		<img src="{{$pic}}" id="bimg"width="1000px"height="1000px">
	</div>
	<ul id="imgs">
		@foreach($bb as $k=>$v)
		@if($bb[$k]['name']=="西服")
				@foreach($bb[$k]['goods'] as $val)
					<li id="sim">            
							<a href="/goodsdetail/{{$val['gid']}}" >
								<img id="xifu" width="100px" height="100px" title="" src="/uploads/{{$val['photo']}}" class="">
							</a>
						</div>                
						</li>
			@endforeach
			
		@endif
	@endforeach
		
		
	</ul>
	<div class="center_right">
		<center>-------看了又看------</center>
		<center><div style="width:200px;height:200px；margin-left:15px">
			<img src="/upload/kan.jpg"width="200px"height="180px">
			<center>￥298</center>
		</div>
	</center>
	<center><div style="width:200px;height:200px；margin-left:15px">
			<img src="/upload/kan1.jpg"width="200px"height="180px">
			<center>￥398</center>
		</div>
	</center>
	<center><div style="width:200px;height:200px；margin-left:15px">
			<img src="/upload/kan2.jpg"width="200px"height="180px">
			<center>￥498</center>
		</div>
	</center>
	</div>
	<div id="shop">
		<center><span style="font-size:13px;background-color:#ccc">海澜之家旗舰店</span></center>
		<span style="width:40px;height:40px;font-size:40px;">9.7</span>
		<div style="width:90px;height:80px;
		font-size:14px;position:absolute;left:60px;top:30px">
			商品评价9.8↑<br/>服务评价9.7↑<br/>
			物流速度9.4↓

		</div>
		<div class="dianpu"><button>进店逛逛</button><button>收藏店铺</button></div>
	</div>
	<div id="detail">
		<div id="detail_top">
			<button class="a"id="xq">商品详情</button>&nbsp;&nbsp;
			<button class="a" id="sp">商品评论</button>
		</div>
		<div id="detail_one">
			<center>商品名称:{{$res->goodsname}}<br/>
			商品产地:{{$res->home}}<br/>
			剩余库存:{{$res->store}}<br/>
			商品描述:{{$res->deta}}</center>

		</div>
		<div id="detail_two">
			商品评论
		</div>
	</div>
	<div id="footer">
		<div id="down">
			<div class="down_top">
				<a href="#">关于我们</a>
				<a href="#">联系我们</a>
				<a href="#">商家入驻</a>
				<a href="#">营销中心</a>
				<a href="#">手机商城</a>
				<a href="#">友情链接</a>
				<a href="#">销售联盟</a>
				<a href="#">商城社区</a>
				<a href="#">商城公益</a>
				<a href="#" style="border-right:none">English Site</a>
			</div>
			<div class="down_center">
				<span>北京市公安局朝阳分局备案编号110105014669  |  京ICP证070359号  |  <a href="#">互联网药品信息服务资格证编号(京)-经营性-2014-0008</a>  |  新出发京零 字第大120007号</span>
				<span><a href="#">音像制品经营许可证苏宿批005号</a>  |  出版物经营许可证编号新出发(苏)批字第N-012号  |  互联网出版许可证编号新出网证(京)字150号</span>
				<span><a href="#">网络文化经营许可证京网文[2011]0168-061号</a>  违法和不良信息举报电话：4006561155  Copyright © 2004-2014  商城JD.com 版权所有</span>
				<span>商城旗下网站：<a href="#">360TOP</a><a href="#">拍拍网</a><a href="#">网银在线</a></span>
			</div>
			
		</div>
		</div>
</body>
<script type="text/javascript">
	//获取div
	small=document.getElementById("small");
	simg=document.getElementById("simg");
	move=document.getElementById("move");
	big=document.getElementById("big");
	bimg=document.getElementById("bimg");
	imgs=document.getElementById("imgs");
	b=document.getElementById('b');
	miaoshu=document.getElementById("miaoshu");
	miaoshu1=document.getElementById("miaoshu1");
	num=document.getElementById('num');

	var $bbb=[];
		m=1;
	$('#jia').click(function(){
		m++;
		num.value=m;
		return false;
	});
	$('#jian').click(function(){
		m--;
		if(m<=0){
			m=0;
		}
		num.value=m;
		return false;
	});
	b.onclick=function(){
		$('#b').css('border','1px red solid');
	}
	
	//给small绑定一个onmousemove
	small.onmousemove=function(e){
		// alert("ss");
		move.style.display="block";
		big.style.display="block";
		move.style.cursor="move";
		//浏览器的兼容
		ee=e||window.event;
		//获取横坐标和纵坐标
		x=ee.pageX;
		y=ee.pageY;
		//获取x1  y1
		x1=small.offsetLeft;
		y1=small.offsetTop;
		//move的自身的宽度和高度的一半
		m_w=move.offsetWidth/2;
		m_h=move.offsetHeight/2;
		l=x-x1-m_w;
		t=y-y1-m_h;
		//范围
		//上
		if(t<0){
			t=0;
		}
		//下
		if(t>small.offsetHeight-move.offsetHeight){
			t=small.offsetHeight-move.offsetHeight;
		}
		//左
		if(l<0){
			l=0;
		}
		//右
		if(l>small.offsetWidth-move.offsetWidth){
			l=small.offsetWidth-move.offsetWidth;
		}
		//把的到left和top值赋给move的left和top值
		move.style.left=l+"px";
		move.style.top=t+"px";
		//求x和y轴比例
		x1=l/small.offsetWidth;
		y1=t/small.offsetHeight;
		//求大图移动的left和top值
		//获取大图的宽度和高度
		b_w=bimg.offsetWidth;
		b_h=bimg.offsetHeight;
		ll=b_w*x1;
		tt=b_h*y1;

		//给bimgleft和top去赋值
		bimg.style.left=-ll+"px";
		bimg.style.top=-tt+"px";

		//重新给move高度和宽度赋值
		x2=big.offsetWidth/bimg.offsetWidth;
		y2=big.offsetHeight/bimg.offsetHeight;
		//获取small的自身的宽度和高度
		s_w=small.offsetWidth;
		s_h=small.offsetHeight;
		m_w=s_w*x2;
		m_h=s_h*y2;
		move.style.width=m_w+"px";
		move.style.height=m_h+"px";
	}
	//鼠标的移出
	small.onmouseout=function(){
		move.style.display="none";
		big.style.display="none";

	}
	//获取img
	list=imgs.getElementsByTagName("img");
	//遍历
	for(var i=0;i<list.length;i++){
		list[i].onclick=function(){
			src=this.getAttribute("src");
			// alert(src);
			simg.src=src;
			bimg.src=src;
		}
	}
	$('#dizhi').mouseover(function(){
		$('.add').css('display','block')
	}).mouseout(function(){
		$('.add').css('display','none');
	});
	$('#dao').mouseover(function(){
		$('#daohang').css('display','block')
	}).mouseout(function(){
		$('#daohang').css('display','none');
	});
	$('#sp').click(function(){
		$(this).css('background-color','red');
		$('#xq').css('background-color','#ccc');
		$('#detail_two').css('display','block');
		$('#detail_one').css('display','none');
	})
	$('#xq').click(function(){
		$(this).css('background-color','red');
		$('#sp').css('background-color','#ccc');
		$('#detail_two').css('display','none');
		$('#detail_one').css('display','block');

	})
	$('#yan1').click(function(){
		$(this).css('background-color','red');
		miaoshu1.value=$(this).html();
		$('#yan2 ,#yan3').css('background-color','#ccc');
	
		return false;
	})
	$('#yan2').click(function(){
		$(this).css('background-color','red');
		miaoshu1.value=$(this).html();
		$('#yan1, #yan3').css('background-color','#ccc');
		
		
		return false;
	})
	$('#yan3').click(function(){
		$(this).css('background-color','red');
		miaoshu1.value=$(this).html();
		$('#yan2, #yan1').css('background-color','#ccc');

	
		return false;
	})
	$('#chi1').click(function(){
		$(this).css('background-color','red');
		miaoshu.value=$(this).html();
		$('#chi2 ,#chi3').css('background-color','#ccc');
		
		return false;
	})
	$('#chi2').click(function(){
		$(this).css('background-color','red');
		$('#chi1, #chi3').css('background-color','#ccc');
		miaoshu.value=$(this).html();
		return false;
	})
	$('#chi3').click(function(){
		$(this).css('background-color','red');
		miaoshu.value=$(this).html();
		$('#chi2, #chi1').css('background-color','#ccc');
		return false;
	})
	$('#xifu').mouseover(function(){
		$('#simg').src=$('#xifu').src;
	});
	
</script>
</html>
	

