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

//前台
Route::get('/', function () {
    return view('fron.index');
});
//前台登录
Route::get('/login',function(){
	return view('fron.member.login');
});
//前台注册
Route::get('/reg',function(){
	return view('fron.member.reg');
});

//后台
Route::get('/admin',function(){
	return view('back.index');
});