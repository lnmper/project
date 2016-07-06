@extends('layout.hindex')
@section('content')
	<div style="width:"></div>

	@foreach($bb as $row)
		<div style="width:100%;height:40px;border:1px red solid;margin-top:30px;float:left">{{$row['name']}}</div>
		<div style="width:100%;height:400px">
		@foreach($row['goods'] as $val)

			<div style="width:200px;height:300px;float:left;margin-top:30px;margin-left:30px;border:1px red solid">
				<a href="/goodsdetail/{{$val['gid']}}"><img src="/uploads/{{$val['photo']}}" style="width:200px;height:200px"></a>
				<div style="width:200px;height:20px;color:blue;text-align:center">{{$val['gname']}}</div>
				<div style="width:200px;height:20px;color:blue;text-align:center">原价<del>400元</del> 现价：{{$val['price']}}元</div>
				<div style="width:100px;height:20px;color:blue;text-align:center"><a href="">查看商品品论</a></div>
			</div>
		@endforeach
			</div>

				

	@endforeach
	@foreach($bb as $k=>$v)
		@if($bb[$k]['name']=="热销")
		@foreach($bb[$k]['goods'] as $val)
				<div style="width:200px;height:200px;color:blue;text-align:center"><img src="/uploads/{{$val['photo']}}" style="width:200px;height:200px"></div>
		@endforeach
			
		@endif
	@endforeach
@endsection