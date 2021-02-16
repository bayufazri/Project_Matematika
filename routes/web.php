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

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function(){
    // Dashboard
    Route::get('/', 'HomeController@index')->name('home');
    // Profile
    Route::prefix('/profile')->name('profile.')->group(function () {
        Route::get('/myprofile', 'UserController@myProfile')->name('myprofile');
        Route::patch('/updateprofile', 'UserController@updateProfile')->name('update');
        Route::get('/password', 'UserController@changePassword')->name('changepassword');
        Route::patch('/updatepassword', 'UserController@updatePassword')->name('updatepassword');
    });
    // materi
    Route::prefix('/materi')->name('materi.')->group(function() {
        Route::get('/','MateriController@index')->name('index');
        Route::get('/create','MateriController@create')->name('create');
        Route::post('/store','MateriController@store')->name('store');
        Route::get('/edit/{materi}','MateriController@edit')->name('edit');
        Route::patch('/edit/{materi}/update','MateriController@update')->name('update');
        Route::delete('/delete/{materi}','MateriController@destroy')->name('delete');
    });
    // soal
    Route::prefix('/soal')->name('soal.')->group(function() {
        Route::get('/','SoalController@index')->name('index');
        Route::get('/create','SoalController@create')->name('create');
        Route::post('/store','SoalController@store')->name('store');
        Route::get('/edit/{soal}','SoalController@edit')->name('edit');
        Route::patch('/edit/{soal}/update','SoalController@update')->name('update');
        Route::delete('/delete/{soal}','SoalController@destroy')->name('delete');
    });
});