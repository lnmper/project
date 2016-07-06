<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use DB;
use Hash;
use App\Http\Requests\InsertArticleRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function getAdd(){
        return view('article.add',['cates'=>CateController::getcate()]);

        // echo "sss";
    }
    //执行添加
    public function postInsert(InsertArticleRequest $request){
    	$data=$request->except('_token','pic');
    	
    	//如果有图片上传
    	if($request->hasFile('pic')){
    		$path=time().rand(100000,999999).'.'.$request->file('pic')->getClientOriginalExtension();
    		$request->file('pic')->move(Config::get('app.upload_dir'),$path);
    		$data['pic']=trim(Config::get('app.upload_dir').$path,'.');

    	}
    	$data['user_id']=1;
        $data['created_at']=date('Y-m-d H:i:s');
         if(DB::table('articles')->insert($data)){
                // echo "22222";
                return redirect('/admin/article/index')->with('success','添加成功');
            }else{
                return back()->with('error','添加失败');
            }
    }
//文章列表
    public function getIndex(Request $request){
    	$articles=DB::table('articles')->where("title","like","%".$request->input('keywords')."%")->paginate(2);
    	return view('article.index',['articles'=>$articles]);
    }
//修改页面
    public function getEdit($id){
    	$arc=DB::table('articles')->where('id','=',$id)->first();
    	return view('article.edit',[
    		'arc'=>$arc,
    		'cates'=>CateController::getCate()]);
    }
    //执行修改
    public function postUpdate(Request $request){
    	$data=$request->except('_token');
    	if($request->hasFile('pic')){
    		$path=time().rand(100000,999999).'.'.$request->file('pic')->getClientOriginalExtension();
    		$request->file('pic')->move(Config::get('app.upload_dir'),$path);
    		$data['pic']=trim(Config::get('app.upload_dir').$path,'.');

        $res=DB::table('articles')->where('id','=',$request->input('id'))->first();
        $pathold='.'.$res->pic;
        if(file_exists($pathold)){
            //删除文件夹里面的上传的图片
             unlink($pathold);
       			 }

    	}
    	$data['user_id']=1;
        $data['created_at']=date('Y-m-d H:i:s');
 
         if(DB::table('articles')->where('id','=',$request->input('id'))->update($data)){
                // echo "22222";
                return redirect('/admin/article/index')->with('success','修改成功');
            }else{
                return back()->with('error','修改失败');
            }
    

    }
    //执行删除
    public function getDelete($id){
    	 $res=DB::table('articles')->where('id','=',$id)->first();
        $pathold='.'.$res->pic;
        if(file_exists($pathold)){
            //删除文件夹里面的上传的图片
             unlink($pathold);
       	 }
		if(DB::table('articles')->where('id','=',$id)->delete()){
		                return redirect('/admin/article/index')->with('success','删除成功');
		            }else{
		                return back()->with('error','删除失败');
		     }

    }

}

