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

Route::get( '/', function () {
    return view( 'welcome' );
} );


Route::group( [ 'prefix' => 'admin', 'namespace' => 'Admin' ], function () {
    //后台登录
    Route::get( '/login', 'EntryController@loginForm' );

    //登陆处理
    Route::post( '/login', 'EntryController@login' );

    //后台登录主页
    Route::get( '/index', 'EntryController@index' )->middleware( 'admin.auth' );

    //登出
    Route::get( '/logout', 'EntryController@logout' );

    //修改密码界面
    Route::get( '/changePassword', 'MyController@passwordForm' );

    //修改密码
    Route::post( '/changePassword', 'MyController@changePassword' );

    //标签管理
    Route::resource('tag','TagController');

    //课程
    Route::resource('lesson','LessonController');
} );