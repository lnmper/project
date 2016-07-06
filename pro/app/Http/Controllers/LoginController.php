<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    
    //执行登录
    public function postLogin(Request $request){
        //自动验证
        $this->validate($request, [
        'username' => 'required',//验证规则
        'password' => 'required',//验证规则
        
        ],[
            'username.required'=>'用户名不能为空',//规则的描述
            'password.required'=>'密码不能为空',//规则的描述
            
        ]);

    	$data=$request->except(['_token']);
        $a=DB::table('users')->where('username','=',$request->input('username'))->first();
        if($a && (Hash::check($request->input('password'),$a->password)) && ($a->state ==2)){
          $info=DB::table('users_info')->where('uid','=',$a->id)->first();
          if($info){
            session(['pic'=>$info->pic]);
          }
            session(['id'=>$a->id]);

           return redirect('/admin')->with('success','欢迎您，超级管理员');
        }
    	return back()->with('error','用户名或密码错误');

    }
    
//前台登录页面
    public function hlogin(){
        return view('hlogin.login');
    }
    //前台登录处理页面
    public function dologin(Request $request){
      //判断是邮箱登录还是用户名登录
      //用户名登录走这里
     if($request->has('username')){
               $this->validate($request, [
              'username' => 'required',//验证规则
              'password' => 'required',//验证规则
        
            ],[
                'username.required'=>'用户名不能为空',//规则的描述
                'password.required'=>'密码不能为空',//规则的描述
                
            ]);
                   $data=$request->except(['_token']);
                    $a=DB::table('users')->where('username','=',$request->input('username'))->first();
     }else{
              //使用邮箱登录走这里判断
               $this->validate($request, [
              'email' => 'required',//验证规则
              'password' => 'required',//验证规则
        
            ],[
                'email.required'=>'邮箱不能为空',//规则的描述
                'password.required'=>'密码不能为空',//规则的描述
                
            ]);
                 $data=$request->except(['_token']);
                  $a=DB::table('users')->where('email','=',$request->input('email'))->first();
        }
        //如果数据库中有输入的用户名或邮箱名返回真,并且登录密码正确
        if($a && (Hash::check($request->input('password'),$a->password))){
            session(['id'=>$a->id]);
           return redirect('/index')->with('success','欢迎您，超级管理员');
        }
        return back()->with('error','用户名或密码错误');
        //验证吗的验证
      /*  $vcode=$request->vcode;
        if($vcode == session('vcode')){
           return view('/admin')->with('success','恭喜您登录成功');
        }else{
           return back()->with('error','验证码输入错误');
        }*/

    }

  function dohome(){
        $uname=isset($_GET['uname'])?$_GET['uname']:"";
       if(DB::table('users')->where('username','=',$uname)->first()){
            echo '1';

       }else{
        echo '0';
       }
  }
   
