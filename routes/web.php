<?php
/*---------------------------入口---------------------------------------------------------------------------------*/
Route::get('/','Entrance\EntranceController@index')->name('entrance');
/*---------------------------用户---------------------------------------------------------------------------------*/
Route::group(['prefix' => 'user','namespace' => 'User'], function(){
    //注册
    Route::get('register','CreateController@register')->name('register');
    Route::post('createUser','CreateController@createUser')->name('createUser');
    //登录
    Route::get('login','LoginController@login')->name('login');
    Route::post('userLogin','LoginController@userLogin')->name('userLogin');
    //我的主页
    Route::get('detail','PersonController@detail')->name('detail');
    //退出
    Route::post('logout','LoginController@logout')->name('logout');
    //个人中心
    Route::get('personalCenter','PersonController@personalCenter')->name('personalCenter');
});
/*---------------------------文章---------------------------------------------------------------------------------*/
Route::group(['prefix' => 'article','namespace' => 'Article'], function(){
    //
    Route::get('articlesSmallToBig','SelectController@articlesSmallToBig')->name('articlesSmallToBig');
    Route::get('articlesBigToSmall','SelectController@articlesBigToSmall')->name('articlesBigToSmall');
    //
    Route::get('articles/{article}','SelectController@articleDetail')->name('articleDetail');
    //
    Route::get('articleCreate','ViewController@articleCreate')->name('articleCreate');
    Route::post('articleCreate','CreateController@articleCreate')->name('articleCreate');
});
