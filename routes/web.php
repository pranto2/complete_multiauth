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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::GET('admin/home' , 'AdminController@index' );

Route::GET('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin' , 'Admin\LoginController@login');
//Route::POST('logout', 'Admin\LoginController@logout');
Route::POST ('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email') ;
Route::GET('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset' , 'Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset ');

Route::POST('admin/blogpost' , 'PostController@store');
Route::GET('admin/home' , 'PostController@index');
Route::get('/edit/{id}', 'PostController@edit');
Route::post('/update/{id}', 'PostController@update');
Route::get('/delete/{id}', 'PostController@destroy');

Route::get('admin/advertisement', 'AddController@index')->name('advertisement');
Route::POST('admin/advertisement/post' , 'AddController@store')->name('addpost');
Route::get('advertisement/edit/{id}', 'AddController@edit');
Route::post('advertisement/update/{id}', 'AddController@update');
Route::get('advertisement/delete/{id}', 'AddController@destroy');