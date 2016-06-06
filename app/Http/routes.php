<?php

Route::group(['namespace' => 'Backend'], function () {
    Route::get('login', 'AuthController@login');
    Route::post('login', 'AuthController@postLogin');
    Route::get('logout', 'AuthController@logout');
    Route::get('auth/token/{token}', 'AuthController@authenticate');

});

Route::group(['middleware' => 'auth','namespace' => 'Backend'], function () {
    Route::get('dashboard', 'AdminController@index');
});

Route::group(['prefix' => 'api/v1', 'namespace' => 'Backend'], function()
{
    Route::resource('pages', 'PagesController');
});

Route::group(['namespace' => 'Frontend'], function()
{
    Route::get('/', 'BlogController@index');
    
});

