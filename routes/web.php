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



// Route::get('/', function () {
//     // return view('welcome');
//     // return "Hello DotSam";
//     return ['foo' => 'bar'];
// });

Route::get('/', function(){
    $name = request('name');
    // return $name;
    return view('test', [
        'name'=> $name
    ] );

    // return view($name);
});

Route::get('/me', function(){
    return 'hello';
});