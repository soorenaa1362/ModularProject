<?php

Route::group(['namespace' => 'Soorenaa\Dashboard\Http\Controllers'], function ($router) {
    $router->get('/home' , 'DashboardController@home')->name('home');
});