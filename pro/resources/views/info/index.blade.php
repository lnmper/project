@extends('layout.index')
@section('content')
         </div> -->
                   
               
                    <!-- <div class="mws-form-message error">
                      
                    </div> -->
                    <div class="mws-panel grid_8">
          <div class="mws-panel-header">
               <span>用户详情信息</span>
          </div>
          <div class="mws-panel-body no-padding">
               <form class="mws-form" method="post" action="/admin/info/{!!$me!!}"enctype="multipart/form-data">
                    <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label">真实姓名:</label>
                              <div class="mws-form-item">
                                   <input  value="{{$old->uname or ''}}"type="text" name="uname" class="small" value="">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">UID:</label>
                              <div class="mws-form-item">
                                   <input type="text" class="small" name="uid"value="{{$id}}">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">年龄:</label>
                              <div class="mws-form-item">
                                   <input type="text" class="small" name="age"value="{{$old->age or ''}}"value="">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">用户等级:</label>
                              <div class="mws-form-item">
                                 <select class="small" name="state">
                                     <option value='0'@if($state == '0') selected @endif>普通会员</option>
                                     <option value='1'style="color:red" @if($state == '1') selected @endif>vip会员</option>
                                     <option value='2'style='color:green' @if($state == '2') selected @endif>超级管理员</option>
                                     <option value='2'style='color:#ccc' @if($state == '3') selected @endif>禁用</option>     
                                   </select>
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">性别:</label>
                                <div class="mws-form-item">
                                    <input type="radio"name="sex"value="m"@if($sex =='m') checked @endif>男
                                    <input type="radio"name="sex"value="w"@if($sex =='w') checked @endif>女
                              </div>
                         </div>

                          <div class="mws-form-row">
                              <label class="mws-form-label">电话:</label>
                              <div class="mws-form-item">
                                   <input  value="{{$old->tel or ''}}"type="text" class="small" name="tel" value="">
                              </div>
                         </div>
                          <div class="mws-form-row">
                              <label class="mws-form-label">邮编:</label>
                              <div class="mws-form-item">
                                   <input  value="{{$old->code or ''}}"type="text" class="small" name="code" value="">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">个人头像:</label>
                              <img src="/imgs/{{$old->pic or ''}}"style="width:100px;height:100px;border:1px red solid">
                              <div class="mws-form-item">
                                  上传头像 <input type="file" class="small" name="pic" value="">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">家庭住址:</label>
                              <div class="mws-form-item">
                                   <input  value="{{$old->address or ''}}"type="text" class="small" name="address" value="">
                              </div>
                         </div>
                    </div>
                    <div class="mws-button-row">
                         {{csrf_field()}}
                         <input type="submit" value="修改" class="btn btn-danger">
                         <input type="reset" value="重置" class="btn ">
                    </div>
               </form>
               <a href="{{url('/admin/user/index')}}">回到用户列表</a>
          </div>         
      </div>


@endsection