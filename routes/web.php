<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/student', function () {
    return view('manage.student');
});
Route::get('/index',function() {
    return view('index',['content'=>'Chào mừng đến với trình quản lý 
    học phí']);
});

Route::get('/',function(){
    return view('manage.dashboard');
});
