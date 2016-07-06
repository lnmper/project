@extends('layout.index')
@section('content')

<html>
    <head>
        <title></title>
        <style type="text/css">
            #pages li{
                    float: left;
                    height: 20px;
                    padding: 0 10px;
                    display: block;
                    font-size: 12px;
                    line-height: 20px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    background-color: #444444;
                    color: #fff;
                    text-decoration: none;
                    border-right: 1px solid rgba(0, 0, 0, 0.5);
                border-left: 1px solid rgba(255, 255, 255, 0.15);
                -webkit-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
                -moz-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
                box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
                }

                #pages .pagination .disabled{
                    color: #666666;
                    cursor: default;
                }

                #pages .pagination a{
                    color:white;
                }


                #pages .pagination .active{
                    background-color: #88a9eb;
                    color: #323232;
                    border: none;
                    background-image: none;
                    -webkit-box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
                    -moz-box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
                    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
                }

                #pages.pagination{
                    height:auto;
                    margin-left:0px;
                }

        </style>
    </head>
    <body>
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span>评论列表</span>
            </div>
            <div class="mws-panel-body no-padding">
                <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
                    <form action="/admin/article/index" method="get">
                    <div class="dataTables_filter" id="DataTables_Table_1_filter">
                        <label>搜索: <input type="text" name="keywords"value="{{$request['keywords'] or ''}}"></label><button class="btn btn-success">搜索</button>
                    </div>
                </form>
                    <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 203px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                    ID
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 260px;" aria-label="Browser: activate to sort column ascending">
                                    用户id
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 245px;" aria-label="Platform(s): activate to sort column ascending">
                                   商品评论
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 172px;" aria-label="Engine version: activate to sort column ascending">
                                    商品名称
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 172px;" aria-label="Engine version: activate to sort column ascending">
                                    商品图片
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 127px;" aria-label="CSS grade: activate to sort column ascending">
                                  操作
                                </th>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        	@foreach($comments as $k=>$v)
                            <tr class="odd">
                                <td class=" sorting_1">
                                   {{$v->id}}
                                </td>
                                 <td class=" sorting_1">
                                    {{$v->user_id}}
                                </td>
                                <td class="">
                                    {!!$v->comment!!}
                                </td>
								<td class="">
                                    {{$v->cname}}
                                </td>
								 <td class="">
                                   <img src="{{$v->pic}}" width="100%" height="100px">
                                </td>
                                <td class="">
                                    <a href="/admin/comment/edit/{{$v->id}}" class='btn btn-success'><i class="icon-pencil"></i></a>
                                    <a href="/admin/comment/delete/{{$v->id}}" class='btn btn-info'><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                   
                    <div class="dataTables_info" id="DataTables_Table_1_info">
                     
                    </div>
                    <div class="dataTables_paginate paging_full_numbers" id="pages">
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
