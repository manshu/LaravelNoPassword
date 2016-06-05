<?php

Route::group(['namespace' => 'Backend'], function () {
    Route::get('login', 'AuthController@login');
    Route::post('login', 'AuthController@postLogin');
    Route::get('logout', 'AuthController@logout');
    Route::get('auth/token/{token}', 'AuthController@authenticate');

    Route::get('dashboard', function (){
        return 'Welcome' . auth()->user()->name;
    })->middleware('auth');
});

Route::group(['prefix' => 'api/v1', 'namespace' => 'Backend'], function()
{
    Route::resource('pages', 'PagesController');
});

Route::group(['namespace' => 'Frontend'], function()
{
    Route::resource('/', 'BlogController');
});

