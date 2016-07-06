
<html>
 <head>
  <title>网站管理员登陆</title> 
  <meta charset="utf-8">
  <style type="text/css">
  *{
    padding: 0px;
    margin:0px;
  }

</style> 
  
  <link href="images/skin.css" rel="stylesheet" type="text/css" /> 
  <script type="text/javascript" src="/moban/js/libs/jquery-1.8.3.min.js"></script>
 </head>
 <body> 
        
  <table width="100%" height="166" border="0" cellpadding="0" cellspacing="0"> 
   <tbody>
     
    <tr> 
     <td height="42" valign="top">
      <table width="100%" height="42" border="0" cellpadding="0" cellspacing="0" class="login_top_bg"> 
       <tbody>
        <tr> 
         <td width="1%" height="21">&nbsp;</td> 
         <td height="42">&nbsp;</td> 
         <td width="17%">&nbsp;</td> 
        </tr> 
       </tbody>
      </table></td> 
    </tr> 
    <tr> 
     <td valign="top">
      <table width="100%" height="532" border="0" cellpadding="0" cellspacing="0" class="login_bg"> 
       <tbody>
        <tr> 
         <td width="49%" align="right">
          <table width="91%" height="532" border="0" cellpadding="0" cellspacing="0" class="login_bg2"> 
           <tbody>
            <tr> 
             <td height="138" valign="top">
              <table width="89%" height="427" border="0" cellpadding="0" cellspacing="0"> 
               <tbody>
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
                <tr> 
                 <td height="149">&nbsp;</td> 
                </tr> 
                <tr> 
                 <td height="80" align="right" valign="top"><img src="images/jingdong.png" width="279" height="68" /></td> 
                </tr> 
                <tr> 
                 <td height="198" align="right" valign="top">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0"> 
                   <tbody>
                    <tr> 
                     <td width="35%">&nbsp;</td> 
                     <td height="25" colspan="2" class="left_txt"><p>1- 中国最大的线上超市...</p></td> 
                    </tr> 
                    <tr> 
                     <td>&nbsp;</td> 
                     <td height="25" colspan="2" class="left_txt"><p>2- 一站通式的购物方式，方便用户使用...</p></td> 
                    </tr> 
                    <tr> 
                     <td>&nbsp;</td> 
                     <td height="25" colspan="2" class="left_txt"><p>3- 强大的支付系统，便捷您的生活...</p></td> 
                    </tr> 
                    <tr> 
                     <td>&nbsp;</td> 
                     <td width="30%" height="40"><img src="images/icon-demo.gif" width="16" height="16" /><a href="http://www.nongfuit.com" target="_blank" class="left_txt3"> 使用说明</a> </td> 
                     <td width="35%"><img src="images/icon-login-seaver.gif" width="16" height="16" /><a href="http://www.nongfuit.com" class="left_txt3"> 在线客服</a></td> 
                    </tr> 
                   </tbody>
                  </table></td> 
                </tr> 
               </tbody>
              </table></td> 
            </tr> 
           </tbody>
          </table></td> 
         <td width="1%">&nbsp;</td> 
         <td width="50%" valign="bottom">
          <table width="100%" height="59" border="0" align="center" cellpadding="0" cellspacing="0"> 
           <tbody>
            <tr> 
             <td width="4%">&nbsp;</td> 
             <td width="96%" height="38"><span class="login_txt_bt">东京商城欢迎登录</span></td> 
            </tr> 
            <tr> 
             <td>&nbsp;</td> 
             <td height="21">
              <table cellspacing="0" cellpadding="0" width="100%" border="0" id="table211" height="328"> 
               <tbody>
                <tr> 
                 <td height="164" colspan="2" align="middle">
                  <form action="/dologin" method="post"> 
                   <table cellspacing="0" cellpadding="0" width="100%" border="0" height="143" id="table212"> 
                    <tbody>
                     <tr> 
                      <td width="13%" height="38" class="top_hui_text"><span class="login_txt">用户名：&nbsp;&nbsp; </span></td> 
                      <td height="38" colspan="2" class="top_hui_text"><input name="username" class="editbox4" value="" size="20" type="text"/> </td> 
                     </tr> 
                     <tr> 
                      <td width="13%" height="35" class="top_hui_text"><span class="login_txt"> 密 码： &nbsp;&nbsp; </span></td> 
                      <td height="35" colspan="2" class="top_hui_text"><input class="editbox4" type="password" size="20" name="password" /> <img src="images/luck.gif" width="19" height="18" />
                      <input type="text"name="vcode"value=""> <img src="{{url('/vcode')}}"onclick="this.src=this.src+'?a=1'"></td> 
                     </tr> 
                     <tr> 
                      <td height="35">&nbsp;</td> 
                      <td width="20%" height="35"><input name="Submit" type="submit" class="button" id="Submit" value="登 陆" /> </td> 
                      <td width="67%" class="top_hui_text"><input name="cs" type="button" class="button" id="cs" value="取 消" onclick="showConfirmMsg1()" /></td> 
                     </tr> 
                    </tbody>
                   </table> 
                   <br /> 
                   {{csrf_field()}}
                  </form></td> 
                </tr> 
                <tr> 
                 <td width="433" height="164" align="right" valign="bottom"><img src="images/login-wel.gif" width="242" height="138" /></td> 
                 <td width="57" align="right" valign="bottom">&nbsp;</td> 
                </tr> 
               </tbody>
              </table></td> 
            </tr> 
           </tbody>
          </table> </td> 
        </tr> 
       </tbody>
      </table></td> 
    </tr> 
    <tr> 
     <td height="20">
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="login-buttom-bg"> 
       <tbody>
        <tr> 
         <td align="center"><span class="login-buttom-txt">东京商城</span></td> 
        </tr> 
       </tbody>
      </table></td> 
    </tr> 
   </tbody>
  </table> 
 </body>
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
</html>