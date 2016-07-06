<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InsertArticleRequest extends Request
{
   
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            //自定义验证规则
            'title'=>'required',
            'content'=>'required',
            'descr'=>'required',
            'cate_id'=>'numeric',//数值型验证


        ];
    }

    //规则描述
    public function messages(){
        return [
        'title.required'=>"标题不能为空",
        'content.required'=>"内容不能为空",
        'descr.required'=>"描述不能为空",
        'cate_id.numeric'=>"文章分类参数有误",
        ];
    }
}