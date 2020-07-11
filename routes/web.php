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

Route::get('/home', 'Frontend\FrontPageController@home')->name('home');
Route::get('/contact', 'Frontend\FrontPageController@contact')->name('contact');
Route::get('/post-by-category', 'Frontend\FrontPageController@postByCategory')->name('post.category');
Route::get('/post-details', 'Frontend\FrontPageController@postDetails')->name('post.details');



// ================== Auth Routes ==================

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/login', function () {
	return view('backend.auth.login');
});
Route::get('admin/register', function () {
	return view('backend.auth.register');
});
Route::get('admin/forgot-password', function () {
	return view('backend.auth.passwords.forgot');
});




// ================== Backend Routes ==================

Route::get('/admin', function () {
    // return view('backend.master');
    return view('backend.dashboard');
})->name('admin.home');

Route::group(['prefix' => 'admin', 'namespace' => 'Backend', 'as' => 'admin.'], function () {

	// Post Routes Here
	Route::get('/posts', 'PostController@index')->name('posts.index');
	Route::get('/posts/create', 'PostController@create')->name('posts.create');
	Route::post('/posts', 'PostController@store')->name('posts.store');
	// Route::get('/posts/{id}', 'PostController@show')->name('posts.show');
	// Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
	// Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
	// Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy');


	// Category Routes Here
	Route::resource('categories', 'CategoryController');

	// Tag Routes Here
	Route::resource('tags', 'TagController');

	// User Routes Here
	Route::resource('users', 'UserController');





});