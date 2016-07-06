@extends('layout.index')
@section('content')                   
                   <!--  <div class="mws-form-message success">
                       
                    </div> -->
                   
                        
               
                    <!-- <div class="mws-form-message error">
                      
                    </div> -->
                    <div class="mws-panel grid_8">
          <div class="mws-panel-header">
               <span>用户添加</span>
          </div>
          <div class="mws-panel-body no-padding">
               <form class="mws-form" method="post" action="/admin/user/insert">
                
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
                              <label class="mws-form-label">用户名:</label>
                              <div class="mws-form-item">
                                   <input  value="{{old('username')}}"type="text" name="username" class="small" value="">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">密码:</label>
                              <div class="mws-form-item">
                                   <input type="password" class="small" name="password">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">确认密码:</label>
                              <div class="mws-form-item">
                                   <input type="password" class="small" name="repassword">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">邮箱:</label>
                              <div class="mws-form-item">
                                   <input  value="{{old('email')}}"type="text" class="small" name="email" value="">
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