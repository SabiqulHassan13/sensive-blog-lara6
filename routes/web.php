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

// ================== Frontend Routes ==================

// Route::get('/', function () {
//     return view('frontend.master');
// });

Route::get('/', 'Frontend\FrontPageController@home')->name('home');
Route::get('/contact-us', 'Frontend\FrontPageController@contact')->name('contact');
Route::get('/post-details', 'Frontend\FrontPageController@postDetails')->name('post');
Route::get('/category-post', 'Frontend\FrontPageController@categoryPost')->name('category.post');


// ================== Auth Routes ==================

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');


// ================== Backend Routes ==================

Route::get('/admin', function () {
    // return view('backend.master');
    return view('backend.dashboard');
});
