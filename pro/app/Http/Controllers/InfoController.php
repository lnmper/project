<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{

	// public $request;
 //    public function __construct(Request $request){
 //        $this->request=$request;
 //    }
    public function getAdd(){
     
        return view('link.add');
        
    }
    //添加操作
    public function postInsert(Request $request){
    	$data=$request->except('_token','state');
       
        
        if($request->hasFile('pic')){
               $name=time()+rand(1,999999999);
               $suffix=$request->file('pic')->getClientOriginalExtension();
                $data['pic']=$name.'.'.$suffix;
                 $request->file('pic')->move('./imgs/',$data['pic']);
         
        
            }
        $res=DB::table('users_info')->insert($data);

    	if($res>0){
    			return redirect('/admin/user/index')->with('success','添加详细信息成功');
			}else{
				return back()->with('error','添加详细信息失败');
    	}

    }

    //列表
   
    public function getIndex($id){
           
			$info=DB::table('users_info')->where('uid','=',$id)->first();
            $user=DB::table('users')->where('id','=',$id)->first();
          
           $me='update';
            if($info){
                return view('info.index',['id'=>$id,'old'=>$info,'me'=>$me,'sex'=>$info->sex,'state'=>$user->state]);
            }
             $me='insert';
            
			return view('info.index',['id'=>$id,'me'=>$me,'sex'=>'m','state'=>$user->state]);
		}
        //修改操作
        public function postUpdate(Request $request){
                $data=$request->except('_token','state');
                
        if($request->hasFile('pic')){
                $name=time()+rand(1,999999999);
                $suffix=$request->file('pic')->getClientOriginalExtension();
                $data['pic']=$name.'.'.$suffix;
                 $request->file('pic')->move('./imgs/',$data['pic']);
                 //上传新的图片，删除之前文件
                $re=DB::table('users_info')->where('uid','=',$request->input('uid'))->first();
                 $pathold='./imgs/'.$re->pic;
                     if(($re->pic) && (file_exists($pathold))){
                      //删除文件夹里面的上传的图片
                       unlink($pathold);
                 }
            }
        $res=DB::table('users_info')->where('uid','=',$request->input('uid'))->update($data);

            if($res>0){
                return redirect('/admin/user/index')->with('success','修改详细信息成功');
            }else{
                return back()->with('error','修改详细信息失败');
             }
        }

 }