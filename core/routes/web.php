<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::GET('admin/home' , 'AdminController@index' )->name('admin');

Route::GET('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin' , 'Admin\LoginController@login');
//Route::POST('logout', 'Admin\LoginController@logout');
//Route::POST ('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email') ;
//Route::GET('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
//Route::POST('admin-password/reset' , 'Admin\ResetPasswordController@reset');
//Route::GET('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset ');

Route::POST('admin/blog' , 'PostController@store');
Route::GET('admin/blog' , 'PostController@index')->name('admin.web.blog');
Route::get('admin/blog-edit/{id}', 'PostController@edit');
Route::get('admin/blog-show', 'PostController@show')->name('blogshow');
Route::post('update/{id}', 'PostController@update')->name('postupdate');
Route::get('admin/post-delete/{id}', 'PostController@destroy')->name('postdelete');

Route::get('admin/advertisement', 'AddController@index')->name('advertisement');
Route::POST('admin/advertisement/add-post' , 'AddController@affilateAddPost')->name('affiatepost');
Route::get('advertisement/edit/{id}', 'AddController@edit');
Route::post('advertisement/update/{id}', 'AddController@update');
Route::get('advertisement/delete/{id}', 'AddController@destroy');

Route::get('admin/menu', 'MenuController@index')->name('menu');
Route::POST('admin/menu/store' , 'MenuController@store')->name('postmenu');
Route::put('/menu/update/{menu}', 'MenuController@update')->name('menu.update');
Route::get('admin/menu/delete/{id}', 'MenuController@destroy');

Route::get('admin/about', 'AboutController@index')->name('about');


Route::get('admin/contact', 'ContactController@index')->name('contact');

Route::get('admin/footer', 'FooterController@index')->name('footer');

Route::get('admin/logo', 'LogoController@index')->name('logo');

Route::get('admin/service', 'ServiceController@index')->name('service');

Route::get('admin/slide', 'SlideController@index')->name('slide');

Route::get('admin/social', 'SocialController@index')->name('social');

Route::get('admin/statistics', 'StatisticsController@index')->name('statistics');

Route::get('admin/testimonial', 'TestimonialController@index')->name('testimonial');