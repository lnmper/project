<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">
 <script type="text/javascript" src="/moban/js/libs/jquery-1.8.3.min.js"></script>

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/moban/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/moban/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/moban/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/moban/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/moban/css/mws-theme.css" media="screen">
<style type="text/css">
    *{
        padding: 0px;
        margin: 0px;
    }

</style>
<title>东京后台登录界面</title>

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
    <div id="mws-login-wrapper">
        <div id="mws-login">
            <h1>东京商城后台</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                <form class="mws-form" action="/admin/login/login" method="post">
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <!--注意input框里的required-->
                            <input type="text" name="username" class="mws-login-username" placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="password" class="mws-login-username" placeholder="请输入登录密码">
                        </div>
                    </div>
                    
                    <div class="mws-form-row">
                        {{csrf_field()}}
                        <input type="submit" value="登录" class="btn btn-success mws-login-button">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Plugins -->
   
    <script src="/moban/js/libs/jquery.placeholder.min.js"></script>
    <script src="/moban/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/moban/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
   

    <!-- Login Script -->
    <script src="/moban/js/core/login.js"></script>

</body>
<script type="text/javascript">
        $(function(){
            $("input[name='username']").focus(function(){
                $(this).next('span').remove();
                $('<span>请输入您的正确用户名</span>').css('color','red').insertAfter($(this));

            }).blur(function(){
                s=$(this);
                s.next('span').remove();
                vl=s.val();
                if(vl.match(/^\w{4,10}$/)==null)){
                    $("<span>请输入4-10任意的数字字母下划线</span>").css("color","blue").insertAfter(s);
                }
            })

        })
$(function(){
            $("input[name='password']").focus(function(){
                $(this).next('span').remove();
                $('<span>请输入您的正确密码</span>').css('color','red').insertAfter($(this));

            }).blur(function(){
                s=$(this);
                s.next('span').remove();
               
            })

        })
</script>
</html>