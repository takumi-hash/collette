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

// Route::get('/{any}', function () {
//     return view('welcome');
// })->where('any', '.*');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function() {
    return view('home');
})->name('home');

Route::middleware('auth')->get('/api/get', 'PostController@getPosts');
Route::middleware('auth')->post('/api/add', 'PostController@addPost');
Route::middleware('auth')->post('/api/del', 'PostController@deletePost');
