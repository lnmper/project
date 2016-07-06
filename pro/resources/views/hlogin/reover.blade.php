<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>恭喜您注册成功</title>
		
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="/assets/css/reset.css">
        <link rel="stylesheet" href="/assets/css/supersized.css">
        <link rel="stylesheet" href="/assets/css/style.css">
		 <script type="text/javascript" src="/moban/js/libs/jquery-1.8.3.min.js"></script>
     <style type="text/css">
          *{
            padding:0px;
            margin:0px;
          }
          #one{
			   width:500px;
			   height:100px;
			   border:1px dashed red;
			   position:absolute;
			   left:400px;
			   top:200px;
			   line-height:100px;
			   background-color:#ccc;
			   
          }
		 
		   #three{
			   width:50px;
			   height:50px;
			
			   position:absolute;
			   left:180px;
			   font-size:30px;
			   top:20px;
			   line-height:50px;
			   background-color:#ccc;
			   
          }
		  
     </style>
    </head>

    <body>
  
        <div id="one">
          <p style="color:blue;font-size:20px">恭喜您注册成功　　　秒后自动跳转到登录界面...</p>
            <div id="three">4</div>
        </div>
		
        <!-- Javascript -->
        <script src="/assets/js/jquery-1.8.2.min.js"></script>
        <script src="/assets/js/supersized.3.2.7.min.js"></script>
        <script src="/assets/js/supersized-init.js"></script>
        <script src="/assets/js/scripts.js"></script>
		<script type="text/javascript">
      $(function(){
         
		did=document.getElementById("three");
		m=4;
		mytime=setInterval(function(){
			m--;
			if(m<0){
				m=0;
				
				 location="/login";
				clearInterval(mytime);
				}
			did.innerHTML=m;
		},1000);
      })
 </script>

    </body>

</html>