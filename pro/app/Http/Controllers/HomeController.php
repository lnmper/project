<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    $cates=DB::table('cates')->get();

    $ss=DB::table('cates')->select(DB::raw('*,cates.id ,photo,price,cates.name as cname,goods.goodsid as gid,goods.goodsname as gname'))
    ->join('goods','goods.cid','=','cates.id')->get();

    	$aa=[];
    	$bb=[];
    	$cc=[];
    
    foreach ($ss as $k=>$v){
			$aa[] = get_object_vars($v);
		}
		//dd($aa);
    	$aaa  = [];
		$bbb  = [];
		foreach ($aa as $k=>$v){
			$aaa[$k]['cid'] = $v['cid'];
			$aaa[$k]['price'] = $v['price'];
			$aaa[$k]['cname'] = $v['cname'];
			$aaa[$k]['photo'] = $v['photo'];
			$aaa[$k]['gid'] = $v['gid'];

			$aaa[$k]['gname'] = $v['gname'];
			$bbb[]=$v['cid'];
		}
		
		foreach ($bbb as $k=>$v){
				$ccc[$v] = $k;
			}
			foreach ($ccc as $k=>$v){
				$ddd[$v] = $k;
			}
		
		foreach ($aaa as $k=>$v){		
			foreach($ddd as $key=>$val){
				if($v['cid']==$val){
					$zzz[$key]['id'] = $v['cid'];
					$zzz[$key]['name'] = $v['cname'];
					$zzz[$key]['goods'][] = $v;
					
					
				}
			}
		}
		$art=DB::table('articles')->get();
		//dd($art);
	
 		return view('home.index',['bb'=>$zzz,'cates'=>$cates,'art'=>$art]);
    }
  
   //商品详情页
    public function detail($gid){
    	 $ss=DB::table('cates')->select(DB::raw('*,cates.id ,photo,price,cates.name as cname,goods.goodsid as gid,goods.goodsname as gname'))
    ->join('goods','goods.cid','=','cates.id')->get();

    	$aa=[];
    	$bb=[];
    	$cc=[];
    
    foreach ($ss as $k=>$v){
			$aa[] = get_object_vars($v);
		}
		//dd($aa);
    	$aaa  = [];
		$bbb  = [];
		foreach ($aa as $k=>$v){
			$aaa[$k]['cid'] = $v['cid'];
			$aaa[$k]['price'] = $v['price'];
			$aaa[$k]['cname'] = $v['cname'];
			$aaa[$k]['photo'] = $v['photo'];
			$aaa[$k]['gid'] = $v['gid'];

			$aaa[$k]['gname'] = $v['gname'];
			$bbb[]=$v['cid'];
		}
		
		foreach ($bbb as $k=>$v){
				$ccc[$v] = $k;
			}
			foreach ($ccc as $k=>$v){
				$ddd[$v] = $k;
			}
		
		foreach ($aaa as $k=>$v){		
			foreach($ddd as $key=>$val){
				if($v['cid']==$val){
					$zzz[$key]['id'] = $v['cid'];
					$zzz[$key]['name'] = $v['cname'];
					$zzz[$key]['goods'][] = $v;
					
					
				}
			}
		}
    	$res=DB::table('goods')->where('goodsid','=',$gid)->first();
    	if($res->photo){
    		$pic='/uploads/'.$res->photo;
    	}
    	return view('home.detail',['id'=>$gid,'pic'=>$pic,'res'=>$res,'bb'=>$zzz]);
    }
	//购物车
	public function addcart(Request $request){
		$data=$request->except(['_token']);
		//dd($data);
		if(!$this->checkExists($data['id'])){
		//将数据压入到session里
		$request->session()->push('cart',$data);
			}//跳转到购物车页面
		return redirect('/cartindex');
	}
	//清除缓存
	public function clear(Request $request){
		$request->session()->flush();
	}
	//购物车页面很重要的东西在这边mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
	public function caindex(){
		$goods=session('cart');
		$data=[];
		$h=[];
		if(!empty($goods)){
			foreach($goods as $k=>$v){
				
				
				$data[]=$v;
				
			}
			//dd($data);
		}
		
		return view('home.cart',['data'=>$data]);

	}
	//防止重复添加相同商品
	public function checkExists($id){
		$goods=session('cart');
		if(empty($goods)) return false;
		foreach($goods as $key=>$value){
			if($value['id']==$id){
				return true;
			}
		}
		return false;
	}
	//删除购物车商品
	public function cartdel($id){
		$data=session('cart');
		foreach($data as $key=>$value){
			if($value['id']==$id){
				unset($data[$key]);
			}
		}
		session(['cart'=>$data]);
		return redirect('/cartindex');
	}
	//前台的个人中心
	public function hperson(){
        //查找用户id的订单
      $order=DB::table('orders')->where('user_id','=',session('id'))->get();
      //dd($order);
      $user=DB::table('users')->where('id','=',session('id'))->first();
      $user_info=DB::table('users_info')->where('uid','=',session('id'))->first();
        $tai=array('提醒卖家发货','买家已提醒发货','已发货','签收');

		return view('home.person',['order'=>$order,'user'=>$user,'user_info'=>$user_info,'tai'=>$tai]);
	}
//前台改变订单的状态

    public function change($id){
        $data=DB::table('orders')->where('id','=',$id)->first();
        //dd($data);
        if($data){
            $da['status']=($data->status+1);
            if(DB::table('orders')->where('id','=',$id)->update($da)){
                return redirect('/person')->with('success','执行成功');
            }else{
                return back()->with('error','执行失败');
            }
        }

    }

//前台看收货地址
    public function address($id){
        $data=DB::table('address')->where('id','=',$id)->first();

        return view('home.address',['address'=>$data]);
    }
    //前台查看订单商品详情
 public function goods($id){
 		$data[]=DB::table('order_goods')->where('order_id','=',$id)->get();
         $da=[];
         if($data){
              foreach($data as $k=>$v){
                foreach($v as $key=>$val){
                    $dd=DB::table('goods')->where('goodsid','=',$val->goods_id)->first();
                   
                   $v[$key]->price=$dd->price;
                    $v[$key]->photo=$dd->photo;
                    $da[$k]=$v;
                }

             }
       }

    	return view('home.goods',['da'=>$da]);
    }

}
