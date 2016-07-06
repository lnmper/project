@extends('layout.index')
@section('content')                   
                   <!--  <div class="mws-form-message success">
                       
                    </div> -->
                   
                        
               
                    <!-- <div class="mws-form-message error">
                      
                    </div> -->
                    <div class="mws-panel grid_8">
          <div class="mws-panel-header">
               <span>用户修改</span>
          </div>
          <div class="mws-panel-body no-padding">
               <form class="mws-form" method="post" action="/admin/user/update">
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
                                   <input  value="{{$u->username}}"type="text" name="username" class="small" value="">
                              </div>
                         </div>            
                         
                         <div class="mws-form-row">
                              <label class="mws-form-label">邮箱:</label>
                              <div class="mws-form-item">
                                   <input  value="{{$u->email}}"type="text" class="small" name="email" value="">
                              </div>
                         </div>
                    </div>
                     <div class="mws-form-row">
                              <label class="mws-form-label">用户等级:  </label>
                              <div class="mws-form-item">
                                 <select class="small" name="state">
                                     <option value='0'@if($u->state == '0') selected @endif>普通会员</option>
                                     <option value='1'style="color:red" @if($u->state == '1') selected @endif>vip会员</option>
                                     <option value='2'style='color:green' @if($u->state == '2') selected @endif>超级管理员</option>
                                     <option value='2'style='color:#ccc' @if($u->state == '3') selected @endif>禁用</option>     
                                   </select>
                              </div>
                            
                         </div>
                    <div class="mws-button-row">
                         {{csrf_field()}}
                          <input type="hidden" value="{!!date('Y-m-d H:i:s')!!}" name='xgaddtime'>
                         <input type="hidden" value="{{$u->id}}" name='id'>
                         <input type="submit" value="修改" class="btn btn-danger">
                         <input type="reset" value="重置" class="btn ">
                    </div>
               </form>
          </div>         
      </div>

                               
                    <!-- Panels End -->
                
@endsection