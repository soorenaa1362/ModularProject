<?php


Route::group(['namespace' => 'Soorenaa\User\Http\Controllers' , 
    'middleware' => 'web'], 
    function ($router) {
    Auth::routes(['verify' => true]);
});



