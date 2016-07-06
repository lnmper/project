<?php

  /*public function getCates(){
        $res=DB::select('select *,concat(path,",",id) as paths from cates order by paths');
        //遍历数据
        foreach($res as $key=>$value){
            // dd($value);
            //拆分数组
            $emp=explode(',',$value->path);
            //计算逗号的个数
            $len=count($emp)-1;
            //修改分类名字
            $res[$key]->name=str_repeat('|---',$len).$value->name;
        }
        return $res;
    }
	*/
	
	function aa(){
	echo "aaaaaaaaa";
	}



?>