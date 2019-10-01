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
    return view('front.pages.home');
})->name('home');

Route::post('/login','UsersController@login')->name('user.login');
// Route::group(['prefix' => 'user'],function(){
//     Route::post('/login','UsersController@login')->name('user.login');
// });

//Route::post('/profile','UsersController@login')->name('user.login');
Route::get('/profile', function () {
    return view('front.pages.home');
})->name('user.profile');


//handle ajax requests
Route::group(['prefix' => 'ajax'],function(){
    Route::post('/save_user_data','ajaxRequests@save_user_data')->name('ajax.save_user_data');
});

