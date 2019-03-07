<?php
//前台模块的路由注册
Route::prefix('/')->namespace('Home')->group(function() {


    Route::resource('goods','GoodController');

});