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

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', function() {
//     return view('home');
// })->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::group(['prefix' => 'users/{id}'], function () {
        // Route::post('follow', 'UserFollowController@store')->name('user.follow');
        // Route::delete('unfollow', 'UserFollowController@destroy')->name('user.unfollow');
        Route::get('followings', 'UsersController@followings')->name('users.followings');
        Route::get('followers', 'UsersController@followers')->name('users.followers');
    });

    Route::get('/api/get', 'PostController@getPosts');
    Route::post('/api/add', 'PostController@addPost');
    Route::post('/api/delete', 'PostController@deletePost');
    Route::get('/api/myfollowings', 'UserFollowController@myFollowings');
    Route::post('/api/follow/', 'UserFollowController@follow');
    Route::post('/api/unfollow/', 'UserFollowController@unfollow');

});

// Route::middleware('auth')->get('/api/get', 'PostController@getPosts');
// Route::middleware('auth')->post('/api/add', 'PostController@addPost');
// Route::middleware('auth')->post('/api/del', 'PostController@deletePost');
