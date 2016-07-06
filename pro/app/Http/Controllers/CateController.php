<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CateController extends Controller
{

	public $request;
    public function __construct(Request $request){
        $this->request=$request;
    }
    public function getAdd(){
     	$cates=self::getCates();
        return view('cate.add',['cates'=>$cates]);
        
    }
    //调整类别顺序方法
   public function getCates(){
    	$res=DB::select('select *,concat(path,",",id) as paths from cates order by paths');
    	foreach($res as $k=>$v){
    		$em=explode(',',$v->path);
    		$len=count($em)-1;
    		$res[$k]->name=str_repeat('|**',$len).$v->name;
    	}
    	return $res;
    }
     public static function getCate(){
     	//用在文章模块
     	$res=DB::table('cates')->select(DB::raw('*,concat(path,",",id) as paths'))->orderBy('paths')->get();
    	foreach($res as $k=>$v){
    		$em=explode(',',$v->path);
    		$len=count($em)-1;
    		$res[$k]->name=str_repeat('|**',$len).$v->name;
    	}
    	return $res;
    }
    //执行添加
	public function postInsert(Request $request){

		//自动验证方法
		/*$this->validate($request,[

			'name'=>'required',
			''=>'required',
			'home'=>'required',
			

			],[
				'goodsname.required'=>'商品名称不能为空',
				'price.required'=>'商品价格不能为空',
				'home.required'=>'商品厂家不能为空',
			]);*/
			$data=array();
			$data=$request->except('_token');
			$pid=$request->input('pid');
			 //dd($data);
			
			if($pid==0){
				$data['path']='0';

				
			}else{

				$info=DB::table('cates')->where('id','=',$pid)->first();
				$data['path']=$info->path.','.$info->id;
			}
		
			$res=DB::table('cates')->insert($data);
			$info=DB::table('cates')->where('id','=',$pid)->first();

			if($res){
				return redirect('/admin/cate/index')->with('success','添加成功');
			}else{
				return back()->with('error','添加失败');
			}
			
		}
		
		//index页面
		public function getIndex(Request $request){
			
			$cates=DB::table('cates')->where('name','like','%'.$request->input('keywords').'%')->paginate(4);
			return view('cate.index',['cates'=>$cates,'request'=>$request->all()]);
		}
	
		//修改页面
		public function getEdit($id){
			$cates=self::getCates();
			$info=DB::table('cates')->where('id','=',$id)->first();
			return view('cate.edit',['cates'=>$cates,'info'=>$info]);
		}
		//执行修改
		public function postUpdate(Request $request){
			$data=array();
			$data=$request->except('_token','id','pa');
			$zilei=DB::table('cates')->where('path','like','%'.$request->input('pa').','.$request->input('id').'%')->get();
			$datazi=array();
			//判断当前类有没有子类
			if($zilei){
				foreach($zilei as $v){
					//将对象转化为数字并接受
				$datazi[]=get_object_vars($v);
				}
			}

			$pid=$request->input('pid');
			
			if($pid==0){
				$data['path']=0;

			}else{
				$info=DB::table('cates')->where('id','=',$pid)->first();
				$data['path']=$info->path.','.$info->id;
			}
			//遍历接收的数组并修改他的path跟着跑
			if($datazi){
				foreach($datazi as $v){
					$data1=$v;
					$data1['path']=$data['path'].','.$data1['id'];
					//执行类下的子类修改
					$res1=DB::table('cates')->where('id','=',$data1['id'])->update($data1);
				}
			
			}
			$res=DB::table('cates')->where('id','=',$request->input('id'))->update($data);

			if($res){
				return redirect('/admin/cate/index')->with('success','修改成功');
			}else{
				return back()->with('error','修改失败');
			}
		}
		//删除操作
		public function getDelete($id){
			$data=DB::table('cates')->where('pid','=',$id)->count();
			if($data>0){
				return back()->with('error','当前分类有子类，不允许删除，请先删除子类');
			}
			$res=DB::table('cates')->where('id','=',$id)->delete();
			if($res){
				return redirect('/admin/cate/index')->with('success','删除成功');
			}else{
				return back()->with('error','删除失败');
			}
		}


 }