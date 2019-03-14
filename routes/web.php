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

Route::get('kategori', function () {
    return "halaman_kategori";
});
Route::resource('kategori','CategoryController')->except(['destroy']);

Route::get('layout',function (){
    return view('dashboard.index');
});
Route::get('Admin',function (){
    return view('dashboard');
});
Route::get('dashboard',function (){
    return view('layouts.master');
});
Route::group(['middleware'=>['web']], function(){
	Route::resource('Category','CategoryController');
	Route::get('search','CategoryController@search')->name('post.search');
});
Route::get('/search', 'CategoryController@search')->name('post.search');