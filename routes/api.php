<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::group(['middleware' => 'api'], function () {

    Route::post('login', 'IndexController@login');          //登录接口
    Route::post('GetUrl', 'IndexController@GetUrl');          //图片接口

    Route::post('BackInfo', 'IndexController@BackInfo');         //返回信息
    Route::post('BackInfofriend', 'IndexController@BackInfofriend');         //返回信息(朋友圈入口)

    Route::post('SetInvite', 'InviteController@SetInvite');         //制作邀请函
    Route::post('SetComment', 'InviteController@SetComment');         //添加留言
    Route::post('SetLike', 'InviteController@SetLike');         //点赞
    Route::post('SetPartner', 'InviteController@SetPartner');         //参与者


});