<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }
    public function login()
    {
        return view('admin/login');
    }
    public function doLogin(Request $request)
    {
          $name = $request->input('name');
          $pwd = $request->input('pwd');
          $result = DB::select("select * from admins where name ='{$name}'and pwd = '{$pwd}'");
          if($result){
              session(['admin_username'=>$name]);
              return redirect('admin/index');
          }else{
              return back();
          }
    }
}
