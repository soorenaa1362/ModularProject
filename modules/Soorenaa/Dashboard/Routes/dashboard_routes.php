<?php

// Route::group(['namespace' => 'Soorenaa\User\Http\Controllers'], function ($router) {
//     Auth::routes(['verify' => true]);
// });


Route::group(['namespace' => 'Soorenaa\Dashboard\Http\Controllers'], function ($router) { 
    $router->get('/home', 'DashboardController@home')->name('home');  
});





