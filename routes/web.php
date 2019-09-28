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
//    phpinfo();
});
Route::get('/index', 'TestController@index');


Route::get('/register','LoginController@register');//注册
Route::get('/regdo','LoginController@regdo');#注册执行
Route::get('/login','LoginController@login');//登录页面
Route::post('/logindo','LoginController@logindo');#注册登录
Auth::routes();

Route::post('/home', 'HomeController@index')->name('home');
