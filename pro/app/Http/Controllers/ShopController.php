<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
	public function getCates(){
    	$res=DB::select('select *,concat(path,",",id) as paths from cates order by paths');
    	foreach($res as $k=>$v){
    		$em=explode(',',$v->path);
    		$len=count($em)-1;
    		$res[$k]->name=str_repeat('|**',$len).$v->name;
    	}
    	return $res;
    }
    public function getAdd(){
    	$cates=self::getCates();
        return view('shop.add',['cates'=>$cates]);
        
    }
    //执行添加
	public function postInsert(Request $request){

		//自动验证方法
		$this->validate($request,[

			'goodsname'=>'required',
			'price'=>'required',
			'home'=>'required',
			'cid'=>'required',

			],[
				'goodsname.required'=>'商品名称不能为空',
				'price.required'=>'商品价格不能为空',
				'home.required'=>'商品厂家不能为空',
				'cid.required'=>'商品类别不能为空',
			]);
		//$data=$request->only(['goodsname','price','home','photo']);
		$data=$request->except(['_token']);
		$data['token']=str_random(50);
		
		if($request->hasFile('photo')){
			$name=time()+rand(1,999999999);
		 	$suffix=$request->file('photo')->getClientOriginalExtension();
			$data['photo']=$name.'.'.$suffix;
			$request->file('photo')->move('./uploads/',$data['photo']);
			
		}
		
		
	
		$res=DB::table('goods')->insert($data);
		if($res){

			return redirect('/admin/shop/index')->with('success','添加成功');
		}else{

			return back()->with('error','添加失败');
		}

	}

//商品列表界面
	public function getIndex(Request $request){
		$goods=DB::table('goods')->where('goodsname','like','%'.$request->input('keywords').'%')->paginate(4);
	
		return view('shop.index',['goods'=>$goods]);
	}
	//修改页
	public function getEdit($goodsid){
		$cates=self::getCates();
		$goods=DB::table('goods')->where('goodsid','=',$goodsid)->first();
		//dd($goods);
		return view('shop.edit',['goods'=>$goods,'cates'=>$cates,'state'=>$goods->state,'cid'=>$goods->cid]); 

	}
	//执行修改update
	public function postUpdate(Request $request){
		$this->validate($request,[
			'goodsname' => 'required',//验证规则
        	'home' => 'required',//验证规则
        	'price'=>'required',

        
        ],[
            'goodsname.required'=>'商品户名不能为空',//规则的描述
            'price.required'=>'价格不能为空',//规则的描述
            'home.required'=>'商品产地不能为空',//规则的描述
        ]);
        //取得参数
        $data=$request->except(['_token']);
		 
        if($request->hasFile('photo')){
  				$name=time()+rand(1,999999999);
				$suffix=$request->file('photo')->getClientOriginalExtension();
				$data['photo']=$name.'.'.$suffix;
		 	
				$request->file('photo')->move('./uploads/',$data['photo']);
				//添加新图片时删除掉之前的照片
				$re=DB::table('goods')->where('goodsid','=',$request->input('goodsid'))->first();
				$pathold='./uploads/'.$re->photo;
				if(file_exists($pathold)){
            			//删除文件夹里面的上传的图片
           				  unlink($pathold);
       			 }
			
		}

		
        $res=DB::table('goods')->where('goodsid','=',$request->input('goodsid'))->update($data);

        if($res){
        	return redirect('admin/shop/index')->with('success','修改成功');
        }else{
        	return back()->with('error','修改失败');
        }
	}
	//删除
	public function getDelete($goodsid){
		$re=DB::table('goods')->where('goodsid','=',$goodsid)->first();
		$pathold='./uploads/'.$re->photo;
		if(file_exists($pathold)){
            //删除文件夹里面的上传的图片
             unlink($pathold);
       	 }
		$res=DB::table('goods')->where('goodsid','=',$goodsid)->delete();
		if($res){

			return redirect('/admin/shop/index')->with('success','删除成功');
		}else{
			return back()->with('error','删除失败');
		}
	}
 }