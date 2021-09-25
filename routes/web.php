<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});




// Route::get('/verify-link{user}/', function () {
//     if (request()->hasValidSignature()) {
//         return 'Ok';
//     }
//     return 'Failed';
// })->name('verify-link');


// Route::get('/test', function () {
//     $url = URL::temporarySignedRoute('verify-link', now()->addSeconds(15), ['user' => 5]);
//     dd($url);
// });




Route::get('/home', 'HomeController@index')->name('home');

