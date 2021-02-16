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

Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');

Route::group([ 'prefix' => 'user' ], function () {
    Route::group([ 'middleware' => 'guest' ], function() {
        Route::get('/register', 'UserController@create')->name('user.register');
        Route::post('/register', 'UserController@store')->name('register');

        Route::get('/login', 'UserController@showLoginForm')->name('user.login');
        Route::post('/login', 'UserController@login')->name('login');
    });

    Route::group([ 'middleware' => 'auth' ], function() {
        Route::get('/dashboard', 'UserController@dashboard')->name('user.dashboard');
        Route::get('/blog', 'UserController@blog')->name('user.blog');
        Route::get('/profile', 'UserController@profile')->name('user.profile');
        Route::get('/logout', 'UserController@logout')->name('user.logout');
    });
});


Route::resource('/article', 'ArticleController')->only([ 'create', 'store', 'show', 'destroy' ]);
Route::resource('/category', 'CategoryController')->only([ 'show' ]);
Route::resource('/user', 'UserController')->only([ 'index', 'show', 'update', 'destroy' ]);

// Route::view('/laravel', 'welcome')->name('laravel');
