<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Gregwar\Captcha\CaptchaBuilder;
class VcodeController extends Controller
{
   public function dovcode(){

    $builder = new CaptchaBuilder;
        //清除操作
         ob_clean();
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session（刷新数据丢失）
        //Session::flash('milkcaptcha', $phrase);
        //存入seesion(时间长)
        session(['vcode'=>$phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
      
   
   }

}
