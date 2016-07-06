@extends('layout.index')
@section('content')                   
                  
                    </div> -->
                    <div class="mws-panel grid_8">
          <div class="mws-panel-header">
               <span>商品修改</span>
          </div>
          <div class="mws-panel-body no-padding">
               <form class="mws-form" method="post" action="/admin/shop/update" enctype="multipart/form-data">
                  
                    @if (count($errors) > 0)
                    <div class="mws-form-message info">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
					<input type="hidden"value="{{$goods->goodsid}}"name="goodsid">
                    <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label">商品名:</label>
                              <div class="mws-form-item">
                                   <input  value="{{$goods->goodsname}}"type="text" name="goodsname" class="small" value="">
                              </div>
                         </div>            
                         
                         <div class="mws-form-row">
                              <label class="mws-form-label">商品价格:</label>
                              <div class="mws-form-item">
                                   <input  value="{{$goods->price}}"type="text" class="small" name="price" value="">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">商品库存:</label>
                              <div class="mws-form-item">
                                   <input  value="{{$goods->store}}"type="text" name="store" class="small" value="">
                              </div>
                         </div>
                          <div class="mws-form-row">
                            <label class="mws-form-label">商品类别</label>
                            <div class="mws-form-item">
                              <select class="small" name="cid">
                                <option value='0'>做为一级分类</option>
                                             @foreach($cates as $k=>$v)

                                              <option value="{{$v->id}}" @if($v->id== $cid) selected @endif>{!!$v->name!!}</option>
                                             @endforeach
                              </select>
                            </div>
                          </div>   
                           <div class="mws-form-row">
                              <label class="mws-form-label">商品状态:</label>
                              <div class="mws-form-item">
                                 <select class="small" name="state">
                                     <option value='0'@if($state == '0') selected @endif>在售</option>
                                     <option value='1'style="color:red"@if($state == '1') selected @endif>售空</option>
                                     <option value='2'style='color:#ccc'@if($state == '2') selected @endif>下架</option>
                                            
                                   </select>
                              </div>
                         </div>
            						 <div class="mws-form-row">
                                          <label class="mws-form-label">商品产地:</label>
                                          <div class="mws-form-item">
                                               <input  value="{{$goods->home}}"type="text" class="small" name="home" value="">
                                          </div>
                                     </div>
            						 <div class="mws-form-row">
                              <label class="mws-form-label">商品图片:</label>
                              <div class="mws-form-item">
                                  <img src="/uploads/{{$goods->photo or ''}}"style="width:100px;height:100px"> 

                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">上传商品图片:</label>
                              <div class="mws-form-item">
                                   <input type="file" class="small" name="photo" value="">
                              </div>
                         </div>
                    </div>
                    <div class="mws-button-row">
                         {{csrf_field()}}
                         
                         <input type="submit" value="修改" class="btn btn-danger">
                         <input type="reset" value="重置" class="btn ">
                    </div>
               </form>
          </div>         
      </div>

                    <!-- Panels End -->
                
@endsection