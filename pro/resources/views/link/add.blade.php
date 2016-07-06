@extends('layout.index')
@section('content')
	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>链接添加</span>
                    </div>
                    <div class="mws-panel-body no-padding">
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
                    	<form action="/admin/link/insert" class="mws-form" method="post" enctype="multipart/form-data">
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">链接名</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small"  name="name"value="{{old('name')}}">
                    				</div>
                    			</div>
                    			                                  			
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">链接地址</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small"  name="url"value="{{old('url')}}">
                    				</div>
                    			</div>                    			
                                   <div class="mws-form-row">
                                 <label class="mws-form-label">链接图标</label>
                                    <div class="mws-form-item">
                                         <input type="file" class="small" name="icon">
                                           
                                    </div>
                            </div>
                    		</div>
                    		<div class="mws-button-row">
                    			{{csrf_field()}}
                    			<input type="submit" class="btn btn-danger" value="提交">
                    			<input type="reset" class="btn " value="重置">
                    		</div>
                    	</form>
                    </div>    	
                </div>
@endsection