<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getAdd(){
        return view('user.add');
        // echo "sss";
    }
    //执行添加
    public function postInsert(Request $request){
    	
    	//自动验证
    	$this->validate($request, [
		'username' => 'required',//验证规则
		'password' => 'required',//验证规则
		'repassword' => 'required|same:password',//验证规则
		'email' => 'required|email',//验证规则
		
    	],[
    		'username.required'=>'用户名不能为空',//规则的描述
    		'password.required'=>'密码不能为空',//规则的描述
    		'repassword.required'=>'确认密码不能为空',//规则的描述
    		'repassword.same'=>'两次密码不一致',//规则的的描述
    		'email.required'=>'邮箱不能为空',//规则的描述
    		'email.email'=>'邮箱的格式不正确',//规则的描述
    	]);

    	
    	$data=$request->only(['username','password','email']);
    	$data['password']=Hash::make($data['password']);
    	$data['token']=str_random(50);//生成50位的随机字串
        $data['addtime']=date('Y-m-d H:i:s');//生成50位的随机字串
        
    	// dd($data);
    	//执行数据库的添加的操作
    	$res=DB::table('users')->insert($data);
    	//判断
    	if($res){
    	
    		return redirect('/admin/user/index')->with('success','添加成功');//跳转操作	
    	}else{
    		return back()->with('error','添加失败');
    	}

    }
    //用户的列表
    public function getIndex(Request $request){
    	// echo "ssss";
    	//通过操作数据库去获取数据
    	$users=DB::table('users')->where('username','like','%'.$request->input('keywords').'%')->paginate(4);
    	// dd($users);
    	return view('user.index',['users'=>$users,'request'=>$request->all()]);
    }

    //获取需要修改的信息
    public function getEdit($id){
    	// echo "sssss";
    	// echo $id;
    	//操作数据库
    	$u=DB::table('users')->where('id','=',$id)->first();
    	// dd($u);
    	return view('user.edit',['u'=>$u]);
    }

    //执行修改
    public function postUpdate(Request $request){


        $this->validate($request, [
        'username' => 'required',//验证规则
        'email' => 'required|email',//验证规则
        
        ],[
            'username.required'=>'用户名不能为空',//规则的描述
            'email.required'=>'邮箱不能为空',//规则的描述
            'email.email'=>'邮箱的格式不正确',//规则的描述
        ]);
    	//获取参数
    	$data=$request->only(['username','email','xgaddtime','state']);
    
    	
    	$res=DB::table('users')->where('id','=',$request->input('id'))->update($data);
    	// dd($res);
    	if($res){
    		return redirect('/admin/user/index')->with('success','修改成功');
    	}else{
    		return back()->with('error','修改失败');
    	}
    }

    //执行删除
    public function getDelete($id){
    	//用数据库做删除的操作
         $re=DB::table('users_info')->where('uid','=',$id)->first();
    	$res=DB::table('users')->where('id','=',$id)->delete();
        //删除主表的同时，删除附表，以及附表里的照片
       

        $pathold='./imgs/'.$re->pic;
            if(($re->pic) && (file_exists($pathold))){
                //删除文件夹里面的上传的图片
                 unlink($pathold);
             }
        $info=DB::table('users_info')->where('uid','=',$id)->delete();
    	
    	if($res){
    		//跳转
    		return redirect('/admin/user/index')->with('success','删除成功');
    	}else{
    		return back()->with('error','删除失败');
    	}
    }

}
