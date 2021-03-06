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
    return view('welcome');
});

Route::get('about', function(){
    return view('about');
});

Route::get('code', function(){
    return view('code');
});

Route::get('writing', function(){
    return view('writing');
});

Route::get('todo', function(){
    return view('todo');
});

Route::get('blog', 'ArticleController@blog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('article/upload', function(){
    return view('articles.upload');
});

Route::post('article/post', 'ArticleController@post');
