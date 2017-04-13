<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login','Admin\IndexController@login');
Route::get('admin/index','Admin\IndexController@index');
Route::post('admin/doLogin','Admin\IndexController@doLogin');
Route::get('admin/userlist','Admin\UserController@show');
Route::get('admin/edit/{id}','Admin\UserController@edit');
Route::post('admin/edit/{id}','Admin\UserController@doEdit');
Route::get('admin/add','Admin\UserController@add');
Route::post('admin/doAdd','Admin\UserController@doAdd');
Route::get('admin/del/{id}','Admin\UserController@del');
Route::get('admin/bookList','Admin\BookController@show');
Route::get('admin/categoryList','Admin\CategoryController@show');
Route::get('admin/orderList','Admin\OrderController@show');

//权限管理
Route::any('admin/perm','Admin\PermissionsController@show');
//Route::any('admin/perm-add','Admin\PermissionsController@add');
//Route::get('admin/perm-del/{permission_id}','Admin\PermissionsController@del');
//Route::get('admin/perm-update/{permission_id}','Admin\PermissionsController@update');

//角色管理
Route::get('admin/roles','Admin\RolesController@show');


Route::group(['prefix'=>'home','namespace'=>'Home'],function(){
    Route::get('index','IndexController@show');
    Route::get('login','LoginController@show');
    Route::get('reg','RegisterController@show');
    Route::get('space','SpaceController@show');
    Route::get('category','CategoryController@show');
    Route::get('Billboard','BillboardController@show');
    Route::get('detail','DetailsController@show');
    Route::get('Publisher','PublisherController@show');
});

