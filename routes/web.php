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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.pages.home');
});
Route::group(['prefix'=>"/",'namespace'=>'Front'],function(){
    Route::get('/login','LoginController@login')->name('front.login.by');
    Route::get('/properties-list','propertiesListContoller@propertiesList')->name('front.properties-list');
    Route::get("/contact-us",'contactUsController@contact')->name("front.contact-us");
    Route::get('/about-us','aboutUsController@about')->name('front.about-us');
    Route::get('/blog','blogController@blog')->name('front.blog');
    Route::get('/blog-details','blogDetailsController@blogDetails')->name('front.blogDetails');
    Route::get('/add-property','addPropertyController@addProperty')->name('front.addProperty');
    
});