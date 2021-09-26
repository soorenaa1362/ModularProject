<?php

Route::group(['namespace' => 'Soorenaa\Category\Http\Controllers',
    'middleware' => ['web', 'auth', 'verified']] 
    , function ($router){
        $router->resource('categories', 'CategoryController');
});