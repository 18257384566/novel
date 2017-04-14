<?php

namespace App\Http\Controllers\admin;


use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\AdminRegisterRequest;
use App\Model\Admin;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /*显示后台首页*/
    public function index()
    {
        return view('admin/index');
    }
    /*显示登陆界面*/
    public function login()
    {
        return view('admin/login');
    }
    /*执行登陆*/
    public function doLogin(AdminLoginRequest $request)
    {
        $pwd = md5($request->password);
        $result = DB::table('admins')->select('*')->where('name',$request->name)->where('password',$pwd)->get();
        if(empty($result[0])){
            return redirect('admin/login')->with('mess','用户名不存在或密码错误');
        }else{
            session(['admin'=> $request->name]);
           return redirect('admin/index');
        }
    }
    /*显示注册表单*/
    public function register()
    {
        return  view('admin/register');
    }
    /*注册操作*/
    public function doRegister(AdminRegisterRequest $request)
    {
//        dd($request->all());
        $pwd = md5($request->password);
        $data = array(
            'password' => $pwd,
            'name' => $request->name,
        );
         $result = Admin::create($data);
         if($result){
             return redirect('admin/login');
         }else{
             return back();
         }
    }

}
