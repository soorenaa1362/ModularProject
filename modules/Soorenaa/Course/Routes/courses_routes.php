<?php

Route::group(['namespace' => 'Soorenaa\Course\Http\Controllers',
    'middleware' => ['web', 'auth', 'verified']] 
    , function ($router){
        $router->resource('courses', 'CourseController');
});