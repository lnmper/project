@extends('layout.index')
@section('content')                   
            <script type="text/javascript" charset="utf-8" src="/moban/ueditor/ueditor.config.js"></script>
            <script type="text/javascript" charset="utf-8" src="/moban/ueditor/ueditor.all.min.js"></script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
            <script type="text/javascript" charset="utf-8" src="/moban/ueditor/lang/zh-cn/zh-cn.js"></script>
                    <div class="mws-panel grid_8">
          <div class="mws-panel-header">
               <span>文章添加</span>
          </div>
          <div class="mws-panel-body no-padding">
               <form class="mws-form" method="post" action="/admin/article/insert"enctype="multipart/form-data">
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
                              <label class="mws-form-label">文章标题:</label>
                              <div class="mws-form-item">
                                   <input  value=""type="text" name="title" class="small" >
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">文章描述:</label>
                              <div class="mws-form-item">
                                   <textarea cols=""rows="" class="small" name="descr"></textarea>
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">文章类别:</label>
                              <div class="mws-form-item">
                                  <select class="small" name="cate_id">
                                                  <option  value="0">--请选择--</option>
                                                @foreach($cates as $k=>$v)
                                                    <option value="{{$v->id}}">{{$v->name}}</option>
                                                @endforeach
                                             </select>
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">文章内容:</label>
                              <div class="mws-form-item">
                                  <script id='editor'type='text/plain'name="content"style="width:600px;height:500px"></script>
                              </div>
                         </div>
                          <div class="mws-form-row">
                                 <label class="mws-form-label">文章主图</label>
                                    <div class="mws-form-item">
                                         <input type="file" class="middle" name="pic">
                                           
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
          <script type="text/javascript">
              //实例化编辑器
              var ue = UE.getEditor('editor');
          </script>
      </div>

                               
                    <!-- Panels End -->
                
@endsection