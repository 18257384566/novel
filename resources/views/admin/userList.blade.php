@extends('layouts.master')
{{--@section('link')--}}
    {{--<!-- page specific plugin styles -->--}}
    {{--<link rel="stylesheet" href="/admin/assets/css/jquery-ui.min.css" />--}}
    {{--<link rel="stylesheet" href="/admin/assets/css/bootstrap-datepicker3.min.css" />--}}
    {{--<link rel="stylesheet" href="/admin/assets/css/ui.jqgrid.min.css" />--}}
    {{--<!-- text fonts -->--}}
    {{--<link rel="stylesheet" href="/admin/assets/css/fonts.googleapis.com.css" />--}}
    {{--<!-- ace styles -->--}}
    {{--<link rel="stylesheet" href="/admin/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />--}}
    {{--<!--[if lte IE 9]>--}}
    {{--<link rel="stylesheet" href="/admin/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />--}}
    {{--<![endif]-->--}}
    {{--<link rel="stylesheet" href="/admin/assets/css/ace-skins.min.css" />--}}
    {{--<link rel="stylesheet" href="/admin/assets/css/ace-rtl.min.css" />--}}
    {{--<link rel="stylesheet" href="/admin/assets/css/ace-ie.min.css" />--}}
    {{--<script src="/admin/assets/js/ace-extra.min.js"></script>--}}
    {{--@endsection--}}
@section('nav')
    <li><a href="{{url('admin/index')}}"><i class=" icon-home"></i><span>主页</span> </a> </li>
    <li class="active" ><a href="{{url('admin/userlist')}}"><i class=" icon-user"></i><span>用户列表</span> </a> </li>
    <li><a href="{{url('admin/bookList')}}"><i class=" icon-columns"></i><span>书籍列表</span> </a></li>
    <li><a href="{{url('admin/categoryList')}}"><i class="icon-list"></i><span>分类列表</span> </a> </li>
    <li><a href="{{url('admin/orderList')}}"><i class=" icon-file"></i><span>订单列表</span> </a> </li>
    <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="icons.html">Icons</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="pricing.html">Pricing Plans</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
            <li><a href="error.html">404</a></li>
        </ul>
    </li>
    @endsection
@section('content')
    <div class="table-responsive">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{url('admin/add')}}">添加用户</a>
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>名字</th>
                            <th>年龄</th>
                            <th>班期</th>
                            <th>操作</th>
                        </tr>
                        @foreach($result as $k => $v)
                            <tr>
                                <td>{{$v->id}}</td>
                                <td>{{$v->name}}</td>
                                <td>{{$v->age}}</td>
                                <td>{{$v->grade}}</td>
                                <td><a href="{{url('admin/edit'.'/'.$v->id)}}" class="btn btn-info">编辑</a>　<a href="{{url('admin/del'.'/'.$v->id)}}" class="btn btn-danger">删除</a></td>
                            </tr>
                        @endforeach
                    </table>
                    {{$result->links('admin/page')}}
                </div>
            </div>
        </div>
    </div>


    @endsection
{{--@section('script')--}}
    {{--<script src="/admin/assets/js/jquery-2.1.4.min.js"></script>--}}
    {{--<script src="/admin/assets/js/jquery-1.11.3.min.js"></script>--}}
    {{--<script src="/admin/assets/js/bootstrap.min.js"></script>--}}
    {{--<script type="text/javascript">--}}
        {{--if('ontouchstart' in document.documentElement) document.write("<script src='/admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");--}}
    {{--</script>--}}
    {{--<script src="/admin/assets/js/bootstrap-datepicker.min.js"></script>--}}
    {{--<script src="/admin/assets/js/jquery.jqGrid.min.js"></script>--}}
    {{--<script src="/admin/assets/js/grid.locale-en.js"></script>--}}
    {{--<script src="/admin/assets/js/ace-elements.min.js"></script>--}}
    {{--<script src="/admin/assets/js/ace.min.js"></script>--}}

{{--@endsection--}}

