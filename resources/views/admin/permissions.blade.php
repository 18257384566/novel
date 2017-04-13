@extends('layouts.master')
@section('title','权限管理')
@section('link')
    <style>
        table td{width:20%;}
    </style>
@endsection
{{--nav--}}
@section('nav')
    <li class="active" ><a href="{{url('admin/index')}}"><i class="icon-home"></i><span>主页</span> </a> </li>
    <li><a href="{{url('admin/userlist')}}"><i class=" icon-user"></i><span>用户列表</span> </a> </li>
    <li><a href="{{url('admin/bookList')}}"><i class=" icon-columns"></i><span>书籍列表</span> </a></li>
    <li><a href="{{url('admin/categoryList')}}"><i class="icon-list"></i><span>分类列表</span> </a> </li>
    <li><a href="{{url('admin/orderList')}}"><i class=" icon-file"></i><span>订单列表</span> </a> </li>
    <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><span>权限管理</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="{{asset('admin/perm')}}">权限管理</a></li>
            <li><a href="{{asset('admin/roles')}}">角色管理</a></li>
            <li><a href="pricing.html">管理员管理</a></li>
        </ul>
    </li>
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
{{--！nav--}}

{{--content--}}
@section('content')
    <div class="container">
        <span class="shortcut-icon icon-plus" aria-hidden="true"><a href="{{url('admin/perm-add')}}">新增权限</a></span> &nbsp;&nbsp;
        <span class="shortcut-icon icon-trash" aria-hidden="true"><a href="">批量删除</a></span> &nbsp;&nbsp;
        <span class="shortcut-icon icon-circle-arrow-down" aria-hidden="true"><a href="">更新排序</a></span> &nbsp;&nbsp;
        <hr>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>ID</th>
                    <th>权限路由</th>
                    <th>权限名称</th>
                    <th>权限描述</th>
                    <th>操作</th>
                </tr>
                @foreach($result as $res )
                <tr>
                    <td>{{$res->id}}</td>
                    <td>{{$res->name}}</td>
                    <td>{{$res->display_name}}</td>
                    <td>{{$res->description}}</td>
                    <td><a href="">修改</a> <a href="/admin/perm-del/{{$res->id}}">删除</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
{{--!content--}}