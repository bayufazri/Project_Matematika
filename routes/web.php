<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Auth::routes();

//rizalihwan
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('profile')->name('profile.')->middleware('auth')->group(function () {
    Route::get('/myprofile', 'UserController@myProfile')->name('myprofile');
    Route::patch('/updateprofile', 'UserController@updateProfile')->name('update');
    Route::get('/password', 'UserController@changePassword')->name('changepassword');
    Route::patch('/updatepassword', 'UserController@updatePassword')->name('updatepassword');
});
