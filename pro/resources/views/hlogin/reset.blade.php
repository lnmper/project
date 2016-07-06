<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>找回密码</title>
		
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
            <h1>重置密码</h1>
            <form action="/reset" method="post">
              <input type="hidden"value="{{$user->id}}"name="id">
                <input type="password" name="password"  placeholder="请输入您的新密码">
                <input type="password" name="repassword"  placeholder="请确认您的新密码">
                {{csrf_field()}}
                <button type="submit">提交</button>
                <div class="error"><span>+</span></div>
            </form>
            
        </div>
		
        <!-- Javascript -->
        <script src="/assets/js/jquery-1.8.2.min.js"></script>
        <script src="/assets/js/supersized.3.2.7.min.js"></script>
        <script src="/assets/js/supersized-init.js"></script>
        <script src="/assets/js/scripts.js"></script>
		<script type="text/javascript">
      $(function(){
          $('input[type="text"]').focus(function(){
              $(this).next("span").remove();
               $("<span>请输入正确的信息</span>").css("color","red").insertAfter($(this));
          }).blur(function(){
              s=$(this);
              s.next("span").remove();
              $v=$(this).val();
              if($v.match(/^\w{1,10}$/)==null){
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
         
      })
 </script>

    </body>

</html>