<?php


Route::group(['namespace' => 'Auth'], function () {
    Route::get('login', 'AuthController@login');
    Route::post('login', 'AuthController@postLogin');
    Route::get('logout', 'AuthController@logout');
    Route::get('auth/token/{token}', 'AuthController@authenticate');

    Route::get('dashboard', function (){
        return 'Welcome' . auth()->user()->name;
    })->middleware('auth');
});
