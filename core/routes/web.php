<?php

Route::get('/', 'IndexController@index');

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

//Admin Route
Route::POST('admin/blog' , 'PostController@store');
Route::GET('admin/blog' , 'PostController@index')->name('admin.web.blog');
Route::get('admin/blog-edit/{id}', 'PostController@edit');
Route::get('admin/blog-show', 'PostController@show')->name('blogshow');
Route::post('update/{id}', 'PostController@update')->name('postupdate');
Route::get('admin/post-delete/{id}', 'PostController@destroy')->name('postdelete');

//Advertise Route
Route::get('admin/advertisement', 'AddController@index')->name('advertisement');
Route::get('admin/show-add', 'AddController@show')->name('showadd');
Route::POST('admin/advertisement/add-post' , 'AddController@affilateAddPost')->name('affiatepost');
Route::get('advertisement/edit/{id}', 'AddController@edit');
Route::post('advertisement/update/{id}', 'AddController@update');
Route::get('advertisement/delete/{id}', 'AddController@destroy');

//Menu Route
Route::get('admin/menu', 'MenuController@index')->name('menu');
Route::POST('admin/menu/store' , 'MenuController@store')->name('postmenu');
Route::put('/menu/update/{menu}', 'MenuController@update')->name('menu.update');
Route::get('admin/menu/delete/{id}', 'MenuController@destroy');


//About Route
Route::get('admin/about', 'AboutController@index')->name('about');
Route::put('admin/about-update/{id}', 'AboutController@update')->name('about.update');



Route::get('admin/contact', 'ContactController@index')->name('contact');

//Footer Router
Route::get('admin/footer', 'FooterController@index')->name('footer');
Route::put('admin/footer-update/{id}', 'FooterController@update')->name('footer.update');

//Logo Route
Route::get('admin/logo', 'LogoController@index')->name('logo');
Route::put('admin/logo-update/{id}', 'LogoController@update')->name('logo.update');

//Service Full Route
Route::get('admin/service', 'ServiceController@index')->name('service');
Route::put('admin/service-update/{id}', 'ServiceController@update')->name('service.update');
Route::post('admin/service-post', 'ServiceController@store')->name('tservice.post');
Route::put('admin/tservice-update/{id}', 'ServiceController@iconService')->name('tservice');

//Slider Route
Route::get('admin/slide', 'SlideController@index')->name('slide');
Route::post('admin/slide-post', 'SlideController@store')->name('slide.post');
Route::put('admin/slide-update/{id}', 'SlideController@update')->name('slide.update');
Route::get('admin/slide-delete/{id}', 'SlideController@destroy')->name('slide.delete');

//social Route
Route::get('admin/social', 'SocialController@index')->name('social');
Route::post('admin/social-post', 'SocialController@store')->name('social.post');
Route::put('admin/social-update/{id}', 'SocialController@update')->name('social.update');
Route::get('admin/social-delete/{id}', 'SocialController@destroy')->name('social.delete');

//Statistics Route
Route::get('admin/statistics', 'StatisticsController@index')->name('statistics');
Route::put('/statistics-update/{id}', 'StatisticsController@update')->name('statistics.update');

//Testomonial Route
Route::get('admin/testimonial', 'TestimonialController@index')->name('testimonial');
Route::post('/testimonial/post', 'TestimonialController@store')->name('testimonial.post');
Route::put('/testimonial/{id}', 'TestimonialController@update')->name('test.update');
Route::get('/testimonial-delete/{id}', 'TestimonialController@destroy')->name('test.delete');

//General Settings Route
Route::get('admin/general', 'GeController@index')->name('general');
Route::put('/general/{gen}', 'GeController@update')->name('general.update');

//Seo Route
Route::get('admin/seo', 'SeoController@index')->name('seo');
Route::put('/seo/{seo}', 'SeoController@update')->name('seo.update');



