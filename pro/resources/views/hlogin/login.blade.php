<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>东京商城</title>
		
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
            margin-left:310px;
            margin-top:-90px;

          }
          #xuan{
            width:100px;
            height:200px;
          
            position:relative;
            top:-300px;
            left:20px;
          }
     </style>
    </head>

    <body>
  @if (count($errors) > 0)
                    <div class="mws-form-message info">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="mws-form-message info">
                        <div class="alert alert-danger">
                          {{session('error')}}
                        </div>
                    </div>
                    @endif
                    
        <div class="page-container">
            <h1>登录</h1>
            
            <form id="form1"action="/dologin" method="post">
                <input type="text" name="username"  placeholder="用户名">
                <input type="password" name="password"  placeholder="密码">
				         
				         {{csrf_field()}}
                 <a href="/forget">忘记密码?</a>
                <button type="submit">提交</button>
                <div class="error"><span>+</span></div>
            </form>
            <form id="form2"action="/dologin" method="post"style="display:none">
                <input type="text" name="email"  placeholder="邮箱名">
                <input type="password" name="password"  placeholder="密码">
                 
                 {{csrf_field()}}
                 <a href="/forget">忘记密码?</a>
                <button type="submit">提交</button>
                <div class="error"><span>+</span></div>
            </form>
            <div class="connect">
                <p>其他帮助:</p>
                <p>
                    <a class="facebook" href=""></a>
                    <a class="twitter" href=""></a>
                </p>
            </div>
            <div id="xuan"><button id="aa"style="width:80px">用户名登录</button ><button id="bb"style="width:80px">邮箱登录</button></div>
        </div>
		
        <!-- Javascript -->
        <script src="/assets/js/jquery-1.8.2.min.js"></script>
        <script src="/assets/js/supersized.3.2.7.min.js"></script>
        <script src="/assets/js/supersized-init.js"></script>
        <script src="/assets/js/scripts.js"></script>
		<script type="text/javascript">
      $(function(){
          $('input[name="username"]').focus(function(){
              $(this).next("span").remove();
               $("<span>请输入正确的信息</span>").css("color","red").insertAfter($(this));
          }).blur(function(){
              s=$(this);
              s.next("span").remove();
              $v=$(this).val();
              if($v.match(/^\S{1,10}$/)==null){
              $("<span>用户名格式不正确</span>").css("color","blue").insertAfter(s);
               
               }else{
                     //Ajax
                   $.get("/dohome",{uname:$v},function($data){
                     if($data==1){$("<span>用户名输入正确</span>").css("color","red").insertAfter(s);

                    
                    }else{
                               $("<span>用户名不存在，请先去注册</span>").css("color","green").insertAfter(s);
                              //成功提交
                       
                           }
                   });
                 }

             });
          $('#aa').click(function(){
             $(this).css('background-color','pink');
              $('#bb').css('backgroundColor','red');
             $('#form1').css('display','block');
              $('#form2').css('display','none');
          });
          $('#bb').click(function(){
            $(this).css('backgroundColor','pink');
            $('#aa').css('backgroundColor','red');
             $('#form2').css('display','block');
              $('#form1').css('display','none');
          });
          $('input[name="email"]').focus(function(){
              $(this).next("span").remove();
               $("<span>请输入正确的邮箱</span>").css("color","red").insertAfter($(this));
          }).blur(function(){
              s=$(this);
              s.next("span").remove();
              $v=$(this).val();
              if($v.match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/)==null){
              $("<span>邮箱格式不正确</span>").css("color","blue").insertAfter(s);
               
               }else{
                     //Ajax
                   $.get("/dohemail",{email:$v},function($data){
                     if($data==1){$("<span>邮箱名输入正确</span>").css("color","green").insertAfter(s);

                    
                    }else{
                               $("<span>邮箱不存在，请先去注册</span>").css("color","red").insertAfter(s);
                              //成功提交
                       
                           }
                   });
                 }

             });
         
      })
 </script>

    </body>

</html>