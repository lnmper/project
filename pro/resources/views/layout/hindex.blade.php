<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style type="text/css">
			*{
				padding:0px;
				margin:0px;
			}
			#header{
				width:100%;
				height:50px;
				background-color:#ccc;
				position:relative;
				color:blue;
			
				
			}
			#footer{
				width:100%;
				height:100px;
				background-color:red;
				position:relative;
			
		
				color:yellow;
				
			}
		</style>
	</head>
	<body>
		<div id="header">
	运至北京<a href="">您好&nbsp;请登录</a>
		</div>
		@section('content')
		
		@show
		<div id="footer">
		sdfasdfsd
		</div>
	</body>
</html>