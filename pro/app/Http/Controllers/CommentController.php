<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{

    public function getAdd(){
        return view('comment.add');
        
    }
    //调整类别顺序方法
   public function getIndex(){
   		$comments=DB::table('comments')->get();
   		return view('comment.index',['comments'=>$comments]);
   }
	public function getEdit($id){
		$comments=DB::table('comments')->where('id','=',$id)->first();
		$user=DB::table('users')->where('id','=',$comments->user_id)->first();

		return view('comment.edit',['user'=>$user,'comments'=>$comments]);
	}

public function postUpdate(Request $request){
	$this->validate($request, [
		'comment' => 'required',//验证规则
		
    	],[
    		'comment.required'=>'回复不能为空',//规则的描述
    		
    	]);
		$data=$request->only('comment');
		if(DB::table('comments')->where('id','=',$request->input('id'))->update($data)){
			return redirect('/admin/comment/index')->with('success','回复成功');
		}else{
			return back()->with('error','回复失败');
		}

	}
 }