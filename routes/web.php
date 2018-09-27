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
	// Route::get('', function(){

	// 	return view('layouts.master');
	// });
//admin
	// Route::prefix('admin')->group(function(){
//******Post manager******//
	Route::middleware('auth')->group(function(){
	Route::resource('god','PostController');

	Route::get('post', 'PostController@index')->name('post');
	Route::get('getListPosts', 'PostController@getListPosts')->name('getListPost');
	Route::get('show/{id}','PostController@show');
	Route::delete('delete/{id}','PostController@destroy');
	// Route::post('store', 'PostController@store')->name('store');
	Route::put('resave/{id}', 'PostController@update')->name('resave.update');
	Route::get('resave/{id}/edit', 'PostController@edit')->name('resave.edit');
	});
//******Category manager******//
	Route::middleware('auth')->group(function(){
	Route::resource('godd','CateController');

	Route::get('cate', 'CateController@index')->name('cate');
	Route::get('getListCates', 'CateController@getListCates')->name('getListCate');
	Route::get('cateshow/{id}','CateController@show');
	Route::delete('catedelete/{id}','CateController@destroy');
	// Route::post('store', 'PostController@store')->name('store');
	Route::put('cateresave/{id}', 'CateController@update')->name('cateresave.update');
	Route::get('cateresave/{id}/edit', 'CateController@edit')->name('cateresave.edit');
	});
//******Tag manager******//
	Route::middleware('auth')->group(function(){
	Route::resource('goddd','TagController');

	Route::get('tagg', 'TagController@index')->name('tagg');
	Route::get('getListTaggs', 'TagController@getListTaggs')->name('getListTagg');
	Route::get('taggshow/{id}','TagController@show');
	Route::delete('taggdelete/{id}','TagController@destroy');
	// Route::post('store', 'PostController@store')->name('store');
	Route::put('taggresave/{id}', 'TagController@update')->name('taggresave.update');
	Route::get('taggresave/{id}/edit', 'TagController@edit')->name('taggresave.edit');
	});
//******Auth******//
	Auth::routes();

//user
	Route::get('/home', 'HomeController@index')->name('home');

//blog
	// Route::prefix('user')->group(function(){
	Route::get('/', 'HomeControllerBlog@index');
	Route::get('search', 'HomeControllerBlog@search');
	Route::get('blog/{slug}', 'HomeControllerBlog@detail');
	Route::get('category/{slug}', 'HomeControllerBlog@category');
	Route::get('tag/{slug}', 'HomeControllerBlog@tag');
	// });
// Route::get('/', function () {
//     return view('welcome');
	// Route::get('todos','TodoController@index');
	// Route::get('todos/create','TodoController@create');
	// Route::get('todos/{id}','TodoController@show');
	// Route::post('todos','TodoController@store');
	// Route::delete('todos/{id}','TodoController@destroy');
	// Route::get('todos/{id}/edit','TodoController@edit');
	// Route::put('todos/{id}', 'TodoController@update');
	// Route::resource('todos','TodoController');
	// Route::get('hello','StudentController@hello');
	// Route::resource('students','StudentController');
	// Route::resource('todos-ajax','TodoAjaxController');
	


// Auth::routes();



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
