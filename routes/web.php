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

Route::get('test', function () {

    $posts = App\Post::paginate(1);
    $response = [
        'status' => '1',
        'message' => 'successs',
        'data' => $posts,


    ];
    return $response;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
