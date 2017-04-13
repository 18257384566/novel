<?php

namespace App\Http\Controllers\Admin;

use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PermissionsController extends Controller
{
    public function show()
    {
        //查询权限表的数据
        $result =DB::table('permissions')->get();
        return view('/admin/permissions')->with('result',$result);
    }

//    添加权限表单
    public function add(Request $request)
    {
        if($request->isMethod('post')){
//          添加权限
            $permission = Permission::create($request->all());
//          查询权限表的数据
            $result =DB::table('permissions')->get();
            return view('/admin/permissions')->with('result',$result);
            exit;
        }else{
            return view('admin/permissionsAdd');
        }
    }

    //删除
    public function del($permission_id)
    {
        DB::table('permissions')
            ->where('id',$permission_id)
            ->delete();
        return redirect('/admin/perm');
    }

    //修改



}
