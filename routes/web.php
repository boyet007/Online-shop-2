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

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/signup',[
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup'
]);



Route::group(['prefix' => 'user'], function(){
    Route::post('/signup',[
        'uses' => 'Usercontroller@postSignup',
        'as' =>'user.signup'
    ]);

    Route::get('/signin',[
        'uses' => 'UserController@getSignin',
        'as' => 'user.signin'
    ]);

    Route::post('/signin',[
        'uses' => 'Usercontroller@postSignin',
        'as' =>'user.signin'
    ]);

    Route::get('/profile',[
        'uses' => 'Usercontroller@getProfile',
        'as' => 'user.profile'
    ]);

    Route::get('/logout',[
        'uses' => 'UserController@getLogout',
        'as' => 'user.logout'
    ]);
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




