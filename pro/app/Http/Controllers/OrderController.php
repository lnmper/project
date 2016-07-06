<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //这里需要遍历表二   啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊
    public function insert(Request $request){
        //dd($request);
    	session(['order_goods'=>$request->only('goods')['goods']]);
    	//dd(session('order_goods'));
        $h=[];
        foreach(session('order_goods') as $k=>$v){
            
            $da=DB::table('goods')->where('goodsid','=',$v["'id'"])->first();
            $h[$k]['id']=$v["'id'"];
            $h[$k]['num']=$v["'num'"];
            $h[$k]['price']=$v["'price'"];
            $h[$k]['photo']=$da->photo;
            $h[$k]['goodsname']=$da->goodsname;
        }
    	$address=DB::table('address')->where('user_id','=',session('id'))->get();
    	
    	return view('home.orderadd',['address'=>$address,'h'=>$h]);

    }
    public function jilian(){
    	$cheng=DB::table('district')->where('upid','=',$_GET['upid'])->get();
    	echo json_encode($cheng);

    }
	//添加新的地址
    public function addressadd(Request $request){
    	$data=$request->except('_token');
    	if(DB::table('address')->insert($data)){
    		return back();
    	}else{
    		echo "error";
    	}
    }
    //根据ID查询地址表中所有的东西
    public static function alladdress($id){
    	return DB::table('address')->where('user_id','=',$id)->get();
    }

    //完成支付
    public function addcreate(Request $request){
    	$data=$request->except('_token');
    	$data['order_num']=time().rand(10000,9999999);
    	$total=0;
    	//dd(session('order_goods'));
    	foreach(session('order_goods') as $k=>$v){
    		$total+=(session('order_goods')[$k]["'num'"])*(session('order_goods')[$k]["'price'"]);
    		
    	}
    	$data['total']=$total;
    	
    	$ss=DB::table('orders')->insertGetId($data);
    	if($ss){
    			//订单商品表的信息添加
    			$d=[];
    			foreach($request->session()->get('order_goods') as $key=>$value){
    				$tmp['order_id']=$ss;
    				$tmp['goods_id']=$value["'id'"];
    				$tmp['num']=$value["'num'"];
    				$d=$tmp;
    				if(DB::table('order_goods')->insert($d)){
    					return redirect('/orderaddover');
    				}else{
    					echo "error";
    				}
    			}

    	}

    }

    //后台的订单列表页
    public function htindex(){
    	$order=DB::table('orders')->get();
        $tai=array('未发货','买家已提醒发货','已发货','已签收');

    	return view('order.index',['order'=>$order,'tai'=>$tai]);
    }

    //$.get改变订单状态
    public function change($id){
        $data=DB::table('orders')->where('id','=',$id)->first();
        //dd($data);
        if($data){
            $da['status']=($data->status+1);
            if(DB::table('orders')->where('id','=',$id)->update($da)){
                return redirect('/admin/order/index')->with('success','执行成功');
            }else{
                return back()->with('error','执行失败');
            }
        }

    }
    //订单商品详情表
    public function ordergoods($id){
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
        return view('order.ordergoods',['da'=>$da]);
    }
   //查看收货地址
    public function address($id){
        $data=DB::table('address')->where('id','=',$id)->first();

        return view('order.address',['address'=>$data]);
    }
    //生成订单成功调到中间界面
    public function orderaddover(){
        return view('order.orderover');
    } 

}