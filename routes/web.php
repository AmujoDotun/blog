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



Route::get('/posts/{post}', 'PostController@show');



Route::get('/', function () {
    return view('welcome');
    // return "Hello DotSam";
    // return ['foo' => 'bar'];
});



Route::get('/about', function(){
    // $article = App\Article::latest()->get();
    // return $article;
    return view('about', [
        'articles' =>  App\Article::latest()->get()
    ]);
    
});

Route::get('/test', function(){
    $name = request('name');
    // return $name;
    return view('test', [
        'name'=> $name
    ] );

    // return view($name);
});

Route::get('contact', function(){
    return view('contact');
});

Route::get('/articles', 'ArticleController@index');
Route::post('/articles', 'ArticleController@store');
Route::get('/articles/create', 'ArticleController@create');
Route::get('/articles/{article}', 'ArticleController@show');
Route::get('/articles/{article}/edit', 'ArticleController@edit');