//前台的注册页面
    public function register(){
        return view('hlogin.register');
    }
    //前台注册处理页面未完成
    public function doregister(Request $request){
        if($request->has('username')){
        //自动验证
         $this->validate($request, [
        'username' => 'required',//验证规则
        //'password' => 'required|regex:/\S{4,8}/',//验证以及正则匹配(jquery也可以)
         'password' => 'required',
        'repassword' =>'required|same:password',//验证规则
        'vcode'=>'required',

        
        ],[
            //自定义描述信息
            'username.required'=>'用户名不能为空',
            'password.required'=>'密码不能为空',
            'repassword.required'=>'确认密码不能为空',
            'repassword.same'=>'两次密码不一致',
            'vcode.required'=>'验证码不能为空',
        ]);
          $code=$request->input('vcode');
            if($code!=session('vcode')){
          return back()->with('error','验证码输入有误');
    }
}else{
         $this->validate($request, [
        'email'=> 'required|email',//验证规则
        //'password' => 'required|regex:/\S{4,8}/',//验证以及正则匹配(jquery也可以)
         'password' => 'required',
        'repassword' =>'required|same:password',//验证规则
        'vcode'=>'required',

        
        ],[
            //自定义描述信息
            'email.required'=>'邮箱不能为空',
            'email.email'=>'邮箱格式不正确',
            'password.required'=>'密码不能为空',
            'repassword.required'=>'确认密码不能为空',
            'repassword.same'=>'两次密码不一致',
            'vcode.required'=>'验证码不能为空',
        ]);
          $code=$request->input('vcode');
            if($code!=session('vcode')){
          return back()->with('error','验证码输入有误');
    }
}
        $data=$request->except('_token','vcode','repassword');
        $data['password']=Hash::make($data['password']);
         $data['token']=str_random(50);//生成50位的随机字串
        $data['addtime']=date('Y-m-d H:i:s');//生成50位的随机字串
      //执行数据库的添加的操作
      $res=DB::table('users')->insert($data);
      //判断
      if($res){
        //邮箱注册注册后去激活写if($id=DB::table('users')->insert($data))
        //$this->sendJiHuoMail($data['email'],$id,$data['token']);
        //return view(显示诸如：邮件发送成功请去查看，完成激活);

        return redirect('/registerover')->with('success','添加成功');//跳转操作 
      }else{
        return back()->with('error','注册失败');
      }
        
     
    }
    //激活时发送邮件方法
    // public function sendJiHuoMail($email,$id,$token){
    //   //mail.jihuo为向新用户发送的模板，$message->subject是邮件的标题
    //   Mail::send('mail.jihuo',['email'=>$email,'id'=>$id,'token'=>$token]),function($message) use($email){
    //     $message->to($email)->subject('注册成功提醒邮件');
    //   });
    // }
    //用户收到激活的邮件，有/jihuo 的链接带上ID 和token值，与数据库比较后，将状态值改变
    // public function jihuo(Request $request){
    //   $id=$request->input('id');
    //   $token=$request->input('token');
    //   $data=DB::table('users')->where('id','=',$id)->first();
    //   if($request->input('token') == $data->token){
    //     $s['state']=2;
    //     if(DB::table('users')->where('id','=',$id)->update($s)){
    //       return view('激活成功请去登录');
    //     }else{
    //       return redirect('/register')->with('error','激活失败');
    //     }
    //   }
    // }
    //跳转到找回页面
    public function forget(){
        return view('hlogin.forget');
    }
    public function doforget(Request $request){
            //检测邮箱是否存在
              $user=DB::table('users')->where('email','=',$request->input('email'))->first();
              //发送邮件并且找回
              $this->sendZhaoMail($user->email,$user->id,$user->token);
              echo "邮件发送成功,请打开邮箱点击密码重置";
    }
    //发送邮件方法
    public function sendZhaoMail($email,$id,$token){
      Mail::send('mail.zhao',['email'=>$email,'id'=>$id,'token'=>$token],function($message) use($email){
        $message->to($email)->subject('重置密码操作');
      });
}
//重置密码操作
public function reset(Request $request){
  //检测数据
  $user=DB::table('users')->where('id','=',$request->input('id'))->first();
  //判断
  if($user->token==$request->input('token')){
    //显示重置密码表单模板
    return view('hlogin.reset',['user'=>$user]);
  }
}
    //密码重置处理
    public function doreset(Request $request){
         $this->validate($request, [
        'password' => 'required',//验证规则
        'repassword' => 'required|same:password',//验证规则
        
        ],[
            'password.required'=>'密码不能为空',//规则的描述
            'repassword.required'=>'确认密码不能为空',//规则的描述
            'repassword.same'=>'两次输入密码不一致，请重新输入',
            
        ]);
            $data['password']=Hash::make($request->input('password'));
            $data['token']=str_random(50);
          //更新
          if(DB::table('users')->where('id','=',$request->input('id'))->update($data)){
                echo "<a href='/login'>密码找回成功,请去登录</a>";
          }else{
            echo "密码找回失败";
          }

    }
     public function doemail(){
        $email=isset($_GET['email'])?$_GET['email']:"";
       if(DB::table('users')->where('email','=',$email)->first()){
            echo '1';

       }else{
        echo '0';
       }
  }
  //前台登录时$.get验证邮箱是否存在
    public function dohemail(){
        $email=isset($_GET['email'])?$_GET['email']:"";
       if(DB::table('users')->where('email','=',$email)->first()){
            echo '1';

       }else{
        echo '0';
       }
  }
  //注册成功后到中间界面
  public function reover(){
    return view('hlogin.reover');
  }
}