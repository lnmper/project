<?php

namespace App\Http\Controllers;
use Config;
use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LinkController extends Controller
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
        $this->validate($request, [
        'name' => 'required',
        'url' => 'required',
        'icon' => 'required',
        
        ],[
            'name.required'=>'链接名不能为空',//规则的描述
            'url.required'=>'url不能为空',//规则的描述
            'icon.required'=>'链接图标不能为空',//规则的描述
        ]);
    	$data=$request->except('_token','icon');
       if($request->hasFile('icon')){
            $path=time().rand(100000,999999).'.'.$request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(Config::get('app.upicon_dir'),$path);
            $data['icon']=trim(Config::get('app.upicon_dir').$path,'.');

        }
    	$res=DB::table('links')->insert($data);
    	if($res>0){
    			return redirect('/admin/link/index')->with('success','添加成功');
			}else{
				return back()->with('error','添加失败');
    	}

    }

    //列表
   
    public function getIndex(Request $request){
			
			$links=DB::table('links')->where("name","like","%".$request->input('keywords')."%")->paginate(3);
			return view('link.index',['links'=>$links]);
		}
    //修改页面
        public function getEdit($id){
            $links=DB::table('links')->where('id','=',$id)->first();
            return view('link.edit',['links'=>$links]);
        }
    //执行修改
        public function postUpdate(Request $request){
             $this->validate($request, [
            'name' => 'required',
            'url' => 'required',
            
        ],[
            'name.required'=>'链接名不能为空',//规则的描述
            'url.required'=>'url不能为空',//规则的描述
        ]);

            $data=$request->except('_token','icon');
            if($request->hasFile('icon')){
                $path=time().rand(100000,999999).'.'.$request->file('icon')->getClientOriginalExtension();
                $request->file('icon')->move(Config::get('app.upicon_dir'),$path);
                $data['icon']=trim(Config::get('app.upicon_dir').$path,'.');
                 $re=DB::table('links')->where('id','=',$request->input('id'))->first();
                 $pathold='.'.$re->icon;
                 if(($re) && (file_exists($pathold))){
                     //删除文件夹里面的上传的图片
                      unlink($pathold);
              }

         }
            $res=DB::table('links')->where('id','=',$request->input('id'))->update($data);
            if($res){
                return redirect('/admin/link/index')->with('success','修改成功');

            }else{
                return back()->with('error','修改失败');
            }


        }
        //执行删除
        public function getDelete($id){
                $re=DB::table('links')->where('id','=',$id)->first();
                $pathold='.'.$re->icon;
                if(($re) && (file_exists($pathold))){
                     //删除文件夹里面的上传的图片
                      unlink($pathold);
              }
              $res=DB::table('links')->where('id','=',$id)->delete();
              if($res){
                return redirect('/admin/link/index')->with('success','删除成功');

                }else{
                    return back()->with('error','删除失败');
                }
        }


 }