<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test',function(){
    return view('test',[
        'name'=>request('name')
    ]);
});
Route::get('/about',function(){
    
    return view('about',[
        'articles'=>App\Article::latest()->get()
    ]);
});
Route::get('/posts/{post}','PostController@show');

Route::get('/articles/{article}','ArticlesController@show');