@extends('layout.index')
@section('content')                   
                   <!--  <div class="mws-form-message success">
                       
                    </div> -->
                   
                        
               
                    <!-- <div class="mws-form-message error">
                      
                    </div> -->
                    <div class="mws-panel grid_8">
          <div class="mws-panel-header">
               <span>商品添加</span>
          </div>
          <div class="mws-panel-body no-padding">
               <form class="mws-form" method="post" action="/admin/shop/insert"enctype="multipart/form-data">
                
                  <!--   @if(session('error'))
                    <div class="mws-form-message info">
                                 {{session('error')}}
                    </div>
                    @endif -->
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

                    <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label">商品名称:</label>
                              <div class="mws-form-item">
                                   <input  value="{{old('goodsname')}}"type="text" name="goodsname" class="small" value="">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">商品库存:</label>
                              <div class="mws-form-item">
                                   <input  value="{{old('')}}"type="text" name="store" class="small" value="">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">商品状态:</label>
                              <div class="mws-form-item">
                                 <select class="small" name="state">
                                     <option value='0'>在售</option>
                                     <option value='1'style="color:red">售空</option>
                                     <option value='2'style='color:#ccc'>下架</option>
                                            
                                   </select>
                              </div>
                         </div>
                         <div class="mws-form-row">
                            <label class="mws-form-label">商品类别</label>
                            <div class="mws-form-item">
                              <select class="small" name="cid">
                                <option value='0'>做为一级分类</option>
                                             @foreach($cates as $k=>$v)

                                              <option value="{{$v->id}}">{!!$v->name!!}</option>
                                             @endforeach
                              </select>
                            </div>
                          </div>   
                         <div class="mws-form-row">
                              <label class="mws-form-label">商品价格:</label>
                              <div class="mws-form-item">
                                   <input type="text" class="small" name="price">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">商品厂家:</label>
                              <div class="mws-form-item">
                                   <input type="text" class="small" name="home">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">商品描述:</label>
                              <div class="mws-form-item">
                                   <input type="text" class="small" name="deta">
                              </div>
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
                         <input type="submit" value="添加" class="btn btn-danger">
                         <input type="reset" value="重置" class="btn ">
                    </div>
               </form>
          </div>         
      </div>

                               
                    <!-- Panels End -->
                
@endsection