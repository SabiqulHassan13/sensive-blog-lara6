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


Route::get('admin/login', function () {
	return view('backend.auth.login');
});
Route::get('admin/register', function () {
	return view('backend.auth.register');
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
	// Route::post('/posts', 'PostController@store')->name('posts.store');
	// Route::get('/posts/{id}', 'PostController@show')->name('posts.show');
	// Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
	// Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
	// Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy');


	// Category Routes Here
	Route::get('categories', 'CategoryController@index')->name('categories.index');
	Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
	// Route::post('/categories', 'CategoryController@store')->name('categories.store');
	// Route::get('/categories/{id}', 'CategoryController@show')->name('categories.show');
	// Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
	// Route::put('/categories/{id}', 'CategoryController@update')->name('categories.update');
	// Route::delete('/categories/{id}', 'CategoryController@destroy')->name('categories.destroy');


	// Tag Routes Here
	Route::get('tags', 'TagController@index')->name('tags.index');
	Route::get('/tags/create', 'TagController@create')->name('tags.create');
	// Route::post('/tags', 'TagController@store')->name('tags.store');
	// Route::get('/tags/{id}', 'TagController@show')->name('tags.show');
	// Route::get('/tags/{id}/edit', 'TagController@edit')->name('tags.edit');
	// Route::put('/tags/{id}', 'TagController@update')->name('tags.update');
	// Route::delete('/tags/{id}', 'TagController@destroy')->name('tags.destroy');




});