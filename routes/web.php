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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('profile')->name('profile.')->middleware('auth')->group(function () {
    Route::get('/myprofile', 'UserController@myProfile')->name('myprofile');
    Route::patch('/updateprofile', 'UserController@updateProfile')->name('update');
    Route::get('/password', 'UserController@changePassword')->name('changepassword');
    Route::patch('/updatepassword', 'UserController@updatePassword')->name('updatepassword');
});
