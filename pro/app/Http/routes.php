<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>'login'],function(){
	//后台
	Route::get('/admin','AdminController@index');
	//用户操作模块
	Route::controller('/admin/user','UserController');
	//无限分类操作模块
	Route::controller('/admin/cate','CateController');
	//文章操作模块
	Route::controller('/admin/article','ArticleController');
	//商品操作模块
	Route::controller('/admin/shop','ShopController');
	//链接模块
	Route::controller('/admin/link','LinkController');
	//用户详情
	Route::controller('/admin/info','InfoController');
	//商品评论模块
	Route::controller('/admin/comment','CommentController');
	
});
//登录处理模块
	Route::controller('/admin/login','LoginController');
	//前台登录
	Route::get('/login','LoginController@hlogin');
	//处理前台登录
	Route::post('/dologin','LoginController@dologin');
	//
	Route::get('/vcode','VcodeController@dovcode');
//$.get做jquery处理验证密码
Route::get('/dohome','LoginController@dohome');
//前台的注册页面
Route::get('/register','LoginController@register');
//前台注册处理界面
Route::post('/doregister','LoginController@doregister');

//忘记密码操作
Route::get('/forget','LoginController@forget');
//处理提交
Route::post('/doforget','LoginController@doforget');

//重置密码操作
Route::get('/reset','LoginController@reset');
Route::post('/reset','LoginController@doreset');

//$.get做前台注册jquery处理验证邮箱是否存在
Route::get('/doemail','LoginController@doemail');
//前台注册成功后的中间页面
Route::get('/registerover','LoginController@reover');
//前台邮箱登录时验证邮箱是否存在
Route::get('/dohemail','LoginController@dohemail');
//前台的首页
Route::get('/index','HomeController@index');

//跳转到商品详情页
Route::get('/goodsdetail/{gid}','HomeController@detail');
//跳转到购物车
Route::post('/cart','HomeController@addcart');

//购物车页面
Route::get('/cartindex','HomeController@caindex');

//清除缓存
Route::get('/clear','HomeController@clear');
//删除购物车里的商品
Route::get('/cartdel/{id}','HomeController@cartdel');

//订单添加页面
Route::any('/orderinsert','OrderController@insert')->middleware('qlogin');

Route::post('/address','OrderController@addressadd')->middleware('qlogin');
//城市级联
Route::get('/jilian','OrderController@jilian');

//订单生成2
Route::post('/addcreate','OrderController@addcreate')->middleware('qlogin');

//后台的订单管理
Route::get('/admin/order/index','OrderController@htindex');

//改变订单的状态
Route::get('/admin/chan/{id}','OrderController@change');
//查看订单商品详情
Route::get('/admin/order/goods/{id}','OrderController@ordergoods');
//后台查看订单的收货地址
Route::get('/admin/address/{id}','OrderController@address');

//前台个人中心
Route::get('/person','HomeController@hperson')->middleware('qlogin');

//前台改变订单状态
Route::get('/homechange/{id}','HomeController@change');

//前台查看收货地址
Route::get('/homeaddress/{id}','HomeController@address');

//前台查看订单商品详情
Route::get('/homegoods/{id}','HomeController@goods');

//前台订单创建成功跳转到中间界面
Route::get('/orderaddover','OrderController@orderaddover');